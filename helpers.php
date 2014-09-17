<?php

//repetimos la llamada con los parametros necesarios
	// function view($language){
	// 	//encapsulamos el require del view
	// 	require "view.php";
	// }

function view($template,$vars=array()){
		//encapsulamos el require del view
		extract($vars);
		require "views/$template.tpl.php";
	}

function controller($name){
	$file = "controllers/$name.php";
	//exit($file);
	if (file_exists($file)) {
		# code...
		require $file ;
	}
	else{
		header("HTTP/1.0 404 Not Fount");
		exit("Pagina no encontrada");
	}
	

	
}