
	<title>Nidella Rest | Manager Details</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"><link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/hfstyle.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




</head>
<body>	
<!-- header -->
<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-expand-sm navbar-dark">
				<div class="navbar-header navbar-left ">
					<h1><a class="navbar-brand" href="roomManagerLogin.php">NIDELLA <span>REST</span><p class="logo_w3l_agile_caption">Book Your Dream Resort</p></a></h1>
				</div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
					
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <nav class="menu menu--iris">
						<ul class="navbar-nav">
							<li class="menu__item--current"><a href="collectCusDetails.php" class="menu__link ">Booking Complete</a></li>
							
							<li class="menu__item"><a href="chickedCus.php" class="menu__link ">Chicked Customers</a></li>

							<li class="nav-item navbar-nav dropdown menu__item">
								<a class="nav-link dropdown-toggle menu__link menu__item" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
									Manager Options
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="addRoom.php">Room Details</a>
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

<!-- form -->
<div class="container">
	<div class="row">

        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Add payment:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Concept</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="concept" name="concept">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="status">
                                <option>Paid</option>
                                <option>Unpaid</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-default preview-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / panel preview -->
        <div class="col-sm-7">
            <h4>Preview:</h4>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table preview-table">
                            <thead>
                                <tr>
                                    <th>Concept</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody></tbody> <!-- preview content goes here-->
                        </table>
                    </div>                            
                </div>
            </div>
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <a name="SelectRoom" id="SelectRoom" class="btn btn-lg btn-primary btn-block" href="chickedCus.php" style="background-color: #142C90;" role="button">Submit all and finish</a>

                    <!-- <button type="button" class="btn btn-primary btn-block" href="chickedCus.php">Submit all and finish</button> -->
                </div>                
            </div>
        </div>
	</div>
</div>

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
