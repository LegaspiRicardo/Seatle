
<header >
    <nav class="navbar ">
      <div class="nav-top">
        <a href="{{ route('EscuelaNatacionSeattle') }}" class="titulo ml-3">
            <img src="Imagenes/logo.jpg" class="logo-header  d-none d-sm-inline" alt="">
            <h4 class="ml-2"> Escuela de natación Seattle Santa Tere</h4> 
        </a>
        
        <input type="checkbox" class="nav-checkbox" id="nav-checkbox">
        <label for="nav-checkbox" class="nav-toogle">
          <img src="PNGs/menu.png" alt="" class="icono">
        </label>
        <ul class="navbar-na ">
          <li><a href="{{ route('servicios') }}" class="nav-link "> Servicios </a></li>
          <li><a href="{{ route('galeria') }}" class="nav-link "> Galería </a></li>
          <li><a href="{{ route('ubicacion') }}" class="nav-link "> Ubicación </a></li>
          <li><a href="{{ route('contacto') }}"class="nav-link">Contacto</a></li>
          <li><a href="https://www.facebook.com/seattlesantatere/"  class="nav-link "> <img src="PNGs/facebook-logo.png" alt="" class="facebook"></a></li>
        </ul>
      </div>
    </nav>
    </div>
    
  </header>