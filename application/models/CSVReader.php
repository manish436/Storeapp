<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CSVReader
 *
 * @author Manik
 */
class Application_Model_CSVReader {
    /*
     * items.csv find-by-id 68-OX-YH94

      items.nl find-all

      my-items.csv find-by-category green
     * 
     */

    public function findById($id) {
        
    }

    public function findAll() {
        $csvBaseObject = new Store_Library_CSV_Reader();
        return $csvBaseObject->fetchAllData();
    }

    public function findByCategory($category) {
        
    }

    //put your code here
    public function getAllData() {
        $file = fopen(APPLICATION_DATA_PATH . "/items.csv", "r");

        while (!feof($file)) {
            print_r(fgetcsv($file));
        }

        fclose($file);
    }

}
