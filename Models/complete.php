<?php
require_once 'templates.php';
include_once('db.php');


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../../img/isologos.png" type="../../image/png">
    <link rel="stylesheet" href="../../assets/normalize.css">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Reportes</title>
  </head>
  <body>
    

  <?php
    headder2();
?>
  <section class="contenedor" style="margin-top: 2.5rem">
  <button type="button" class="btn btn-outline-primary">
  <a href="../../admin.php" class="btnexit" style="text-decoration: none;">Pendientes</a>
  </button>
  </section>
  
      <!--Aqui va el código del formulario de consultas pendientes-->
      <form class="contenedor row g-4 center" action="" method="post" id="formPend">

      <div class="col-md-3 contenedor" style="margin-top:1rem; text-align: center;">
          <h6 for="validationDefault04" class="form-label">Reportes completados</h6>
          <div class="contenedor">

            <select class="form-select" name="report" id="">
            <?php
            if($conexion){
              $consulta2= "SELECT * FROM ReportsPruebas WHERE solucion IS not NULL";
              $datos2= mysqli_query($conexion, $consulta2);
              while ($show2 = mysqli_fetch_array($datos2)){
            ?>
            <option value="<?php echo $show2['id_registro'];?>"> <?php echo $show2['id_registro'];?></option> 
            <?php
            }
          }
          ?>
          </select>
        </div>
        </div>
        <div class="col-12" style="display: flex;justify-content: center;">
          <input class="btn btn-primary" style="width:10rem;" name="send" type="submit" value="Consultar"><br>
        </div>
        

      </form>
      <?php 
       if(isset($_POST['send'])){
        $id = $_POST["report"];
        global $id;
        //$GLOBALS['$id'];
        $ReportesConsulta= "SELECT * FROM ReportsPruebas WHERE id_registro=$id";
        $inforReports_ready= mysqli_query($conexion, $ReportesConsulta);
        while ($show_inforReports = mysqli_fetch_array($inforReports_ready)){
        ?>

        <!--HTML part-->
        <form class="contenedor row g-3" action="" method="post" style="margin-top:1rem; text-align:center;" autocomplete="off" id="formCom">
        <?php 
        
        ?>
        <div class="col-md-4" style="margin-top:1.5rem;">
        <h6>Número de reporte</h6>
        <select class="forId" name="num" id="reportNum">
            <option value="<?php echo $show_inforReports['id_registro'];?>"><?php echo $show_inforReports['id_registro'];?></option>
        </select>
        </div>

        <div class="col-md-4" style="margin-top:1.5rem;">
        <h6>Nombre de quien reportó</h6>
        <p id="nombre" value="<?php echo $show_inforReports['nombre'];?>"><?php echo $show_inforReports['nombre'];?></p>
        </div>

        <div class="col-md-4" style="margin-top: 1.5rem;">
        <h6>Piso</h6>
        <p id="area" value="<?php echo $show_inforReports['area'];?>"><?php echo $show_inforReports['area'];?></p>
        </div>

        <div class="col-md-6" style="margin-top:2rem; text-align:center;">
        <h6>Fecha</h6>
        <p id="date" value="<?php echo $show_inforReports['fecha'];?>"><?php echo $show_inforReports['fecha'];?></p>
        </div>

        <div class="col-md-6" style="margin-top:2rem; text-align:center;">
        <h6>Hora</h6>
        <p id="hour" value="<?php echo $show_inforReports['hora'];?>"><?php echo $show_inforReports['hora'];?></p>
        </div>
        <div class="col-md-12" style="margin-top:2rem;">
        <h6>Problema</h6>
        <p style="text-align:justify;" id="problem" value="<?php echo $show_inforReports['problema'];?>"><?php echo $show_inforReports['problema'];?></p>
        </div>

      <div class="col-md-12" style="margin-top:2rem;">
        <h6 for="validationDefault05" class="form-label">Solución</h6>
        <p class="form-control" type="text" name="solution" style="height:10rem; text-align:justify;" id="solve" value="<?php echo $show_inforReports['solucion'];?>">
        <?php echo $show_inforReports['solucion'];?></p>
      </div>


      <div style="display: flex;" style="margin-top: 1.5rem">

        <div class="col-md-6">
        <img src="data:image/png;base64,<?php echo $show_inforReports['firmaUser'] ?>" alt="firma User" style="width:50%" id="firmaUserImg">
        </div>

        <div class="col-md-6">
        <img src="data:image/png;base64,<?php echo $show_inforReports['firmaTech'] ?>" alt="firma Tec" style="width:50%" id="tecFirma">
        </div>
      </div>
      <span class="col-md-6">Firma de quien reportó</span>
      <span class="col-md-6">Firma del técnico</span>
      
      
      <button type="submit" class="btn btn-primary mb-4">Generar PDF</button>
      <!--
      <button type="submit" class="btn btn-primary mb-4">Generar PDF</button>

      <div class="col-12" style="margin-top:2rem; display: flex;justify-content: center;">
          <input class="btn btn-primary" style="width:10rem;" id="send" name="send" type="submit" value="Enviar"><br>
        </div>
      <button type="submit" class="btn btn-primary mb-4">Generar PDF</button>-->


      <!--<div class="col-12" style="margin:2.5rem 0; display: flex;justify-content: center;">
        <input class="btn btn-primary" style="width:10rem;" name="updt" type="submit" id="updt" value="Actualizar">
      </div>-->
      </form>
      
      <?php

    }
       /*
       Faltaría implementar la ventana modal para que mande a consulta de completos o pendientes
       Botón para cerrar sesión
       Mandar los reportes completos a la DB
       */
    }/*
    if(isset($_POST['updt'])){
    
      $solucion = $_POST["solution"];
      $valueid = $_POST["num"];
      //var_dump($valueid);
      //global $id;
      //var_dump($id);
      $queryForUpdated= "UPDATE ReportsPruebas SET solucion = '$solucion' WHERE id_registro = $valueid";
     $ReportUpdatedd= mysqli_query($conexion, $queryForUpdated);
     header("Refresh:1");
     //var_dump($id);
   }*/
      
      ?>
      <div class="contenedor">
      <button type="button" class="btn btn-outline-primary">
        <a href="../../app/Models/exit.php" class="btnexit" style="text-decoration: none;">Cerrar sesión</a>
      </button><br>
      </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!--<script src="../../assets/JS/jspdf.min.js"></script>-->
  <script src="../../jspdf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
  <script src="../../assets/JS/app.js"></script>
</body>
</html>
