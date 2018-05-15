<?php
/**
 * Created by PhpStorm.
 * User: silas.goncalves
 * Date: 26/04/2018
 * Time: 11:22
 */

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;


class Product extends Model{

    public static function listAll(){

        $sql = new Sql();

       return $sql->select("SELECT * FROM tb_products ORDER BY desproduct");
    }

    public function save(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_products_save(:idproduct, :desproduct, :vlprice, :vlwidth, :vlheight, :vllength, :vlweight, :desurl)", array(
                ":idproduct"=>$this->getidproduct(),
                ":desproduct"=>$this->getdesproduct(),
                ":vlprice"=>$this->getvlprice(),
                ":vlwidth"=>$this->getvlwidth(),
                ":vlheight"=>$this->getvlheight(),
                ":vllength"=>$this->getvllength(),
                ":vlweight"=>$this->getvlweight(),
                ":desurl"=>$this->getdesurl()
        ));

        $this->setData($results[0]);
    }

    public function get($idproduct){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_product WHERE idproduct = :idproduct", [
            ':idproduct'=>$idproduct
        ]);

        $this->setData($results[0]);
    }

    public function delete(){

        $sql = new Sql();

        $sql->select("DELETE FROM tb_categories WHERE idproduct = :idproduct", [
            ':idproduct'=>$this->getidproduct()
        ]);

    }

}