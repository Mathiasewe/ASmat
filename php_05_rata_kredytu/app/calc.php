<?php
//Skrypt uruchamiający akcję wykonania obliczeń kalkulatora
// - należy zwrócić uwagę jak znacząco jego rola uległa zmianie
//   po wstawieniu funkcjonalności do klasy kontrolera
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';
//załaduj kontroler
require_once $conf->root_path.'/app/CalcCtrl.class.php';

//utwórz obiekt i użyj
$ctrl = new CalcCtrl();
$ctrl->process();



