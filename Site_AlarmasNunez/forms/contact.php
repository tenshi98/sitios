<?php
	/********************************************************/
	//Definicion de errores
	$errorn = 0;
	//se definen los errores
	if(!isset($_POST['De_correo']) OR $_POST['De_correo']==''){         $errorn++;$error = 'No ha ingresado el correo origen';}
	if(!isset($_POST['De_nombre']) OR $_POST['De_nombre']==''){         $errorn++;$error = 'No ha ingresado el nombre origen';}
	if(!isset($_POST['Asunto']) OR $_POST['Asunto']==''){               $errorn++;$error = 'No ha ingresado el Asunto';}
	if(!isset($_POST['CuerpoHTML']) OR $_POST['CuerpoHTML']==''){       $errorn++;$error = 'No ha ingresado el mensaje';}
	/********************************************************/
	//Ejecucion si no hay errores
	if($errorn==0){
		//variables
		$De_correo         = $_POST['De_correo'];
		$De_nombre         = $_POST['De_nombre'];
		$Asunto            = $arrBody['Contact']['recep_asunto'];
		$Asunto           .= $_POST['Asunto'];
		$CuerpoHTML        = $_POST['CuerpoHTML'];
		$Hacia_correo      = $arrBody['Contact']['recep_mail'];
		$Hacia_nombre      = $arrBody['Contact']['recep_name'];
		$SMTP_mailUsername = '';
		$SMTP_mailPassword = '';

		//Se cargan archivos para el envio de correos
		require_once '../../LIBS_php/PHPMailer/src/PHPMailer.php';
		require_once '../../LIBS_php/PHPMailer/src/SMTP.php';
		require_once '../../LIBS_php/PHPMailer/src/Exception.php';
		
		//Instanciacion
		$mail = new PHPMailer\PHPMailer\PHPMailer(true);
				
		try {
			
			/*//Tell PHPMailer to use SMTP
			$mail->isSMTP();
			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 0;
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			//Set the hostname of the mail server
			$mail->Host = 'smtp.gmail.com';
			// use
			// $mail->Host = gethostbyname('smtp.gmail.com');
			// if your network does not support SMTP over IPv6
			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 587;
			//Set the encryption system to use -> ssl
			$mail->SMTPSecure = 'tls';
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			//Username to use for SMTP authentication - use full email address for gmail
			$mail->Username = $SMTP_mailUsername;
			//Password to use for SMTP authentication
			$mail->Password = $SMTP_mailPassword;*/
			
			//Datos de envio
			$mail->setFrom($De_correo, $De_nombre);           //Quien envia el correo
			$mail->addAddress($Hacia_correo, $Hacia_nombre);  //Destinatario
			$mail->addReplyTo($De_correo, $De_nombre);        //A quien responder el correo
				
			//Cuerpo del mensaje
			$mail->isHTML(true);           //Se setea para enviar html
			$mail->Subject = $Asunto;      //Asunto
			$mail->Body    = $CuerpoHTML;  //Cuerpo HTML
			
			//envio del correo
			$mail->send();
			
			//echo 'Mensaje enviado correctamente';
			
		} catch (Exception $e) {
			echo $mail->ErrorInfo;
		}
	}else{
		echo $error;
	}

?>
