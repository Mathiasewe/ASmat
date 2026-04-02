<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;

class ManagerCtrl {

    public function action_managerView() {
        App::getSmarty()->assign('page_title', 'Panel Kierownika');
        App::getSmarty()->display("ManagerView.tpl");
    }

    public function action_manageWorkers() {
    $workers = App::getDB()->select("uzytkownicy", [
            "[>]rola" => ["id_rola" => "id"]
        ], [
            "uzytkownicy.id",
            "uzytkownicy.imie",
            "uzytkownicy.nazwisko",
            "uzytkownicy.login",
            "rola.nazwa(rola_nazwa)",
            "uzytkownicy.email"

        ], [
            "uzytkownicy.id_rola" => [2, 3] 
        ]);

        App::getSmarty()->assign('workers', $workers);
        App::getSmarty()->assign('page_title', 'Zarządzanie pracownikami');
        App::getSmarty()->display("ManageWorkers.tpl");
    }

    public function action_workerDelete() {
        $id = ParamUtils::getFromCleanURL(1); // Pobranie ID z URL
        if (isset($id)) {
            App::getDB()->delete("uzytkownicy", ["id" => $id]);
            Utils::addInfoMessage("Pracownik usunięty pomyślnie");
        }
        App::getRouter()->forwardTo("manageWorkers");
    }

    public function action_workerEdit() {
        $id = ParamUtils::getFromCleanURL(1);

        if (isset($id)) {
            // Pobranie danych konkretnego użytkownika
            $user_data = App::getDB()->get("uzytkownicy", "*", [
                "id" => $id
            ]);

            $roles = App::getDB()->select("rola", "*", [
                "id" => [1, 3]
            ]);

            App::getSmarty()->assign('form', $user_data); 
            App::getSmarty()->assign('roles', $roles);
            App::getSmarty()->assign('page_title', 'Edycja pracownika');
            App::getSmarty()->display("WorkerEdit.tpl");
        } else {
            Utils::addErrorMessage("Błędne ID użytkownika");
            App::getRouter()->redirectTo("manageWorkers");
        }
    }

    public function action_workerSave() {

    $form = [
        'id' => ParamUtils::getFromRequest('id'),
        'imie' => ParamUtils::getFromRequest('imie'),
        'nazwisko' => ParamUtils::getFromRequest('nazwisko'),
        'login' => ParamUtils::getFromRequest('login'),
        'pass' => ParamUtils::getFromRequest('pass'),
        'id_rola' => ParamUtils::getFromRequest('id_rola'),
        'email' => ParamUtils::getFromRequest('email')
    ];


    if (!(isset($form['imie']) && strlen($form['imie']) >= 3)) {
        Utils::addErrorMessage('Imię musi mieć co najmniej 3 znaki.');
    }
    if (!(isset($form['nazwisko']) && strlen($form['nazwisko']) >= 3)) {
        Utils::addErrorMessage('Nazwisko musi mieć co najmniej 3 znaki.');
    }
    if (!(isset($form['login']) && strlen($form['login']) >= 3)) {
        Utils::addErrorMessage('Login musi mieć co najmniej 3 znaki.');
    }
    if (empty($form['email']) || !filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
        Utils::addErrorMessage('Podaj poprawny adres e-mail.');
    }

    if (empty($form['id']) && empty($form['pass'])) {
        Utils::addErrorMessage('Hasło jest wymagane dla nowego pracownika.');
    }


    if (App::getMessages()->isError()) {

        $roles = App::getDB()->select("rola", "*", ["id" => [2, 3]]);
        
        App::getSmarty()->assign('roles', $roles);
        App::getSmarty()->assign('form', $form); 
        App::getSmarty()->assign('page_title', 'Błąd zapisu - Edycja');
        

        App::getSmarty()->display("WorkerEdit.tpl");
        return;
    }

    try {
        if (empty($form['id'])) {

            App::getDB()->insert("uzytkownicy", [
                "imie" => $form['imie'],
                "nazwisko" => $form['nazwisko'],
                "login" => $form['login'],
                "haslo" => $form['pass'],
                "id_rola" => $form['id_rola'],
                "email" => $form['email']
            ]);
            Utils::addInfoMessage('Pomyślnie dodano nowego pracownika');
        } else {

            $data = [
                "imie" => $form['imie'],
                "nazwisko" => $form['nazwisko'],
                "login" => $form['login'],
                "id_rola" => $form['id_rola'],
                "email" => $form['email']
            ];
            if (!empty($form['pass'])) { 
                $data["haslo"] = $form['pass']; 
            }
            
            App::getDB()->update("uzytkownicy", $data, ["id" => $form['id']]);
            Utils::addInfoMessage('Dane zostały zaktualizowane');
        }
    } catch (\PDOException $e) {
        Utils::addErrorMessage('Błąd bazy danych: ' . $e->getMessage());
    }

    App::getRouter()->forwardTo("manageWorkers");
}

    public function action_workerAdd() {

        $roles = App::getDB()->select("rola", "*", [
            "id" => [2, 3]
        ]);

        App::getSmarty()->assign('roles', $roles);
        App::getSmarty()->assign('page_title', 'Dodaj pracownika');
        App::getSmarty()->display("WorkerEdit.tpl");
    }


    public function action_reports() {
        App::getSmarty()->display("Reports.tpl");
    }
}