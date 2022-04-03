<?php include ('../../config/conexionBD.php') ?>
<?php include ('../../Model/Usuario.php') ?>
<?php 
$title="Registro";
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

if (isset($_POST["btnRegistro"])) {
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$edad = $_POST["edad"];
	$usuario = $_POST["usuario"];
	$contraseña = $_POST["password"];

	if ($nombre == '' || $apellido =='' || $edad == '' || $usuario =='' || $contraseña =='') {
		echo "vacios";
	}
	else {
		if ($contraseña != $_POST["conf-password"]) {
			echo "contraseñas distintas";
		}
		else{
			$user = new Usuario($conexion);
			if ($user->validaUsuario($usuario)) {
				if ($user->registrarUsuario($nombre,$apellido,$edad,$usuario,$contraseña)) {
					echo "registrado";
				}
				else{
					echo "error al registrar";
				}
			}
			else{
				echo "usuario ya existente";
			}
		}
	}
}

?>

<div class="contenido reg">
		<div class="cont-regis">
			<div class="form-regis">
				<div class="ti-login">
					<h2>Registro de Usuario</h2>
				</div>
				<form action="" method="POST">
					<div class="regis-element">
						<label for="">Nombres: </label>
						<input type="text" name="nombre" id="nombre">
					</div> 
					<div class="regis-element">
						<label for="">Apellidos: </label>
						<input type="text" name="apellido" id="apellido">
					</div> 
					<div class="regis-element">
						<label for="">Edad: </label>
						<input type="text" name="edad" id="edad">
					</div> 
					<div class="regis-element">
						<label for="">Usuario: </label>
						<input type="text" name="usuario" id="usuario">
					</div> 
					<div class="regis-element">
						<label for="">Contraseña: </label>
						<input type="password" name="password" id="password">
					</div>
					<div class="regis-element">
						<label for="">Confirmar contraseña: </label>
						<input type="password" name="conf-password" id="conf-password">
					</div>
					<div class="log-btn">
						<button type="submit" id="btnRegistro" name="btnRegistro">Registrarme</button>
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