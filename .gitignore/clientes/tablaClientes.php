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
              <a href="controladorRegistrar.php"
                ><button class="btn btn-success">Registrar</button></a
              >
            </th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <?php /* do {*/
            foreach ($registro as $cliente) {
              $id = $cliente['id']; ?>
            <th><?php echo $cliente['apellidoPaterno'] ?></th>
            <td><?php echo $cliente['apellidoMaterno'] ?></td>
            <td><?php echo $cliente['nombre'] ?></td>
            <td><?php echo $cliente['telefono'] ?></td>
            <td><?php echo $cliente['curp'] ?></td>
            <td>
              <?php setlocale(LC_TIME, 'spanish');
              echo strftime(
                '%d-%b-%Y',
                strtotime($cliente['fechanacimiento'])
              ) ?>
            </td>
            <td><?php echo $cliente['familiares'] ?></td>
            <td><?php echo $cliente['ruta'] ?></td>
            <td><?php echo $cliente['descripcion'] ?></td>
            <td>
              <?php echo "<a href='modificar.php?id=$id'
                ><button class='btn btn-outline-primary'>Modificar</button></a
              >" ?>
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
          <?php 
        } /* while ($registro = mysqli_fetch_array($resultado)); */
        ?>
        </tbody>
      </table>
    </div>