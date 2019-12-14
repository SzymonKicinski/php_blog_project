<?php
require_once getConf()->root_path.'/app/person/list/idPage.php';
require_once getConf()->root_path.'/scripts/bootstrap/database.php';
?>
<?php
class PersonListCtrl {

    private $form; //dane formularza wyszukiwania
    private $recordsCategory; //rekordy pobrane z bazy danych
    private $recordsComments; //rekordy pobrane z bazy danych
    private $recordsPosts; //rekordy pobrane z bazy danych
    private $recordsRole; //rekordy pobrane z bazy danych
    private $recordsPage; //rekordy pobrane z bazy danych
    private $recordsUsers; //rekordy pobrane z bazy danych
    private $recordsNewsletter; //rekordy pobrane z bazy danych
    private $recordsGetValueById; //rekordy pobrane z bazy danych

    public function __construct(){
        //stworzenie potrzebnych obiektów
        $this->form = new idPage();

    }

    public function getParams(){
        // z formularza wyszukiwania:
        $this->form->id = getFromRequest('sf_surname');
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać

        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

        return ! getMessages()->isError();
    }

    public function contenerView(){

    }


    public function headerView(){

        // 1. pobierz parametry formularza (folmularz wyszukiwania osób)
        $this->getparams();

        // 2. Walidacja danych formularza
        // - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
        //   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
        //   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
        $this->validate();

        // 3. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if ( isset($this->form->id) && strlen($this->form->id) > 0) {
            $search_params['id[~]'] = $this->form->id.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        // 4. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bezś względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnocią walidacji (jak miało to miejsce w kalkulatorze)

        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = [ "AND" => &$search_params ];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        $where ["ORDER"] = "id";
        //wykonanie zapytania

        $this->recordsPage = getDB()->select("page", [
            "id",
            "content",
            "title",
            "user_id",
        ], $where );

        $this->recordsPosts = getDB()->select("posts", [
            "id",
            "content",
            "title",
            "user_id",
            "category_id",
            "created",
            "excerpt",
            "status",
            "post_name",
        ], $where );

        $this->recordsCategory = getDB()->select("category", [
            "id",
            "description",
            "name",
        ], $where );

        $this->recordsComments = getDB()->select("comments", [
            "id",
            "content",
            "author",
            "created",
            "post_id",
            "status",
        ], $where );

        $this->recordsNewsletter = getDB()->select("newsletter", [
            "id",
            "status",
            "email",
            "author",
            "created",
        ], $where );

        $this->recordsRole = getDB()->select("role", [
            "id",
            "description",
            "name",
        ], $where );

        $this->recordsUsers = getDB()->select("users", [
            "id",
            "description",
            "email",
            "login",
            "password",
            "recovery",
            "role_id",
        ], $where );

        $this->recordsUsers = getDB()->select("category" AND  [
            "id",
            "description",
            "email",
            "login",
            "password",
            "recovery",
            "role_id",
        ], $where );

        $this->recordsGetValueById = getDB()->select("category" AND    [
                "name",

            ], $where   );

        // 5. Wygenerowanie widoku
        $this->generateView();
    }



    public function generateView(){
        getSmarty()->assign('searchForm',$this->form);    // dane formularza (wyszukiwania w tym wypadku)
        getSmarty()->assign('page',$this->recordsPage); // lista rekordów z bazy danych
        getSmarty()->assign('posts',$this->recordsPosts); // lista rekordów z bazy danych
        getSmarty()->assign('category',$this->recordsCategory); // lista rekordów z bazy danych
        getSmarty()->assign('comments',$this->recordsComments); // lista rekordów z bazy danych
        getSmarty()->assign('role',$this->recordsRole); // lista rekordów z bazy danych
        getSmarty()->assign('users',$this->recordsUsers); // lista rekordów z bazy danych
        getSmarty()->assign('newsletter',$this->recordsNewsletter); // lista rekordów z bazy danych
        getSmarty()->assign('getValueById',$this->recordsGetValueById); // lista rekordów z bazy danych

        getSmarty()->display(getConf()->root_path.'/app/person/list/PersonList.php');
    }
}
