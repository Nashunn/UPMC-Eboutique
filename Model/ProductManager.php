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
}
