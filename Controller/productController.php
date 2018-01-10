<?php
class productController {

    /**
     * Display all products in db
     */
    public function all() {
        $page = 'allProduct';

        require('./View/default.php');
    }

    /**
     * Display the trees
     */
    public function trees() {
        $page = 'product';
        $product = 'tree';

        require('./View/default.php');
    }

    /**
     * Display the seed
     */
    public function seeds() {
        $page = 'product';
        $product = 'seed';

        require('./View/default.php');
    }

    /**
     * Display the plants
     */
    public function plants() {
        $page = 'product';
        $product = 'plants';

        require('./View/default.php');
    }

    /**
     * Display the trees
     */
    public function bouquets() {
        $page = 'product';
        $product = 'bouquet';

        require('./View/default.php');
    }

    /**
     * Display the trees
     */
    public function fruits() {
        $page = 'product';
        $product = 'fruits';

        require('./View/default.php');
    }


}