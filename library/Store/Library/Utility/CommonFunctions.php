<?php

/*
 * All the classes which resists inside Library Store folder is customer library class,
 *  which is used for application requirments only.
 */

/**
 * Utility class used for some utlities, data extraction, data filter and date time etc..
 *
 * @author Manish Gour
 */
class Store_Library_Utility_CommonFunctions {

    public static function dataSourceExtractor($dataSourceType) {
        $dataSource = explode(".", $dataSourceType);
        return strtoupper($dataSource[1]);
    }

}
