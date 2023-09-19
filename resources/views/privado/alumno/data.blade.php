<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">

<style>
    .tableIcon {
        width: 17%;
    }
</style>


<!-- ///////////////////////////////////////////////////////////////////// -->
<!-- --------BIGGER screen size card body   -------------->
<div class="row d-none d-md-block d-xl-flex col-11 ml-auto">
    @foreach ($alumnos as $alumno)
    <div class="card col-6 mx-auto mt-3">
        <!-- --------Bigger screen size card body -------------->
        <div class="card-body pb-0 mb-3 ">

            <div class="row ">
                <div class="col-3">
                    <img src="/admin/files/alumnos/{{$alumno->img}}" alt="" class="imagen text-center p-0">
                </div>

                <div class="col-8 mt-2 ml-auto">
                    <div class="row text-center ">
                        <h5 class="card-title mb-3 pb-0 "> {{$alumno->nombres}} {{$alumno->apellido_pat}} {{$alumno->apellido_mat}} </h5>
                        <!----------- Class Title---------->
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
        <!-- --------Footer -------------->
        <div class="card-footer p-0 bg-transparent ">
            <div class="row col mt-2 mb-2 px-0">


                <div class="col-3 text-center mr-auto p-0">
                    @include ('privado.alumno.edit')
                </div>


                <div class="col-3 text-right p-0">
                    @include ('privado.alumno.read')
                </div>






            </div>

        </div>

    </div>
    @endforeach
</div>




<!-- ///////////////////////////////////////////////////////////////////// -->
<!-- --------Smaller screen size card body  SWIPER -------------->
<div class="row p-0 mb-0 ">
    <!-- Swiper Cards-->
    <div class="swiper mySwiper d-block d-md-none">

        <div class="swiper-wrapper">

            @foreach ($alumnos as $alumno)
            <div class="swiper-slide col-12  ">
                <div class="card col-12 mx-auto">

                    <!-- --------Smaller screen size card body -------------->
                    <div class="card-body d-block d-md-none mb-3 px-1">
                        <div class="row mb-2 text-center">
                            <div class="col-10 mx-auto d-xl-none ">
                                <div class="col-12 p-0">
                                    <img src="/admin/files/alumnos/{{$alumno->img}}" alt="" class="swiper-img text-center p-0">
                                </div>
                            </div>
                        </div>

                        <div class="row col-12 mx-auto mb-1 p-0">
                            <div class="col-12 mb-1 p-0 text-center">
                                <h5 class="card-title pb-0"> {{$alumno->nombres}} {{$alumno->apellido_pat}} {{$alumno->apellido_mat}}</h5>
                            </div>
                        </div>

                        <div class="row col-12 mx-auto mb-3 p-0">
                            <a href="#" class="nivel col-3 text-center pb-1 mb-0 ">{{$alumno->nivel}} </a>
                            <p class="mb-0 numeroId col-7"># <b>1955</b></p>
                        </div>


                        <div class="row m-0 text-start">
                            <h6 class="card-text mb-0 p-0 ">Clases: </h6>
                        </div>


                        <div class="row mb-0 mx-auto ">
                            <ul class="p-0 col-12 text-left">
                                <!---------------- Crear un for each para cada clase particular asignada al alumno---------->
                                <li class="mb-0 col-12 p-0 text-start">Lu. 4:00 - 4:30 <p class="card-text mb-0 ml-3 d-inline">Daniel. </p>
                                </li>
                                <li class="mb-0 col-12 p-0 text-start">Mie. 5:00 - 5:30 <p class="card-text mb-0 ml-2 d-inline">Fernanda. </p>
                                </li>
                                <li class="mb-0 col-12 p-0 text-start">Sab. 10:00 - 10:30 <p class="card-text mb-0 ml-3 d-inline">Rolando. </p>
                                </li>
                            </ul>

                        </div>

                        <div class="row p-0 m-0 mb-0 mx-auto text-left">
                            <h6 class="card-text text-left mb-0 d-inline mr-3">Fecha de pago: </h6>
                            <p class="pago text-center">{{$alumno->fecha_nac}} </p>
                            <!---------------- Crear un for each para cada profesor asignado al alumno---------->


                        </div>


                    </div>

                    <!-- --------Footer -------------->
                    <div class="card-footer mt-4 p-0 bg-transparent ">
                        <div class="row col-8 ml-auto mb-2 px-0">




                            <div class="col text-center p-0">
                                @include ('privado.alumno.read')
                            </div>


                            <div class="col text-center p-0">
                                @include ('privado.alumno.edit')
                            </div>




                        </div>


                    </div>



                </div>
            </div>
            @endforeach

        </div>
    </div>


</div>










<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper SMALL SCREEN SIZE-->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

<!-- Initialize Swiper MEDIUM SCREEN SIZE 
<script>
  var swiper = new Swiper(".mySwiper1", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 10,
    mousewheel: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>-->


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