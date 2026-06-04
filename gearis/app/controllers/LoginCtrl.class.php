<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

class LoginCtrl {
    
    private $login_val;


    public function action_loginView() {
        $this->generateView();
    }

    
    public function action_login() {

        
        $login = ParamUtils::getFromRequest('login');
        $pass = ParamUtils::getFromRequest('pass');
        $this->login_val = $login;

        
        if (empty($login) || empty($pass)) {
            Utils::addErrorMessage('Nie podano loginu lub hasła');
            $this->generateView();
            return;
        }


        try {

            $user_data = App::getDB()->get("uzytkownicy", "*", [
                "login" => $login
            ]);


            if ($user_data && $pass == $user_data['haslo']) {
                

                $role_name = App::getDB()->get("rola", "nazwa", [
                    "id" => $user_data['id_rola']
                ]);

                $role = $role_name ? $role_name : 'user';

               // $_SESSION['user_data'] = [
                //    'login' => $user_data['login'],
               //     'role' => $role
               // ];


                RoleUtils::addRole($role);
                $_SESSION['user'] = [
                    "id"    => $user_data["id"],      
                    "login" => $user_data["login"],   
                    "role"  => $role
                    ];

                SessionUtils::store('user_id', $user_data['id']);
                Utils::addInfoMessage('Zalogowano pomyślnie');
                
                if ($role === "administrator") { 
                    App::getRouter()->redirectTo('adminView');
                } elseif ($role === "kierownik") {
                    App::getRouter()->redirectTo('managerView'); 
                } elseif ($role === "pracownik") {
                    App::getRouter()->redirectTo('employeeView'); 
                } else {
                    App::getRouter()->redirectTo('homeView'); 
                }

            } else {

                Utils::addErrorMessage('Niepoprawny login lub hasło');
                $this->generateView();
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd bazy danych: ' . $e->getMessage());
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        Utils::addInfoMessage('Wylogowano z systemu');
        App::getRouter()->redirectTo("homeView");
    }


    public function generateView() {
        App::getSmarty()->assign('page_title', 'Logowanie');
        App::getSmarty()->assign('login_val', $this->login_val);

        App::getSmarty()->display('LoginView.tpl');
    }
}