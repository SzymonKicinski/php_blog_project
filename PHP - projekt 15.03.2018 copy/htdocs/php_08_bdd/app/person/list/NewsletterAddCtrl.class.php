<?php
//require_once getConf()->root_path.'/app/person/edit/NewsletterAddForm.class.php';
require_once getConf()->root_path.'/app/person/list/NewsletterAddForm.class.php';

class NewsletterAddCtrl {

    public $form; //dane formularza

    public function __construct(){
        //stworzenie potrzebnych obiektów
        $this->form = new NewsletterAddForm();
    }

    //pobierz parametry formularza na potrzeby zapisu rekordu osoby (nowe dane lub edycja)
    public function getParamsSave(){
        // z formularza edycji
        $this->form->id = getFromRequest('id');
        $this->form->author = getFromRequest('author');
        $this->form->email = getFromRequest('email');
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
            isset($this->form->author)&&
            isset($this->form->email)
        )){
            getMessages()->addError('Błędne wywołanie aplikacji');
            return false;
        }

        // 2. sprawdzenie czy wartości wymagane nie są puste
        if (strlen($this->form->author) == 0) {
            getMessages()->addError('Wprowadź imię');
        }
        if (strlen($this->form->email) == 0) {
            getMessages()->addError('Wprowadź nazwisko');
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
    public function processNewsletterEdit(){
        // 1. pobierz ID osoby do edycji
        $this->getParamsEdit();

        // 2. walidacja id
        if ( $this->validateEdit() ){
            // 3. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $record = getDB()->get("newsletter", "*",[
                "idnewsletter" => $this->form->id
            ]);
            // 3.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
            if (isset($record)){
                $this->form->id = $record['idnewsletter'];
                $this->form->author = $record['author'];
                $this->form->email = $record['email'];
            } else {
                getMessages()->addError('Wystąpił nieoczekiwany błąd podczas odczytu rekordu');
            }
        }

        // 4. Wygenerowanie widoku
        $this->generateView();
    }

    public function processNewsletterDelete(){
        // 1. pobierz ID osoby do usuniecia
        $this->getParamsEdit();

        // 2. walidacja id
        if ( $this->validateEdit() ){
            // 3. usunięcie rekordu
            getDB()->delete("newsletter",[
                "idnewsletter" => $this->form->id
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

    public function  newsletterSave(){

        // 1. pobierz parametry formularza (folmularz wyszukiwania osób)
        $this->getParamsSave();

        // 2. Walidacja danych formularza
        if ($this->validateSave()) {
            // 3. Zapis danych w bazie

            //3.1 Nowy rekord
            if ($this->form->id == '') {
                getDB()->insert("newsletter", [
                    "author" => $this->form->author,
                    "email" => $this->form->email,
                ]);
            } else {
                //3.2 Edycja rekordu o danym ID
                getDB()->update("newsletter", [
                    "author" => $this->form->author,
                    "email" => $this->form->email,
                ], [
                    "idnewsletter" => $this->form->id
                ]);
            }
            if ( null != getDB()->error()[1] ){ //jeśli istnieje kod błędu
                getMessages()->addError("Wystąpił błąd podczas zapisu rekordu w bazie danych: ".getDB()->error()[2]);
            } else {
                getMessages()->addInfo("Pomyślnie zapisano dane!!!!!!!");
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
