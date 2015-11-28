<?php

/*
 * All the classes which resists inside Library Store folder is customer library class,
 *  which is used for application requirments only.
 */

/**
 * This is a core NL reader file and used to fetch data from NL file.
 *
 * @author Manish Gour
 */
class Store_Library_NL_Reader {

    private $fileObject = null;
    private $fileName = null;
    private $NLPath = APPLICATION_DATA_PATH . "/";

    public function __construct($fileName) {
        $this->fileName = $fileName;
        try {
            $this->fileObject = @fopen($this->NLPath . $this->fileName, "r");
        } catch (Exception $ex) {
            print "File Does Not Exists";
        }
    }

    public function fetchAllNLData() {
        return $this->_fetchArrayRowWise();
    }

    public function fetchByComparingColumn($columnNumber, $columnValue) {
        $allData = $this->_fetchArrayRowWise();
        $allDataResult = null;
        if (!empty($allData)) {
            foreach ($allData as $row) {
                if (strtolower($row[$columnNumber]) == strtolower($columnValue)) {
                    $allDataResult[] = $row;
                }
            }
        }
        return $allDataResult;
    }

    public function fetchByComparingColumnsEachValue($columnNumber, $columnValue) {
        $allData = $this->_fetchArrayRowWise();
        $allDataResult = null;
        if (!empty($allData)) {
            foreach ($allData as $row) {
                $NLColumnData = explode(";", $row[$columnNumber]);
                foreach ($NLColumnData as $NLColumnDataEach) {
                    if (strtolower($NLColumnDataEach) == strtolower($columnValue)) {
                        $allDataResult[] = $row;
                    }
                }
            }
        }

        return $allDataResult;
    }

    private function _fetchArrayRowWise() {
        $count = 1;
        $allData = null;
        if ($this->fileObject) {
            if (is_resource($this->fileObject)) {
                while (($line = fgets($this->fileObject)) !== false) {
                    $collectionArray[] = trim(preg_replace('/\s\s+/', ' ', $line));
                    if ($count % 4 == 0) {
                        $allData[] = $collectionArray;
                        $collectionArray = null;
                    }
                    $count++;
                }
            }
        }
        return $allData;
    }

    public function __destruct() {
        if (is_resource($this->fileObject)) {
            fclose($this->fileObject);
        }
    }

}
