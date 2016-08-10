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
if(!empty($_POST['supp']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	
	$query = mysql_query("INSERT INTO `supp`( `name`) VALUES ('$_POST[supp]') ") or die(mysql_error());
	
	if(! $query )
	{
		 die('Could not update data: ' . mysql_error());
	}
	echo "Updated data successfully\n";
	
	header('Location:supp_table.php');
	
mysql_close($con);

}
}
if(isset($_POST['submit']))
{

	update();
}

?>
