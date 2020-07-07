<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/07/2020
 * Time: 12:23
 */

require_once "../modelos/Rutas.php";
require_once "../modelos/ModeloSuscribe.php";

$url = Rutas::ctrRutas();

$suscribe = new ModeloSuscribe();

$table ="suscribe";
$respuesta = $suscribe->mdlMostrarRegistrosSuscriptores($table);

//Vamos a declarar un array
$data= Array();

foreach($respuesta as $key => $value){

    $data[]=array(
        "0"=>$value["id"],
        "1"=>$value["email"],
        "2"=>$value["fecha_creacion"]
    );

}
$results = array(
    "sEcho"=>1, //Información para el datatables
    "iTotalRecords"=>count($data), //enviamos el total registros al datatable
    "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
    "aaData"=>$data);
echo json_encode($results);

