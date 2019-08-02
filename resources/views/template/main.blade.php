<!DOCTYPE html>
<html lang="es">

 <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>@yield('title', 'Default') | DAMC-INGRESO</title>
	    
	    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	    <link rel="stylesheet" href="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}">
	    <link rel="stylesheet" href="{{asset('css/nav-banner.css')}}">
	    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
	    <link rel="stylesheet" href="{{asset('css/nav-tab.css')}}">
	    <link rel="stylesheet" href="{{asset('css/footer.css')}}">


<!--		<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">    -->
        <link rel="stylesheet" href="{{asset('css/fontsgoogleapis.css')}}">

				

</head>

  <body>
   	    <div class="container">
			@include('template.banner')
   	    	@include('template.menu')
   	    		<div class="jumbotron jumbotron-fluid">
							@yield('contenido')	
				</div>
   	    </div>

	    {!! Html::script(asset('jquery/jquery.min.js'))!!}
	    {!! Html::script(asset('jquery/dropdown.js'))!!}
	   
	   <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	   <footer class="footer-base panel-footer jumbotron">
      		  <font color=#ffffff><center>&copy; 2019 DAMC-UJAT - Todos los Derechos Reservados | Última actualización: 26/04/19</center></font>
	   </footer>


  </body>
</html>
