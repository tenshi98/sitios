<?php session_start();
/**********************************************************************************************************************************/
/*                                           Se define la variable de seguridad                                                   */
/**********************************************************************************************************************************/
define('XMBCXRXSKGC', 1);
/**********************************************************************************************************************************/
/*                                   Se filtran las entradas para evitar ataques                                                  */
/**********************************************************************************************************************************/
require_once '../LIBS_Seguridad/AntiXSS.php';
require_once '../LIBS_Seguridad/Bootup.php';
require_once '../LIBS_Seguridad/UTF8.php';
//Inicializo funcion
$security = new AntiXSS();
//Se limpian datos recibidos
$_POST = $security->xss_clean($_POST);
$_GET  = $security->xss_clean($_GET);
/**********************************************************************************************************************************/
/*                                          Se llaman a los archivos necesarios                                                   */
/**********************************************************************************************************************************/
require_once '../LIBS_Functions/Common.php';            //Funciones comunes
/*******************************************************************************************************************/
/*                                                      Sitio                                                      */
/*******************************************************************************************************************/
/********************************* Arrays *********************************/
$arrHeader = array();
$arrBody   = array();
/********************************* Header *********************************/
$arrHeader['Site']['Name']               = 'Alarmas Núñez';
$arrHeader['Site']['HtmlName']           = 'Alarmas<span> Núñez</span>';
$arrHeader['Site']['LinkName']           = '&copy; Alarmas <a href="">Núñez</a>';
$arrHeader['Site']['description']        = '';
$arrHeader['Site']['keywords']           = '';
$arrHeader['Site']['whatsapp_number']    = '56995390608';
$arrHeader['Site']['whatsapp_tittle']    = 'Quiero recibir información sobre';
$arrHeader['SiteSocial']['twitter']      = '#';
$arrHeader['SiteSocial']['facebook']     = '#';
$arrHeader['SiteSocial']['instagram']    = '#';
$arrHeader['SiteSocial']['google-plus']  = '#';
$arrHeader['SiteSocial']['linkedin']     = '#';
/********************************* Body *********************************/
//Menu
$arrHeader['Menu'][0]    = 4;
$arrHeader['Menu'][1]    = 'Inicio';
$arrHeader['Menu'][2]    = 'Acerca';
$arrHeader['Menu'][3]    = 'Servicios';
$arrHeader['Menu'][4]    = 'Contacto';
$arrHeader['Menuid'][1]  = 'header';
$arrHeader['Menuid'][2]  = 'about';
$arrHeader['Menuid'][3]  = 'services';
$arrHeader['Menuid'][4]  = 'contact';
//Slider
$arrBody['slider']['titulo']    = 'Alarmas Núñez';
$arrBody['slider']['subtitulo'] = 'Instalación de sistemas de vigilancia y alarmas en todo Chile';
//Tecnologias utilizadas
$arrBody['Tecnologies'][0]['total']   = 6;
$arrBody['Tecnologies'][1]['image']   = 'image-1.jpg';
$arrBody['Tecnologies'][2]['image']   = 'image-2.jpg';
$arrBody['Tecnologies'][3]['image']   = 'image-3.jpg';
$arrBody['Tecnologies'][4]['image']   = 'image-4.jpg';
$arrBody['Tecnologies'][5]['image']   = 'image-5.jpg';
$arrBody['Tecnologies'][6]['image']   = 'image-6.jpg';

$arrBody['Tecnologies'][1]['name']    = 'Alarma 1';
$arrBody['Tecnologies'][2]['name']    = 'Alarma 2';
$arrBody['Tecnologies'][3]['name']    = 'Alarma 3';
$arrBody['Tecnologies'][4]['name']    = 'Alarma 4';
$arrBody['Tecnologies'][5]['name']    = 'Alarma 5';
$arrBody['Tecnologies'][6]['name']    = 'Alarma 6';

