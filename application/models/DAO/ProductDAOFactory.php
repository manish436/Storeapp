<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductDAOFactory
 *
 * @author Manik
 */
class Application_Model_DAO_ProductDAOFactory {

    /**
     * Get a factory instance. 
     * @return Application_Model_DAO_ProductCSV
     * @return Application_Model_DAO_ProductNL
     */
    public static function getProductDAO($type) {
        if ($type == "CSV") {
            return new Application_Model_DAO_ProductCSV();
        } else if ($type == "NL") {
            return new Application_Model_DAO_ProductNL();
        }
    }

}
