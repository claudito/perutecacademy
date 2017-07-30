<?php 
class Conexion extends mysqli
{
	
	public function __construct()
	{
		parent::__construct("localhost","root","","academia");
		$this->query("SET NAMES 'utf8'");
		//$this->connect_errno ? die('Error con la conexion') : $x = 'Conectado';
		$x = ($this->connect_errno) ? "Error con la Conexion" : "Conectado" ;
		//echo $x;
		unset($x);
	}
    
 }
 ?>