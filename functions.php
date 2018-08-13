<?php
/**
 * Created by PhpStorm.
 * User: silas.goncalves
 * Date: 19/05/2018
 * Time: 13:00
 */
use \Hcode\Model\User;

function formatPrice($vlprice){

    return number_format($vlprice, 2, ",", ".");
}

function checkLogin($inadmin = true)
{
    return User::checkLogin($inadmin);
}