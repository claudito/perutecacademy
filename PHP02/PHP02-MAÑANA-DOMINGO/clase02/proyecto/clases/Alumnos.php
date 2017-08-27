<?php 

class Alumnos
{

protected $nombres;
protected $apellidos;
protected $dni;
protected $user;
protected $pass;



function __construct($nombres='',$apellidos='',$dni='',$user='',$pass='')
{
  
  $this->nombres    =  $nombres;
  $this->apellidos  =  $apellidos;
  $this->dni        =  $dni;
  $this->user       =  $user;
  $this->pass       =  $pass;

}

function agregar()
{

	$conexion  =  new Conexion();
	$query     =  "INSERT INTO alumnos(nombres,apellidos,dni,user,pass)
	 VALUES(
	 '".$this->nombres."',
	 '".$this->apellidos."',
	 '".$this->dni."',
	 '".$this->user."',
	 '".$this->pass."')";
	$result    = $conexion->query($query);
	if ($result) 
	{
		return "ok";
	} 
	else 
	{
		return "error";
	}
	


}


function lista()
{
	
$dato     = array();
$conexion =  new Conexion();
$query    =  "SELECT  * FROM alumnos";
$result   =  $conexion->query($query);
while ($fila  =  mysqli_fetch_assoc($result)) 
{
	$dato[] =  $fila;
}
   
   return $dato;

}

function estadisticas()
{
	
$dato     = array();
$conexion =  new Conexion();
$query    =  "SELECT  * FROM estadisticas";
$result   =  $conexion->query($query);
while ($fila  =  mysqli_fetch_assoc($result)) 
{
	$dato[] =  $fila;
}
   
   return $dato;

}



function consulta($id)
{
	
$dato     = array();
$conexion =  new Conexion();
$query    =  "SELECT  * FROM alumnos 
              WHERE id='".$id."'";
$result   =  $conexion->query($query);
while ($fila  =  mysqli_fetch_assoc($result)) 
{
	$dato[] =  $fila;
}
   
   return $dato;

}




}


 ?>