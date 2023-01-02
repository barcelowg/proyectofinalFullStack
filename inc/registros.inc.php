<?php
// Conectarse a la Base de Datos
  require  "./con_db.php";

// Busqueda y filtrado de registros
  $buscar = $_GET['buscar'] ?? '';
      if($buscar){
        $fecha1 = $_GET['f1']; 
        $fecha2 = $_GET['f2'];
      $consulta = $dbh->prepare("SELECT *,DATE_FORMAT(Fecha, '%d/%m/%Y') AS Fecha FROM resumendia WHERE Fecha BETWEEN '$fecha1' AND '$fecha2'");
      }
      else{
      $consulta = $dbh->prepare("SELECT *,DATE_FORMAT(Fecha, '%d/%m/%Y') AS Fecha FROM resumendia ORDER BY Id DESC");
      }

      $consulta->execute();

      $resumendia = $consulta->fetchAll();

?>
<!-- Título -->
  <div class="container mt-3 ">
      <div class="mt-2 p-2 bg-transparent text-dark ">
      <h3>Registros</h3> 
      <span>En esta sección se muestran registros de valores máximos y mínimos ordenados por fecha de manera descendente. Pruede filtar los registros para conocer los valores de período en particular. También encontrará los botones para descargar o imprimir los registros seleccionados</span> 
      </div>
  </div>

  <br>
<!-- Formulario para busqueda y filtrado -->
  <form >
    <div class="container-fluid" >  
    <div class="row ">
          <div class="col-sm-3">
            <input type="date" class="form-control bg-transparent text-dark" placeholder="Desde" name="f1" required>
          </div>
          <div class="col-sm-3">
            <input type="date" class="form-control bg-transparent text-dark" placeholder="Hasta" name="f2" required>
          </div>
          <div class="col-sm-3">
            <input type="submit" value="Filtrar" class="btn btn-outline-success" placeholder="Filtrar" name="buscar">
            <button type="button" class="btn btn-outline-secondary "><a href="registros.php">Borrar</a></button>
          </div>
      </div>    
    </div>
  </form>
  
  <br>

<!-- Tabla de registros -->
    <table id="registros" class="table  text-dark bg-transparent nowrap" style="width:100%"">
        
      <!-- Encabezado de la tabla -->
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Temp <br> Max °C</th>
                <th scope="col">Temp <br> Min °C</th>
                <th scope="col">Hum <br> Max %</th>
                <th scope="col">Hum <br> Min %</th>
                <th scope="col">Pres <br> Max hPa</th>
                <th scope="col">Pres <br> Min hPa</th>
                <th scope="col">Viento <br> Max</th>
                <th scope="col">Viento <br> Max km/h</th>
                <th scope="col">Dirección</th>
                <th scope="col">Ráfagas</th>
                <th scope="col">Luvia <br> mm</th>
                <th scope="col">lluvia <br> Mes mm</th>
            </tr>
        </thead>

      <!-- Cuerpo de la tabla -->
        <tbody>
            <?php foreach ($resumendia as $i => $resumendi) { ?>
            <tr>
                <th scope="row"><?= $i+1 ?></th>
                <td><?=$resumendi['Fecha']?></td>
                <td><?=$resumendi['TempMax']?></td>
                <td><?=$resumendi['TempMin']?></td>
                <td><?=$resumendi['HumMax']?></td>
                <td><?=$resumendi['HumMin']?></td>
                <td><?=$resumendi['PresMax']?></td>
                <td><?=$resumendi['PresMin']?></td>
                <td><?=$resumendi['DirVientoMax']?></td>
                <td><?=$resumendi['VientoMax']?></td>
                <td><?=$resumendi['DirVieProm']?></td>
                <td><?=$resumendi['Rafagas']?></td>
                <td><?=$resumendi['LluvHoy']?></td>
                <td><?=$resumendi['LluvMes']?></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
