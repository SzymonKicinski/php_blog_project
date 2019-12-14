<?php
require_once getConf()->root_path.'/app/person/edit/PersonEditForm.class.php';

class PersonEditCtrl {

	private $form; //dane formularza

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonEditForm();
	}

	//pobierz parametry formularza na potrzeby zapisu rekordu osoby (nowe dane lub edycja)
	public function getParamsSave(){
		// z formularza edycji
		$this->form->id = getFromRequest('id');
		$this->form->name = getFromRequest('name');
		$this->form->surname = getFromRequest('surname');
		$this->form->birthdate = getFromRequest('birthdate');
	}

	//pobierz parametry na potreby wyswietlenia danych do edycji
	public function getParamsEdit(){
		// z widoku listy osób
		$this->form->id = getFromRequest('id');
	}
	
	//validacja danych przed zapisem (nowe dane lub edycja)
	public function validateSave() {
		// 1. sprawdzenie, czy parametry zostały przekazane
		if (!(isset($this->form->id)&&
		      isset($this->form->name)&&
			  isset($this->form->surname)&&
			  isset($this->form->birthdate)
			)){
			getMessages()->addError('Błędne wywołanie aplikacji');
			return false;
		}
		
		// 2. sprawdzenie czy wartości wymagane nie są puste
		if (strlen($this->form->name) == 0) {
			getMessages()->addError('Wprowadź imię');
		}
		if (strlen($this->form->surname) == 0) {
			getMessages()->addError('Wprowadź nazwisko');
		}
		if (strlen($this->form->birthdate) == 0) {
			getMessages()->addError('Wprowadź datę urodzenia');
		}

		// 3. sprawdzenie poprawności przekazanych parametrów
		if ( ! validateDate($this->form->birthdate,'Y-m-d') ){
			getMessages()->addError('Zły format daty. Przykład: 2015-12-20');
		}
		
		return ! getMessages()->isError();
	}

	//validacja danych przed wyswietleniem do edycji
	public function validateEdit() {
		// 1. sprawdzenie, czy ID został przekazany
		if (!(isset($this->form->id))){
			getMessages()->addError('Błędne wywołanie aplikacji');
			return false;
		}
		return true;
	}
	
	//wysiweltenie rekordu do edycji wskazanego parametrem 'id'
	public function processEdit(){
		// 1. pobierz ID osoby do edycji
		$this->getParamsEdit();
		
		// 2. walidacja id
		if ( $this->validateEdit() ){
		  // 3. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
			$record = getDB()->get("person", "*",[
				"idperson" => $this->form->id
			]);
		  // 3.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
			if (isset($record)){
				$this->form->id = $record['idperson'];
				$this->form->name = $record['name'];
				$this->form->surname = $record['surname'];
				$this->form->birthdate = $record['birthdate'];
			} else {
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas odczytu rekordu');
			}
		} 
		
		// 4. Wygenerowanie widoku
		$this->generateView();		
	}

	public function processDelete(){
		// 1. pobierz ID osoby do usuniecia
		$this->getParamsEdit();
		
		// 2. walidacja id
		if ( $this->validateEdit() ){
		  // 3. usunięcie rekordu
			getDB()->delete("person",[
				"idperson" => $this->form->id
			]);
			if ( null != getDB()->error()[1] ){ //jeśli istnieje kod błędu
				getMessages()->addError("Wystąpił błąd podczas usuwania rekordu".getDB()->error()[2]);
			} else {
				getMessages()->addInfo("Pomyślnie usunięto rekord");
			}
		}
		
		// 4. Przekierowanie na stronę listy osób
		forwardTo('personList');		
	}

	public function processSave(){

		// 1. pobierz parametry formularza (folmularz wyszukiwania osób)
		$this->getParamsSave();
			
		// 2. Walidacja danych formularza
		if ($this->validateSave()) {
			// 3. Zapis danych w bazie
			
			//3.1 Nowy rekord
			if ($this->form->id == '') {
				getDB()->insert("person", [
					"name" => $this->form->name,
					"surname" => $this->form->surname,
					"birthdate" => $this->form->birthdate
				]);
			} else { 
			//3.2 Edycja rekordu o danym ID
				getDB()->update("person", [
					"name" => $this->form->name,
					"surname" => $this->form->surname,
					"birthdate" => $this->form->birthdate
				], [ 
					"idperson" => $this->form->id
				]);
			}
			if ( null != getDB()->error()[1] ){ //jeśli istnieje kod błędu
				getMessages()->addError("Wystąpił błąd podczas zapisu rekordu w bazie danych: ".getDB()->error()[2]);
			} else {
				getMessages()->addInfo("Pomyślnie zapisano dane");
			}
			// 4. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			forwardTo('personList');
		} else {
			// 4. Gdy błąd to pozostań na stronie
			$this->generateView();
		}		
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);    // dane formularza do widoku
		getSmarty()->display(getConf()->root_path.'/app/person/edit/PersonEdit.php');
	}
}

 