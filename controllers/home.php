<?php
	
	
	

	//VARIABLE UTILIZADA PARA DEMOSTRAR EL ENCAPSULAMIENTO Y EL DISPLAY DE ERRORES
	//$confidencial= "wow such private very confidential";
	$language = "PHP"; 
	$titulo = "Mejorando.la";

// EJEMPLO FUNCION EN PHP
	//declarando a una funcion
	//esto nos lanza un error puesto que la funcion no tiene acceso a las variables
	/*function view(){
		//encapsulamos el require del view
		require "view.php";
	}*/





//primeros pasos
//require "view.php";

	//LLAMADA A UNA FUNCION
	//ejemplo 1
	//view('view',['language' =>$language, 'titulo' => $titulo]);
	//ejemplo2
	view('home',compact('language','titulo'));