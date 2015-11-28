<?php

/*
 * All the classes which resists inside Library Store folder is customer library class,
 *  which is used for application requirments only.
 */

/**
 * DataRendrer class used for displaying data beautifuly.
 *
 * @author Manish Gour
 */
class Store_Library_DataRendrer {

    public function displayData($allData) {
        /*
         * @return void
         * it display below format.
         *  
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
        if (!empty($allData)) {
            foreach ($allData as $value) {
                print $value[0] . " " . $value[1] . " " . $value[2] . "\n";
                $category = explode(";", $value[3]);
                if (!empty($category)) {
                    foreach ($category as $eachCategory) {
                        if ($eachCategory != "")
                            print " - " . $eachCategory . "\n";
                    }
                }
                print "\n";
            }
        } else {
            print "No results found.\n";
        }
        print "\n";
    }

}
