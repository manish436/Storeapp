<?php

/*
 * This Class used to return object of DAO class 
 * In future if we need any other data source like database of Mysql Oracle, in that case we just need to give a type to this class
 */

/**
 * ProductDAOFactory : This Class used to return object of DAO class 
 * @author Manish Gour
 */
class Application_Model_DAO_ProductDAOFactory {

    /**
     * Get a factory instance. 
     * @return Application_Model_DAO_ProductCSV
     * @return Application_Model_DAO_ProductNL
     */
    public static function getProductDAO($type, $fileName = null) {
        if ($type == "CSV") {
            return new Application_Model_DAO_ProductCSV($fileName);
        } else if ($type == "NL") {
            return new Application_Model_DAO_ProductNL($fileName);
        }
    }

}
