<?php
class userController {
    private $userManager;
    private $user;

    public function __construct($db) {
        require('./model/User.php');
        require_once('./model/UserManager.php');
        $this->userManager = new UserManager($db);

        $this->db = $db;
    }

    /**
     * Display the interface to login an user
     */
    public function login() {
        $page = 'login';

        require('./View/default.php');
    }

    /**
     * Login an user with his email and pwd
     */
    public function doLogin() {
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $user = $_POST['email'];
            $pwd = $_POST['password'];
            $result = $this->userManager->login($user, $pwd);
        }

        if($result) {
            $_SESSION['user'] = $result['email'];
            $page = 'home';
        }
        else {
            $error = "ERROR : login or password incorrect !";
            $page = 'login';
        }

        require('./View/default.php');
    }

    /**
     * Log out an user
     */
    public function logout() {
        if(isset($_SESSION['user']))
            unset($_SESSION['user']);

        $page = 'home';
        require('./View/default.php');
    }

    /**
     * Dissplay the interface to create an user
     */
    public function create() {
        $page = 'create';

        require('./View/default.php');
    }

    /**
     * Create the account in the db
     */
    public function doCreate() {
        if(
            isset($_POST['email']) &&
            isset($_POST['password']) &&
            isset($_POST['lastName']) &&
            isset($_POST['firstName']) &&
            isset($_POST['address']) &&
            isset($_POST['postalCode']) &&
            isset($_POST['city'])
        ) {
            $alreadyExist = $this->userManager->findByEmail($_POST['email']);

            if(!$alreadyExist) {
                $newUser = new User($_POST);
                $this->userManager->create($newUser);
                $page = 'login';
            }
            else {
                $error = "ERROR : This email (".$_POST['email'].") is used by another user";
                $page = 'create';
            }
        }

        require('./View/default.php');
    }

    /**
     * List all users
     */
    public function listUser() {
        $user = $this->userManager->findByEmail($_SESSION['user']);

        if($user) {
            if($user['admin'] == 1) {
                $page = 'listUser';
                $usersList = $this->userManager->findAll();
                $usersNb = $this->userManager->countAll();
            }
            else {
                header("Location: ./index.php?ctrl=user&action=unauthorized");
            }
        }
        else {
            header("Location: ./index.php?ctrl=user&action=unauthorized");
        }

        require('./View/default.php');
    }

    /**
     * Display a message if the page is unauthorized
     */
    public function unauthorized() {
        $page = 'unauthorized';
        require('./View/default.php');
    }

}