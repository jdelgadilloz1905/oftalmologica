<?php

/**
 * Created by PhpStorm.
 * User: COOR.SISTEMAS
 * Date: 08/10/2018
 * Time: 11:59 AM
 */
class ControladorEmail
{
    static public function ctrEnvioEmail(){

        //if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["first_name"])){
            // Get the form fields and remove MORALspace.

            $name = strip_tags(trim($_POST["first_name"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);

            $cedula = strip_tags(trim($_POST["cedula"]));
            $cedula = str_replace(array("\r","\n"),array(" "," "),$cedula);

            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

            $phone = strip_tags(trim($_POST["phone"]));
            $phone = str_replace(array("\r","\n"),array(" "," "),$phone);

            $message = trim($_POST["mensaje"]);

            // Check that data was sent to the mailer.
            if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Set a 400 (bad request) response code and exit.
                //http_response_code(400);
                echo '<script>

							swal({
								  title: "¡ERROR!",
								  text: "Por favor complete el formulario y vuelva a intentarlo.",
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

                exit;
            }

            // Set the recipient email address.

            $recipient = "informacion@oftalmologica.com";

            // Set the email subject.
            $subject = "New contact from $name";

            // Build the email content.
            $email_content = "Nombre: $name\n";
            $email_content .= "Cedula: $cedula\n\n";
            $email_content .= "Telefono: $phone\n\n";
            $email_content .= "Email: $email\n\n";
            $email_content .= "Mensaje:\n$message\n";

            // Build the email headers.
            $email_headers = "From: $name <$email>";

            // Send the email.
            if (mail($recipient, $subject, $email_content, $email_headers)) {
                // Set a 200 (okay) response code.
                //http_response_code(200);
//                echo "¡Gracias! Tu mensaje ha sido enviado.";

                echo '<script>

							swal({
								  title: "¡OK!",
								  text: "¡Gracias por contactarnos Sr(a). ' . $name . ', nos comunicaremos con usted para programar su próxima cita!",
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
            } else {
                // Set a 500 (internal server error) response code.
                //http_response_code(500);

                echo '<script>

							swal({
								  title: "¡ERROR!",
								  text: "¡Ups! Algo salió mal y no pudimos enviar tu mensaje!",
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

        }
    }
}