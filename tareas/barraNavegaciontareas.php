<style>
  body {
    padding-top: 80px;
  }
</style>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="../index.php"
    ><font style="vertical-align: inherit;"
      ><font style="vertical-align: inherit;">Davidtours</font></font
    ></a
  >
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarCollapse"
    aria-controls="navbarCollapse"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php"
          ><font style="vertical-align: inherit;"
            ><font style="vertical-align: inherit;">Inicio </font></font
          ><span class="sr-only"
            ><font style="vertical-align: inherit;"
              ><font style="vertical-align: inherit;">(actual)</font></font
            ></span
          ></a
        >
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Tareas.php"
          ><font style="vertical-align: inherit;"
            ><font style="vertical-align: inherit;">Tareas</font></font
          ><span class="sr-only"
            ><font style="vertical-align: inherit;"
              ><font style="vertical-align: inherit;">(actual)</font></font
            ></span
          ></a
        >
      </li>
    </ul>
    <form
      action="consultaBuscar.php"
      method="GET"
      class="form-inline mt-2 mt-md-0"
    >
      <input
        class="form-control mr-sm-2"
        for="caja_busqueda"
        type="text"
        placeholder="Buscar"
        aria-label="Search"
        name="palabraBuscada"
        autocomplete="off"
      />
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
        <font style="vertical-align: inherit;"
          ><font style="vertical-align: inherit;">Buscar</font></font
        >
      </button>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../cerrarSesion.php"
          ><font style="vertical-align: inherit;"
            ><font style="vertical-align: inherit;">Cerrar sesion </font></font
          ><span class="sr-only"
            ><font style="vertical-align: inherit;"
              ><font style="vertical-align: inherit;">(actual)</font></font
            ></span
          ></a
        >
      </li>
      </ul>
    </form>
  </div>
</nav>
