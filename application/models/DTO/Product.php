<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Manik
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
