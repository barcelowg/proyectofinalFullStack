<?php

try {

  // Datos para la conexión a la base de datos
  $dbname = 'c2081732_climasl';
  $user = 'c2081732_climasl'; 
  $password = '12345678';
  
  // Conexión a la base de datos
  $dsn = "mysql:host=localhost;dbname=$dbname";
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
  echo $e->getMessage();
}