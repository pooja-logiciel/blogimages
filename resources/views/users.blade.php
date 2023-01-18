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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('Profile.css')}}">
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
					<li><a href="{{url('index')}}">home</a></li>
					<li><a href="{{url('upload')}}">upload</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{url('pro')}}">Profile</a></li>
					<li><a href="{{url('logout')}}">logout</a></li>
                    <li><a href="{{url('pro')}}"><img src="{{asset('storage/'.$data[0]['path'])}}" style="width:40px; height:40px; border-radius:40px; "/></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="jumbotron" style="height:250px;">
            <div class="padding">
                <div class="col-md-8">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body little-profile text-center">
                            <div class="pro-img"><img src="{{asset('storage/'.$data[0]['path'])}}" alt="user"></div>
                            <h3 class="m-b-0">{{$data[0]['name']}}</h3>
                            <p>Web Designer &amp; Developer</p>
                            <div class="row text-center m-t-20">
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h3 class="m-b-0 font-light">{{$data[0]['userimage_count']}}</h3><small>Post</small>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h3 class="m-b-0 font-light">{{$follower}}</h3><small>Followers</small>
                                </div>
                                <div class="col-lg-4 col-md-4 m-t-20">
                                    <h3 class="m-b-0 font-light">{{$following}}</h3><small>Following</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="row">
            @foreach ($data[0]['image'] as $row )
            <div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
                    <span><img src="{{asset('storage/'.$data[0]['path'])}}" style="width:50px; height:50px; border-radius:50px; margin:1px 5px 3px 1px;"  /><b>{{$data[0]['name']}}</b></span>
					<img src="{{asset('storage/'.$row['path'])}}" style="width:300px; height:300px "/>
                    <br>
				</div>
			</div>
            @endforeach
	    </div>
	<!-- JQuery CDN -->
	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<!-- JavaScript Bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
