<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Manik
 */
interface Application_Model_DAO_ProductInterface {

    public function findById(Application_Model_DTO_Product $product);

    public function findAll();

    public function findByCategory(Application_Model_DTO_Product $product);
}
