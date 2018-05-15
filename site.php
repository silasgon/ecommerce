<?php
/**
 * Created by PhpStorm.
 * User: silas.goncalves
 * Date: 15/05/2018
 * Time: 09:57
 */

use \Hcode\Page;

$app->get('/', function() {

    $page = new Page();

    $page->setTpl("index");

});