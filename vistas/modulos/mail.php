<?php
// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove MORALspace.
    var_dump($_POST);
    $name = strip_tags(trim($_POST["first_name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);

    $cedula = strip_tags(trim($_POST["first_name"]));
    $cedula = str_replace(array("\r","\n"),array(" "," "),$cedula);

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    $phone = strip_tags(trim($_POST["phone"]));
    $phone = str_replace(array("\r","\n"),array(" "," "),$phone);

    $message = trim($_POST["mensaje"]);

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Por favor complete el formulario y vuelva a intentarlo.";
        exit;
    }

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = "informacion@oftalmologica.com";

    // Set the email subject.
    $subject = "Nuevo Paciente from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

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
        echo "Ups! Algo salió mal y no pudimos enviar tu mensaje.";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "Hubo un problema con su envío, por favor intente de nuevo.";
}

?>