//Acerca de 
$arrBody['Acerca']['CompromisoTitulo'] = 'Nuestro Compromiso';
$arrBody['Acerca']['CompromisoCuerpo'] = 'Somos <strong>Alarmas Núñez</strong>, una empresa dedicada a la <strong>instalación y mantención de sistemas de seguridad</strong>.<br/>Nuestro <strong>sistema de vigilancia</strong> funciona las 24 horas del día, los 365 días del año, contra robos, ingresos no autorizados a su propiedad, incendios, asaltos, cortes de energía y emergencias médicas.<br/>Somos especialistas en la instalación y mantención de <strong>alarmas de intrusión</strong>, para su propiedad, local comercial o domicilio.<br/>Contamos con más de 30 años de experiencia en el rubro. Cuente con nuestros servicios de seguridad profesional <strong>EN TODO CHILE</strong>.';
$arrBody['AcercaFlex'][0]['total']     = 4;
$arrBody['AcercaFlex'][1]['titulo']    = 'Servicio Integral';
$arrBody['AcercaFlex'][1]['icon']      = 'icofont-document-folder';
$arrBody['AcercaFlex'][1]['cuerpo']    = 'Deje en nuestras manos todas sus necesidades informáticas, tenemos una solución total para usted.';
$arrBody['AcercaFlex'][2]['titulo']    = 'Nuestros Clientes';
$arrBody['AcercaFlex'][2]['icon']      = 'icofont-users-alt-5';
$arrBody['AcercaFlex'][2]['cuerpo']    = 'Nos esforzamos para entregar una atención rápida y personalizada, otorgando soluciones concretas.';
$arrBody['AcercaFlex'][3]['titulo']    = 'Asesorías Especializadas';
$arrBody['AcercaFlex'][3]['icon']      = 'icofont-live-support';
$arrBody['AcercaFlex'][3]['cuerpo']    = 'No deje su información o la de su empresa a cualquiera. Tenemos más de 10 años de experiencia.';
$arrBody['AcercaFlex'][4]['titulo']    = 'Mayor Ahorro';
$arrBody['AcercaFlex'][4]['icon']      = 'icofont-simple-smile';
$arrBody['AcercaFlex'][4]['cuerpo']    = 'Trabajamos para entregar soluciones informáticas a su medida. No pague por lo que no necesita.';
//Servicios
$arrBody['Servicios']['Titulo']         = 'Servicios';
$arrBody['Servicios']['Cuerpo_1']         = 'En Alarmas Núñez instalamos y realizamos mantención de todo tipo de alarmas:';
$arrBody['Servicios']['Cuerpo_2']         = 'En Alarmas Núñez ofrecemos servicios enfocados a la correcta instalación y mantención de sistemas de seguridad:';
$arrBody['ServiciosFlex_1'][0]['total']   = 4;
$arrBody['ServiciosFlex_1'][1]['titulo']  = 'Alarmas de intrusión';
$arrBody['ServiciosFlex_1'][1]['icon']    = 'icofont-alarm';
$arrBody['ServiciosFlex_1'][1]['cuerpo']  = 'Sistemas que detectan la intrusión de personas en sus recintos comerciales o domicilios particulares.';
$arrBody['ServiciosFlex_1'][2]['titulo']  = 'Alarmas de alerta de incendios';
$arrBody['ServiciosFlex_1'][2]['icon']    = 'icofont-fire-burn';
$arrBody['ServiciosFlex_1'][2]['cuerpo']  = 'Ideales para detectar señales de humo y cambios de temperatura, de esta manera se pueden advertir posibles factores de riesgo de ignición en su propiedad.';
$arrBody['ServiciosFlex_1'][3]['titulo']  = 'Alarmas perimetrales';
$arrBody['ServiciosFlex_1'][3]['icon']    = 'icofont-ssl-security';
$arrBody['ServiciosFlex_1'][3]['cuerpo']  = 'Se trata de circuitos eléctricos que permiten advertir el ingreso de personas a un área específica, y que están coordinados con un sistema de sirenas.';
$arrBody['ServiciosFlex_1'][4]['titulo']  = 'Alarmas para empresas';
$arrBody['ServiciosFlex_1'][4]['icon']    = 'icofont-industries-5';
$arrBody['ServiciosFlex_1'][4]['cuerpo']  = 'Ideales para detectar cualquier anomalía monitoreada en su propiedad.';

