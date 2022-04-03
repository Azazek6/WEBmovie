<?php

function ValidaEnlace($enlace){
	if (file_exists($enlace)) {
		header('Location: '.$enlace);
	}
	else{
		echo 'no';
	}
}

?>