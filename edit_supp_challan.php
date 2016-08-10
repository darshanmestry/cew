<?php

$sc_n=$_GET['sc_no'];
        define('DB_HOST', 'localhost');
define('DB_NAME', 'cew');
define('DB_USER','root');
define('DB_PASSWORD','root');

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
echo "database connected";    
       	
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function update()
{
 echo "POST "; 
   //starting the session for user profile page
  
  $qr=msql_query("update supp_challan set sc_addr='ass' where sc_no=21");
 echo $sc_n;	
	  
if(!empty($_POST['sn']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{

	$query = mysql_query("update `supp_challan` set `sc_name` = '$_POST[sn]' , `sc_addr` = '$_POST[sa]' , `sc_no` = '$_POST[cn]' , `sc_date` = '$_POST[cd]' , `sc_invoice` = '$_POST[in]' ,`sc_billdate` = '$_POST[bd]',`sc_pono` = '$_POST[pon]' , `sc_podate` = '$_POST[pd]' ,`sc_ptr` = '$_POST[ptr]',`sc_qty` = '$_POST[qty]' , `sc_wt`= '$_POST[wt]'  where sc_no='$sc_n' ") or die(mysql_error());

	if(! $query )
	{
		 die('Could not update data: ' . mysql_error());
	}
	echo "Updated data successfully\n";
	
//header('Location:supp_challan_insert.php');
	
 mysql_close();	

}
}
if(isset($_POST['submit']))
{

	update();
}

?>