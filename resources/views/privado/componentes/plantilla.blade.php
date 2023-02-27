<!doctype html>
<html lang="en">

@include ('privado.componentes.head')

<body class="container-fluid p-0">

    <!-------------------------------Aside------------------------------------------------>
    <div class="col-2">
        @include ('privado.componentes.aside')
    </div>

    <!-------------------------------Main Big Screen Size------------------------------------------------>
    <div class=" d-none d-lg-block col-10 mx-auto">
        @yield('main')
    </div>

    <!-------------------------------Main Medium Screen Size------------------------------------------------>
    <div class="d-none d-md-block d-lg-none col-10  mx-auto">
        @yield('main')
    </div>

    <!-------------------------------Main Small Screen Size------------------------------------------------>
    <div class="d-md-none d-sm-block  col-12  mx-auto">
        @yield('main')
    </div>




    <!-------------------------------Footer------------------------------------------------>

</body>

</html>