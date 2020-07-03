<?php

/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 21/06/2018
 * Time: 12:34 PM
 */

require_once "Conexion.php";


class ModeloEstudio
{
    static public function mdlMostrarRegistros($table){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $table");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlMostrarDetalleEstudios($table,$table1){

        $stmt = Conexion::conectar()->prepare("SELECT $table.*,$table1.nombre FROM $table LEFT JOIN $table1 ON $table.id_estudio = $table1.id");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }

    static public function mdlMostrarRegistrosDoctores($table){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $table WHERE estatus = 0");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();

        $stmt = null;
    }




}