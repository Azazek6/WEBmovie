<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEBmovie | <?php echo $title?></title>
	<?php echo $link?>
</head>
<body>
	
<div class="navegacion">
		<div class="nav-left">
			<a href="http://localhost/WEBmovie/"><img class="logo" src="<?php echo $logo; ?>" alt="Home"></a> 
		</div>
		<ul class="nav-rigth">
			<li class="menu"><a href="http://localhost/WEBmovie/"  >Inicio</a></li>
			<li class="menu"><a href="">Pr&oacute;ximos Estrenos</a></li>
			<li class="menu"><a href="">Estrenos</a></li>
			<li class="menu"><a href="http://localhost/WEBmovie/Views/categoria.php">Directorio</a></li>
			
			<li class="menu">
				<?php if(isset($_SESSION["Activo"])): ?>
				<a href="">Mis favoritos</a>
				<?php endif; ?>
			</li>
			<?php if(isset($_SESSION["Activo"])): ?>
			<li class="menu">
				<p class="user"><?php echo $_SESSION["usuario"] ?></p>
				<ul class="sub-menu">
					<li>
						<a href="http://localhost/WEBmovie/salir.php">Cerrar sesi&oacute;n</a>
					</li>
				</ul>
			</li>
			<?php else: ?>
			<li>
				<a class="ico-log" href="http://localhost/WEBmovie/Views/Usuario/login.php"><ion-icon name="person-circle"></ion-icon></a>
			</li>
			<?php endif; ?>
		</ul>
	</div>