<?php

/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 21/06/2018
 * Time: 12:33 PM
 */
class ControladorEstudio
{
    static public function strMostrarEstudios(){

        $table = "estudio";

        $respuesta = ModeloEstudio::mdlMostrarRegistros($table);

        return $respuesta;

    }

    static public function strMostrarDetalleEstudios(){

        $table = "detalle_estudios";
        $table1 = "estudio";
        $respuesta = ModeloEstudio::mdlMostrarDetalleEstudios($table,$table1);

        return $respuesta;

    }

    static public function strDoctores(){

        $table ="doctores";

        $respuesta = ModeloEstudio::mdlMostrarRegistrosDoctores($table);

        return $respuesta;

    }
}