<?php
/*******************************************************************************************************************/
/*                                              Bloque de seguridad                                                */
/*******************************************************************************************************************/
if( ! defined('XMBCXRXSKGC')) {
    die('No tienes acceso a esta carpeta o archivo.');
}
/*******************************************************************************************************************/
/*                                                                                                                 */
/*                                                  Funciones                                                      */
/*                                                                                                                 */
/*******************************************************************************************************************/
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Obtener Fecha Actual
* 
*===========================     Detalles    ===========================
* Permite obtener la fecha actual de chile
*===========================    Modo de uso  ===========================
* 	
* 	//se obtiene dato
* 	fecha_actual();
* 
*===========================    Parametros   ===========================
* @return  Date
************************************************************************/
//Funcion
function fecha_actual(){
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set('America/Santiago');
	//Imprimimos la fecha actual dandole un formato
	$fecha_actual = date("Y-m-d");
	return $fecha_actual; 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Obtener Hora Actual
* 
*===========================     Detalles    ===========================
* Permite obtener la hora actual de chile
*===========================    Modo de uso  ===========================
* 	
* 	//se obtiene dato
* 	hora_actual();
* 
*===========================    Parametros   ===========================
* @return  Time
************************************************************************/
//Funcion
function hora_actual(){
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set('America/Santiago');
	//Imprimimos la fecha actual dandole un formato
	$hora_actual = date("H:i:s");
	return $hora_actual; 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Obtener Hora Actual (alternativa)
* 
*===========================     Detalles    ===========================
* Permite obtener la hora actual de chile
*===========================    Modo de uso  ===========================
* 	
* 	//se obtiene dato
* 	hora_actual_val();
* 
*===========================    Parametros   ===========================
* @return  Time
************************************************************************/
//Funcion
function hora_actual_val(){
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set('America/Santiago');
	//Imprimimos la fecha actual dandole un formato
	$hora_actual = date("H-i-s");
	return $hora_actual; 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Obtener Dia Actual
* 
*===========================     Detalles    ===========================
* Permite obtener el dia actual de chile, de 1 a 31 sin ceros
*===========================    Modo de uso  ===========================
* 	
* 	//se obtiene dato
* 	dia_actual();
* 
*===========================    Parametros   ===========================
* @return  Integer
************************************************************************/
//Funcion
function dia_actual(){
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set('America/Santiago');
	//Imprimimos la fecha actual dandole un formato
	$dia_actual = date("j");
	return $dia_actual; 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Obtener Semana Actual
* 
*===========================     Detalles    ===========================
* Permite obtener la semana actual de chile
*===========================    Modo de uso  ===========================
* 	
* 	//se obtiene dato
* 	semana_actual();
* 
*===========================    Parametros   ===========================
* @return  Integer
************************************************************************/
//Funcion
function semana_actual(){
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set('America/Santiago');
	//Imprimimos la fecha actual dandole un formato
	$semana_actual = date("W");
	return $semana_actual; 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Obtener Mes Actual
* 
*===========================     Detalles    ===========================
* Permite obtener el mes actual de chile, de 1 a 12
*===========================    Modo de uso  ===========================
* 	
* 	//se obtiene dato
* 	mes_actual();
* 
*===========================    Parametros   ===========================
* @return  Integer
************************************************************************/
//Funcion
function mes_actual(){
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set('America/Santiago');
	//Imprimimos la fecha actual dandole un formato
	$mes_actual = date("n");
	return $mes_actual; 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Obtener Año Actual
* 
*===========================     Detalles    ===========================
* Permite obtener el año actual de chile
*===========================    Modo de uso  ===========================
* 	
* 	//se obtiene dato
* 	ano_actual();
* 
*===========================    Parametros   ===========================
* @return  Integer
************************************************************************/
//Funcion
function ano_actual(){
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set('America/Santiago');
	//Imprimimos la fecha actual dandole un formato
	$ano_actual = date("Y");
	return $ano_actual; 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Ver dias transcurridos entre fechas
* 
*===========================     Detalles    ===========================
* Permite ver el numero de los dias transcurridos entre dos fechas entregadas
*===========================    Modo de uso  ===========================
* 	
* 	//se ejecuta operacion
* 	dias_transcurridos('2019-01-02', '2019-02-02');
* 
*===========================    Parametros   ===========================
* Date     $fecha_i   Fecha de inicio 
* Date     $fecha_f   Fecha de termino
* @return  Integer
************************************************************************/
//Funcion
function dias_transcurridos($fecha_i,$fecha_f){
	//valido las fechas
	if(validaFecha($fecha_i)){
		if(validaFecha($fecha_f)){
			$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
			$dias 	= abs($dias); 
			$dias   = floor($dias);		
			
			return $dias;
		}else{
			return 'Fecha de termino no es una fecha';
		}
	}else{
		return 'Fecha de inicio no es una fecha';
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////
/***********************************************************************
* Validar Fecha
* 
*===========================     Detalles    ===========================
* Permite validar si el dato ingresado es una fecha, devuelve vacio 
* si esta incorrecto
*===========================    Modo de uso  ===========================
* 	
* 	//se valida dato
* 	validaFecha('1900-01-01', 'Y-m-d');
* 
*===========================    Parametros   ===========================
* Date     $date     Dato a validar
* String   $format   (Opcional) formato a validar
* @return  Bolean
************************************************************************/
//Funcion
function validaFecha($date, $format = 'Y-m-d'){
	if($date=='0000-00-00'){
		return 'Sin Fecha';
	}else{
		$d = DateTime::createFromFormat($format, $date);
		return $d && $d->format($format) == $date;
	}
}

?>
