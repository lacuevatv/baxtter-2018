<?php 
/*
 * Sitio web: BAXTTER
 * @LaCueva.tv
 * Since 3.0
 * FUNCTIONS
 * 
*/

require_once 'config.php';
require_once 'functions.php';
require_once 'lib/mobile-detect/Mobile_Detect.php';
require("lib/class.phpmailer.php");
require("lib/class.smtp.php");

//chequea si es peticion de ajax y ejecuta la funcion
if( isAjax() ) {
	$function = isset($_POST['function']) ? $_POST['function'] : '';

	switch ( $function ) {
		case 'formulario-reunion':
			
			// Valores enviados desde el formulario
			$escuela   = isset( $_POST['name-school'] ) ? $_POST['name-school'] : '';
			$alumnos   = isset( $_POST['alumnos'] ) ? $_POST['alumnos'] : '';
			$cargo     = isset( $_POST['charge'] ) ? $_POST['charge'] : '';
			$email     = isset( $_POST['email'] ) ? $_POST['email'] : '';
			$yearTrip  = isset( $_POST['yearTrip'] ) ? $_POST['yearTrip'] : '';
			$name      = isset( $_POST['name'] ) ? $_POST['name'] : '';
			$tel       = isset( $_POST['tel'] ) ? $_POST['tel'] : '';
			
			$mensaje = 'Escuela: ' .$escuela. '<br> Cantidad de Alumnos: ' .$alumnos. '<br> Año de viaje: ' .$yearTrip. '<br> Alumno/padre/otro: ' .$cargo. '<br> Nombre: '. $name . '<br> Teléfono: '. $tel . '<br> Email: '. $email . '<br>';

			//FUNCION QUE ENVIA FORMULARIO CON PHPMAILER			
			//enviarFormulario( EMAILFORMULARIO , 'Pedido de Reunión Nuevo', $mensaje, $nombre, $email);

		break;

		case 'formulario-default':
			
			// Valores enviados desde el formulario
			$email     = isset( $_POST['email'] ) ? $_POST['email'] : '';
			$yearTrip  = isset( $_POST['yearTrip'] ) ? $_POST['yearTrip'] : '';
			$name      = isset( $_POST['name'] ) ? $_POST['name'] : '';
			$tel       = isset( $_POST['tel'] ) ? $_POST['tel'] : '';

			$mensaje = 'Nombre: '. $nombre . '<br> Teléfono: '. $telephone . '<br> Email: '. $email . '<br> Año de Viaje: ' . $yearTrip .'<br>';

			//FUNCION QUE ENVIA FORMULARIO CON PHPMAILER			
			//enviarFormulario( EMAILFORMULARIO , 'Mensaje desde la página', $mensaje, $nombre, $email);

		break;


		
	}

	
//sino es peticion ajax se cancela
} else{
    throw new Exception("Error Processing Request", 1);   
}

function enviarFormulario( $emailDestino , $asunto, $mensaje, $nombre, $email) {
	// Datos de la cuenta de correo utilizada para enviar vía SMTP
			$smtpHost = '';  // Dominio alternativo brindado en el email de alta 
			$smtpUsuario = '';  // Mi cuenta de correo
			$smtpClave = '';  // Mi contraseña

			$mail = new PHPMailer();
			/*$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->Port = 587; */
			$mail->IsHTML(true); 
			$mail->CharSet = 'utf-8';

			/*$mail->Host = $smtpHost; 
			$mail->Username = $smtpUsuario; 
			$mail->Password = $smtpClave;*/

			$mail->From = $smtpUsuario; // Email desde donde envío el correo.
			$mail->FromName = $nombre;
			$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
			$mail->AddReplyTo($email); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
			$mail->Subject = $asunto; // Este es el titulo del email.
			$mensajeHtml = nl2br($mensaje);
			$mail->Body = "{$mensajeHtml} <br><br>Formulario enviado desde la página web Baxtter.tur.ar<br />"; // Texto del email en formato HTML
			$mail->AltBody = "{$mensaje} \n\n Formulario enviado desde la página web Baxtter.tur.ar"; // Texto sin formato HTML
			// FIN - VALORES A MODIFICAR //

			$mail->SMTPOptions = array(
			    'ssl' => array(
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    )
			);

			$estadoEnvio = $mail->Send(); 
			if($estadoEnvio){
			    echo "El correo fue enviado correctamente.";
			} else {
			    echo "Ocurrió un error inesperado.";
			}
}
