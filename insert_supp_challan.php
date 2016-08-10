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
	
	$query = mysql_query("INSERT INTO `supp_challan`( `sc_name`,`sc_addr`,`sc_no`,`sc_date`,`sc_invoice`,`sc_billdate`,`sc_pono`,`sc_podate`,`sc_ptr`,`sc_qty`,`sc_wt`) VALUES ('$_POST[sn]','$_POST[sa]','$_POST[cn]','$_POST[cd]','$_POST[in]','$_POST[bd]','$_POST[pn]','$_POST[pd]','$_POST[ptr]','$_POST[qty]','$_POST[wt]') "        ) or die(mysql_error());
	//$query = mysql_query("INSERT INTO `supp_challan`( `sc_name`) VALUES ('$_POST[sn]') ") or die(mysql_error());
	
	if(! $query )
	{
		 die('Could not update data: ' . mysql_error());
	}
	echo "Updated data successfully\n";
	
header('Location:supp_challan_insert.php');
	
mysql_close($con);

}
}
if(isset($_POST['submit']))
{

	update();
}

?>
