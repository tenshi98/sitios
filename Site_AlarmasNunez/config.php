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
$arrHeader['Site']['Name']               = 'Alarmas N????ez';
$arrHeader['Site']['HtmlName']           = 'Alarmas<span> N????ez</span>';
$arrHeader['Site']['LinkName']           = '&copy; Alarmas <a href="">N????ez</a>';
$arrHeader['Site']['description']        = '';
$arrHeader['Site']['keywords']           = '';
$arrHeader['Site']['whatsapp_number']    = '56995390608';
$arrHeader['Site']['whatsapp_tittle']    = 'Quiero recibir informaci??n sobre';
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
$arrBody['slider']['titulo']    = 'Alarmas N????ez';
$arrBody['slider']['subtitulo'] = 'Instalaci??n de sistemas de vigilancia y alarmas en todo Chile';
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
$arrBody['Acerca']['CompromisoCuerpo'] = 'Somos <strong>Alarmas N????ez</strong>, una empresa dedicada a la <strong>instalaci??n y mantenci??n de sistemas de seguridad</strong>.<br/>Nuestro <strong>sistema de vigilancia</strong> funciona las 24 horas del d??a, los 365 d??as del a??o, contra robos, ingresos no autorizados a su propiedad, incendios, asaltos, cortes de energ??a y emergencias m??dicas.<br/>Somos especialistas en la instalaci??n y mantenci??n de <strong>alarmas de intrusi??n</strong>, para su propiedad, local comercial o domicilio.<br/>Contamos con m??s de 30 a??os de experiencia en el rubro. Cuente con nuestros servicios de seguridad profesional <strong>EN TODO CHILE</strong>.';
$arrBody['AcercaFlex'][0]['total']     = 4;
$arrBody['AcercaFlex'][1]['titulo']    = 'Servicio Integral';
$arrBody['AcercaFlex'][1]['icon']      = 'icofont-document-folder';
$arrBody['AcercaFlex'][1]['cuerpo']    = 'Deje en nuestras manos todas sus necesidades inform??ticas, tenemos una soluci??n total para usted.';
$arrBody['AcercaFlex'][2]['titulo']    = 'Nuestros Clientes';
$arrBody['AcercaFlex'][2]['icon']      = 'icofont-users-alt-5';
$arrBody['AcercaFlex'][2]['cuerpo']    = 'Nos esforzamos para entregar una atenci??n r??pida y personalizada, otorgando soluciones concretas.';
$arrBody['AcercaFlex'][3]['titulo']    = 'Asesor??as Especializadas';
$arrBody['AcercaFlex'][3]['icon']      = 'icofont-live-support';
$arrBody['AcercaFlex'][3]['cuerpo']    = 'No deje su informaci??n o la de su empresa a cualquiera. Tenemos m??s de 10 a??os de experiencia.';
$arrBody['AcercaFlex'][4]['titulo']    = 'Mayor Ahorro';
$arrBody['AcercaFlex'][4]['icon']      = 'icofont-simple-smile';
$arrBody['AcercaFlex'][4]['cuerpo']    = 'Trabajamos para entregar soluciones inform??ticas a su medida. No pague por lo que no necesita.';
//Servicios
$arrBody['Servicios']['Titulo']         = 'Servicios';
$arrBody['Servicios']['Cuerpo_1']         = 'En Alarmas N????ez instalamos y realizamos mantenci??n de todo tipo de alarmas:';
$arrBody['Servicios']['Cuerpo_2']         = 'En Alarmas N????ez ofrecemos servicios enfocados a la correcta instalaci??n y mantenci??n de sistemas de seguridad:';
$arrBody['ServiciosFlex_1'][0]['total']   = 4;
$arrBody['ServiciosFlex_1'][1]['titulo']  = 'Alarmas de intrusi??n';
$arrBody['ServiciosFlex_1'][1]['icon']    = 'icofont-alarm';
$arrBody['ServiciosFlex_1'][1]['cuerpo']  = 'Sistemas que detectan la intrusi??n de personas en sus recintos comerciales o domicilios particulares.';
$arrBody['ServiciosFlex_1'][2]['titulo']  = 'Alarmas de alerta de incendios';
$arrBody['ServiciosFlex_1'][2]['icon']    = 'icofont-fire-burn';
$arrBody['ServiciosFlex_1'][2]['cuerpo']  = 'Ideales para detectar se??ales de humo y cambios de temperatura, de esta manera se pueden advertir posibles factores de riesgo de ignici??n en su propiedad.';
$arrBody['ServiciosFlex_1'][3]['titulo']  = 'Alarmas perimetrales';
$arrBody['ServiciosFlex_1'][3]['icon']    = 'icofont-ssl-security';
$arrBody['ServiciosFlex_1'][3]['cuerpo']  = 'Se trata de circuitos el??ctricos que permiten advertir el ingreso de personas a un ??rea espec??fica, y que est??n coordinados con un sistema de sirenas.';
$arrBody['ServiciosFlex_1'][4]['titulo']  = 'Alarmas para empresas';
$arrBody['ServiciosFlex_1'][4]['icon']    = 'icofont-industries-5';
$arrBody['ServiciosFlex_1'][4]['cuerpo']  = 'Ideales para detectar cualquier anomal??a monitoreada en su propiedad.';

$arrBody['ServiciosFlex_2'][0]['total']   = 4;
$arrBody['ServiciosFlex_2'][1]['titulo']  = 'C??maras de seguridad';
$arrBody['ServiciosFlex_2'][1]['icon']    = 'icofont-video';
$arrBody['ServiciosFlex_2'][1]['cuerpo']  = 'Los KIT???s de CCTV permiten el monitoreo en tiempo real de y grabaci??n de lo que ocurre en su casa u oficina, mediante la conexi??n a un monitor y a traves de internet.';
$arrBody['ServiciosFlex_2'][2]['titulo']  = 'Sistemas antirrobos';
$arrBody['ServiciosFlex_2'][2]['icon']    = 'icofont-thief-alt';
$arrBody['ServiciosFlex_2'][2]['cuerpo']  = '';
$arrBody['ServiciosFlex_2'][3]['titulo']  = 'Cercos el??ctricos';
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
$arrBody['Contact']['DireccionCalle']    = 'Nu??oa';
$arrBody['Contact']['MailTitulo']        = 'Nuestros Email';
$arrBody['Contact']['PhoneTitulo']       = 'Llamanos';
$arrBody['Contact']['whatsapp_tittle']   = 'Quiero recibir informaci??n sobre';
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
