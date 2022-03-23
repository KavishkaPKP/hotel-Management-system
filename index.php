<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nidella Rest | Select Rooms</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"><link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/hfstyle.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
	body{
		background: #eee;
	}
	.wrapper{
		margin: 80px;
	}
	.form-signin{
		max-width: 750px;
		margin: 0 auto;
		background-color: #fff;
		padding: 15px 40px 50px;
		border: 1px solid #e5e5e5;
		border-radius: 15px;
	}
	.form-signin .form-signin-hedding, .form-signin .checkbox{
		margin-bottom: 30px;
	}
	.form-signin input[type="email"], .form-signin input[type="password"]{
		margin-bottom: 20px;
	}
</style>
</head>
<body>	
<!-- header -->
<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-expand-sm navbar-dark">
				<div class="navbar-header navbar-left ">
					<h1><a class="navbar-brand" href="index.html">NIDELLA <span>REST</span><p class="logo_w3l_agile_caption">Book Your Dream Resort</p></a></h1>
				</div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
					
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <nav class="menu menu--iris">
						<ul class="navbar-nav">
							<li class="menu__item"><a href="#" class="menu__link ">Menu selection</a></li>
							<br>
							<li class="menu__item--current"><a href="#" class="menu__link ">Rooms Manager </a></li>
							<br>
							<li class="menu__item"><a href="#" class="menu__link ">Events Selection</a></li>
							<br>
							<li class="menu__item"><a href="#" class="menu__link ">Hall Selection</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
</div><br>
<br>
	<!-- start form-->
	<div class="wrapper">
		<form class="form-signin">
			<h2 class="form-signin-heading text-center">Sign in</h2> 
			<input type="email" name="adminEmail" class="form-control" id="" placeholder="Manager Email" required="" autofocus="" />
			<input type="password" name="adminPassword" class="form-control" id="" placeholder="MAnager Password" required="" />
			<label class="checkbox">
				<input type="checkbox" value="remember-me" id="adminRememberMe" name="adminRememberMe"/>
				Remember Me
			</label>
			<button class="btn btn-lg btn-primary btn-block"><a href="collectCusDetails.php">Sign in</button>
		</form>
	</div>
<br>
<br>
<!--start footer-->
<footer class="bg-light text-center text-lg-start">
<div class="footer">
    <p>© 2022 NIDELLAREST . All Rights Reserved | Design by <a href="index.php">NIDELLAREST</a> </p>
</div>
</footer>
<!-- Boostrup java scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>