<?php

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Mat test
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	/** 
	 * Pobranie parametrów
	 */
    public function getParams(){
		$this->form->kwota  = getFromRequest('kwota');
		$this->form->liczba_lat  = getFromRequest('liczba_lat');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
    }


	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
    public function validate(){
    // sprawdzenie, czy parametry zostały przekazane
	    if ( ! (isset($this->form->kwota) && isset($this->form->liczba_lat) && isset($this->form->oprocentowanie))) {
        return false;
	    } 


    // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ( $this->form->kwota == "") {
			getMessages()->addError( 'Nie podano kwoty');
        }

        if ( $this->form->liczba_lat == "") {
			getMessages()->addError('Nie podano liczby lat');
        }

        if ( $this->form->oprocentowanie == "") {
			getMessages()->addError( 'Nie podano oprocentowania');
        }

		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (! is_numeric( $this->form->kwota )) {
                getMessages()->addError('Kwota nie jest liczbą');
            }

            if (! is_numeric( $this->form->liczba_lat )) {
                getMessages()->addError('Liczba lat nie jest liczbą');
            }

            if (! is_numeric( $this->form->oprocentowanie )) {
                getMessages()->addError('Oprocentowanie nie jest liczbą');
            }
        }
		return ! getMessages()->isError();
    }

    /** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int i float
            $this->form->kwota = intval($this->form->kwota);
	        $this->form->liczba_lat = intval($this->form->liczba_lat);
	        $this->form->oprocentowanie = floatval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');

	        //wykonanie operacji
	        $this->result->obliczenia = $this->form->kwota * (1 + $this->form->oprocentowanie/100 * $this->form->liczba_lat) / ($this->form->liczba_lat * 12);
	        $this->result->result = round($this->result->obliczenia, 2);
			getMessages()->addInfo('Wykonano obliczenia.');
        }
        
        $this->generateView();

    }

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){


		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html');
	} 
}