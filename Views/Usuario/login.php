<?php include ('../../config/conexionBD.php') ?>
<?php include ('../../Model/Usuario.php') ?>

<?php 
$title="Iniciar";
$link = '
<link rel="stylesheet" href="../../assets/CSS/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
';
$logo= '../../assets/img/logo.png';
include '../../Layout/header.php';
?>

<?php
$bd = new conexionBD();
$conexion = $bd->conexion();

$user = new Usuario($conexion);

if (isset($_POST['btnAccede'])){
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	if ($usuario == '' || $password == '') {
		echo "campos vacios";
	}
	else{
		if ($user->ingresoUsuario($usuario,$password)) {
			$_SESSION["Activo"] = true;
			$_SESSION["usuario"] = $usuario;
			$_SESSION["rol"] = $user->rol;
			if ($user->rol == 1) {
				echo("<script>location.href = 'http://localhost/WEBmovie/Views/Admin/'</script>");
			}
			else{
				echo("<script>location.href = 'http://localhost/WEBmovie/'</script>");
			}
		}
		else{
			echo "error al ingresar";
		}
	}
}

?>

<div class="contenido log">
		<div class="cont-login">
			<div class="form-login">
				<div class="ti-login">
					<h2>Iniciar Sesi&oacute;n</h2>
				</div>
				<form action="" method="POST">
					<div class="log-element">
						<label for="">Usuario: </label>
						<input type="text" name="usuario" id="usuario">
					</div> 
					<div class="log-element">
						<label for="">Contraseña: </label>
						<input type="password" name="password" id="password">
					</div>
					<div class="link-reg">
						<a href="http://localhost/WEBmovie/Views/Usuario/registro.php">No tienes cuenta? Registrate</a>
					</div>
					<div class="log-btn">
						<button type="submit" id="btnIniciar" name="btnAccede">Ingresar</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>

<?php 
$js = '
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
';
?>
<?php include('../../Layout/footer.php'); ?>