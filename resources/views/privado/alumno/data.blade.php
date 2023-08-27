<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">



<style>
  .tableIcon {
    width: 17%;
  }
</style>


<div class="row">
  @foreach ($alumnos as $alumno)
  <div class="card col-6 mt-3 mx-auto">
    <!-- --------Bigger screen size card body -------------->
    <div class="card-body pb-0 mb-3 d-none d-xl-block">

      <div class="row ">
        <div class="col-3 d-none d-xl-block">
          <img src="/admin/files/alumnos/{{$alumno->img}}" alt="" class="imagen text-center p-0">
        </div>

        <div class="col-8 mt-2 ml-auto">
          <div class="row text-center ">
            <h5 class="card-title mb-3 pb-0 "> {{$alumno->nombres}} {{$alumno->apellido_pat}} {{$alumno->apellido_mat}} </h5>
            <!----------- Titulo clases---------->

            <ul class="col-5 p-0 ml-5 text-left">
              <h6 class="card-text  text-left">Clases: </h6>
              <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
              <li class="mb-0 d-inline">Lu. 4:00 - 4:30 </li>
              <li class="mb-0 ">Mie. 5:00 - 5:30 </li>
              <li class="mb-0 ">Sab. 10:00 - 10:30</li>
            </ul>

            <div class="col-4 p-0 m-0 ">
              <h6 class="card-text text-center titulo-profesor mb-0">Profe: </h6>
              <!---------------- Crear un for each para cada profesor asignado al alumno---------->
              <p class="card-text mb-0 profesor text-right ">Daniel </p>
              <p class="card-text mb-0 profesor text-right ">Rolando </p>
            </div>

          </div>
        </div>
      </div>

      <div class="row ">
        <a href="#" class="nivel col-3 text-center pt-1 mb-0 ml-3">{{$alumno->nivel}} </a>
        <div class="col-8 ml-5 mt-2  mx-auto">
          <h6 class="d-inline">Fecha de pago: </h6>
          <p class="d-inline pago">{{$alumno->fecha_nac}} </p>
        </div>
      </div>

    </div>

    <!-- --------Medium screen size card body -------------->
    <div class="card-body d-none d-md-block d-xl-none">
      <div class="row mb-2 text-center">
        <div class="col-2 mr-auto d-xl-none">
          <img src="/admin/files/alumnos/{{$alumno->img}}" alt="" class="imagen text-center p-0">
        </div>


        <div class="col-8 mb-1 p-0">
          <h5 class="card-title pb-0 "> {{$alumno->nombres}} {{$alumno->apellido_pat}} {{$alumno->apellido_mat}}</h5>
          <p class="mb-0"># <b>{{$alumno->id}}</b></p>
        </div>
      </div>

      <div class="row p-0 mx-auto ">

        <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
        <ul class="p-0 col-9 text-center">
          <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
          <li class="mb-0 col-10 p-0 text-center">Lu. 4:00 - 4:30 </li>
          <li class="mb-0 col-10 p-0 text-center">Mie. 5:00 - 5:30 </li>
          <li class="mb-0 col-10 p-0 text-center">Sab. 10:00 - 10:30</li>
        </ul>

      </div>

      <div class="row p-0 m-0 mb-3 mx-auto text-left">
        <h6 class="card-text text-left mb-0 d-inline mr-3">Profe: </h6>
        <!---------------- Crear un for each para cada profesor asignado al alumno---------->
        <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p>
        <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p>
      </div>


      <div class="row">
        <div class="col-6 mr-auto p-0">
          <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">{{$alumno->nivel}} </a>
        </div>
        <div class="col-6 ml-auto p-0">
          <h6 class="">Fecha de pago: </h6>
          <p class="pago text-center mb-0">{{$alumno->fecha_nac}} </p>
        </div>
      </div>

    </div>

    <!-- --------Footer -------------->
    <div class="card-footer p-0 bg-transparent ">
      <div class="row col-6 ml-auto mb-2 px-0">




        <div class="col text-center p-0">
          @include ('privado.alumno.read')
        </div>


        <div class="col text-center p-0">
          @include ('privado.alumno.edit')
        </div>




      </div>

      <div class="row text-center">
        <div class="col-11 mx-auto">
          <div class="collapse multi-collapse" id="multiCollapseExample3">
            <div class="card card-body p-2  text-center">
              <h6 class="mb-0">Cumpleaños:</h6>
            </div>
          </div>
        </div>
      </div>

    </div>



  </div>
  @endforeach
</div>



<!-- --------Smaller screen size card body -------------->
<div class="row p-0">
  <!-- Swiper Cards-->
  <div class="swiper mySwiper d-block d-sm-none">

    <div class="swiper-wrapper">

      @foreach ($alumnos as $alumno)
      <div class="swiper-slide col-12  ">
        <div class="card col-12 mt-3 mx-auto">

          <!-- --------Smaller screen size card body -------------->
          <div class="card-body d-block d-sm-none">
            <div class="row mb-2 text-center">
              <div class="col-10 mx-auto d-xl-none ">
                <div class="col-12 p-0">
                  <img src="/admin/files/alumnos/{{$alumno->img}}" alt="" class="imagen text-center p-0">
                </div>
              </div>
            </div>

            <div class="row col-12 mx-auto">
              <div class="col-12 mb-1 p-0 text-center">
                <h5 class="card-title pb-0"> {{$alumno->nombres}} {{$alumno->apellido_pat}} {{$alumno->apellido_mat}}</h5>
              </div>
            </div>

            <div class="row col-12 mx-auto mb-4">
                <a href="#" class="nivel col-3 text-center pb-1 mb-0 ml-3">{{$alumno->nivel}} </a>
                <p class="mb-0 numeroId col-6"># <b>{{$alumno->id}}</b></p>
            </div>




            <div class="row p-0 mx-auto ">

              <h6 class="card-text mb-0 p-0 text-left col-3 d-inline">Clases: </h6>
              <ul class="p-0 col-9 text-left">
                <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
                <li class="mb-0 col-10 p-0 text-start">Lu. 4:00 - 4:30                <p class="card-text mb-0 ml-2 text-center d-inline">Daniel. </p></li>
                <li class="mb-0 col-10 p-0 text-start">Mie. 5:00 - 5:30               <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p> </li>
                <li class="mb-0 col-10 p-0 text-start">Sab. 10:00 - 10:30             <p class="card-text mb-0 ml-2 text-center d-inline">Rolando. </p></li>
              </ul>

            </div>

            <div class="row p-0 m-0 mb-3 mx-auto text-left">
              <h6 class="card-text text-left mb-0 d-inline mr-3">Fecha de pago: </h6>
              <p class="pago text-center mb-4">{{$alumno->fecha_nac}} </p>
              <!---------------- Crear un for each para cada profesor asignado al alumno---------->


            </div>


          </div>











          <!-- --------Footer -------------->
          <div class="card-footer mt-5 p-0 bg-transparent ">
            <div class="row col-6 ml-auto mb-2 px-0">




              <div class="col text-center p-0">
                @include ('privado.alumno.read')
              </div>


              <div class="col text-center p-0">
                @include ('privado.alumno.edit')
              </div>




            </div>

            <div class="row text-center">
              <div class="col-11 mx-auto">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                  <div class="card card-body p-2  text-center">
                    <h6 class="mb-0">Cumpleaños:</h6>
                  </div>
                </div>
              </div>
            </div>

          </div>



        </div>
      </div>
      @endforeach

    </div>
  </div>


</div>






<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>