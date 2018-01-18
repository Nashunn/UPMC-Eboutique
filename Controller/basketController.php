<?php
class basketController {
    public function __construct($db) {
        require('./model/Product.php');
        require_once('./model/ProductManager.php');

        $this->db = $db;
        $this->productManager = new ProductManager($db);
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
        $id = $_GET['id'];

        $product = $this->productManager->findOne($id);

        if(!empty($product) && isset($_SESSION['user']['basket']))
            $_SESSION['user']['basket'][] = array("product"=>$product, "quantity"=>1);

        header("Location: ./index.php?ctrl=basket&action=consult");
        require('./View/default.php');
    }

    /**
     * Add a box to the basket
     */
    public function addBox() {
        $page = 'basket';
        $product = array("name"=>'Box', "price"=>50);

        if(isset($_SESSION['user']['basket']))
            $_SESSION['user']['basket'][] = array("product"=>$product, "quantity"=>1);

        header("Location: ./index.php?ctrl=basket&action=consult");
        require('./View/default.php');
    }
}
