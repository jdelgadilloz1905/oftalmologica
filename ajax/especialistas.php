<?php
/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 11/07/2018
 * Time: 12:26 PM
 */
require_once "../modelos/Rutas.php";
require_once "../modelos/ModeloEstudio.php";

$url = Rutas::ctrRutas();

$doctores = new ModeloEstudio();

$table ="doctores";
$respuesta = $doctores->mdlMostrarRegistros($table);

//Vamos a declarar un array
$data= Array();

foreach($respuesta as $key => $value){

//    $data[]=array(
//        "0"=>' <button class="btn btn-primary" onclick="citaonline('.$value["id"].')"><i class="fa fa-check"></i>Reserve su cita</button>',
//        "1"=>"<img src='".$url."img/".$value["folder"]."/".$value["image"]."' height='75px' width='75px' >",
//        "2"=>$value["nombre"],
//        "3"=>$value["descripcion"],
//        "4"=>$value["turno"]
//
//    );
    $data[]=array(
        "0"=>$value["nombre"],
        "1"=>$value["descripcion"],
        "2"=>$value["turno"],
        "3"=>' <button class="btn btn-primary btn-sm modalMessage"><i class="fa fa-check"></i>Reserve su cita</button>'

    );

}
$results = array(
    "sEcho"=>1, //Información para el datatables
    "iTotalRecords"=>count($data), //enviamos el total registros al datatable
    "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
    "aaData"=>$data);
echo json_encode($results);


