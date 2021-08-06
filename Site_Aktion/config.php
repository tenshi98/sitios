<?php
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
$arrBody = array();
/********************************* Header *********************************/
$arrHeader['Site']['Name'] = 'Aktion.cl';

$arrHeader['Site']['whatsapp_number_1'] = '223594507';
$arrHeader['Site']['whatsapp_number_2'] = '233234823';
$arrHeader['Site']['whatsapp_tittle'] = 'Quiero recibir información sobre';
$arrHeader['Site']['head_img_text'] = 'We Discover, Design & Build Digital <br> Presence of Businesses';
$arrHeader['Menu'][1]  = 'Inicio';
$arrHeader['Menu'][2]  = 'Meta';
$arrHeader['Menu'][3]  = 'Servicios';
$arrHeader['Menu'][4]  = 'Equipo';
$arrHeader['Menu'][5]  = 'pricing';
$arrHeader['Menu'][6]  = 'portfolios';
$arrHeader['Menu'][7]  = 'testimonial';
$arrHeader['Menu'][8]  = 'blog';
$arrHeader['Menu'][9]  = 'Contacto';
$arrHeader['Menu'][10] = 'Acceso Clientes';


$arrHeader['Carousel'][1]['img']        = 'img02.jpg';
$arrHeader['Carousel'][1]['Tittle']     = 'Contabilidad simplificada y completa';
$arrHeader['Carousel'][1]['Subtittle']  = 'Contabilidad y Finanzas';
$arrHeader['Carousel'][1]['Text']       = 'Gestionamos las declaraciones mensuales, Declaraciones juradas y de renta anual con sus respectivos Balances y estados de resultado.';
$arrHeader['Carousel'][1]['TextStyle']  = 'cr2';

$arrHeader['Carousel'][2]['img']        = 'img03.jpg';
$arrHeader['Carousel'][2]['Tittle']     = 'Back Office Administrativo';
$arrHeader['Carousel'][2]['Subtittle']  = 'Constitución de sociedad e <br/>inicio de actividades';
$arrHeader['Carousel'][2]['Text']       = 'Creamos su empresa en un dia, iniciamos actividades y <br/>dejamos la empresa en marcha previos requisitos y documentación del cliente.';
$arrHeader['Carousel'][2]['TextStyle']  = 'cr3';

$arrHeader['Carousel'][3]['img']        = 'img01.jpg';
$arrHeader['Carousel'][3]['Tittle']     = 'Outsourcing Contable';
$arrHeader['Carousel'][3]['Subtittle']  = 'Servicios y Soluciones para sus trabajadores';
$arrHeader['Carousel'][3]['Text']       = 'Generamos los contratos, cálculos y pago de remuneraciones, cotizaciones e impuestos.';
$arrHeader['Carousel'][3]['TextStyle']  = 'cr1';

//verifica la capa de desarrollo
$whitelist = array( 'localhost', '127.0.0.1', '::1' );
////////////////////////////////////////////////////////////////////////////////
//si estoy en ambiente de desarrollo
if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) ){
	$arrHeader['Site']['intranet'] = 'http://localhost/power_engine/sistema_web_clientes_aktion';
////////////////////////////////////////////////////////////////////////////////
//si estoy en ambiente de produccion	
}else{
	$arrHeader['Site']['intranet'] = 'https://cliente.aktion.cl/';
}	
/********************************* Body *********************************/
$arrBody['Feature']['text'] = '<strong>A<span style="color:#FF0000;">K</span>TION</strong> 
							tiene como misión brindar a sus clientes el más alto estándar de 
							servicio en las áreas de consultoría tanto a profesionales, particulares 
							y a empresas. <br/><br/>
							Nuestras áreas de trabajo se encuentran enfocadas en brindar asesorías 
							en el manejo adecuado de la información contable tributaria.<br/><br/>
							Es nuestro objetivo crear y adaptar soluciones, eficientes y oportunas, 
							para nuestros clientes, de esta forma les agregamos valor.<br/><br/>
							Apuntando por una empresa del siglo XXI, totalmente online. Hemos 
							privilegiado el uso de las tecnologías y canales digitales en esta 
							nueva era de vanguardia comunicacional.';
$arrBody['Feature'][1]['time'] = '300ms';
$arrBody['Feature'][2]['time'] = '500ms';
$arrBody['Feature'][3]['time'] = '700ms';
$arrBody['Feature'][1]['icon'] = 'lni-microphone';
$arrBody['Feature'][2]['icon'] = 'lni-medall-alt';
$arrBody['Feature'][3]['icon'] = 'lni-users';							
$arrBody['Feature'][1]['content'] = '
							<h3>Objetivo</h3>
							<p>
								El objetivo principal de nuestras consultorías es dar solución integral 
								a la empresa, y a quien se encuentra detrás de ella, dirigidas bajos 
								los estándares de calidad y experiencia de nuestro equipo humano.
							</p>';
