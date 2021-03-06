<?php
class formulario
{
    function cuerpoFormulario($nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $curp, $fechanacimiento, $familiares, $ruta, $descripcion)
    {
        ?>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre(s)</label>
                        <input type="text" autocomplete="off" class="form-control" name=nombre id="exampleFormControlInput1" placeholder="nombre(s)"
                        value="<?php echo $nombre ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Apellido Paterno del Cliente</label>
                        <input type="text" autocomplete="off" class="form-control" name=apellidoPaterno id="exampleFormControlInput1"
                            placeholder="Apellido Paterno" value="<?php echo $apellidoPaterno ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Apellido Materno del Cliente</label>
                        <input type="text" autocomplete="off" class="form-control" name=apellidoMaterno id="exampleFormControlInput1"
                            placeholder="Apellido Materno" value="<?php echo $apellidoMaterno ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Numero de Telefono</label>
                        <input type="tel" autocomplete="off" class="form-control" name=telefono id="exampleFormControlInput1" placeholder="7331234567"
                        value="<?php echo $telefono ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Curp</label>
                        <input type="text" autocomplete="off" class="form-control" name=curp id="exampleFormControlInput1" placeholder="PEGA970710HGRLLL11"
                        value="<?php echo $curp ?>">
                    </div>                    
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
                        <input type="date" autocomplete="off" class="form-control" name=fechanacimiento id="exampleFormControlInput1"
                        value="<?php echo $fechanacimiento ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Familiares</label>
                        <input type="text" autocomplete="off" class="form-control" name=familiares id="exampleFormControlInput1"
                            placeholder="nombre(s) Apellido Paterno Apellido Materno" value="<?php echo $familiares ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ruta</label>
                        <input type="text" autocomplete="off" class="form-control" name=ruta id="exampleFormControlInput1" placeholder="Mex - Tij"
                        value="<?php echo $ruta ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descripción</label>
                        <textarea autocomplete="off" class="form-control" id="descripción" name=descripcion placeholder="Descripción" rows="5"><?php echo $descripcion ?></textarea>
                    </div>
                </div>
            </div>
            <?php

        }
    }
    ?>