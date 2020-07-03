<?php

class AjaxEmail{
    
    public $name;
    public $email;
    public $subject;
    public $message;
    
    public function ctrEnviarEmailContacto(){

        // Get the form fields and remove MORALspace.
        $name = strip_tags(trim($this->name));
        $email = filter_var(trim($this->email), FILTER_SANITIZE_EMAIL);
        $subject = strip_tags(trim($this->subject));
        $subject = str_replace(array("\r","\n"),array(" "," "),$subject);
        $message = trim($this->message);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Por favor complete el formulario y vuelva a intentarlo.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "jdelgadilloz1905@gmail.com";

        // Build the email content.
        $email_content = "Nombre: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Asunto: $subject\n\n";
        $email_content .= "Mensaje:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Tu mensaje ha sido enviado.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "¡Uy! Algo salió mal y no pudimos enviar tu mensaje.";
        }

    }

}


if(isset($_POST["name"])){
    
    $enviarEmail = new AjaxEmail();
    $enviarEmail->name = $_POST["name"];
    $enviarEmail->email = $_POST["email"];
    $enviarEmail->subject = $_POST["subject"];
    $enviarEmail->message = $_POST["message"];
    $enviarEmail->ctrEnviarEmailContacto();
}

