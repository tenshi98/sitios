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
$arrHeader['Site']['Name']         = 'Digital Creations';
$arrHeader['Site']['HtmlName']     = 'Digital<span> Creations</span>';
$arrHeader['Site']['description']  = '';
$arrHeader['Site']['keywords']     = '';
/********************************* Body *********************************/
//Menu
$arrHeader['Menu'][0]    = 6;
$arrHeader['Menu'][1]    = 'Inicio';
$arrHeader['Menu'][2]    = 'Acerca';
$arrHeader['Menu'][3]    = 'Servicios';
$arrHeader['Menu'][4]    = 'Portafolio';
$arrHeader['Menu'][5]    = 'Precios';
$arrHeader['Menu'][6]    = 'Contacto';
$arrHeader['Menuid'][1]  = 'header';
$arrHeader['Menuid'][2]  = 'about';
$arrHeader['Menuid'][3]  = 'services';
$arrHeader['Menuid'][4]  = 'portfolio';
$arrHeader['Menuid'][5]  = 'pricing';
$arrHeader['Menuid'][6]  = 'contact';
//Slider
$arrBody['slider']['titulo']    = 'Software personalizado';
$arrBody['slider']['subtitulo'] = 'Desarrollamos aplicaciones adaptadas a tus necesidades';
//Tecnologias utilizadas
$arrBody['Tecnologies'][0]['total']   = 23;
$arrBody['Tecnologies'][1]['image']   = 'sql-server.png';
$arrBody['Tecnologies'][2]['image']   = 'oracle.png';
$arrBody['Tecnologies'][3]['image']   = 'mysql.png';
$arrBody['Tecnologies'][4]['image']   = 'mariadb.png';
$arrBody['Tecnologies'][5]['image']   = 'postgre-sql.png';
$arrBody['Tecnologies'][6]['image']   = 'mongodb.png';
$arrBody['Tecnologies'][7]['image']   = 'html5.png';
$arrBody['Tecnologies'][8]['image']   = 'css3.png';
$arrBody['Tecnologies'][9]['image']   = 'sass.png';
$arrBody['Tecnologies'][10]['image']  = 'php.png';
$arrBody['Tecnologies'][11]['image']  = 'ruby.png';
$arrBody['Tecnologies'][12]['image']  = 'rgss.png';
$arrBody['Tecnologies'][13]['image']  = 'sap.png';
$arrBody['Tecnologies'][14]['image']  = 'asp.png';
$arrBody['Tecnologies'][15]['image']  = 'dotnet.png';
$arrBody['Tecnologies'][16]['image']  = 'visual-basic.png';
$arrBody['Tecnologies'][17]['image']  = 'cpp.png';
$arrBody['Tecnologies'][18]['image']  = 'csharp.png';
$arrBody['Tecnologies'][19]['image']  = 'json.png';
$arrBody['Tecnologies'][20]['image']  = 'jquery.png';
$arrBody['Tecnologies'][21]['image']  = 'javascript.png';
$arrBody['Tecnologies'][22]['image']  = 'ajax.png';
$arrBody['Tecnologies'][23]['image']  = 'Java.png';
$arrBody['Tecnologies'][1]['name']    = 'SQL Server';
$arrBody['Tecnologies'][2]['name']    = 'Oracle';
$arrBody['Tecnologies'][3]['name']    = 'MySQL';
$arrBody['Tecnologies'][4]['name']    = 'Maria DB';
$arrBody['Tecnologies'][5]['name']    = 'Postgre SQL';
$arrBody['Tecnologies'][6]['name']    = 'MongoDB';
$arrBody['Tecnologies'][7]['name']    = 'HTML5';
$arrBody['Tecnologies'][8]['name']    = 'CSS3';
$arrBody['Tecnologies'][9]['name']    = 'Sass';
$arrBody['Tecnologies'][10]['name']   = 'PHP';
$arrBody['Tecnologies'][11]['name']   = 'Ruby';
$arrBody['Tecnologies'][12]['name']   = 'RGSS';
$arrBody['Tecnologies'][13]['name']   = 'Sap Abap Netweaver';
$arrBody['Tecnologies'][14]['name']   = 'ASP';
$arrBody['Tecnologies'][15]['name']   = '.NET';
$arrBody['Tecnologies'][16]['name']   = 'Visual Basic';
$arrBody['Tecnologies'][17]['name']   = 'C++';
$arrBody['Tecnologies'][18]['name']   = 'C#';
$arrBody['Tecnologies'][19]['name']   = 'JSON';
$arrBody['Tecnologies'][20]['name']   = 'Jquery';
$arrBody['Tecnologies'][21]['name']   = 'JavaScript';
$arrBody['Tecnologies'][22]['name']   = 'Ajax';
$arrBody['Tecnologies'][23]['name']   = 'Java';

