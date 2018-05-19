<?php
/**
 * Created by PhpStorm.
 * User: silas.goncalves
 * Date: 19/05/2018
 * Time: 13:00
 */

function formatPrice($vlprice){

    return number_format($vlprice, 2, ",", ".");
}