<?php

$conexion=mysqli_connect('localhost', 'root', '', 'rental');

?>

<html>
    
    <head>
        <title> Lista de Autos Alquilados </title>
        
        <br> 
        <br> 
        <center>
        <h1>DATOS DE ALQUILER DE AUTOS</h1>
        </center>
        <br> 
        <br> 
        <br> 
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    
    
    <body> 
    
        
        <br> 
        
        
        <table border="1"style="margin: 0 auto">
            <tr>
                

                <th>ID_DATOS</th>
                <th>NOMBRE</th>
                <th>CÉDULA</th>
                <th>DIRECCIÓN</th>
                <th>TELÉFONO</th>
                <th>MODELO</th>

            </tr>
            
            <?php

$sql="SELECT * from datos";
$result=mysqli_query($conexion, $sql);
            
            while($mostrar=mysqli_fetch_array($result)){

?>    
            <tr> 
                <td><?php echo $mostrar ['datosID']?></td>
                <td><?php echo $mostrar ['Nombre']?></td>
                <td><?php echo $mostrar ['cedula']?></td>
                <td><?php echo $mostrar ['direccion']?></td>
                <td><?php echo $mostrar ['telefono']?></td>
                <td><?php echo $mostrar ['modelo']?></td>
            
            
            </tr>
            
            <?php
            }
            ?>
            
            
        </table>
        
   
        
    </body>
    
    
    

</html>