<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Messages;

class AdminCtrl {
    public function action_adminView() {
        App::getSmarty()->assign('page_title', 'Panel Administratora');
        App::getSmarty()->display("AdminView.tpl");       
    }   


public function action_adminUsersView() {

$sf_search = ParamUtils::getFromRequest('sf_search');

    $where = [];

if (isset($sf_search) && strlen($sf_search) > 0) {
        $where["OR"] = [
            "uzytkownicy.imie[~]" => $sf_search,
            "uzytkownicy.nazwisko[~]" => $sf_search,
            "rola.nazwa[~]" => $sf_search
        ];
    }

        $users = App::getDB()->select("uzytkownicy", [
            "[>]rola" => ["id_rola" => "id"] 
        ], [
            "uzytkownicy.id",
            "uzytkownicy.imie",
            "uzytkownicy.nazwisko",
            "uzytkownicy.id_rola",
            "rola.nazwa(rola_nazwa)" 
        ], $where);


        $roles = App::getDB()->select("rola", "*");

        App::getSmarty()->assign('searchForm', $sf_search);
        App::getSmarty()->assign('users', $users);
        App::getSmarty()->assign('roles', $roles);
        App::getSmarty()->assign('page_title', 'Zarządzanie użytkownikami');
        App::getSmarty()->display("AdminUsersView.tpl");
    }

public function action_adminChangeRole() {

        $id_user = ParamUtils::getFromRequest('id_u');
        $id_role = ParamUtils::getFromRequest('id_r');

        if (isset($id_user) && isset($id_role)) {
            try {
 
                App::getDB()->update("uzytkownicy", [
                    "id_rola" => $id_role
                ], [
                    "id" => $id_user
                ]);
                
                Utils::addInfoMessage("Rola została zmieniona pomyślnie.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd bazy danych: " . $e->getMessage());
            }
        }

        App::getRouter()->forwardTo("adminUsersView");
    }
}
