<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'cli-application.php';

$handle = fopen("php://stdin", "r");
$dataFile = null;

while (1) {
    print "Command please, type [stop] when you're done.\n";

    @list($dataFile, $command, $value) = explode(" ", \trim(fgets($handle)));

    if (trim($dataFile) == 'stop')
        break;

    switch ($command) {
        case 'find-by-id':
            $productDAOObject = Application_Model_DAO_ProductDAOFactory::getProductDAO(Store_Library_Utility_CommonFunctions::dataSourceExtractor($dataFile));
            $product = new Application_Model_DTO_Product();
            $product->setProductId($value);
            $allData = $productDAOObject->findById($product);
            Store_Library_DataRendrerInstance::displayData($allData);
            break;
        case 'find-by-category':
            $productDAOObject = Application_Model_DAO_ProductDAOFactory::getProductDAO(Store_Library_Utility_CommonFunctions::dataSourceExtractor($dataFile));
            $product = new Application_Model_DTO_Product();
            $product->setCategory($value);
            $allData = $productDAOObject->findByCategory($product);
            Store_Library_DataRendrerInstance::displayData($allData);

            break;
        case 'find-all':
            $productDAOObject = Application_Model_DAO_ProductDAOFactory::getProductDAO(Store_Library_Utility_CommonFunctions::dataSourceExtractor($dataFile));
            $allData = $productDAOObject->findAll();
            Store_Library_DataRendrerInstance::displayData($allData);
            break;
        default:
            echo "Sorry Invalid Command! \n";
            break;
    }
}
exit;
