<?php
// Iniciar la sesión y la conexión a bd
require_once '../Includes/conexion.php';

// Recoger datos del formulario
if(isset($_POST)){
	
	// Borrar error antiguo
	if(isset($_SESSION['error_login'])){
		unset($_SESSION['error_login']);
	}
			
	// Recoger datos del formulario
	 $usuario = $_POST['user'];
	 $password = $_POST['pass'];
	
	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
	$login = mysqli_query($conexion, $sql);
        
     
       
	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);
		$rol = $usuario['id_rol'];
                
                
		// Comprobar la contraseña
		$verify = password_verify($password, $usuario['contraseña']);
		
		if($verify){
			// Utilizar una sesión para guardar los datos del usuario logueado
			$_SESSION['usuario'] = $usuario;
			
		}else{
			// Si algo falla enviar una sesión con el fallo
			$_SESSION['error_login'] = "Login incorrecto!!";
		}
	}else{
            
		// mensaje de error
		$_SESSION['error_login'] = "Login incorrecto!!";
	}
	
}
echo $rol;
 //redireccion de acuerdo al rol administrador
 if ($rol =='5' && $verify == true) {
        $_SESSION['invitado'] = "<div class='m-auto bg-warning text-center'>Aun no cuentas con los permisos de acceso</div>";
 	header("Location:../index.php");
 }elseif ($rol =='4' && $verify == true) {
     	$_SESSION['rolUsuario']='Cliente';
 	header("Location:../Login/Cliente/");
 }
 elseif($rol =='3' && $verify == true) {
 	$_SESSION['tUsuario']='Proveedor';
 	header("Location:../Login/Proveedor/");
 }elseif ($rol =='2' && $verify == true) {
 	$_SESSION['tUsuario']='Vendedor';
 	header("Location:../Login/Vendedor/");
 }elseif ($rol =='1' && $verify == true) {
 	header("Location:../Login/Administrador/");
 	$_SESSION['rolUsuario']='Administrador';
 }
 else{
 	header("Location:index.php");
 }


 


