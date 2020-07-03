<?php
/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 04/05/2018
 * Time: 04:13 PM
 */
require_once "controlador/ControladorPlantilla.php";
require_once "controlador/ControladorEstudio.php";
require_once "controlador/ControladorEmail.php";
require_once "controlador/ControladorSms.php";

require_once "modelos/Rutas.php";
require_once "modelos/ModeloEstudio.php";
require_once "modelos/ModeloSms.php";
require_once "modelos/ModeloSuscribe.php";

require_once "extensiones/centaurosms/lib/centaurosms.php";


$plantilla = new ControladorPlantilla();
$plantilla->plantilla();