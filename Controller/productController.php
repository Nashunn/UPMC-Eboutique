<?php
class productController {
    private $userManager;
    private $productManager;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        require('./model/Product.php');
        require_once('./model/ProductManager.php');
        require_once ('./model/UserManager.php');

        $this->productManager = new ProductManager($db);
        $this->userManager = new UserManager($db);
    }

    /**
     * Create a product and add it in db
     */
    public function create() {
        if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['type'])) {
            $data = array(
                "name"=>$_POST['name'],
                "type"=>$_POST['type'],
                "price"=>$_POST['price'],
                "imgLink"=>$this->getImgProduct($_POST['type']),
            );

            $newProduct = new Product($data);
            $this->productManager->create($newProduct);
        }
        else {
            $error = "ERROR : Missing information";
        }

        $usersList = $this->userManager->findAll();
        $usersNb = $this->userManager->countAll();

        $page = "adminPanel";
        require('./View/default.php');
    }

    /**
     * Return the url of the image of a product by his type
     */
    private function getImgProduct($type) {
        $result = "../View/img/";

        switch ($type) {
            case "tree":
                $result = $result."tree.png";
                break;
            case "plant":
                $result = $result."flower.png";
                break;
            case "bouquet":
                $result = $result."bouquet.png";
                break;
            case "seed":
                $result = $result."seeds.png";
                break;
            case "fruit":
                $result = $result."fruits.png";
                break;
            default:
                $result = $result."unknow.png";
                break;
        }

        return $result;
    }

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