<!DOCTYPE html>
<html>
<head>
	<title>My Gallery</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ url(elixir('css/all.css')) }}">
	<script type="text/javascript">
		var baseUrl = "{{ url('/') }}";
	</script>
</head>
<body>

  

  <div class="container">
  	@yield('content')
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/vendor/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/vendor/lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ url( elixir('js/all.js') ) }}">
  	</script>
</body>
</html>