<div class="container">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-tittle">¡Bienvenido!</h5>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="usuario">Nombre de Usuario</label>
                        <input class="form-control" type="text" name=nombreUsuario autocomplete="off" required>
                    </div>
                    <div class="form-group row">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" name=password required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                </div>
                <?php
                $login = new ControladorUsuarios();
                $login->ctrIngresoUsuario();
                ?>
            </form>
        </div>
    </div>
</div> 