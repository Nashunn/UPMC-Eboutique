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
        $totalBasket = $this->calculateTotal();

        require('./View/default.php');
    }

    /**
     * Calculate the total for the basket
     */
    public function calculateTotal() {
        $result = 0;

        if(isset($_SESSION['user']['basket']))
            foreach ($_SESSION['user']['basket'] as $item)
                $result += $item['product']['price']*$item['quantity'];

        return $result;
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
        $id = -1;
        $product = array("id"=>$id, "name"=>'Box', "price"=>50, "imgLink"=>"./View/img/box.png");


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

    /**
     * Save the information in the basket page
     */
    public function save() {
        $page = 'basket';
        $newbasket = $_POST;

        for($i = 0; $i<sizeof($newbasket['id']); $i++) {
            if ($newbasket['quantity'][$i] <= 0)
                unset($_SESSION['user']['basket'][$newbasket['id'][$i]]);
            else
                $_SESSION['user']['basket'][$newbasket['id'][$i]]['quantity'] = $newbasket['quantity'][$i];
        }

        //if the user wants to pay
        if($_POST['pay']) {
            $this->pay();
            header("Location: ./index.php?ctrl=basket&action=pay");
        }
        else
            header("Location: ./index.php?ctrl=basket&action=consult");

        require('./View/default.php');
    }

    /**
     * Display the page to pay
     */
    public function pay() {
        $page = 'pay';

        require('./View/default.php');
    }

    /**
     * Delete an item from the basket
     */
    public function delete() {
        $page = 'pay';

        if(isset($_GET['id']) && isset($_SESSION['user']['basket']))
            unset($_SESSION['user']['basket'][$_GET['id']]);

        header("Location: ./index.php?ctrl=basket&action=consult");
        require('./View/default.php');
    }
}
