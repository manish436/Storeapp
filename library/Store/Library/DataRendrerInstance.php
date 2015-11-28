<?php

require_once 'DataRendrer.php';

/*
 * All the classes which resists inside Library Store folder is customer library class,
 * which is used for application requirments only.
 */

/**
 * DataRendrerInstance class used only for calling DataRendrer class
 * so that we do not need to creat object of this many times.
 * 
 * @author Manish Gour
 */
class Store_Library_DataRendrerInstance {
    /*
     * @return void 
     */

    public static function displayData($data) {
        $dataRendrerObject = new Store_Library_DataRendrer();
        $dataRendrerObject->displayData($data);
    }

}
