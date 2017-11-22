<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

if ($ajax) {
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	session_start();
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	
	$nombre 	= filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
	$email 		= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$mensaje 	= filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);
	



date_default_timezone_set('Chile/Continental');

/*
	$wpdb->insert( 
		'wp_SMU2016_contacto', 
		array( 
			'conNom' 	=> $nombre,
			'conMail' 	=> $email,	
			'conMen'	=> $mensaje
		)
	);	
*/



// si quieren envío de mail automatico hay que descomentar
//lo siguiente y reemplazar la imagen del mail.

	
		$to 	 = 'contacto@agenciaforza.cl';
		$subject = 'Mensaje desde Formulario de Contacto Forza';
		$message = '<html><body>';
		$message .= '<p><strong>Nombre:</strong> '. $nombre .'</p>';
		$message .= '<p><strong>Mail:</strong> '. $email .'</p>';
		$message .= '<p><strong>Mensaje:</strong><br>';
		$message .=  $mensaje .'</p>';
		$message .= "</body></html>";
		$headers = array('Content-Type: text/html; charset=UTF-8');
		wp_mail( $to, $subject, $message, $headers );



	echo 'ok';

}else{
	echo 'error';
}
?>