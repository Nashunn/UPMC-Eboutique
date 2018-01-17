<?php
class Product {
    private $id;
    private $name;
    private $type;
    private $price;
    private $imgLink;

    //Basic constructor for an User
    public function __construct($data) {
        $this->hydrate($data);
    }

    //Hydratation of a product
    public function hydrate($data) {
        foreach ($data as $fieldName => $fieldValue) {
            $this->{'set' . ucwords($fieldName)}($fieldValue);
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImgLink() {
        return $this->imgLink;
    }

    public function setImgLink($imgLink) {
        $this->imgLink = $imgLink;
    }
}