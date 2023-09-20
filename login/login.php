<?php

if(isset($_POST['submit']))
{
	$AccountNo = $_POST['txtAccountNo'];
	$Password = $_POST['txtPassword'];	
}

// database detail
$host = "localhost";
$username = "root";
$password = "";
$dbname = "login";

  // creating a connection
  $con = mysqli_connect($host, $username, $password, $dbname);

  // to ensure that the connection is made
  if (!$con)
  {
	  die("Connection failed!" . mysqli_connect_error());
  }

  // using sql to create a data entry query
  $sql = "INSERT INTO tbl_login (AccountNo, Password) VALUES ('$AccountNo', '$Password')";

   // send query to the database to add values and confirm if successful
   $rs = mysqli_query($con, $sql);
   if($rs)
   {
	   echo "Entries added!";

   }
 
   // close connection
   mysqli_close($con);
  

?>