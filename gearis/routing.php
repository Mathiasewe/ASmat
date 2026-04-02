<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homeView'); 

Utils::addRoute('homeView', 'HomeCtrl');
Utils::addRoute('loginView', 'LoginCtrl');
Utils::addRoute('gearList', 'GearCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('registerView', 'RegisterCtrl');
Utils::addRoute('register',     'RegisterCtrl');
Utils::addRoute('contactView', 'HomeCtrl');

//klient
Utils::addRoute('reservations', 'ReservationCtrl', ['klient']); 
Utils::addRoute('reserveGear',  'ReservationCtrl', ['klient']); 
Utils::addRoute('reservationSave', 'ReservationCtrl', ['klient']); 
Utils::addRoute('reservationDelete', 'ReservationCtrl', ['klient']);
//pracownik
Utils::addRoute('employeeView', 'EmployeeCtrl', ['pracownik']);
Utils::addRoute('manageReservations', 'EmployeeCtrl', ['pracownik']);
Utils::addRoute('updatePayment',      'EmployeeCtrl', ['pracownik']);
//admin
Utils::addRoute('adminView', 'AdminCtrl', ['administrator']);  
Utils::addRoute('adminUsersView', 'AdminCtrl', ['administrator']);   
Utils::addRoute('adminChangeRole', 'AdminCtrl', ['administrator']);   

//Kierownik
Utils::addRoute('managerView', 'ManagerCtrl', ['kierownik']);
Utils::addRoute('manageWorkers', 'ManagerCtrl', ['kierownik']);
Utils::addRoute('reports', 'ManagerCtrl', ['kierownik']);
Utils::addRoute('manageWorkers', 'ManagerCtrl', ['kierownik']);
Utils::addRoute('workerSave',    'ManagerCtrl', ['kierownik']);
Utils::addRoute('workerEdit',    'ManagerCtrl', ['kierownik']);
Utils::addRoute('workerDelete',  'ManagerCtrl', ['kierownik']);
Utils::addRoute('workerAdd', 'ManagerCtrl', ['kierownik']);
// Zarządzanie sprzętem
Utils::addRoute('gearAdd',    'GearCtrl', ['kierownik']);
Utils::addRoute('gearEdit',   'GearCtrl', ['kierownik']);
Utils::addRoute('gearSave',   'GearCtrl', ['kierownik']);
Utils::addRoute('gearDelete', 'GearCtrl', ['kierownik']);