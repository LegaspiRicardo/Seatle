<aside>
  <div class="">
    <div class="row d-none d-md-block d-print-block">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item ">
              <a class="nav-link mb-3" href="{{ route('panel-control') }}">
                <img src="../../../PNGs/hogar.png" alt="" class="icon-sideBar mr-2">
                <h5> Inicio </h5>
              </a>
            </li>
            <li>
              <a class="nav-link " href="{{ route('alumnos') }}">
                <img src="../../../PNGs/nadador.png" alt="" class="icon-sideBar mr-2">
                <h5> Alumnos </h5>
              </a>
            </li>
            <li class="pl-4 "><a class="nav-items " href="../dashboard/index.php"> Registrar Nuevo </a></li>
            <li class=" pl-4 "><a class="nav-items " href="../alumno/index.php"> Registrar Pago </a></li>
            <li class="pl-4 mb-3"><a class="nav-items" href="../alumno/index_baja.php"> Ver ex alumnos </a></li>

            <li>
              <a class="nav-link " href="../alumno/index.php">
                <img src="../../../PNGs/grupo.png" alt="" class="icon-sideBar mr-2">
                <h5> Grupos </h5>
              </a>
            </li>
            <li class="pl-4 "><a class="nav-items " href="../dashboard/index.php"> Ver todos </a></li>
            <li class=" pl-4 mb-3"><a class="nav-items " href="../alumno/index.php"> Crear Nuevo </a></li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('profesores') }}">
                <img src="../../../PNGs/silbar.png" alt="" class="icon-sideBar mr-2">
                <h5> Profesores </h5>
              </a>
            </li>
            <li class=" pl-4 "><a class="nav-items " href="../alumno/index.php"> Registrar Nuevo </a></li>
            <li class="pl-4 "><a class="nav-items" href="../alumno/index.php"> Actualizar Profesor </a></li>
            <li class="pl-4 mb-3"><a class="nav-items" href="../alumno/index.php"> Dar de Baja </a></li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('tutores') }}">
                <img src="../../../PNGs/tutor.png" alt="" class="icon-sideBar mr-2">
                <h5> Tutores </h5>
              </a>
            </li>
            <li class="pl-4 "><a class="nav-items " href="../alumno/index.php"> Registrar Nuevo </a></li>
            <li class="pl-4 mb-4 "><a class="nav-items" href="../alumno/index.php"> Actualizar Tutor </a></li>



            <li class="nav-item mb-3">
              <a class="nav-link" href="{{ route('niveles') }}">
                <img src="../../../PNGs/next-level.png" alt="" class="icon-sideBar mr-2">
                <h5> Niveles </h5>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="../mensualidad/index.php">
                <img src="../../../PNGs/monedas.png" alt="" class="icon-sideBar mr-2">
                <h5> Pagos </h5>
              </a>
            </li>

            <li class="nav-item mt-5">
              <a class="nav-link " href="../../../../back_end/controladores/profesor_controlador.php?opcion=5">
                <img src="../../../PNGs/logout.png" alt="" class="icon-sideBar mr-2">
                <h5> Cerrar sesión </h5>
              </a>
            </li>





          </ul>


        </div>
      </nav>
    </div>
  </div>
</aside>