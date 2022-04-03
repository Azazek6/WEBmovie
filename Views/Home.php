<?php include ('config/conexionBD.php') ?>

<?php 
$title="Home"; 
$link = '
<link rel="stylesheet" href="assets/CSS/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
';
$logo= 'assets/img/logo.png';
include('Layout/header.php'); 
?>

<div class="slider">

		<div class="glider-contain">
			<button aria-label="Previous" class="glider-prev"></ion-icon></button>

			<div class="sl-lista">
				<div class="glider-element">
					<img src="assets/img/sl1.png" alt="img">
					<div class="gl-cont">
						<p class="titulo">Titulo del H riko xddddddddddddddddddddddddddddddd</p>
						<p class="estado">
							<ion-icon name="play-circle-outline"></ion-icon>
							En emision
						</p>
						<p class="descripcion">Descripcion del H de lolis</p>
						<div class="categoria-element">
							<div class="cat1">
								<p class="categoria">Categoria</p>
							</div>
							<div class="cat2">
								<p class="cat-el">element 1</p>
								<p class="cat-el">element 2</p>
								<p class="cat-el">element 3</p>
								<p class="cat-el">element 4</p>
								<p class="cat-el">element 4</p>
							</div>
						</div>
						
					</div>
				</div>
				<div class="glider-element">
					<img src="assets/img/sl2.png" alt="img">
					<div class="gl-cont">
						<p class="titulo">Titulo del H riko xddddddddddddddddddddddddddddddd</p>
						<p class="estado">
							<ion-icon name="play-circle-outline"></ion-icon>
							En emision
						</p>
						<p class="descripcion">Descripcion del H de lolis</p>
						<div class="categoria-element">
							<div class="cat1">
								<p class="categoria">Categoria</p>
							</div>
							<div class="cat2">
								<p class="cat-el">element 1</p>
								<p class="cat-el">element 2</p>
								<p class="cat-el">element 3</p>
								<p class="cat-el">element 4</p>
								<p class="cat-el">element 4</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="glider-element">
					<img src="assets/img/sl2.png" alt="img">
					<div class="gl-cont">
						<p class="titulo">Titulo del H riko xddddddddddddddddddddddddddddddd</p>
						<p class="estado">
							<ion-icon name="play-circle-outline"></ion-icon>
							En emision
						</p>
						<p class="descripcion">Descripcion del H de lolis</p>
						<div class="categoria-element">
							<div class="cat1">
								<p class="categoria">Categoria</p>
							</div>
							<div class="cat2">
								<p class="cat-el">element 1</p>
								<p class="cat-el">element 2</p>
								<p class="cat-el">element 3</p>
								<p class="cat-el">element 4</p>
								<p class="cat-el">element 4</p>
							</div>
						</div>
					</div>
				</div>
				<div class="glider-element">
					<img src="assets/img/sl2.png" alt="img">
					<div class="gl-cont">
						<p class="titulo">Titulo del H riko xddddddddddddddddddddddddddddddd</p>
						<p class="estado">
							<ion-icon name="play-circle-outline"></ion-icon>
							En emision
						</p>
						<p class="descripcion">Descripcion del H de lolis</p>
						<div class="categoria-element">
							<div class="cat1">
								<p class="categoria">Categoria</p>
							</div>
							<div class="cat2">
								<p class="cat-el">element 1</p>
								<p class="cat-el">element 2</p>
								<p class="cat-el">element 3</p>
								<p class="cat-el">element 4</p>
								<p class="cat-el">element 4</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<button aria-label="Next" class="glider-next"></ion-icon></button>
			<div role="tablist" class="dots"></div>

			<div class="gl-cont-nav">
				<div role="tablist" class="sli-indicador"></div>
			</div>
		</div>
</div>

<div class="contenido">
		<div class="element">
			<div class="title">
				<h2>Añadidos Ultimamente</h2>
			</div>
		<div class="content-pelis">
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
		</div>
		</div>	
	</div>
	<?php if(isset($_SESSION["Activo"])): ?>
	<div class="contenido">
		<div class="element">
			<div class="title">
				<h2><ion-icon name="star"></ion-icon> Peliculas favoritas</h2>
			</div>
		<div class="content-pelis">
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
			<div class="peli-element">
				<a href="">
					<img src="assets/img/sl2.png" alt="">
					<p>The walking dead: Amanecer de los muertos 5</p>
				</a>
			</div>
		</div>
		</div>
	</div>
	<?php endif; ?>

<?php 
$js = "
<script src='assets/JS/app.js'></script>
<script>
window.addEventListener('load', function () {
	new Glider(document.querySelector('.sl-lista'), {
	slidesToShow: 1,
	slidesToScroll: 3,
	dots: '.sli-indicador',
	draggable: false,
	arrows: {
	  prev: '.glider-prev',
	  next: '.glider-next'
	}
  });
})
</script>
<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
<script src='https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js'></script>
";
?>
<?php include('Layout/footer.php'); ?>