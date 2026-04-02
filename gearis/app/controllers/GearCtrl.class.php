<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class GearCtrl {

    public function action_gearList() {

        $sf_nazwa = ParamUtils::getFromRequest('sf_nazwa');
        $page = ParamUtils::getFromRequest('page') ?: 1;

        $limit = 6;
        $offset = ($page - 1) * $limit;

        $sf_nazwa = ParamUtils::getFromRequest('sf_nazwa');
        $where = [];
        if (isset($sf_nazwa) && strlen($sf_nazwa) > 0) {
        $where['sprzet.nazwa[~]'] = $sf_nazwa; 
        }

        $totalRecords = App::getDB()->count("sprzet", $where);
        $totalPages = ceil($totalRecords / $limit);

        $where["LIMIT"] = [$offset, $limit];

        if (isset($sf_nazwa) && strlen($sf_nazwa) > 0) {
        $where['sprzet.nazwa[~]'] = $sf_nazwa; 
        }

        $list = App::getDB()->select("sprzet", [
            "[>]kategorie_sprzetu" => ["id_kategorie_sprzetu" => "id"]
        ], [
            "sprzet.id",
            "sprzet.nazwa",
            "sprzet.rozmiar",
            "sprzet.cena_za_dobe",
            "sprzet.status",
            "sprzet.opis",
            "kategorie_sprzetu.nazwa(kategoria)"
        ], $where);

        App::getSmarty()->assign('searchForm', $sf_nazwa);
        App::getSmarty()->assign('gear', $list);
        App::getSmarty()->assign('page_title', 'Nasza oferta sprzętu');
        App::getSmarty()->assign('currentPage', $page);
        App::getSmarty()->assign('totalPages', $totalPages); 
        App::getSmarty()->display("GearList.tpl");
        }
    public function action_gearAdd() {

        $categories = App::getDB()->select("kategorie_sprzetu", "*");
        
        App::getSmarty()->assign('categories', $categories);
        App::getSmarty()->assign('page_title', 'Dodaj nowy sprzęt');
        App::getSmarty()->display("GearEdit.tpl");
        }

    public function action_gearEdit() {

        $id = ParamUtils::getFromCleanURL(1);

        if (isset($id)) {
            try {
   
                $form = App::getDB()->get("sprzet", "*", [
                    "id" => $id
                ]);

 
                $categories = App::getDB()->select("kategorie_sprzetu", "*");

   
                App::getSmarty()->assign('form', $form);
                App::getSmarty()->assign('categories', $categories);
                App::getSmarty()->assign('page_title', 'Edycja sprzętu');
                App::getSmarty()->display("GearEdit.tpl");

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd bazy danych: ' . $e->getMessage());
                App::getRouter()->forwardTo('gearList');
            }
        } else {
            Utils::addErrorMessage('Niepoprawne ID sprzętu');
            App::getRouter()->forwardTo('gearList');
        }
        }

    public function action_gearSave() {
        $form = [
            'id' => ParamUtils::getFromRequest('id'),
            'nazwa' => ParamUtils::getFromRequest('nazwa'),
            'rozmiar' => ParamUtils::getFromRequest('rozmiar'),
            'cena' => ParamUtils::getFromRequest('cena'),
            'status' => ParamUtils::getFromRequest('status'),
            'id_kat' => ParamUtils::getFromRequest('id_kat'),
            'opis' => ParamUtils::getFromRequest('opis'),
        ];


        // Walidacja 
        if (!(isset($form['nazwa']) && strlen($form['nazwa']) >= 3)) {
        Utils::addErrorMessage('Nazwa sprzętu musi mieć co najmniej 3 znaki.');
        }


        if (empty($form['cena']) || !is_numeric($form['cena']) || $form['cena'] <= 0) {
        Utils::addErrorMessage('Cena za dobę musi być poprawną liczbą większą od zera.');
        }


        $isNew = empty($form['id']);
        $photoUploaded = (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0);

        if ($isNew && !$photoUploaded) {
        Utils::addErrorMessage('Dodanie zdjęcia jest wymagane dla nowego sprzętu.');
        }

        if (App::getMessages()->isError()) {

            $categories = App::getDB()->select("kategorie_sprzetu", "*");
        
            App::getSmarty()->assign('categories', $categories);
            App::getSmarty()->assign('form', $form); 
            App::getSmarty()->assign('page_title', 'Błąd zapisu - Edycja sprzętu');
            App::getSmarty()->display("GearEdit.tpl");
            return; 
            }
            
            try {
            if ($isNew) {
            App::getDB()->insert("sprzet", [
                "nazwa" => $form['nazwa'],
                "rozmiar" => $form['rozmiar'],
                "cena_za_dobe" => $form['cena'],
                "status" => $form['status'],
                "id_kategorie_sprzetu" => $form['id_kat'],
                "opis" => $form['opis']
            ]);
            $form['id'] = App::getDB()->id();
            } else {

            App::getDB()->update("sprzet", [
                "nazwa" => $form['nazwa'],
                "rozmiar" => $form['rozmiar'],
                "cena_za_dobe" => $form['cena'],
                "status" => $form['status'],
                "id_kategorie_sprzetu" => $form['id_kat'],
                "opis" => $form['opis']
            ], ["id" => $form['id']]);
        }


        if ($photoUploaded) {
            $uploadDir = "images/";
            $fileName = $form['id'] . ".jpg";
            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadDir . $fileName);
        }

        Utils::addInfoMessage('Dane sprzętu zostały pomyślnie zapisane');
        } catch (\PDOException $e) {
        Utils::addErrorMessage('Błąd bazy danych: ' . $e->getMessage());
        }

        App::getRouter()->forwardTo("gearList");
        }
        
    public function action_gearDelete() {

        $id = ParamUtils::getFromCleanURL(1);

        if (isset($id)) {
            try {

                App::getDB()->delete("sprzet", [
                    "id" => $id
                ]);


                $fotoPath = "images/" . $id . ".jpg";
                if (file_exists($fotoPath)) {
                    unlink($fotoPath);
                }

                Utils::addInfoMessage('Sprzęt został pomyślnie usunięty');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd bazy danych: ' . $e->getMessage());
            }
        }


        App::getRouter()->forwardTo('gearList');
        }
}