$arrBody['Feature'][2]['content'] = '
							<h3>Experiencia</h3>
							<p>
								Nuestra experiencia y formación profesional nos permite brindar un 
								servicio que busca incrementar en el largo plazo y de forma sostenida 
								el patrimonio de nuestros clientes, entregando información confiable 
								y oportuna, así como optimizando los aspectos tributarios.
							</p>';
$arrBody['Feature'][3]['content'] = '
							<h3>Clientes</h3>
							<p>
								Privilegiamos el agregar valor a nuestros clientes dando una pronta 
								respuesta a sus inquietudes, ya que, para nosotros las oportunidades 
								no pueden esperar.
							</p>';
/**************************************/
$arrBody['Services']['title'] = '<strong>A<span style="color:#FF0000;">K</span>TION</strong>, <strong>Consultores</strong>, 
								una ventaja frente a nuestros potenciales clientes es que 
								realizamos un análisis previo enconjunto para determinar sus necesidades, 
								luego diseñamos una solución a medida.<br/>
								Nuestros servicios pueden ser contratados en forma modular, es decir, tomar uno 
								o varios dependiendo de sus necesidades.';
$arrBody['Services']['subtitle_1']  = 'Área Contabilidad';
$arrBody['Services']['subtitle_2']  = 'Área Tributaria';
$arrBody['Services'][1]['class']    = 'col-md-6 col-lg-4 col-xs-12';
$arrBody['Services'][2]['class']    = 'col-md-6 col-lg-4 col-xs-12';
$arrBody['Services'][3]['class']    = 'col-md-6 col-lg-4 col-xs-12';
$arrBody['Services'][4]['class']    = 'col-md-6 col-lg-6 col-xs-12';
$arrBody['Services'][5]['class']    = 'col-md-6 col-lg-6 col-xs-12';
$arrBody['Services'][1]['time']     = '0.3s';
$arrBody['Services'][2]['time']     = '0.6s';
$arrBody['Services'][3]['time']     = '0.9s';
$arrBody['Services'][4]['time']     = '1.2s';
$arrBody['Services'][5]['time']     = '1.5s';
$arrBody['Services'][1]['icon']     = 'lni-pencil';
$arrBody['Services'][2]['icon']     = 'lni-briefcase';
$arrBody['Services'][3]['icon']     = 'lni-cog';
$arrBody['Services'][4]['icon']     = 'lni-mobile';
$arrBody['Services'][5]['icon']     = 'lni-layers';
$arrBody['Services'][1]['content'] = '<h3><a href="#">Outsorcing Contable</a></h3>
										<p>
											Nuestros Servicios Contables abarcan desde el inicio de actividades de 
											su empresa hasta la generación de reportes financieros, contables y 
											de gestión, asegurando el cumplimiento de todas las regulaciones y 
											normativas vigentes.<br/>
											Permitiendo al cliente focalizarse en el giro de sus negocios, 
											maximizando su eficiencia y responder con rapidez a los cambios 
											de su entorno. La transparencia en los procesos de contabilidad 
											se transforme en un instrumento útil para la toma de decisiones, 
											y que potencie los nuevos desafíos a afrontar.<br/>
											Podemos operar los distintos procesos involucrados, tales como 
											centralización contable, impuestos y elaboración de estados 
											financieros, conforme a principios contables locales e internacionales.
										</p>';
$arrBody['Services'][2]['content']= '<h3><a href="#">Rol Privado y Remuneraciones</a></h3>
										<p>
											Tanto el proceso de Remuneraciones o Rol Privado para ejecutivos, como el 
											proceso integral de pago de remuneraciones para sus empleados, tienen 
											como elemento distintivo la confidencialidad y la adaptabilidad a los 
											requerimientos de su empresa.<br/>
											Conjuntamente llevamos a cabo la administración de los contratos y 
											beneficios, incluyendo el control de vacaciones, cálculo de provisiones, 
											licencias, entre otros.
										</p>';
$arrBody['Services'][3]['content']= '<h3><a href="#">Back Office Administrativo</a></h3>
									<p>
										Podemos a su disposición el asumir la responsabilidad por la operación de 
										los procesos de cuentas por pagar y cuentas por cobrar, que, unidos 
										al manejo de tesorería, soporte administrativo y proceso de datos, 
										permiten a su empresa una focalización exclusiva en sus áreas claves 
										del negocio, dejando esa responsabilidad administrativa en manos 
										profesionales, dispuestos a asesorar y dar una respuesta eficiente 
										antes dudas o consultas. 
									</p>';
