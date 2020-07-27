<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" href="{{asset('css/inventario.css')}}">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <script src="{{asset('js/app.js')}}" defer></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
   <title>Inventario | Agregar producto</title>
</head>
<body>
   
   <div id="app">
      <inventario></inventario>
     <invaddproducto></invaddproducto>
      <footadmin></footadmin>
   </div>

</body>
</html>




