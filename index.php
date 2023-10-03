<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css" />
    <title>Cierre de Notas</title>
  </head>
  <body>
    <h1>Calcula tu Promedio anual</h1>
    
      <div class="container">
        <!--para usar php se abre -->
      
        <h2>Curso Desarrollador Web </h2>
        
        <!--FORMULARIO-->
        <form action="index.php" method="POST" >
          <input type="number" name="integradora1" placeholder="Nota integradora N°1" required min="0" max="100">
         <input type="number" name="integradora2" placeholder="Nota integradora N°2" required min="0" max="100">
         <input type="number" name="integradora3" placeholder="Nota integradora N°2" required min="0" max="100">
<input type="submit" value="Calcular promedio">
        </form>
        <!--FIN DE FORMULARIO-->

        <?php
        
        if($_POST){
$notaIntegradora1 = $_POST['integradora1'];
$notaIntegradora2 =$_POST['integradora2'] ;
$notaIntegradora3 = $_POST['integradora3'];
$promedio = ($notaIntegradora1 + $notaIntegradora2 + $notaIntegradora3)/3;?>
        <!--Datos a mostrar-->
        <ul>
          <li>Nota Evaluacion integradora Nro1: <?php echo $notaIntegradora1 ?></li>
          <li>Nota Evaluacion integradora Nro2: <?php echo $notaIntegradora2 ?></li>
          <li>Nota Evaluacion integradora Nro3: <?php echo $notaIntegradora3 ?></li>
          <li>Promedio final: <?php echo $promedio ?></li>

        </ul>
        
        <?php 
        
if($promedio>=70) {
 ?> <p>FELICITACIONES!!!!! aprobaste el curso de desarrolo web</p> <?php
}else{ ?>
  <p>No alcanzaste la nota necesaria para la aprobacion del curso</p>
  <p>Por favor, contactate con el <a href="#departamentoDeAlumnos">Departamento de Alumnos.</a></p>
<?php

}
        }
?>

        <!--con el signo $ se crean las variables las variables pueden llevar numeros como nombre pero no puede empezar con el numero.
    -->
        <!-- echo sirve para imprimir las variables-->
        <!--siempre que necesite imprimir alguna variable se debe abrir la etiqueta de php dentro de las etiquetas html donde quiera imprimir, tambien se ustiliza el "echo"-->

      </div>
  
  


  </body>
</html>
