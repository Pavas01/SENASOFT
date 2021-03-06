<!-- funcion para mostrar error en los capos de registro usuario-->
<?php
function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error text-danger'>".$errores[$campo].'</div>';
	}
	
	return $alerta;
}
//funciones para borrar sesiones
function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['erroresEntrada'])){
		$_SESSION['erroresEntrada'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['completado'])){
		$_SESSION['completado'] = null;
		$borrado = true;
	}
	
	return $borrado;
}
?>