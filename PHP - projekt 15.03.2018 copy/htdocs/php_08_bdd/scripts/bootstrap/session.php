<?php

class session {

    public function checkSession() {
        //Check  session status?
        if(session_status() == 1 ){
            session_start();
        }

        if (!isset($_SESSION['auth'])) {
            return false;
        }
        return true;
    }

    public function getUserName() {
        if (!isset($_SESSION['user_name'])) {
            return null;
        }
        return $_SESSION['user_name'];
    }

    public function getUserId() {
        if (!isset($_SESSION['user_id'])) {
            return null;
        }
        return $_SESSION['user_id'];
    }

    public function getUserRole() {
        if (!isset($_SESSION['user_role'])) {
            return null;
        }
        return $_SESSION['user_role'];
    }

}


