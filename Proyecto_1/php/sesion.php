<?php
  $conect=mysql_connect('localhost','root','');
  if(!$conect){
      echo"No se conecto con el servidor";
  }else{
      $base=mysql_select_db('columnas');
      if(!$base){
          echo"No se encontro una base de datos";
      }
  }
  $Nombre=$_POST['Nombre'];
  $Apodo=$_POST['Apodo'];
  $Email=$_POST['Email'];
  $EmailR=$_POST['EmailR'];
  $Contraseña=$_POST['Contraseña'];
  $ContraseñaR=$_POST['ContraseñaR'];
  $sql="INSERT INTO datos Values('$Nombre',
                                  '$Apod',
                                  '$Email',
                                  '$EmailR',
                                  '$Contraseña',
                                  '$ContraseñaR');
?>