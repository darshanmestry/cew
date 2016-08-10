<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/pn	g" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Customers List</title>

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
<?php
           error_reporting(0);
            $username="username";
            $password="password";
            $database="cew";
            mysql_connect(localhost,"root","");
            @mysql_select_db($database) or die( "Unable to select database");
            $query="SELECT * FROM cust";
            $result=mysql_query($query);
            $num=mysql_numrows($result);
            mysql_close();
        ?>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List of all Customers</h4>
                                <p class="category">All the customers with whom you do your business</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	
                                    	
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=0;
                                            while ($i < $num) 
                                            {
                                                $f1=mysql_result($result,$i,"id");
                                                $f2=mysql_result($result,$i,"name");

                                        ?>
                                        <tr>
                                            <td>
                                                <a href="cust_table_info.php?cust_Id=<?php echo $f1['id']; ?>">
                                                    <?php echo $f1["id"]; ?>
                                                </a>
                                            </td>



                                            <td>
                                                <a href="cust_table_info.php?cust_Id=<?php echo $f1['id']; ?>">
                                                    <?php echo $f2; ?>
	                                           </a>
                                            </td>
                                        </tr>
                                        <?php 
                                            $i++;
                                            }   
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST" action="create_cust_info.php"  onsubmit="">
       
                     <tr>
                        <td>
                            <button type="submit" class="btn btn-round btn-fill btn-info" name="submit" >Add to Database</button>
                        </td>
                        <Td> <INPUT type="text" name="cust"  required/> </Td>
                    </tr> 
                </form>  
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