//Acerca de 
$arrBody['Acerca']['CompromisoTitulo'] = 'Nuestro Compromiso';
$arrBody['Acerca']['CompromisoCuerpo'] = 'Para nosotros, cada cliente es único. Nos comprometemos a entender sus requerimientos, necesidades y complejidades para cumplir con los objetivos de cada proyecto.<br/>En cualquier tarea que asumamos dentro de su proyecto, nuestros consultores les ofrecerán ayuda y soluciones, haciendo uso de su experiencia.';
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
$arrBody['Servicios']['Cuerpo']         = 'Ayudamos a nuestros clientes a llevar a cabo sus ideas creando soluciones de software a medida, usando las tecnologías específicas y criterios de usabilidad y funcionalidad adaptados a sus necesidades.';
$arrBody['ServiciosFlex'][0]['total']   = 4;
$arrBody['ServiciosFlex'][1]['titulo']  = 'Diseño Sitios Web';
$arrBody['ServiciosFlex'][1]['icon']    = 'icofont-settings';
$arrBody['ServiciosFlex'][1]['cuerpo']  = 'Disponemos de diferentes planes de diseño web, hechos para cada necesidad y a un precio justo. Todos nuestros planes son autoadministrables.';
$arrBody['ServiciosFlex'][2]['titulo']  = 'Hosting';
$arrBody['ServiciosFlex'][2]['icon']    = 'icofont-settings';
$arrBody['ServiciosFlex'][2]['cuerpo']  = 'A fin de entregar un servicio completo e integral, disponemos de hosting para nuestros proyectos y clientes. Nuestros planes no poseen costo de habilitación.';
$arrBody['ServiciosFlex'][3]['titulo']  = 'Aplicaciones Moviles';
$arrBody['ServiciosFlex'][3]['icon']    = 'icofont-settings';
$arrBody['ServiciosFlex'][3]['cuerpo']  = 'Aplicaciones para dispositivos móviles nativas Swift (iOS) y Java (Android) o desarrolladas en tecnologías web HTML5, CSS3 y JavaScript.';
$arrBody['ServiciosFlex'][4]['titulo']  = 'Desarrollo de Proyectos';
$arrBody['ServiciosFlex'][4]['icon']    = 'icofont-settings';
$arrBody['ServiciosFlex'][4]['cuerpo']  = 'Desarrollamos proyectos a medida para cada empresa, contando con experiencia principalmente en CMS, GPS y Telemetria.';
//Portafolio
$arrBody['Portafolio']['Titulo']          = 'Portafolio';
$arrBody['Portafolio']['Cuerpo']          = 'Conoce algunos trabajos realizados por nosotros.';
$arrBody['PortafolioFlex'][0]['total']    = 15;
$arrBody['PortafolioFlex'][1]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][1]['titulo']   = 'Gestion Modular';
$arrBody['PortafolioFlex'][1]['imagen']   = 'portfolio-1.jpg';
$arrBody['PortafolioFlex'][1]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][1]['enlace']   = 'https://gestionmodular.cl/';
$arrBody['PortafolioFlex'][2]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][2]['titulo']   = 'Pizzeria del Sol';
$arrBody['PortafolioFlex'][2]['imagen']   = 'portfolio-2.jpg';
$arrBody['PortafolioFlex'][2]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][2]['enlace']   = 'https://www.pizzeriadelsol.cl/';
$arrBody['PortafolioFlex'][3]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][3]['titulo']   = 'Un toque de dulzura';
$arrBody['PortafolioFlex'][3]['imagen']   = 'portfolio-3.jpg';
$arrBody['PortafolioFlex'][3]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][3]['enlace']   = '';
$arrBody['PortafolioFlex'][4]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][4]['titulo']   = 'MCM Ajustadores Ltda';
$arrBody['PortafolioFlex'][4]['imagen']   = 'portfolio-4.jpg';
$arrBody['PortafolioFlex'][4]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][4]['enlace']   = 'https://www.mcmajustadores.cl/presentacion/';
$arrBody['PortafolioFlex'][5]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][5]['titulo']   = 'Animaciones infantiles Payasito Cascabel';
$arrBody['PortafolioFlex'][5]['imagen']   = 'portfolio-5.jpg';
$arrBody['PortafolioFlex'][5]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][5]['enlace']   = 'https://www.payasitocascabel.cl/';
$arrBody['PortafolioFlex'][6]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][6]['titulo']   = 'Rifo y Compañía Ltda';
$arrBody['PortafolioFlex'][6]['imagen']   = 'portfolio-6.jpg';
$arrBody['PortafolioFlex'][6]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][6]['enlace']   = 'http://www.rifoseguros.cl/';
$arrBody['PortafolioFlex'][7]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][7]['titulo']   = 'Simyl';
$arrBody['PortafolioFlex'][7]['imagen']   = 'portfolio-7.jpg';
$arrBody['PortafolioFlex'][7]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][7]['enlace']   = 'https://www.simyl.cl/';
$arrBody['PortafolioFlex'][8]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][8]['titulo']   = 'Proyectos en PVC';
$arrBody['PortafolioFlex'][8]['imagen']   = 'portfolio-8.jpg';
$arrBody['PortafolioFlex'][8]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][8]['enlace']   = 'https://www.vluzpvc.cl/';
$arrBody['PortafolioFlex'][9]['filtro']   = 'filter-web';
$arrBody['PortafolioFlex'][9]['titulo']   = 'Ines Bengoa - Narracion Infantil';
$arrBody['PortafolioFlex'][9]['imagen']   = 'portfolio-9.jpg';
$arrBody['PortafolioFlex'][9]['tipo']     = 'Web';
$arrBody['PortafolioFlex'][9]['enlace']   = 'https://www.inesbengoa.com/';
$arrBody['PortafolioFlex'][10]['filtro']  = 'filter-web';
$arrBody['PortafolioFlex'][10]['titulo']  = 'Itinerario muralistico';
$arrBody['PortafolioFlex'][10]['imagen']  = 'portfolio-10.jpg';
$arrBody['PortafolioFlex'][10]['tipo']    = 'Web';
$arrBody['PortafolioFlex'][10]['enlace']  = 'http://www.muralismopublico.com/';
$arrBody['PortafolioFlex'][11]['filtro']  = 'filter-web';
$arrBody['PortafolioFlex'][11]['titulo']  = 'Turismo Rural en Navarra';
$arrBody['PortafolioFlex'][11]['imagen']  = 'portfolio-11.jpg';
$arrBody['PortafolioFlex'][11]['tipo']    = 'Web';
$arrBody['PortafolioFlex'][11]['enlace']  = 'https://tierrasdeiranzu.com/';
$arrBody['PortafolioFlex'][12]['filtro']  = 'filter-web';
$arrBody['PortafolioFlex'][12]['titulo']  = 'Mundo raintxe';
$arrBody['PortafolioFlex'][12]['imagen']  = 'portfolio-12.jpg';
$arrBody['PortafolioFlex'][12]['tipo']    = 'Web';
$arrBody['PortafolioFlex'][12]['enlace']  = 'https://www.mundoraintxe.com/';
$arrBody['PortafolioFlex'][13]['filtro']  = 'filter-web';
$arrBody['PortafolioFlex'][13]['titulo']  = 'Cosami';
$arrBody['PortafolioFlex'][13]['imagen']  = 'portfolio-13.jpg';
$arrBody['PortafolioFlex'][13]['tipo']    = 'Web';
$arrBody['PortafolioFlex'][13]['enlace']  = 'https://cosamiweb.com/';
$arrBody['PortafolioFlex'][14]['filtro']  = 'filter-web';
$arrBody['PortafolioFlex'][14]['titulo']  = 'Fonda Carrera';
$arrBody['PortafolioFlex'][14]['imagen']  = 'portfolio-14.jpg';
$arrBody['PortafolioFlex'][14]['tipo']    = 'Web';
$arrBody['PortafolioFlex'][14]['enlace']  = 'https://fondacarrera.com/';
$arrBody['PortafolioFlex'][15]['filtro']  = 'filter-web';
$arrBody['PortafolioFlex'][15]['titulo']  = 'Conatacoch';
$arrBody['PortafolioFlex'][15]['imagen']  = 'portfolio-15.jpg';
$arrBody['PortafolioFlex'][15]['tipo']    = 'Web';
$arrBody['PortafolioFlex'][15]['enlace']  = 'http://www.conatacoch.cl/';


