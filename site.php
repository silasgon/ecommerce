<?php
/**
 * Created by PhpStorm.
 * User: silas.goncalves
 * Date: 15/05/2018
 * Time: 09:57
 */

use \Hcode\Page;
use \Hcode\Model\Product;

$app->get('/', function() {

    $products = Product::listAll();

    $page = new Page();

    $page->setTpl("index",[
        'products'=>Product::checkList($products)
    ]);

});