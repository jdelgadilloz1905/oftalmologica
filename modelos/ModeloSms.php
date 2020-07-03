<?php

/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 29/10/2018
 * Time: 03:39 PM
 */
class ModeloSms
{
    static public function mdlGetMensajesHoy(){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM sms");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }
}