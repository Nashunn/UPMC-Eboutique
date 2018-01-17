<?php
class adminController {
    private $userManager;

    public function __construct($db) {
        require('./model/User.php');
        require_once('./model/UserManager.php');
        $this->userManager = new UserManager($db);

        $this->db = $db;
    }

    public function panel() {
        $user = $this->userManager->findByEmail($_SESSION['user']['user']);

        if($user && $user['admin'] == true) {
            $page = 'adminPanel';
            $usersList = $this->userManager->findAll();
            $usersNb = $this->userManager->countAll();
        }
        else {
            header("Location: ./index.php?ctrl=user&action=unauthorized");
        }

        require('./View/default.php');
    }
}
