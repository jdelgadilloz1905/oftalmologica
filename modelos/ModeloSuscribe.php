<?php
/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 11/12/2018
 * Time: 04:11 PM
 */

require_once "Conexion.php";

class ModeloSuscribe{

    static public function mdlInsertarEmail($tabla,$email){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (email)
                                                VALUES (:email)");

        $stmt->bindParam(":email", $email, PDO::PARAM_STR);


        if($stmt->execute()){

            return "ok";

        }else{

            return "error";

        }

        $stmt->close();
        $stmt = null;

    }

}