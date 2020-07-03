<?php
/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 11/12/2018
 * Time: 04:09 PM
 */

require_once "../modelos/ModeloSuscribe.php";

class ajaxSuscribe{

    public $email;

    public function ajaxInsertarEmail(){

        $respuesta = ModeloSuscribe::mdlInsertarEmail("suscribe",$this->email);

        echo $respuesta;
    }

}

if(isset($_POST["email"])){

    $reg = new ajaxSuscribe();
    $reg->email = $_POST["email"];
    $reg->ajaxInsertarEmail();
}