<!-- Button trigger modal -->
<a type="button" href="{{url('/alumnos/'.$alumno->id.'/edit')}}" data-toggle="modal" data-target="#exampleModal{{$alumno->id}}">
    <img src="../../../PNGs/editar.png" class="tableIcon text-right ">
</a>


<!----------- Styles----------------->
<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">


<!-- Modal -->
<div class="modal fade" id="exampleModal{{$alumno->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title mx-auto" id="exampleModalLabel">Editar Alumno</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">


                <form data-abide class="needs-validation" novalidate action="/alumnos/{{$alumno->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$alumno->id}}">


                    <!------------------------------------Nombre, Modelo, Marca------------------------------------------>
                    <div class="Subtitulo text-left">
                        <h4>Información personal</h4>
                    </div>

                    <div class="row mt-1">
                        <div class="col-4  mt-3">
                            <div class="col imagen-formulario">
                                <img src="/admin/files/alumnos/{{ $alumno->img }}" id="preview2" src="#" alt="Preview Image" class="img-form-registro mt-2">

                                <input type="file" data-preview-id="preview2" data-position="2" class="form-control btn-input-img" name="img" accept="image/*" >
                            </div>





                            <input type="date" class="form-control mt-2 inputForm" id="validationCustom03" name="fecha_nac" value="{{$alumno->fecha_nac}}" >
                            <label class="col" for="validationCustom01">Fecha nac.</label>
                        </div>

                        <div class="col-8 ml-auto pt-3">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control inputForm" id="validationCustom01" name="nombres" value="{{$alumno->nombres}}" required>
                                    <label class="col" for="validationCustom01">Nombre(s)</label>
                                </div>

                                <div class="col-3 styled-select black rounded ">
                                    <select name="sexo" class="form-control" value="{{$alumno->sexo}}">
                                        <option value="Masculino"> Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value=" {{$alumno->sexo}} " selected hidden><?php echo $alumno->sexo ?> </option>
                                    </select>
                                    <label for="validationCustom02" class=" col borde_inferior">Sexo</label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control inputForm" id="validationCustom01" name="apellido_pat" value="{{$alumno->apellido_pat}}" required>
                                    <label for="validationCustom01">Apellido Paterno</label>
                                </div>

                                <div class="col">
                                    <input type="text" class="form-control inputForm" id="validationCustom02" name="apellido_mat" value="{{$alumno->apellido_mat}}" required>
                                    <label for="validationCustom02">Apellido Materno</label>
                                </div>
                            </div>

                            <!------------------------------------Fecha Ingreso, Tutor------------------------------------------>
                            <div class="form-row">
                                <div class="col-6">
                                    <input type="date" name="fecha_ing" value="<?php echo date("Y-m-d"); ?>" id="validationCustom01" class="form-control" value="{{$alumno->fecha_ing}}" hidden>
                                </div>


                                <div class="col-6 ml-auto">
                                    <input type="search" name="tutor" list="tutors" id="validationCustom01" class="form-control" value="{{$alumno->tutor}}" required>

                                    <datalist id="tutors">
                                        @foreach ($tutores as $tutor)
                                        <option value="{{$tutor->id}}"> {{$tutor->nombre}} </option>
                                        @endforeach
                                    </datalist>

                                    <label for="validationCustom07">Tutor</label>
                                    <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" class="icono_modal">
                                </div>
                            </div>
                        </div>
                    </div>


                    <br>
                    <!------------------------------------Domicilio------------------------------------------>
                    <div class="Subtitulo text-left">
                        <h4 class="d-inline mr-3">Domicilio</h4>
                        <img src="../../../PNGs/ubicacion.png" class="icono_subtitulo" alt="">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control inputForm" id="validationCustom01" name="calle" value="{{$alumno->calle}}" required>
                            <label class="col" for="validationCustom01">Calle</label>
                        </div>

                        <div class="col">
                            <input type="text" class="form-control inputForm" id="validationCustom02" name="numero" value="{{$alumno->numero}}" required>
                            <label class="col" for="validationCustom02">Numero</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control inputForm" id="validationCustom03" name="colonia" value="{{$alumno->colonia}}" required>
                            <label class="col" for="validationCustom03">Colonia</label>
                        </div>

                        <div class="col">
                            <input type="text" class="form-control inputForm" id="validationCustom03" name="cp" value="{{$alumno->cp}}" required>
                            <label class="col" for="validationCustom03">Codigo Postal</label>
                        </div>
                    </div>

                    <br>
                    <br>
                    <!------------------------------------Alberca Info------------------------------------------>
                    <div class="Subtitulo text-left">
                        <h4 class="d-inline mr-3">Alberca Info</h4>
                        <img src="../../../PNGs/tarjeta-de-identificacion.png" class="icono_subtitulo" alt="">
                    </div>
                    <div class="form-row">
                        <div class="col styled-select black rounded ">
                            <select name="alberca" class="form-control" value="{{$alumno->alberca}}">
                                <option value="Sta Tere">Sta Tere</option>
                                <option value="Zapopan">Zapopan</option>
                                <option value="{{$alumno->alberca}}" selected hidden>{{$alumno->alberca}} </option>
                            </select>
                            <label for="validationCustom01" class=" col borde_inferior">Alberca</label>
                        </div>
                        <div class="col">
                            <input type="search" list="levels" autocomplete="off" class="form-control inputForm" value="{{$alumno->nivel}}" id="validationCustom03" name="nivel" required>

                            <datalist id="levels">
                                @foreach ($niveles as $nivel)
                                <option value="{{$nivel->id}}"> {{$nivel->nivel}} </option>

                                @endforeach
                            </datalist>

                            <label class="col" for="validationCustom03">Nivel</label>
                        </div>

                    </div>

                    <div class="form-row">


                        <div class="col-8">
                            <input type="text" class="form-control inputForm" id="validationCustom03" name="comentarios" value="{{$alumno->comentarios}}">
                            <label class="col" for="validationCustom03">Comentarios</label>
                        </div>

                        <div class="col-3 styled-select mx-auto black rounded ">
                            <select name="status" class="form-control" value="{{$alumno->status}}">
                                <option value="Activo">Activo </option>
                                <option value="Pausa">Pausa</option>
                                <option value="Baja">Baja</option>
                                <option value="{{$alumno->status}}" selected hidden>{{$alumno->status}} </option>
                            </select>
                            <label for="validationCustom02" class=" col borde_inferior">Estatus</label>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <input type="submit" class="col-8 btn-actualizar mx-auto pt-1 pb-1" value="Actualizar Alumno">

                <button type="button" class="btn btn-secondary pt-0" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>

            </form>


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


