<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataRendrer
 *
 * @author Manik
 */
class Store_Library_DataRendrer {

    public function displayData($allData) {
        /*
         * <id> <name> (<quantity>)
          - <category 1>
          - <category 2>
          - <category n...>

          Example:

          68-OX-YH94 Carrot (5)
          - vegetable
          - green
          - orange
          - skinny

         */
        print "\n";
        foreach ($allData as $value) {
            print $value[0] . " " . $value[1] . " " . $value[2] . "\n";
            $category = explode(";", $value[3]);
            foreach ($category as $eachCategory) {
                print " - " . $eachCategory . "\n";
            }
            print "\n";
        }
    }

}
