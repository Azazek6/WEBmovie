<?php

class ConexionBD 
{
	private $host = 'localhost';
    private $db_name = 'webmovie';
    private $username = 'root';
    private $password = '';
    private $conexion;

    public function conexion(){
        $this->conexion = null;

        try {
            $this->conexion = new PDO('mysql:host=' . $this->host . ';dbname=' .$this->db_name, $this->username, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }

        return $this->conexion;
    }
}
