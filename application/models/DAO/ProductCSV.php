<?php

/*
 * This class is used for fetch data from CSV file, it is a DAO file
 * similar to the file which we use to execute sql queries for crud operation.
 */

/**
 * ProductCSV is used to fetch data from CSV
 *
 * @author Manish Gour
 */
class Application_Model_DAO_ProductCSV extends Store_Library_CSV_Reader implements Application_Model_DAO_ProductInterface {

    public function __construct($fileName) {
        parent::__construct($fileName);
    }

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
