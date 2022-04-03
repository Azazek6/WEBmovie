<?php

class Usuario{
	private $conexion;
	private $table = 'usuarios';

	public $id;
	public $nombre;
	public $apellido;
	public $edad;
	public $usuario;
	public $contraseña;
	public $rol;

	//constructor
	public function __construct($db)
	{
		$this->conexion = $db;
	}

	public function registrarUsuario($nombre,$apellido,$edad,$usuario,$contraseña){
		$consulta= 'insert into '.$this->table.' (nombre,apellido,edad,nick_name,password,rol_id) values (:nombre,:apellido,:edad,:usuario,:password,2)';
		$cod_contraseña = md5($contraseña);
		$sentencia = $this->conexion->prepare($consulta);

		$sentencia->bindParam(":nombre",$nombre,PDO::PARAM_STR);
		$sentencia->bindParam(":apellido",$apellido,PDO::PARAM_STR);
		$sentencia->bindParam(":edad",$edad,PDO::PARAM_INT);
		$sentencia->bindParam(":usuario",$usuario,PDO::PARAM_STR);
		$sentencia->bindParam(":password",$cod_contraseña,PDO::PARAM_STR);

		if ($sentencia->execute()) {
			return true;
		}
	}

	public function ingresoUsuario($usuario,$password){
		$query= "select * from ".$this->table." where nick_name = :user and password = :password";
		$cod_password = md5($password);

		$stmt = $this->conexion->prepare($query);
		$stmt->bindParam(":user",$usuario, PDO::PARAM_STR);
		$stmt->bindParam(":password",$cod_password, PDO::PARAM_STR);
		$stmt->execute();

		$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
		if($usuario){
			$this->rol = $usuario['rol_id'];
			return true;
		}
		else{ return false; }
	}

	public function validaUsuario($usuario){
		$consulta = "select * from ".$this->table." where nick_name = :usuario";
		$sentencia = $this->conexion->prepare($consulta);

		$sentencia->bindParam(":usuario",$usuario,PDO::PARAM_STR);
		$sentencia->execute();

		$usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
		if($usuario){
			return false;
		}
		else{ return true; }

	}
}