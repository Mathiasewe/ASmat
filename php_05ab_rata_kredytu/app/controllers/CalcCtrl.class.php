<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

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
	public function process(){

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
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		getSmarty()->assign('page_title','Przykład 05ab');
		getSmarty()->assign('page_description','Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
		getSmarty()->assign('page_header','Kontroler główny');


		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html');
	} 
}