$arrBody['Services'][4]['content']= '<h3><a href="#">Auditoria Tributaria</a></h3>
									<p>
										El objetivo de la auditoría tributaria es el de identificar la existencia 
										de contingencias y valorar su importancia económica, a partir de una 
										evaluación de cumplimiento de las diversas obligaciones tributarias. 
										Ser un representante confiable de todos los procesos frente a las 
										autoridades y entidades correspondientes para un desarrollo de su 
										empresa según los estándares solicitados. 
									</p>';
$arrBody['Services'][5]['content']= '<h3><a href="#">Planificación Tributaria</a></h3>
									<p>
										Evaluamos su situación tributaria y buscamos la mejor alternativa para 
										optimizar el pago de impuesto. A partir de esto, realizamos una 
										planificación tributaria tendiente a menor carga impositiva legalmente 
										admisible, dentro de opciones que el ordenamiento jurídico contempla.
									</p>';
/**************************************/
$arrBody['Counter']['Fecha_1'] = (ano_actual()+1).'-01-01';
$arrBody['Counter']['Fecha_2'] = ano_actual().'-07-01';
//verifico fechas
if(fecha_actual()<$arrBody['Counter']['Fecha_2']){
	$arrBody['Counter']['Fecha_actual'] = $arrBody['Counter']['Fecha_2'];
}else{
	$arrBody['Counter']['Fecha_actual'] = $arrBody['Counter']['Fecha_1'];
}
/**************************************/
$arrBody['Team']['Tittle'] = '<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nuestro Equipo</h2>
								<p>
									<strong>A<span style="color:#FF0000;">K</span>TION</strong> está conformada por un 
									equipo de profesionales con una sólida formación académica, con una vasta experiencia 
									laboral en las áreas de Contabilidad y Tributaria, en cargos de alto nivel y manejo 
									de equipos multidisciplinarios.<br/>
									Somos un equipo de profesionales que nos hemos potenciado al unir nuestros conocimientos 
									y experiencias para entregar una consultoría integral, tanto a profesionales como empresas 
									emergentes, buscando maximizar en cada minuto su patrimonio.<br/>
									Hoy más que nunca, hemos ido creciendo y adaptándonos para facilitar la comunicación 
									con nuestros clientes, potenciar sus proyectos y maximizar recursos. 
								</p>';
$arrBody['Team'][1]['class']                  = 'col-sm-6 col-md-6 col-lg-6';
$arrBody['Team'][2]['class']                  = 'col-sm-6 col-md-6 col-lg-6';
$arrBody['Team'][1]['time']                   = '0.3s';
$arrBody['Team'][2]['time']                   = '0.6s';
$arrBody['Team'][1]['img_name']               = 'Imagen Paula.jpg';
$arrBody['Team'][2]['img_name']               = 'Imagen Jorge.jpg';
$arrBody['Team'][1]['social_icon']            = 2; //1:si - 2:no
$arrBody['Team'][1]['social_icon_facebook']   = '';
$arrBody['Team'][1]['social_icon_twitter']    = '';
$arrBody['Team'][1]['social_icon_instagram']  = '';
$arrBody['Team'][2]['social_icon']            = 2; //1:si - 2:no
$arrBody['Team'][2]['social_icon_facebook']   = '';
$arrBody['Team'][2]['social_icon_twitter']    = '';
$arrBody['Team'][2]['social_icon_instagram']  = '';
$arrBody['Team'][1]['Nombre']                 = 'Paula Urriola Solar';
$arrBody['Team'][2]['Nombre']                 = 'Jorge Anabalon Figueroa';
$arrBody['Team'][1]['Area']                   = 'Area Financiera y Control de Gestion';
$arrBody['Team'][2]['Area']                   = 'Area Tributaria';

/**************************************/
$arrBody['Contact']['tittle']        = 'Contactenos';
$arrBody['Contact']['text']          = 'Con tecnología para gestionar el pago de remuneraciones, cotizaciones, declaraciones juradas, de renta, balances y EERR a solo un clic.';
$arrBody['Contact']['address']       = 'Camino del Monte 6095 casa F9 La Florida';
$arrBody['Contact']['email']         = 'contacto@aktion.cl';
$arrBody['Contact']['phone']         = '223594507 / 233234823';
$arrBody['Contact']['recep_asunto']  = 'Contacto Web: ';
$arrBody['Contact']['recep_mail']    = 'contacto@aktion.com';
$arrBody['Contact']['recep_name']    = 'Contacto Web';

/********************************* Footer *********************************/

$arrBody['Footer']['Social_facebook']  = '';
$arrBody['Footer']['Social_twitter']   = '';
$arrBody['Footer']['Social_instagram'] = '';
$arrBody['Footer']['Social_linkedin']  = '';
$arrBody['Config']['modal_width']  = 90; //Ventana Modal ancho
$arrBody['Config']['modal_height'] = 90; //Ventana Modal alto


?>
