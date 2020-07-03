<?php

/**
 * Created by PhpStorm.
 * User: jdelgadillo
 * Date: 29/10/2018
 * Time: 09:51 AM
 */


class ControladorSms
{
    /*=============================================
	ENVIO DE SMS
	=============================================*/

    static public function ctrEnvioSms(){

        if(isset($_FILES["archivosms"])){
            set_time_limit(600);
            $SMS = new CentauroSMS('970291557308946', 'BsMkSbSZoTedyzjNpZvN');

            $fileName = $_FILES["archivosms"]["name"];
            $pathw = "extensiones/uploads/";
            $path = $pathw . basename( $_FILES['archivosms']['name']);
            if(move_uploaded_file($_FILES['archivosms']['tmp_name'], $path)) {
                //REALIZO LA INSERCION DE TODOS LOS REGISTROS

                $fp = fopen($pathw.$fileName, "r");
                $cont=1;
                while (!feof($fp)){

                    $linea = fgets($fp);
                    $porc = explode("#",$linea);
                    //echo $porc[0];
                    //echo $porc[1];
                    $destinatario = array("id" => "0","cel" => trim($porc[0]),"nom" => trim($porc[0]),"msg" => trim($porc[1]));

                    $js = json_encode($destinatario);
                    $result = $SMS->set_sms_send_personalizado($js); // Comando para enviar SMS Personalizados

                    //echo json_encode($result);
                    echo '<script>console.log('.trim($porc[0]).')</script>';
                    $cont=$cont+1;
                }

                fclose($fp);

                if($result["status"]=="200"){
                    echo '<script>

							swal({
								  title: "¡OK!",
								  text: "¡Excelente se ha enviado un total de '.$cont.'",
								  type:"success",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								},

								function(isConfirm){

									if(isConfirm){
										history.back();
									}
							});

						</script>';
                }elseif($result["status"]=="305"){
                    echo '<script>

							swal({
								  title: "¡ERROR!",
								  text: "No tiene SMS disponibles para realizar este envio",
								  type:"error",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								},

								function(isConfirm){

									if(isConfirm){
										history.back();
									}
							});

						</script>';
                }else{
                    echo '<script>

							swal({
								  title: "¡ERROR!",
								  text: "ha ocurrido un error al enviar los SMS, por favor comuniquese con el departamentod de Sistemas.",
								  type:"error",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								},

								function(isConfirm){

									if(isConfirm){
										history.back();
									}
							});

						</script>';
                }

                //PROCESO A REALIZAR LA LECTURA DE LOS REGISTROS INSERTADOS
                //me sirve para hacer el envio desde la base de datos
               // $respuesta = ModeloSms::mdlGetMensajesHoy();


//                foreach($respuesta as $key => $value){
//
////                    $destinatarios =array(
////                        "id"=>$i,
////                        "cel"=>$value["celular"],
////                        "nom"=>$value["celular"],
////                        "msg"=>$value["mensaje"]
////
////                    );
////                    $i=$i+1;
//
//                    $destinatario = array("id" => "0","cel" => trim($value["celular"]),"nom" => trim($value["celular"]),"msg" => trim($value["mensaje"]));
//
//                    $js = json_encode($destinatario);
//                    $result = $SMS->set_sms_send_personalizado($js); // Comando para enviar SMS Personalizados
//                    echo json_encode($result);
//
//                }
            }else{
                echo '<script>

							swal({
								  title: "¡ERROR!",
								  text: "Se ha producido un error al cargar el archivo. ¡Inténtalo de nuevo!",
								  type:"error",
								  confirmButtonText: "Cerrar",
								  closeOnConfirm: false
								},

								function(isConfirm){

									if(isConfirm){
										history.back();
									}
							});

						</script>';

            }


        }else{



        }

    }


}