$arrBody['ServiciosFlex_2'][0]['total']   = 4;
$arrBody['ServiciosFlex_2'][1]['titulo']  = 'Cámaras de seguridad';
$arrBody['ServiciosFlex_2'][1]['icon']    = 'icofont-video';
$arrBody['ServiciosFlex_2'][1]['cuerpo']  = 'Los KIT’s de CCTV permiten el monitoreo en tiempo real de y grabación de lo que ocurre en su casa u oficina, mediante la conexión a un monitor y a traves de internet.';
$arrBody['ServiciosFlex_2'][2]['titulo']  = 'Sistemas antirrobos';
$arrBody['ServiciosFlex_2'][2]['icon']    = 'icofont-thief-alt';
$arrBody['ServiciosFlex_2'][2]['cuerpo']  = '';
$arrBody['ServiciosFlex_2'][3]['titulo']  = 'Cercos eléctricos';
$arrBody['ServiciosFlex_2'][3]['icon']    = 'icofont-barricade';
$arrBody['ServiciosFlex_2'][3]['cuerpo']  = '';
$arrBody['ServiciosFlex_2'][4]['titulo']  = 'Sistemas de alerta de incendios';
$arrBody['ServiciosFlex_2'][4]['icon']    = 'icofont-fire-extinguisher-alt';
$arrBody['ServiciosFlex_2'][4]['cuerpo']  = '';

//contacto
$arrBody['Contact']['Titulo']            = 'Contacto';
$arrBody['Contact']['Cuerpo']            = 'Cuente con nuestros sistemas de alarmas y servicios de vigilancia.';
$arrBody['Contact']['DireccionTitulo']   = 'Nuestra Direccion';
$arrBody['Contact']['DireccionMapa']     = 'https://www.google.com/maps/place/Plaza+%C3%91u%C3%B1oa/@-33.456053,-70.5959445,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cfbf04ab4a7b:0x5a99e4565277755f!8m2!3d-33.456053!4d-70.5937558';
$arrBody['Contact']['DireccionCalle']    = 'Nuñoa';
$arrBody['Contact']['MailTitulo']        = 'Nuestros Email';
$arrBody['Contact']['PhoneTitulo']       = 'Llamanos';
$arrBody['Contact']['whatsapp_tittle']   = 'Quiero recibir información sobre';
$arrBody['Contact']['recep_asunto']      = 'Contacto Web: ';
$arrBody['Contact']['recep_mail']        = 'contacto@alarmasnunez.cl';
$arrBody['Contact']['recep_name']        = 'Contacto Web';

$arrBody['ContactMail'][0]['total']      = 2;
$arrBody['ContactMail'][1]['Mail']       = 'contacto@alarmasnunez.cl';
$arrBody['ContactMail'][2]['Mail']       = 'info@example.com';

$arrBody['ContactPhone'][0]['total']     = 3;
$arrBody['ContactPhone'][1]['Phone']     = '+56 2 2225 94 62';
$arrBody['ContactPhone'][2]['Phone']     = '+56 2 2225 64 27';
$arrBody['ContactPhone'][3]['Phone']     = '+56 9 9539 06 08';
$arrBody['ContactPhone'][1]['PhoneInt']  = '';
$arrBody['ContactPhone'][2]['PhoneInt']  = '';
$arrBody['ContactPhone'][3]['PhoneInt']  = '56995390608';

?>
