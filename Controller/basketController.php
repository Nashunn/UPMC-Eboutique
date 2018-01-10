<?php
class basketController {

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
        $product = 'TODO';

        require('./View/default.php');
    }
}