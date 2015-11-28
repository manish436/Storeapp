<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Path
 *
 * @author Manik
 */
class Store_Library_CSV_Reader {

    private $allData = null;
    private $fileObject = null;
    private $CSVPath = APPLICATION_DATA_PATH . "/items.csv";

    public function __construct() {
        $this->fileObject = fopen($this->CSVPath, "r");
    }

    public function fetchAllCSVData() {

        while (!feof($this->fileObject)) {
            $this->allData[] = fgetcsv($this->fileObject);
        }


        return $this->allData;
    }

    public function fetchByComparingColumn($columnNumber, $columnValue) {
        while ($row = fgetcsv($this->fileObject)) {
            if (strtolower($row[$columnNumber]) == strtolower($columnValue)) {
                $this->allData[] = $row;
            }
        }
        return $this->allData;
    }

    public function fetchByComparingColumnsEachValue($columnNumber, $columnValue) {
        while ($row = fgetcsv($this->fileObject)) {
            $CSVColumnData = explode(";", $row[$columnNumber]);
            foreach ($CSVColumnData as $CSVColumnDataEach) {
                if (strtolower($CSVColumnDataEach) == strtolower($columnValue)) {
                    $this->allData[] = $row;
                }
            }
        }
        return $this->allData;
    }

    public function __destruct() {
        fclose($this->fileObject);
    }

}
