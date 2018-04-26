<?php
/**
 * Created by PhpStorm.
 * User: silas.goncalves
 * Date: 26/04/2018
 * Time: 10:19
 */

namespace Hcode;

class PageAdmin extends Page{

    public function __construct($opts = array(), $tpl_dir = "/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }

}