<?php

/*
 * All the classes which resists inside Library Store folder is customer library class,
 *  which is used for application requirments only.
 */

/**
 * This is a core CSV reader file and used to fetch data from CSV file.
 *
 * @author Manish Gour
 */
class Store_Library_CSV_Reader {

    private $allData = null;
    private $fileObject = null;
    private $fileName = null;
    private $CSVPath = APPLICATION_DATA_PATH . "/";

    public function __construct($fileName) {
        $this->fileName = $fileName;
        try {
            $this->fileObject = @fopen($this->CSVPath . $this->fileName, "r");
        } catch (Exception $ex) {
            print "File Does Not Exists";
        }
    }

    public function fetchAllCSVData() {
        if (is_resource($this->fileObject)) {
            while (!feof($this->fileObject)) {
                $this->allData[] = @fgetcsv($this->fileObject);
            }
        }

        return $this->allData;
    }

    public function fetchByComparingColumn($columnNumber, $columnValue) {
        if (is_resource($this->fileObject)) {
            while ($row = fgetcsv($this->fileObject)) {
                if (strtolower($row[$columnNumber]) == strtolower($columnValue)) {
                    $this->allData[] = $row;
                }
            }
        }
        return $this->allData;
    }

    public function fetchByComparingColumnsEachValue($columnNumber, $columnValue) {
        if (is_resource($this->fileObject)) {
            while ($row = fgetcsv($this->fileObject)) {
                $CSVColumnData = explode(";", $row[$columnNumber]);
                foreach ($CSVColumnData as $CSVColumnDataEach) {
                    if (strtolower($CSVColumnDataEach) == strtolower($columnValue)) {
                        $this->allData[] = $row;
                    }
                }
            }
        }
        return $this->allData;
    }

    public function __destruct() {
        if (is_resource($this->fileObject)) {
            fclose($this->fileObject);
        }
    }

}
