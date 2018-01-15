<?php
class defaultController {
    public function __construct($db) {
        require_once('./model/UserManager.php');

        $this->db = $db;
        $this->userManager = new UserManager($db);
    }

    public function display() {
        $page = 'home';
        $user = $this->userManager->findByEmail($_SESSION['user']['user']);

        if($user['admin'] == 1 && isset($_SESSION['user']['user']))
            $admin = true;

        require('./View/default.php');
    }
}