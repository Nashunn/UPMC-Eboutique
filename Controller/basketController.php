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

        $productInBasket = $this->inBasket($id); //check if the product is in the basket

        if(!empty($product) && isset($_SESSION['user']['basket'])) {
            if ($productInBasket)
                $_SESSION['user']['basket'][$id]['quantity']++;
            else
                $_SESSION['user']['basket'][$id] = array("product" => $product, "quantity" => 1);
        }

        header("Location: ./index.php?ctrl=basket&action=consult");
        require('./View/default.php');
    }

    /**
     * Add a box to the basket
     */
    public function addBox() {
        $page = 'basket';
        $product = array("name"=>'Box', "price"=>50, "imgLink"=>"./View/img/box.png");
        $id = -1;

        $productInBasket = $this->inBasket($id); //check if the product is in the basket

        if(!empty($product) && isset($_SESSION['user']['basket'])) {
            if ($productInBasket)
                $_SESSION['user']['basket'][$id]['quantity']++;
            else
                $_SESSION['user']['basket'][$id] = array("product" => $product, "quantity" => 1);
        }

        header("Location: ./index.php?ctrl=basket&action=consult");
        require('./View/default.php');
    }

    /**
     * Check if a product is already in the basket, if yes return true and false if not
     */
    public function inBasket($id) {
        foreach ($_SESSION['user']['basket'] as $itemID => $item) {
            if($itemID == $id)
                return true;
        }

        return false;
    }
}
