<?php
require_once dirname (__FILE__).'/../../init.php';
require_once getConf()->root_path.'/scripts/bootstrap/database.php';
require_once getConf()->root_path.'/scripts/bootstrap.php';

?>

<section>
    <div class="container-fluid" id="middle-content">
        <div class="container" id="container-admin">
            <div  id="admin-menu">
                <div>
                    <div id="admin-menu-list">
                        <div style="float: left;  padding-top: 40px; padding-left: 100px; padding-right: 70px; padding-bottom: 30px;">
                            <li>
                                <p class="menu-group">Strony</p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=pageAdd">Dodaj nową</a>

                                </p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=pageShow">Pokaż wszystkie</a>
                                </p>
                            </li>
                        </div>
                        <div style="float: left; padding-top: 40px; padding-left: 70px; padding-right: 70px; padding-bottom: 30px;">
                            <li>
                                <p class="menu-group">Wpisy</p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=postAdd"">Dodaj nowy</a>
                                </p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=postShow">Pokaż wszystkie</a>
                                </p>
                            </li>
                        </div>
                        <div style="float: left; padding-top: 40px; padding-left: 70px; padding-right: 100px; padding-bottom: 30px; ">
                            <li>
                                <p class="menu-group">Kategorie</p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=categoryAdd" method="post">Dodaj nowy</a>
                                </p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=categoryShow">Pokaż wszystkie</a>
                                </p>
                            </li>
                        </div>
                        <div style="clear: both;" ></div>

                        <div style="float: left;padding-top: 30px; padding-left: 100px; padding-right: 70px; padding-bottom: 40px;">
                            <li>
                                <p class="menu-group">Komentarze</p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=commentsShow">Komentarze</a>
                                </p>
                            </li>
                        </div>
                        <div style="float: left ; padding-top: 30px; padding-left: 70px; padding-right: 70px; padding-bottom: 40px;  ">
                            <li>
                                <p class="menu-group">Użytkownicy</p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=userAdd">Dodaj nowego</a>
                                </p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../app/ctrl.php?action=userShow">Pokaż wszystkich</a>
                                </p>
                            </li>
                        </div>
                        <div style="float: left; padding-top: 30px; padding-left: 70px; padding-right: 100px; padding-bottom: 40px;  ">
                            <li>
                                <p class="menu-group">Inne</p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../index.php">Przejdź do strony</a>
                                </p>
                                <p class="menu-group-item">
                                    <a href="{$conf->app_url}/../../scripts/auth/logout.php">Wyloguj</a>
                                </p>
                            </li>
                        </div>

                        <div style="clear: both;"></div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12" id="dashboard">

                </div>
            </div>
        </div>
</section>