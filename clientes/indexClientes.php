<!DOCTYPE html>
<html>
  <?php
  $obj = new funciones;
  $obj->head("Clientes");
  ?>
  <body>
    <?php 
    require 'barraNavegacionClientes.html';
    require "../tablaClientes.php";
    ?>    

    <script>
      function confirmar(id) {
        if (confirm("¿Estas seguro de eliminarlo?")) {
          window.location.href = "eliminarClientes.php?id=" + id;
        }
      }
    </script>

    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
