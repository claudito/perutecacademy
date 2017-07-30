<?php 

class Acceso
{

protected $user;
protected $pass;


function __construct($user='',$pass='')
{
   
   $this->user  = $user;
   $this->pass   = $pass;

}


function login()
{ 

  $conexion =  new Conexion();
  $query  =  "SELECT  * FROM alumnos  WHERE user='".$this->user."' AND 
              pass='".md5($this->pass)."' ";
  $result = $conexion->query($query);
	if ($result->num_rows > 0)
	{  
      
      $dato  = mysqli_fetch_array($result); 

	  session_start();
	  $_SESSION['id']        = $dato['id'];
      $_SESSION['nombres']   = $dato['nombres'];
      $_SESSION['apellidos'] = $dato['apellidos'];

	  return "existe";
	}
	else
	{
	 return "noexiste";
	}
  

}

function logout()
{
  
session_start();

if (isset($_SESSION['id'])) 
{
	unset($_SESSION['id']);
	unset($_SESSION['nombres']);
	unset($_SESSION['apellidos']);

	echo "<script>
	alert('Adios');
    window.location='".URL."';
	</script>";
} 
else 
{
	echo "<script>
	alert('No ha iniciado Sesión');
    window.location='".URL."';
	</script>";
}
  
  

	
}




}


 ?>