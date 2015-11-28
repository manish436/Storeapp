<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductCSV
 *
 * @author Manik
 */
class Application_Model_DAO_ProductCSV extends Store_Library_CSV_Reader implements Application_Model_DAO_ProductInterface {

    public function findAll() {
        return $this->fetchAllCSVData();
    }

    public function findByCategory(Application_Model_DTO_Product $product) {
        //my-items.csv find-by-category green
        $category = $product->getCategory();
        return $this->fetchByComparingColumnsEachValue(3, $category);
    }

    public function findById(Application_Model_DTO_Product $product) {
        $productId = $product->getProductId();
        return $this->fetchByComparingColumn(0, $productId);
    }

//put your code here
}
