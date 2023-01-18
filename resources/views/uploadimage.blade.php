<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>image gallery</title>
</head>
<body>
   <html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Gallary</title>
	<link rel="shortcut icon" href="../img/star.png" type="image/png">
	<!-- Bootstrap CDN down below -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
					<span class="sr-only"> Toggle navigation </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> IMGS</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="index">home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="pro">Profile</a></li>
					<li><a href="logout">logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="jumbotron">
			<h1><i class="fa fa-camera-retro"></i> New Post</h1>
            <br>
            <form method="POST" action="{{url('postupload')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Description</label>
                    <input type="text" name="details" class="form-label" />
                </div>
                <div class="form-outline mb-4">
                    {{-- <label class="form-label" for="form4Example3">Description</label> --}}
                    <input type="file" name="image" class="form-label" />
                </div>
                <!-- Submit button -->
                <br>
                <label>Private</label>
                <input type="checkbox" name="check" value="1">
                 <br>
                <button type="submit" class="btn btn-primary ">Upload Image</button>
            </form>
		</div>
	<!-- JQuery CDN -->
	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<!-- JavaScript Bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
