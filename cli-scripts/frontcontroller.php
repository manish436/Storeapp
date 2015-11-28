<?php

/*
 * This file is used as a front controller for CLI application 
 * and open the template in the editor.
 * @author Manish Gour
 */

include_once 'cli-application.php';

$handle = fopen("php://stdin", "r");
$dataFile = null;

print "\n################################################ \n";
print "############ Welcome to the storeapp ###########\n";
print "################################################ \n";

// While used for ineractive commands to stop the execution we have used stop word.
while (1) {
    print "\nEnter your command please, type [stop] when you need to exit.\n";

    /*
     * Extracting argument from commandline
     */
    $argumentArray = explode(" ", \trim(fgets($handle)));
    $dataFile = null;
    $command = null;
    $value = null;


    if (!empty($argumentArray)) {
        if ($argumentArray < 2) {
            @list($dataFile, $command, $value) = explode(" ", \trim(fgets($handle)));
        } else {
            $dataFile = $argumentArray[0];
            $command = @$argumentArray[1];
            $value = null;
            for ($i = 2; $i < count($argumentArray); $i++) {
                $value .= $argumentArray[$i] . " ";
            }
            $value = trim($value);
        }
    }

    if (trim($dataFile) == 'stop')
        break;

    switch ($command) {
        case 'find-by-id':
            $productDAOObject = Application_Model_DAO_ProductDAOFactory::getProductDAO(Store_Library_Utility_CommonFunctions::dataSourceExtractor($dataFile), $dataFile);
            $product = new Application_Model_DTO_Product();
            $product->setProductId($value);
            $allData = $productDAOObject->findById($product);
            Store_Library_DataRendrerInstance::displayData($allData);
            break;

        case 'find-by-category':
            $productDAOObject = Application_Model_DAO_ProductDAOFactory::getProductDAO(Store_Library_Utility_CommonFunctions::dataSourceExtractor($dataFile), $dataFile);
            $product = new Application_Model_DTO_Product();
            $product->setCategory($value);
            $allData = $productDAOObject->findByCategory($product);
            Store_Library_DataRendrerInstance::displayData($allData);
            break;
        case 'find-all':
            $productDAOObject = Application_Model_DAO_ProductDAOFactory::getProductDAO(Store_Library_Utility_CommonFunctions::dataSourceExtractor($dataFile), $dataFile);
            $allData = $productDAOObject->findAll();
            Store_Library_DataRendrerInstance::displayData($allData);
            break;
        default:
            echo "Sorry Invalid Command! \n";
            break;
    }
}
exit;