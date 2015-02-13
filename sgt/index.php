<?php
	/*El frontend contrller se encarga de configuar nuestra aplicacion
	*/
	require 'config.php';
	require 'helpers.php';


	//llamar al controlador indicado
	if (empty($_GET['url'])) {
		# code...
		$_GET['url']='home';
	}
	controller($_GET['url']);


		//llamar a los controladores individuales
	//index.php
	// if (empty($_GET['url'])) {
	// 	# code...
	// 	require 'controllers/home.php';
	// }
	// //index.php?url=contactos
	// elseif ($_GET['url']=='contactos') {
	// 	# code...
	// 	require 'controllers/contactos.php';
	// }
	// //index.php?url=asdfasdf
	// else
	// {
	// 	header("HTTP/1.0 404 Not Fount");
	// 	exit("Pagina no encontrada");
	// }
	
	//print_r()
	//var_dump($_GET);