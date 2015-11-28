<?php

require_once 'DataRendrer.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataRendrerInstance
 *
 * @author Manik
 */
class Store_Library_DataRendrerInstance {

    public static function displayData($data) {
        $dataRendrerObject = new Store_Library_DataRendrer();
        $dataRendrerObject->displayData($data);
    }

}