$arrBody['Pricing']['Hacia_correo']    = 'contacto@digitalcreations.cl';
$arrBody['Pricing']['Hacia_asunto_1']  = 'Diseño sitio web';
$arrBody['Pricing']['Hacia_asunto_2']  = 'Diseño app';
$arrBody['Pricing']['Hacia_asunto_3']  = 'Desarrollo proyecto';
$arrBody['Pricing']['Titulo'] = 'Precios';
$arrBody['Pricing']['Cuerpo'] = 'Nuestras tablas de precio incluyen costo de desarrollo y mantenimiento anual, no se incluye el costo de nuevas caracteristicas posteriores a la entrega del software.';
$arrBody['PricingFlex'][0]['total']   = 3;
$arrBody['PricingFlex'][1]['titulo']  = 'Diseño Sitios Web';
$arrBody['PricingFlex'][1]['Valor']   = '800.000';
$arrBody['PricingFlex'][1]['Lista']   = '<li>Hosting por 1 año</li><li>Completamente autoadministrable</li><li>Paginas Ilimitadas</li><li>Configuracion basica gratuita</li>';
$arrBody['PricingFlex'][1]['enlace']  = 'mailto:'.$arrBody['Pricing']['Hacia_correo'].'?Subject='.$arrBody['Pricing']['Hacia_asunto_1'];
$arrBody['PricingFlex'][2]['titulo']  = 'Aplicaciones Moviles';
$arrBody['PricingFlex'][2]['Valor']   = '4.500.000';
$arrBody['PricingFlex'][2]['Lista']   = '<li>Hosting por 1 año</li><li>Costo Base de app</li><li>Precio Varia segun cantidad pantallas</li>';
$arrBody['PricingFlex'][2]['enlace']  = 'mailto:'.$arrBody['Pricing']['Hacia_correo'].'?Subject='.$arrBody['Pricing']['Hacia_asunto_2'];
$arrBody['PricingFlex'][3]['titulo']  = 'Desarrollo de Proyectos';
$arrBody['PricingFlex'][3]['Valor']   = '2.500.000';
$arrBody['PricingFlex'][3]['Lista']   = '<li>Hosting por 1 año</li><li>Autoadministrable</li><li>Usuarios ilimitados</li><li>Permisos gestionados</li><li>Costo variable en base al desarrollo</li>';
$arrBody['PricingFlex'][3]['enlace']  = 'mailto:'.$arrBody['Pricing']['Hacia_correo'].'?Subject='.$arrBody['Pricing']['Hacia_asunto_3'];


$arrBody['Contact']['recep_asunto']  = 'Contacto Web: ';
$arrBody['Contact']['recep_mail']    = 'contacto@digitalcreations.cl';
$arrBody['Contact']['recep_name']    = 'Contacto Web';

?>
