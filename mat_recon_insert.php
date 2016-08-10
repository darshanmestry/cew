<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Reconciliation Add</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    Home
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="cust_table.php">
                        <i class="pe-7s-graph"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li>
                    <a href="supp_table.php">
                        <i class="pe-7s-graph"></i>
                        <p>Supplier</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-graph"></i>
                        <p>Logout</p>
                    </a>
                </li>
                
                
                
               
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Reconciliation Table</h4>
                            </div>
                            <div class="content">
                                <form  method="post" action="  ">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control" placeholder="date" value="" name=date1>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>DC No</label>
                                                <input type="number" class="form-control" placeholder="DC No" value="" name=dcno>
                                            </div>
                                        </div>

                                        
                                        
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Item Description</label>
                                                <input type="text" class="form-control" placeholder="Item Description" value="" name=id1>
                                            </div>
                                        </div>
										 <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" placeholder="Quantity(Nos)" value="" name=qty>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Weight</label>
                                                <input type="number" class="form-control" placeholder="Weight(kgs)" value="" name=wgt>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Date</label> 
                                                <input type="date" class="form-control" placeholder="date" value="" name=date>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Challan No</label>
                                                <input type="number" class="form-control" placeholder="Quantity(Nos)" value="" name=qty>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Item Description</label>
                                                <input type="text" class="form-control" placeholder="Item Description" value="" name=id2>
                                            </div>
                                        </div>
                                        
                                    </div>


                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quantity Dispatched</label>
                                                <input type="number" class="form-control" placeholder="Quantity Dispatched" value="" name=qtdis>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Weight(Per nug)</label>
                                                <input type="number" class="form-control" placeholder="Weight(Per nug)" value="" name=wtpn>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Scrap</label>
                                                <input type="number" class="form-control" placeholder="Scrap" value="" name=scrap>
                                            </div>
                                        </div>
                                        
                                    </div>

                                     <div class="row">
                                        
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Add</button>
                                            </div>
                                        </div>
                                         
                                        
                                    </div>
                                <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
