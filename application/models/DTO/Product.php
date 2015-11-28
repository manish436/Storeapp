<?php

/*
 * It is a simple DTO class we can also call it an Etity of a bean class, 
 * it is used in passing data in objects rather then raw values.
 */

/**
 * Product Entity, DTO or Bean class to represent a realworld object
 *
 * @author Manish Gour
 */
class Application_Model_DTO_Product {

    private $productId;
    private $productName;
    private $productQuantity;
    private $category;

    public function getProductId() {
        return $this->productId;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function getProductQuantity() {
        return $this->productQuantity;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
    }

    public function setProductQuantity($productQuantity) {
        $this->productQuantity = $productQuantity;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

}
