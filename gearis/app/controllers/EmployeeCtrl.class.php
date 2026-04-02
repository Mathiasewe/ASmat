<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class EmployeeCtrl {

    public function action_employeeView() {
        App::getSmarty()->assign('page_title', 'Panel Pracownika');
        App::getSmarty()->display("EmployeeView.tpl");
    }

    public function action_manageReservations() {
        $reservations = App::getDB()->select("rezerwacja", [
            "[>]uzytkownicy" => ["id_uzytkownik" => "id"],
            "[>]sprzet" => ["id_sprzet" => "id"],
            "[>]platnosc" => ["id" => "id_rezerwacje"]
        ], [
            "rezerwacja.id",
            "rezerwacja.data_od",
            "rezerwacja.data_do",
            "rezerwacja.koszt_calkowity",
            "uzytkownicy.imie",
            "uzytkownicy.nazwisko",
            "sprzet.nazwa(sprzet_nazwa)",
            "platnosc.status(status_platnosci)",
            "platnosc.id_metoda_platnosci"
        ]);

        $methods = App::getDB()->select("metody_platnosci", "*");

        App::getSmarty()->assign('reservations', $reservations);
        App::getSmarty()->assign('methods', $methods);
        App::getSmarty()->assign('page_title', 'Obsługa Rezerwacji');
        App::getSmarty()->display("ManageReservations.tpl");
    }

    public function action_updatePayment() {
        $id_rez = ParamUtils::getFromRequest('id_rez');
        $status = ParamUtils::getFromRequest('status');
        $id_metoda = ParamUtils::getFromRequest('id_metoda');
        $kwota = ParamUtils::getFromRequest('kwota');

        try {

            $exists = App::getDB()->has("platnosc", ["id_rezerwacje" => $id_rez]);

            if ($exists) {
                App::getDB()->update("platnosc", [
                    "status" => $status,
                    "id_metoda_platnosci" => $id_metoda,
                    "data_platnosc" => date("Y-m-d H:i:s")
                ], ["id_rezerwacje" => $id_rez]);
            } else {
                App::getDB()->insert("platnosc", [
                    "kwota" => $kwota,
                    "data_platnosc" => date("Y-m-d H:i:s"),
                    "status" => $status,
                    "id_rezerwacje" => $id_rez,
                    "id_metoda_platnosci" => $id_metoda
                ]);
            }
            Utils::addInfoMessage("Płatność została pomyślnie zaktualizowana.");
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd bazy danych: " . $e->getMessage());
        }
        App::getRouter()->forwardTo("manageReservations");
    }
}