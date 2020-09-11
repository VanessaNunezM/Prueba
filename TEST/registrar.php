
<!doctype html>
<html>  
<head>  
<title>Registro de Alquiler</title>  
    <style>   
        body{  
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color:#F7F7F7;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}</style>  

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>   
<body class="text_center"> 
<div class="container" style="margin-top:45px;">
<div class="col-md-7">


     
     <center><h4>Registrar Alquiler</h4></center>  
<H5><a href="Lista.php">Lista de alquiler</a></H5>   
    <center><h5>Favor llene el formulario</h5></center>  
<form action="" method="POST">  
    <legend>  
    <fieldset>  
          
<p>Nombre: <input type="text" class="form-control input-sm" name="nombre"></p>
<p>cedula: <input type="text" class="form-control input-sm" name="cedula" size="10"></p>
<p>dirección: <input type="text" class="form-control input-sm" name="direccion" size="50"></p> 
<p>telefono: <input type="text" class="form-control input-sm" name="telefono" size="10"></p>       
 <p>modelo: <input type="text" class="form-control input-sm" name="modelo" size="50"></p>   
<input type="submit" class="btn btn-primary" value="Registrar" name="submit" /> 
        </fieldset>  
        </legend>  
</form>
</div>
</div>   
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['nombre']) && !empty($_POST['cedula'])) {  
    $ced=$_POST['cedula'];  
    $direc=$_POST['direccion'];  
     $nomb=$_POST['nombre'];   
    $telefono=$_POST['telefono']; 
    $modelo=$_POST['modelo']; 
   
	//$enlace = mysqli_connect("127.0.0.1", "MysqlAgent", "123456", "rental");
$usuario = "root";
$contrasena = "12345";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "rental";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  
  $consulta = "SELECT * FROM datos WHERE cedula='". trim($ced) ."'";
  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
     
    $numrows=mysqli_num_rows($resultado);   
    if($numrows==0)  
    { 

    $sql="INSERT INTO datos(Nombre,cedula,direccion,telefono,modelo) VALUES ('".$nomb."','".$ced ."','".$direc."','".$telefono."','".$modelo."')"; 
	$insercion = mysqli_query($conexion, $sql) or die ( "Algo ha ido mal en la consulta a la base de datos". mysqli_error($conexion));
        
              

	
    } else {  
    echo "ha fallado el ingreso del beneficiario!";  
    }  
  
    } else {  
    echo "ya existe este beneficiario";  
    }  
  
 
}
 
?>  
</body>  
</html>   