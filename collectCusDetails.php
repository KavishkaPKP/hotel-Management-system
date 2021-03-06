
	<title>Nidella Rest | Collect Customer Details</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"><link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/hfstyle.css" rel="stylesheet" type="text/css" media="all" />
<style  type="text/css">
body{
		background: #eee;
	}
	.wrapper{
		margin: 80px;
	}
	.form-group .form-group-hedding, .form-group {
		margin-bottom: 30px;
	} */
	.form-group input[type="email"], .form-group input[type="password"], .form-group input[type="number"] , .form-group input[type="Address"], .form-group input[type="date"], .form-group input[type="submit"]{
		margin-bottom: 50px;
	}
</style>



</head>
<body>	
<!-- header -->
<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-expand-sm navbar-dark">
				<div class="navbar-header navbar-left ">
					<h1><a class="navbar-brand" href="index.php">NIDELLA <span>REST</span><p class="logo_w3l_agile_caption">Book Your Dream Resort</p></a></h1>
				</div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
					
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <nav class="menu menu--iris">
						<ul class="navbar-nav">
							<li class="menu__item--current"><a href="collectCusDetails.php" class="menu__link ">Booking Rooms</a></li>
							
							<li class="menu__item"><a href="checkedCus.php" class="menu__link ">Checked Customers</a></li>

							<li class="nav-item navbar-nav dropdown menu__item">
								<a class="nav-link dropdown-toggle menu__link menu__item" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
									Manager Options
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="addRoom.php">Add Room</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="managerDetails.php">Manager Details</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="roomGalary.php">Room Galary</a>
								</div>
      						</li>
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
	<h2 class="form-signin-heading text-center"><b>Collect Customer Details</b></h2> 
	
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Customer NIC</label>
      <input type="email" class="form-control" id="cusNIC" required autofocus="" />
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Customer Name</label>
      <input type="password" class="form-control" id="cusName" required />
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Number of members</label>
      <input type="number" class="form-control" id="cusNOMember" required />
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Customer Address</label>
      <input type="Address" class="form-control" id="cusAddress" required />
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date Of Birth</label>
      <input type="date" class="form-control" id="cusDateOfBirth" required />
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Contect Number</label>
      <input type="number" class="form-control" id="cusContectNumber" required />
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Checkin Date</label>
      <input type="date" class="form-control" id="cusCheckinDate" required />
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Checkout Date</label>
      <input type="Date" class="form-control" id="cusCheckoutDate" required />
    </div>
  </div>
  <button id="collectCusDetails" class="btn btn-lg btn-primary btn-block" style="background-color: #142C90;" href="">Collect Customer Informations</button>
</form>
	</div>

<br>
<br>
<!--start footer-->
<footer class="bg-light text-center text-lg-start">
<div class="footer">
    <p>?? 2022 NIDELLAREST . All Rights Reserved | Design by <a href="index.php">NIDELLAREST</a> </p>
</div>
</footer>
<!-- Boostrup java scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
