<?php
session_start();

if ($_SESSION["rol"] != 1) {
	header("location: http://localhost/WEBmovie/");
}

?>

<?php include_once '../../AdminLTE/template-head.php' ?>



<?php include_once '../../AdminLTE/template-footer.php' ?>