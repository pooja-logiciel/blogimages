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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
				<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>IMGS</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="upload">upload</a></li>
                    <li><a href="trend">trend</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="pro">Profile</a></li>
					<li><a href="logout">logout</a></li>
                    <li><a href="pro"><img src="" style="width:40px; height:40px; border-radius:40px; "/></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="jumbotron">
			<h1><i class="fa fa-camera-retro"></i> My Image Gallary</h1>
			<p>Just a Gallary Full of Beautiful Images... </p>
		</div>
		<div class="row">
            @foreach ($data as $row )
            @php
            echo "<pre>";
                print_r($row);
                echo "</pre>";
        @endphp
			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
                    <span><img src="{{asset('storage/'.$row['path'])}}" style="width:50px; height:50px; border-radius:50px; margin:1px 5px 3px 1px;"  />
                        <a href="demo/"><b></b></a>
                        @if ()
                        <a href="follower/">Follow</a>
                        @endif
                    </span>
					<img src="" style="width:300px; height:300px "/>
                    <a href="view/"><span class="material-symbols-outlined" style="margin: 0px 0px 0px 10px;">visibility</span></a>
                    <b></b>
                    <a href="favt/"><span class="material-symbols-outlined" style="margin: 10px 0px 0px 250px;">heart_plus</span></a>
				</div>
			</div>
	    </div>
        @endforeach
	<!-- JQuery CDN -->
	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<!-- JavaScript Bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
</body>
</html>
