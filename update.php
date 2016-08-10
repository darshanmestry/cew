<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'cew');
define('DB_USER','root');
define('DB_PASSWORD','root');

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());



/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function update()
{

   //starting the session for user profile page
if(!empty($_POST['sn']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$sc_id=$_GET['sc_id'];
	echo $sc_id;
	$query = mysql_query("update supp_challan set sc_name='$_POST[sn]'  ,sc_addr = '$_POST[sa]'  , sc_no='$_POST[cn]',sc_date='$_POST[cd]',sc_invoice='$_POST[in]',sc_billdate='$_POST[bd]',sc_pono='$_POST[pon]',sc_podate='$_POST[pd]',sc_ptr='$_POST[ptr]',sc_qty='$_POST[qty]',sc_wt='$_POST[wt]'  where sc_id='$sc_id' ") or die(mysql_error());
	
	if(! $query )
	{
		 die('Could not update data: ' . mysql_error());
		 exit;
	}
	echo "Updated data successfully\n";
	
	
mysql_close($con);

}

}
if(isset($_POST['submit']))
{

	update();
}

?>
