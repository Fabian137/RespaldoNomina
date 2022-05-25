<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header style="height: 15vh; background-color: rgb(232, 230, 224);">

                <div class="center contenedor" style="justify-content: space-between; align-items: center;">
                    <!--<div class="musirech"><a href="index.html"><h1>MUSIRECH</h1></a></div>-->
                    <a href="" class="logo"></a>
                    <h6>Documento Alimentorio de Movimiento de Personal
                        <br> Incorporación con Licencia
                    </h6>
                
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                          <img class="login-img" src="assets/img/menu.svg" alt="menu icon">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                          <li><a class="dropdown-item active" href="#"></a></li>
                          <li><a class="dropdown-item" href="Models/s-interfaz.php">DAMPA</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                      </div>
                </div>

    </header>

    <form class="contenedor" action="user.php" method="post" style="margin-top:1rem;" autocomplete="off" >
        <section class="row g-3" style="margin-top: 1.5rem;">
            <h6 style="text-align: center;">DATOS EMPLEADOS</h6>
            
            <div class="col-md" style="margin-top:1rem; display: flex; align-content: center;">
                <label style="margin:0;" for="validationDefault04" class="form-label">Unidad Administrativa</label>
                <select class="form-select" name="area" id="">
                  <option value="Coordinación de recursos materiales">DIRECCIÓN GENERAL JURÍDICA Y DE ESTUDIOS LEGISLATIVOS</option>
                  <option value="Coordinación de recursos materiales">DIRECCIÓN GENERAL DE SERVICIOS LEGALES</option>
                  <option value="Órgano interno de control">DIRECCIÓN GENERAL DEL REGISTRO CÍVIL</option>
                  <option value="Jefatura de abastecimientos y tecnologías">DIRECCIÓN GENERAL DEL REGISTRO PÚBLICO DE LA PROPIEDAD Y DE COMERCIO</option>
                  <option value="Financieros">DIRECCIÓN GENERAL DE REGULARIZACIÓN TERRITORIAL</option>
                  <option value="Dirección">DIRECCIÓN EJECUTIVA DE JUSTICIA CÍVICA</option>
                </select>
              </div>


            <div class="col-md-12 top-space-labels form-inline">
              <label for="validationDefault04" class="form-label">Nombre del Empleado</label>
              <input type="text" class="form-control" style="width:95%;" id="" name="" required>
            </div>

            <div class="col-md-6 top-space-labels form-inline">
                <label for="validationDefault04" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="" name="" required>
            </div>
            <div class="col-md-6 top-space-labels form-inline">
                <label for="validationDefault04" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="" name="" required>
            </div>

            <div class="col-md-4 top-space-labels form-inline">
              <label for="validationDefault04" class="form-label">Num Plaza</label>
              <input type="text" class="form-control" id="" name="" required>
            </div>
            <div class="col-md-4 top-space-labels form-inline">
                <label for="validationDefault04" class="form-label">Situación PZA</label>
                <input type="text" class="form-control" id="" name="" required>
            </div>
            <div class="col-md-3 top-space-labels form-inline">
                <label for="validationDefault04" class="form-label">Tipo Nomina</label>
                <input type="text" class="form-control" id="" name="" required>
            </div>

            <div class="row justify-content-evenly">

              <div class="col-md-4 top-space-labels form-inline">
                <label class="form-label" for="start">Fecha Inicio</label>
                <input class="form-control" type="date" id="date" name="date" min="2022-01-01" max="2025-12-31" required> 
              </div>
              <div class="col-md-4 top-space-labels form-inline">
                <label class="form-label" for="start">Fecha Fin</label>
                <input class="form-control" type="date" id="" name="" min="2022-01-01" max="2025-12-31" required> 
              </div>
              <div class="col-md-3 top-space-labels form-inline">
                <label for="validationDefault04" class="form-label">Situación POST*</label>
                <input type="text" class="form-control" id="" name="" required>
              </div>
            </div>

            <div class="col-md-3 top-space-labels form-inline">
              <label for="validationDefault04" class="form-label">Código de movimiento</label>
              <input type="text" class="form-control" id="" name="" required>
            </div>
        </section>

        <section class="row g-3" style="margin-bottom: 2rem;">
          <h6 style="margin-top: 2rem; text-align: center;">DATOS PLAZA INACTIVA</h6>

          <div class="col-md-4 top-space-labels form-inline">
            <label for="validationDefault04" class="form-label">Num Plaza</label>
            <input type="text" class="form-control" id="" name="" required>
          </div>
          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Fecha Inicio</label>
            <input class="form-control" type="date" id="" name="" min="2022-01-01" max="2025-12-31" required> 
          </div>
          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Fecha Fin</label>
            <input class="form-control" type="date" id="" name="" min="2022-01-01" max="2025-12-31" required> 
          </div>
          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Situación Empleado*</label>
            <input class="form-control" type="text" id="" name="" required> 
          </div>
        </section>

        <section class="row g-3" style="margin-bottom: 2rem;">
          <h6 style="margin-top: 2rem; text-align: center;">DATOS DE FASES DE ALTA</h6>

          <div class="col-md-4 top-space-labels form-inline">
            <label for="validationDefault04" class="form-label">Tipo contratación</label>
            <input type="text" class="form-control" id="" name="" required>
          </div>
          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Fin Contrato</label>
            <input class="form-control" type="" id="" name="" min="2022-01-01" max="2025-12-31" required> 
          </div>
          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Centro de trabajo</label>
            <input class="form-control" type="text" id="" name="" required> 
          </div>

          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Situación Empleado*</label>
            <input class="form-control" type="text" id="" name="" required> 
          </div>
          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Zona Pagadora</label>
            <input class="form-control" type="text" id="" name="" required> 
          </div>
          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Empresa</label>
            <input class="form-control" type="text" id="" name="" required> 
          </div>

          <div class="col-md-4 top-space-labels form-inline">
            <label class="form-label" for="start">Grado</label>
            <input class="form-control" type="text" id="" name="" required> 
          </div>
        </section>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>