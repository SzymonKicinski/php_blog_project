<?php
require_once dirname (__FILE__).'/../init.php';
require_once dirname (__FILE__).'/../scripts/bootstrap.php';
require_once dirname (__FILE__).'/../scripts/bootstrap/database.php';
// Po załadowaniu skryptu 'init.php' w całej aplikacji dostępne są obiekty:
// konfiguracji, smarty, messages oraz bazy danych Medoo (Smarty i Medoo ładowane i tworzone w momencie pierwszego użycia)
// za pomocą funkcji: getConf(), getSmarty(), getMessages() oraz getDB()
// Jest również dostępna zmienna $action inicjowana z parametru żądania

switch ($action) {
    default : // 'personList'
        include_once getConf()->root_path . '/app/person/list/PersonListCtrl.class.php';

        $ctrl = new PersonListCtrl();
        $ctrl->headerView();
        $ctrl->contenerView();

        break;
    case 'personNew' :
        include_once getConf()->root_path . '/app/person/edit/PersonEditCtrl.class.php';
        $ctrl = new PersonEditCtrl();
        $ctrl->generateView();
        break;
    //case 'newsSave' :
    //   include_once getConf()->root_path.'/app/person/edit/PersonEditCtrl.class.php';
    //   $ctrl = new PersonEditCtrl();
    //   $ctrl->generateView();
    //   break;
    case 'personEdit' :
        include_once getConf()->root_path . '/app/person/edit/PersonEditCtrl.class.php';
        $ctrl = new PersonEditCtrl();
        $ctrl->processEdit();
        break;
    // case 'newsletterSave' :
    //    include_once getConf()->root_path.'/app/person/edit/NewsletterAddCtrl.class.php';
    //    $ctrl = new NewsletterAddCtrl();
    //    $ctrl->newsletterSave();
    //    break;
    case 'newsletterNew' :
        include_once getConf()->root_path . '/scripts/newsletter/add.php';
        header("{$conf->app_url}/scripts/newsletter/add.php");
        include_once getConf()->root_path . '/app/person/edit/NewsletterAddEditCtrl.class.php';
        $ctrl->generateView();
        break;

    case 'accounts' :
        include_once getConf()->root_path . '/admin/auth/login.php';

        break;

    case 'login' :
        include_once getConf()->root_path . '/scripts/auth/login.php';

        break;


    case 'categoryAdd' :

        include_once getConf()->root_path . '/admin/category/add.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'categoryShow' :

        include_once getConf()->root_path . '/admin/category/show.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'pageAdd' :

        include_once getConf()->root_path . '/admin/page/add.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'pageShow' :

        include_once getConf()->root_path . '/admin/page/show.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'postAdd' :

        include_once getConf()->root_path . '/admin/post/add.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'postShow' :

        include_once getConf()->root_path . '/admin/post/show.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'postEdit' :

        include_once getConf()->root_path . '/admin/post/edit.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'commentsShow' :

        include_once getConf()->root_path . '/admin/comments/show.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'commentsEdit' :

        include_once getConf()->root_path . '/admin/comments/edit.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'userAdd' :

        include_once getConf()->root_path . '/admin/user/add.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'userShow' :

        include_once getConf()->root_path . '/admin/user/show.php';
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        $ctrl = new NewsletterAddCtrl();

        $ctrl->generateViewAdmin();
        break;

    case 'postsOpen' :
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        include_once getConf()->root_path . '/page.php';
        $ctrl = new NewsletterAddCtrl();
        $ctrl->generateViewPage();
        break;

    case 'postsOpenSingle' :
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        include_once getConf()->root_path . '/single.php';
        $ctrl = new NewsletterAddCtrl();
        $ctrl->generateViewPage();
        break;

    case 'postsOpenSingle1' :
        include_once getConf()->root_path . '\app\person\edit\NewsletterAddCtrl.class.php';
        include_once getConf()->root_path . '/single1.php';
        $ctrl = new NewsletterAddCtrl();
        $ctrl->generateViewPage();
        break;




    case 'pageOpen' :

        include_once getConf()->root_path . '/page.php';
        $ctrl = new NewsletterAddCtrl();
        $ctrl->generateViewPage();
        break;
    case 'personSave' :
        include_once getConf()->root_path . '/app/person/list/PersonEditCtrl.class.php';
        $ctrl = new PersonEditCtrl();
        $ctrl->processSave();
        break;
    case 'personDelete' :
        include_once getConf()->root_path . '/app/person/list/PersonEditCtrl.class.php';
        $ctrl = new PersonEditCtrl();
        $ctrl->processDelete();
        break;
}
?>