<?php

/*
 * This interface is used to set a guidline for other classes, 
 * so that data type and parametrs will be same for all type of data source files.
 */

/**
 * ProductInterface is used set a guidline for other classes, 
 *
 * @author Manish Gour
 */
interface Application_Model_DAO_ProductInterface {

    public function findById(Application_Model_DTO_Product $product);

    public function findAll();

    public function findByCategory(Application_Model_DTO_Product $product);
}
