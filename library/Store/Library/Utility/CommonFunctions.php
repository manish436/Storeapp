<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonFunctions
 *
 * @author Manik
 */
class Store_Library_Utility_CommonFunctions {

    public static function dataSourceExtractor($dataSourceType) {
        $dataSource = explode(".", $dataSourceType);
        return strtoupper($dataSource[1]);
    }

}
