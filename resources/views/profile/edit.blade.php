
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
</head>
 <style>
 	body {
	background-image: url('https://images.unsplash.com/photo-1491582325207-80d06869fb3d?dpr=1&auto=compress,format&fit=crop&w=755&h=&q=80&cs=tinysrgb&crop=');
	background-size: cover;
	background-position: center;
	padding-top: 70px;

}
/* Header Area */
.navbar {
	background-color: #000;
	color: #fff;
	border: 1px solid #fff;
}

.navbar-collapse .navbar-nav>li>a {
	color: #fff;
}
.navbar-default .navbar-brand{
	color: #fff;
}

/* Container Area */
.jumbotron {
	color: #2c3e50;
	background-color: #ecf0f1;
	border: 1px solid #D6DBDF;
	margin-top: 10px;
}
 </style>
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
					<li><a href="upload">upload</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile">Profile</a></li>
					<li><a href="logout">logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
	<!-- JQuery CDN -->
	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<!-- JavaScript Bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
