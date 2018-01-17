<?php
class basketController {
    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Display the basket of an user
     */
    public function consult() {
        $page = 'basket';

        require('./View/default.php');
    }

    /**
     * Add a selected product to the basket
     */
    public function add() {
        $page = 'basket';
        $product = $_GET['id'];

        require('./View/default.php');
    }

    /**
     * Add a box to the basket
     */
    public function addBox() {
        $page = 'basket';
        $product = 'box';

        require('./View/default.php');
    }
}