<?php

/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 21/06/2018
 * Time: 12:38 PM
 */
class Conexion
{
    static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=uoca_bd",
            "root",
            "",
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        return $link;
    }
}