<?php
class  Persona
{

protected $codigo    ="0001";
private   $nombres   ="Juan";
public    $apellidos ="Perez";

function __construct()
{

}


function publica()
{
  return $this->privada().' '.$this->protegida();
}

private function privada()
{
  return $this->nombres;
}

private function protegida()
{
  return $this->apellidos;
}




}


$persona  =  new Persona();
echo $persona->publica();



 ?>