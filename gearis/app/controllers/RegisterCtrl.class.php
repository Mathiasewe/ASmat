<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class RegisterCtrl {
    private $form;

    public function action_registerView() {
        App::getSmarty()->assign('page_title', 'Załóż konto');
        App::getSmarty()->display("RegisterView.tpl");
    }

    public function action_register() {
        //Pobranie danych
        $this->form = [
            'imie' => ParamUtils::getFromRequest('imie'),
            'nazwisko' => ParamUtils::getFromRequest('nazwisko'),
            'login' => ParamUtils::getFromRequest('login'),
            'pass' => ParamUtils::getFromRequest('pass'),
            'pass2' => ParamUtils::getFromRequest('pass2'),
            'email' => ParamUtils::getFromRequest('email')
        ];

        //Walidacja 
        if (!(isset($this->form['imie']) && strlen($this->form['imie']) >= 3)) {
            Utils::addErrorMessage('Imię musi mieć co najmniej 3 znaki.');
        }
        if (!(isset($this->form['nazwisko']) && strlen($this->form['nazwisko']) >= 3)) {
            Utils::addErrorMessage('Nazwisko musi mieć co najmniej 3 znaki.');
        }
        if (!(isset($this->form['login']) && strlen($this->form['login']) >= 3)) {
            Utils::addErrorMessage('Login musi mieć co najmniej 3 znaki.');
        }
        if (empty($this->form['email']) || !filter_var($this->form['email'], FILTER_VALIDATE_EMAIL)) {
            Utils::addErrorMessage('Podaj poprawny adres e-mail.');
        }
        if (empty($this->form['pass']) || strlen($this->form['pass']) < 4) {
            Utils::addErrorMessage('Hasło musi mieć co najmniej 4 znaki.');
        }
        if ($this->form['pass'] !== ($this->form['pass2'])) {
            Utils::addErrorMessage('Hasła są różne');
        }

        //Sprawdzenie unikalności loginu
        if (!App::getMessages()->isError()) {
            $count = App::getDB()->count("uzytkownicy", ["login" => $this->form['login']]);
            if ($count > 0) {
                Utils::addErrorMessage('Ten login jest już zajęty.');
            }
        }

        if (App::getMessages()->isError()) {
            App::getSmarty()->assign('form', $this->form);
            $this->action_registerView();
            return;
        }

        //Zapis do bazy danych
        try {
            App::getDB()->insert("uzytkownicy", [
                "imie" => $this->form['imie'],
                "nazwisko" => $this->form['nazwisko'],
                "login" => $this->form['login'],
                "haslo" => $this->form['pass'],
                "id_rola" => 4, 
                "email" => $this->form['email']
            ]);
            Utils::addInfoMessage('Konto zostało utworzone. Możesz się zalogować.');
            App::getRouter()->forwardTo('loginView');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd bazy danych: ' . $e->getMessage());
            $this->action_registerView();
        }
    }
}