<?php
class ProductManager {
    private $db;

    //Constructor that take a db in parameter
    public function __construct($db) {
        $this->db = $db;
    }

    //Create a product in the db
    public function create($product) {
        $name = htmlspecialchars($product->getName());
        $type = htmlspecialchars($product->getType());
        $price = htmlspecialchars($product->getPrice());
        $imgLink = htmlspecialchars($product->getImgLink());

        $req = $this->db->prepare(
            'INSERT INTO product (name, type, price, imgLink)
        VALUES ( :name, :type, :price, :imgLink)'
        );

        $req->execute(
            array(
                'name' => $name,
                'type' => $type,
                'price' => $price,
                'imgLink' => $imgLink,
            )
        );
    }

    //Return a list of 5 new items
    public function getNewItems() {
        $result = array();

        $req = $this->db->prepare(
            'SELECT *
            FROM product
            ORDER BY id DESC
            LIMIT 5'
        );

        $req->execute();
        $result = $req->fetchAll(); //get all

        return $result;
    }

    // Return an array of products by the type given
    public function getProductByType($type) {
        $result = array();

        $req = $this->db->prepare(
            'SELECT *
            FROM product
            WHERE type=:type
            ORDER BY id DESC
        ');

        $req->execute(
            array('type' => $type)
        );

        $result = $req->fetchAll(); //get all

        return $result;
    }

    // Return an array of all products
    public function getAllProducts() {
        $result = array();

        $req = $this->db->prepare (
            'SELECT *
            FROM product
            ORDER BY id DESC
        ');

        $req->execute();

        $result = $req->fetchAll(); //get all

        return $result;
    }

    //Find one product by its id
    public function findOne($id) {
        $product = null;

        $req = $this->db->prepare(
	    'SELECT *
        FROM product
        WHERE id=:id');

        $req->execute(
            array(
                'id' => $id,
            )
        );

        $product = $req->fetch(); //get the first user

        return $product;
    }

}
