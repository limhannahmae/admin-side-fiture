<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Upload</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<br>
<div class="col-lg-offset-4 col-lg-4"> 
<center><h1>Upload a file</h1></center>
<form action="{{url('/store')}}" enctype="multipart/form-data" method="post">
 {{ csrf_field() }}
	<input type="file" name="image">
	<br>
	<input type="submit" value="Upload">
	</form>
		</div>
</body>
</html>