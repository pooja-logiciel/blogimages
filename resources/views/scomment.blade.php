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
    <link rel="stylesheet" href="first.css">
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
				    <li><a href="index">home</a></li>
					<li><a href="upload">upload</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile">Profile</a></li>
					<li><a href="logout">logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <div class="container">
		<div class="jumbotron">
			<h1><i class="fa fa-camera-retro"></i> My Image Gallary</h1>
			<p>Just a Gallary Full of Beautiful Images... </p>
		</div>
    </div>
    <div style="width:1000px; margin:auto;">
        <div class="container">
            <div class="row" style="height:200px; width:1000px; background:#D3D3D3;">
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description" style="width:50px; height:50px; border-radius:50px;">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                            <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                        </div>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        <div class="form-outline mb-4">
                            <form method="post" action="{{url('submitcomment')}}">
                                @csrf
                                <input type="text" name="addANote" class="form-control" placeholder="+ Add a note" />
                                <input  type="submit" value="sent" style="float:right; margin-top:-31px; border-color:#D3D3D3" />
                            </form>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="row" style="height:150px; width:1000px; background:#D3D3D3;">
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description" style="width:50px; height:50px; border-radius:50px;">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                        <div class="g-mb-15">
                            <h5 class="h5 g-color-gray-dark-v1 mb-0">John Doe</h5>
                        </div>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!-- JQuery CDN -->
	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<!-- JavaScript Bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
