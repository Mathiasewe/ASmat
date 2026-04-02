<?php
namespace app\controllers;
use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class ReservationCtrl {
    public function action_reserveGear() {
        $id_sprzet = ParamUtils::getFromCleanURL(1);
        

        $gear = App::getDB()->get("sprzet", "*", ["id" => $id_sprzet]);
        
        App::getSmarty()->assign('gear', $gear);
        App::getSmarty()->display("ReserveGear.tpl");
    }

public function action_reservationSave() {
    // Pobranie danych
    $id_sprzet = ParamUtils::getFromRequest('id_sprzet');
    $data_od = ParamUtils::getFromRequest('data_od');
    $data_do = ParamUtils::getFromRequest('data_do');
    $user = $_SESSION['user'];
    $user_id = isset($user['id']) ? $user['id'] : null;

    //  Walidacja podstawowa
    if (empty($id_sprzet) || empty($user_id) || empty($data_od) || empty($data_do)) {
        Utils::addErrorMessage("Wystąpił błąd: Niepełne dane rezerwacji.");
        App::getRouter()->forwardTo("gearList");
        return;
    }

    if (strtotime($data_od) > strtotime($data_do)) {
        Utils::addErrorMessage("Data końcowa musi być późniejsza niż początkowa.");
        App::getRouter()->forwardTo("reserveGear/" . $id_sprzet);
        return;
    }

    try {
        // Sprawdzenie zajętości terminu 
        $is_booked = App::getDB()->has("rezerwacja", [
            "AND" => [
                "id_sprzet" => $id_sprzet,
                "data_od[<=]" => $data_do,
                "data_do[>=]" => $data_od
            ]
        ]);

        if ($is_booked) {
            Utils::addErrorMessage("Przepraszamy, ten termin jest już zajęty.");
            App::getRouter()->forwardTo("reserveGear/" . $id_sprzet);
            return;
        }

        // Pobranie ceny i obliczenie kosztu
        $gear = App::getDB()->get("sprzet", ["cena_za_dobe"], ["id" => $id_sprzet]);
        if (!$gear) {
             Utils::addErrorMessage("Błąd: Nie znaleziono sprzętu.");
             App::getRouter()->redirectTo("gearList");
             return;
        }
        $d1 = new \DateTime($data_od);
        $d2 = new \DateTime($data_do);
        $days = $d2->diff($d1)->days + 1;
        $total_cost = $days * $gear['cena_za_dobe'];

        // Zapis do bazy
        App::getDB()->insert("rezerwacja", [
            "id_sprzet" => $id_sprzet,
            "id_uzytkownik" => $user_id,
            "data_od" => $data_od,
            "data_do" => $data_do,
            "koszt_calkowity" => $total_cost
        ]);

        Utils::addInfoMessage("Zarezerwowano pomyślnie! Koszt: " . $total_cost . " zł.");
        App::getRouter()->forwardTo("reservations");
        

    } catch (\Exception $e) {
        Utils::addErrorMessage("Wystąpił nieoczekiwany błąd: " . $e->getMessage());
        App::getRouter()->forwardTo("gearList");
    }
}

public function action_reservations() {
    $user = $_SESSION['user'];
    $user_id = $user['id'];

    $my_list = App::getDB()->select("rezerwacja", [
        "[>]sprzet" => ["id_sprzet" => "id"]
    ], [
        "rezerwacja.id",
        "rezerwacja.data_od",
        "rezerwacja.data_do",
        "rezerwacja.koszt_calkowity",
        "sprzet.nazwa"
    ], [
        "rezerwacja.id_uzytkownik" => $user_id,
        "ORDER" => ["rezerwacja.data_od" => "DESC"]
    ]);

    App::getSmarty()->assign('list', $my_list);
    App::getSmarty()->display("MyReservations.tpl");
}
public function action_reservationDelete() {
    // Pobranie ID rezerwacji z URL
    $id_res = \core\ParamUtils::getFromCleanURL(1);
    // Pobranie ID zalogowanego użytkownika z sesji
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
    $user_id = isset($user['id']) ? $user['id'] : null;

    if (isset($id_res) && isset($user_id)) {
        try {

            $result = \core\App::getDB()->delete("rezerwacja", [
                "AND" => [
                    "id" => $id_res,
                    "id_uzytkownik" => $user_id
                ]
            ]);


            if ($result->rowCount() > 0) {
                \core\Utils::addInfoMessage("Rezerwacja została anulowana.");
            } else {
                \core\Utils::addErrorMessage("Nie można anulować tej rezerwacji.");
            }
        } catch (\PDOException $e) {
            \core\Utils::addErrorMessage("Błąd bazy danych: " . $e->getMessage());
        }
    }

    \core\App::getRouter()->forwardTo("reservations");
}
}