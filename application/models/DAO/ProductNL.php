<?php

/*
 * This class is used for fetch data from NL file, it is a DAO file
 * similar to the file which we use to execute sql queries for crud operation.
 */

/**
 * ProductNL is used to fetch data from NL file
 *
 * @author Manish Gour
 */
class Application_Model_DAO_ProductNL extends Store_Library_NL_Reader implements Application_Model_DAO_ProductInterface {

    public function findAll() {
        return $this->fetchAllNLData();
    }

    public function findByCategory(Application_Model_DTO_Product $product) {
        //my-items.nl find-by-category green
        $category = $product->getCategory();
        return $this->fetchByComparingColumnsEachValue(3, $category);
    }

    public function findById(Application_Model_DTO_Product $product) {
        $productId = $product->getProductId();
        return $this->fetchByComparingColumn(0, $productId);
    }

//put your code here
}
