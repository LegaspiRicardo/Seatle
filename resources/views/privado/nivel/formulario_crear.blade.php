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
    .labels {
        font-family: Sans-serif;
    }
</style>

<!------------------------------- Modal --------------------------------->
<div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content pl-2 pr-2">
            <div class="modal-header">
                <h3 class="modal-title ml-auto" id="exampleModalLabel">Registrar nivel</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form data-abide class="needs-validation" novalidate action="/niveles" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!------------------------------------Informacion general------------------------------------------>
                    <div class="row mt-1">
                        <div class="col-4  mt-3">
                            <div class="col imagen-formulario">
                                <img src="/PNGs/next-level.png" id="preview2" src="#" alt="Preview Image" class="img-form-registro mt-2">
                            </div>

                            <div class="col imagen-formulario">
                                <input type="file" data-preview-id="preview2" data-position="2" class="form-control btn-input-img" name="img" accept="image/*" required>
                            </div>
                        </div>

                        <div class="col-8 ml-auto pt-3">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control inputForm" id="validationCustom02" name="nivel" required>
                                    <label for="validationCustom02" class="labels">Nombre</label>
                                </div>

                                <div class="col-3 ">
                                    <input type="color" class="form-control inputForm colorPicker " id="validationCustom05" name="color">
                                    <label for="validationCustom05" class="labels">Color</label>
                                    <img src="../../../PNGs/buscar.png" alt="Lupa de busqueda" class="icono_modal">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <textarea class="form-control inputForm" id="validationCustom04" rows="4" cols="50" name="descripcion" required></textarea>
                                    <label for="validationCustom04" class="labels">Descripción</label>
                                </div>


                            </div>



                        </div>
                    </div>

                    <!------------------------------------Modal footer------------------------------------------>
                    <div class="modal-footer">
                        <input type="submit" class=" col-8 btn btn-primary mx-auto" value="Agregar nivel">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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


    <script>
        function previewImage() {
            var input = this;
            var file = input.files[0];
            var position = input.dataset.position;
            var previewId = "preview" + position;
            var preview = document.getElementById(previewId);
            var reader = new FileReader();

            reader.addEventListener("load", function() {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        var inputs = document.getElementsByClassName('btn-input-img');

        for (var i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('change', previewImage, false);
        }
    </script>




    </body>

    </html>