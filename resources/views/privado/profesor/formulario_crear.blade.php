<?php //echo $_GET['resultado']; ?>

<!--------------------- Button trigger modal ------------------>
<button type="button" class="btn  btn_tutor_mas" data-toggle="modal" data-target="#exampleModal17">
+
</button>


<!-- <script>
$(document).ready(function(){
$("#exampleModal1").modal('show');
});
</script> -->
<!------------------------ Styles------------------------------->
<link rel="stylesheet" href="{{ asset('css/alumnoPrivado.css') }}">

<style>
  .labels{
          font-family:Sans-serif;
        }
</style>

<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content pl-2 pr-2">
    <div class="modal-header">
      <h3 class="modal-title ml-auto" id="exampleModalLabel">Registro Profesores</h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  <div class="modal-body">
    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3"> <!--------------    NOMBRE INPUT ---------->
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3"> <!--------------    APELLIDOS INPUT ---------->
                            <label for="name" class="col-md-4 col-form-label text-md-end">Apellidos</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>

                                @error('apellidos')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3"> <!--------------    APELLIDOS INPUT ---------->
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--------------    FECHA INGRESO INPUT ---------->
                        <input type="date" name="fecha_ing" value="<?php echo date("Y-m-d"); ?>" id="validationCustom06" class="form-control inputForm" hidden>



                        <!--------------    FECHA INGRESO INPUT ---------->
                        <div class="col-4  mt-3">
                            <input type="date" class="form-control inputForm" id="validationCustom01" name="fecha_nac" required>
                            <label for="validationCustom01" class="labels">Fecha Nacimiento</label>
                        </div>


                        <!--------------    ALBERCA INPUT ---------->
                        <div class="col-6 styled-select black rounded ">
                            <select name="alberca" class="form-control">
                                <option value="Sta Tere">Sta Tere</option>
                                <option value="Zapopan">Zapopan</option>
                                <option value=" " selected hidden> </option>
                            </select>
                            <label for="validationCustom07" class=" col borde_inferior labels">Alberca</label>
                        </div>














                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>






                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
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


</body>
</html>