<?php
namespace app\controllers;

use core\App;
use core\Utils;

class HomeCtrl {
    public function action_homeView() {
        App::getSmarty()->assign('page_title', 'Gearis');
        App::getSmarty()->display("homeView.tpl");       
    }   

    public function action_contactView() {
        App::getSmarty()->assign('page_title', 'Kontakt');
        App::getSmarty()->display("ContactView.tpl");       
    } 
}
