<?php 

class Alumno
{

protected $nombres;
protected $apellidos;
protected $edad;


function __construct($nombres='',$apellidos='',$edad='')
{
  
  $this->nombres    = $nombres;
  $this->apellidos  = $apellidos;
  $this->edad       = $edad;


}


function registrar()
{

  $conexion =  new Conexion();
  $query    =  "INSERT INTO alumno(nombres,apellidos,edad)
  VALUES('".$this->nombres."','".$this->apellidos."','".$this->edad."')";
  $result   = $conexion->query($query);
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
   $conexion =  new Conexion();
   $query  =  "SELECT * FROM alumno";
   $result = $conexion->query($query);
   while ($fila = mysqli_fetch_assoc($result))
	{
	  $dato[] = $fila;
	}
    
    return $dato;

}


function eliminar($id)
{ 

  $conexion =  new Conexion();
  $query    =  "DELETE FROM alumno WHERE id='".$id."'";
  $result   = $conexion->query($query);
  if ($result)
  {
    return "ok";
  } 
  else
  {
    return "error";
  }


}



function actualizar($id)
{ 

  $conexion =  new Conexion();
  $query    =  "UPDATE alumno SET nombres='".$this->nombres."',apellidos='".$this->apellidos."',edad='".$this->edad."' WHERE id='".$id."' ";
  $result   = $conexion->query($query);
  if ($result)
  {
    return "ok";
  } 
  else
  {
    return "error";
  }


}


function consulta($id,$campo)
{

  $conexion  = new Conexion();
  $query     =  "SELECT  * FROM alumno WHERE id='".$id."'";
  $result    =  $conexion->query($query);
  $dato      =  mysqli_fetch_array($result);
  return $dato[$campo];

}




}


 ?>