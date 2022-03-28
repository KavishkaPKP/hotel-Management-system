<title>Nidella Rest | checked Customers</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"><link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/hfstyle.css" rel="stylesheet" type="text/css" media="all" />
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
                        <li class="menu__item"><a href="collectCusDetails.php" class="menu__link ">Booking Rooms</a></li>
                        
                        <li class="menu__item--current"><a href="chickedCus.php" class="menu__link ">Chicked Customers</a></li>

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
  </div>
  <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="card-title m-b-0">Checked Customer Details</h1>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Customer NIC</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contect Number</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Members</th>
                                <th scope="col">Room ID</th>
                                <th scope="col">Chicking Date</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
   <a name="DWCusDetails" id="btnCusDetailDownload" class="btn btn-primary btn-block" href="#" role="button" style="background-color: #142C90;">Download All Chicked Customers Report </a>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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