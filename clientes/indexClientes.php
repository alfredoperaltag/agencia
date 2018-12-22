<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Davidtours | Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="../css/bootstrap.min.css"
    />
  </head>

  <body>
    <?php require 'barraNavegacionClientes.php'; ?>

    <div class="container-fluid">
      <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">Paterno</th>
            <th scope="col">Materno</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Curp</th>
            <th scope="col">Nacimiento</th>
            <th scope="col">Familiares</th>
            <th scope="col">Ruta</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
            <th scope="col">
              <a href="registrar.php"
                ><button class="btn btn-success">Registrar</button></a
              >
            </th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <?php do { $id = $registro['id']; ?>
            <th><?php echo $registro['apellidoPaterno'] ?></th>
            <td><?php echo $registro['apellidoMaterno'] ?></td>
            <td><?php echo $registro['nombre'] ?></td>
            <td><?php echo $registro['telefono'] ?></td>
            <td><?php echo $registro['curp'] ?></td>
            <td>
              <?php setlocale(LC_TIME, 'spanish'); echo strftime('%d-%b-%Y',
              strtotime($registro['fechanacimiento']))?>
            </td>
            <td><?php echo $registro['familiares'] ?></td>
            <td><?php echo $registro['ruta'] ?></td>
            <td><?php echo $registro['descripcion'] ?></td>
            <td>
              <?php echo "<a href='modificar.php?id=$id'
                ><button class='btn btn-outline-primary'>Modificar</button></a
              >"?>
            </td>
            <td>
              <button
                class="btn btn-outline-danger"
                onclick="confirmar(<?php echo $id ?>)"
              >
                Eliminar
              </button>
            </td>
          </tr>
          <?php } while ($registro = mysqli_fetch_array($resultado));
          mysqli_close($conexion); ?>
        </tbody>
      </table>
    </div>

    <script>
      function confirmar(id) {
        if (confirm("¿Estas seguro de eliminarlo?")) {
          window.location.href = "eliminarClientes.php?id=" + id;
        }
      }
    </script>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
