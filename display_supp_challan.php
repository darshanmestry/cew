<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/pn	g" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<title>Suppliers Challan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <script type="text/javascript" src="jquery.js"></script>
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
	

     <?php
        $sc_id=$_GET['sc_id'];
        error_reporting(0);
        $username="username";
        $password="password";
        $database="cew";
        mysql_connect(localhost,"root","");
        @mysql_select_db($database) or die( "Unable to select database");
        $query="SELECT * FROM supp_challan where sc_id='$sc_id'";
        $result=mysql_query($query);
        $num=mysql_numrows($result);
        mysql_close();
    ?>

    <div class="main-panel">
         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Suppliers Challan</h4>
                                <p class="category">Challan details of a particular Supplier</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        
                                    	<th>Challan no</th>
                                    	<th>Challan Date</th>
                                        <th>Invoice</th>
                                        <th>Bill Date</th>
                                        <th>PO No</th>
                                        <th>PO Date</th>
                                        <th>Particulars</th>
                                        <th>Quantity</th>
                                        <th>Weight</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                                $i=0;
                                                while ($i < $num) 
                                                {
                                                    $f1=mysql_result($result,$i,"sc_id");
                                                    $f2=mysql_result($result,$i,"sc_name");
                                                    $f3=mysql_result($result,$i,"sc_addr");
                                                    $f4=mysql_result($result,$i,"sc_no");
                                                    $f5=mysql_result($result,$i,"sc_date");
                                                    $f6=mysql_result($result,$i,"sc_invoice");
                                                    $f7=mysql_result($result,$i,"sc_billdate");
                                                    $f8=mysql_result($result,$i,"sc_pono");
                                                    $f9=mysql_result($result,$i,"sc_podate");
                                                    $f10=mysql_result($result,$i,"sc_ptr");
                                                    $f11=mysql_result($result,$i,"sc_qty");
                                                    $f12=mysql_result($result,$i,"sc_wt");
                                        ?>
                                     <tr>

                                        <td>
                                            <?php echo $f4; ?>
                                        </td>

                                        <td>
                                            <?php echo $f5; ?>
                                        </td>

                                        <td>
                                            <?php echo $f6; ?>
                                        </td>

                                        <td>
                                            <?php echo $f7; ?>
                                        </td>

                                        <td>
                                            <?php echo $f8; ?>
                                        </td>

                                         <td>    
                                            <?php echo $f9; ?>
                                        </td>

                                        <td>
                                            <?php echo $f10; ?>
                                        </td>

                                        <td>
                                            <?php echo $f11; ?>
                                        </td>

                                        <td>
                                            <?php echo $f12; ?>
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
  
       
                <tr>
                    <td>
                                                    
                        <a href="#" id="show"><button type="submit" class="btn btn-round btn-fill btn-info" name="submit">Edit</button> </a> 
                                                    
                    </td>  

                   
                  
                     <td>
                                                    
                        <a href="javascript://" onclick="history.back();"> <button type="submit" class="btn btn-round btn-fill btn-info" name="submit">Back</button> </a>
                                                    
                    </td>
                                                 
                </tr> 
      
         </div>
         <br>
         <!--  --------------------------------------------- Update div --------------------------------------------------------------- -->

            <div class="content" id="box1">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Suppliers Challan</h4>
                                 <div class="content">
                                    <div class="row">
                                         <form action="update.php?sc_id=<?php echo $sc_id;?>" method="POST">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Supplier Name</label>
                                                <input type="text" class="form-control" placeholder="Supplier name" value="<?php echo $f2; ?>" name=sn  required>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Supplier Address</label>
                                                <input type="text" class="form-control" placeholder="Supplier Address" value="<?php echo $f3; ?>" name=sa  required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Challan No</label>
                                                <input type="number" class="form-control" placeholder="Challan No" value="<?php echo $f4; ?>" name=cn   required>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Challan Date</label>
                                                <input type="date" class="form-control" placeholder="Challan date" value="<?php echo $f5; ?>" name=cd  required>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Invoice no</label>
                                                <input type="number" class="form-control" placeholder="Invoice no" value="<?php echo $f6; ?>" name=in required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Bill Date</label>
                                                <input type="date" class="form-control" placeholder="Bill date" value="<?php echo $f7; ?>" name=bd required>
                                            </div>
                                        </div>
                                    </div>
                                      
                                     <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PO NO</label>
                                                <input type="number" class="form-control" placeholder="PO No" value="<?php echo $f8; ?>" name=pon  required>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PO Date</label>
                                                <input type="Date" class="form-control" placeholder="PO Date" value="<?php echo $f9; ?>" name=pd  required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Particulars</label>
                                                <input type="text" class="form-control" placeholder="Particulars" value="<?php echo $f10; ?>" name=ptr   required>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" placeholder="Quantity" value="<?php echo $f11; ?>" name=qty  required>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Weight</label>
                                                <input type="number" class="form-control" placeholder="Weight" value="<?php echo $f12; ?>" name=wt  required>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="row">
                                       <tr>
                                            
                                         <td>
                                                  
                                         <button type="submit" class="btn btn-round btn-fill btn-info" name="submit" >Update</button> 

                                           

                                         </td> 
                                        
                                          </form>
                                          <td>       
                                            <a href="#" id="hide"><button class="btn btn-round btn-fill btn-info">Cancel</button> </a> 
                                           
                                         </td> 
                                        </tr>      
                                    </div>
                                    
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div> 
          
          </div> 
           


</body>
    <script>
$(document).ready(function(){
    
    
    $('#box1').hide();

    $('a#show').click(function(){
        $('#box1').show();
    });

    $('a#hide').click(function(){
        $('#box1').hide();
    });


});
</script>

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
