<?php 
require('funciones.php');
$obj = new funciones();
$obj->verificar_sesion(); ?> <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Davidtours</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/bootstrap.min.css"
    />
  </head>

  <body>
    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="text-center">
            <font style="vertical-align: center;">
              <font style="vertical-align: center;">¡DavidTours!</font>
            </font>
          </h1>
          <p class="text-center">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Agencia de Viajes.</font>
            </font>
          </p>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col">
            <h2>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Clientes</font>
              </font>
            </h2>
            <p>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"
                  >Aqui Puedes Registar, Consultar o Borrar todos los datos de
                  un cliente en especifico.</font
                >
              </font>
            </p>
            <p>
              <a
                class="btn btn-primary btn-lg"
                href="clientes/vistas/consultaClientes.php"
                role="button"
              >
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Clientes</font>
                </font>
              </a>
            </p>
          </div>
          <div class="col">
            <h2>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Tareas</font>
              </font>
            </h2>
            <p>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"
                  >Aqui Puedes Crear o Consultar todas las tareas que te faltan
                  por hacer ¡Que no se te olvide nunguna!.</font
                >
              </font>
            </p>
            <p>
              <a class="btn btn-primary btn-lg" href="tareas/consultaTareas.php" role="button">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Tareas</font>
                </font>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- /container -->
    </main>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>