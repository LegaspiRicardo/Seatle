<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>   @yield('titulo')</title>

  <link rel="shortcut icon" href="../Imagenes/favicon.jpg">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/website.css') }}">
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script>

    $(document).ready(function(){
      $("#instalaciones").click(function(){
        $(".alberca").fadeOut("2000");
        $(".instalaciones").fadeIn("2000");
      });
    });
  
    $(document).ready(function(){
      $("#alberca").click(function(){
        $(".instalaciones").fadeOut("2000");
        $(".alberca").fadeIn("2000");
      });
    });

    $(document).ready(function(){
      $("#todo").click(function(){
        $(".instalaciones").fadeIn("2000");
        $(".alberca").fadeIn("2000");
      });
    });


</script>



</head>

<body>
<!-------------------------------Header y NavBar------------------------------------------------>
@include ('website.component.header')
<!-------------------------------Main------------------------------------------------>
    @yield('main')
<!-------------------------------Footer------------------------------------------------>
@include ('website.component.footer')

</body>

</html>