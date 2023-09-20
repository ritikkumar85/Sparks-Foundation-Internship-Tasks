<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="sendmoney.css">
  <link rel="stylesheet" href="utlis.css">
	<title>Customers</title>
	<!-- CSS FOR STYLING THE PAGE -->

</head>

<body>

<header class="header container">
    <div class=" logo container">
        <!-- <img class="logo" src="logo.png" alt=""> -->
      </div>
      <nav>
        <ul class="header__menu">
          <li>
            <a class="header__link"  href="index.html">Home</a>
          </li>
          <li>
            <a class="header__link" href="customers.php">View All Customer</a>
          </li>
           <li>
            <a class="header__link" href="transaction.php">Transaction History</a>
          </li>
          <li>
            <a class="header__link" href="sendmoney.php">Transfer Money</a>
          </li>
          <li>
            <a class="header__link" href="about.html">About</a>
          </li>
          <li>
            <a class="header__link" href="contact.html">contact</a>
          </li>
          <!-- <li>
            <a class="header__link" href="#">contact</a>
          </li> -->
          <li class="header__line"></li>
          <li>
            <button class="header__sun">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
              </svg>
            </button>
          </li>
        </ul>
        <button class="header__bars">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>  
        </button>      
      </nav>
    </header>

    

<div class="contentbox">
  <h1> TRANSFER MONEY </h1>

  <div class="subcontent">
   
<form action="sendmoney.php" method="POST">    
    <h3> Sender Account </h3>
    <?php
$server="localhost";
$username="root";
$password="";
$dbname="customers";

//create connections
$con=mysqli_connect( $server, $username, $password, $dbname);
//check for connection success
if (!$con){
 die("Connection to this database failed due to ".mysqli_connect_error());
}

echo "<select id='sender' name='sender'>";
echo "<option value='' disabled selected hidden>Choose the sender</option>";
$sql1="Select AccountNo, Name from tbl_customers";
$result= $con-> query($sql1);
if ($result-> num_rows>0){
  while ($row = $result-> fetch_assoc()){
    echo "<option value=".$row["AccountNo"].">".$row["AccountNo"]."<p> &nbsp; &nbsp;</p>". $row["Name"]."</option>";
  }
}


echo "</select>";
echo "<br> <br> <h3> Receiver Account </h3>";
echo "<select id='receiver' name='receiver'>";
echo "<option value='' disabled selected hidden>Choose the receiver</option>";
$result= $con-> query($sql1);
if ($result-> num_rows>0){
  while ($row = $result-> fetch_assoc()){
    echo "<option value=".$row["AccountNo"].">".$row["AccountNo"]."<p> &nbsp; &nbsp;</p>". $row["Name"]."</option>";
  }
}
echo "</select>";

$con->close();
?>

<br><br>
<h3> Amount </h3><input class='input' type="text" name="amount" id="amount" placeholder="Enter the amount"><br>
<br>
    <button class="btn button" value="submit"> Send Money</button>
<br> <br>
</form>




<?php

if (isset($_POST['sender'])){

$server="localhost";
$username="root";
$password="";
$dbname="customers";
$tablename="tbl_customers";

$con=mysqli_connect( $server, $username, $password, $dbname);
if (!$con){
    die("Connection to this database failed due to ".mysqli_connect_error());
}

$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$amount=$_POST['amount'];


$sql1 = "SELECT Name, Balance FROM tbl_customers WHERE AccountNo=$sender"; 
$sql2 = "SELECT Name, Balance FROM tbl_customers WHERE AccountNo=$receiver"; 
//query to select the amounts from the database for R and S
$res1= $con-> query($sql1);
$res2= $con-> query($sql2);
$sender_bal=$receiver_bal=$sender_name=$receiver_name=0;

while($row = $res1-> fetch_assoc()){
  $sender_bal=$row['Balance'];
  $sender_name=$row['Name'];
}

while($row=$res2-> fetch_assoc()){
  $receiver_bal=$row['Balance'];
  $receiver_name=$row['Name'];
}

if($sender_bal>=$amount){
  //calculate final balance
  $receiver_bal=$receiver_bal+$amount;
  $sender_bal=$sender_bal-$amount;
  
  $update1="UPDATE tbl_customers SET Balance=$receiver_bal WHERE AccountNo=$receiver";
  $update2="UPDATE tbl_customers SET Balance=$sender_bal WHERE AccountNo=$sender";
  
  $updatebal_rec=$con-> query($update1);
  $updatebal_sender=$con-> query($update2);

  if ($updatebal_sender==true && $updatebal_rec==true){
      echo "<h3 style='color: green'> Transaction Successful! </h3>";
      $status="Transaction Successful";

      //add into records when transaction is successful
      $query_rec="INSERT INTO tbl_transaction(Sender_AccountNo, Sender_Name, Receiver_AccountNo, Receiver_Name, Amount, Sender_Balance, Receiver_Balance, Status) VALUES('$sender', '$sender_name', '$receiver', '$receiver_name','$amount', '$sender_bal', '$receiver_bal', '$status')";
      if ($con->query($query_rec)==true){
        //echo "Successfully Inserted";
        $insert=true;
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
  }
  else{
    echo "<h3 style='color: brown'> ERROR! Invalid Account Number  </h3>";
    echo "ERROR : $sql <br> $con->error";
}
}
if ($amount>$sender_bal){
  //also add the transaction of failed transactions
  $status="Transaction Failed";

  $query_rec="INSERT INTO tbl_transaction(Sender_AccountNo,Sender_Name, Receiver_AccountNo, Receiver_Name, Amount, Sender_Balance, Receiver_Balance, Status) VALUES('$sender', '$sender_name', '$receiver','$receiver_name', '0', '$sender_bal', '$receiver_bal', '$status')";
  if ($con->query($query_rec)==true){
      $insert=true;
  }
  else{
        echo "ERROR : $sql <br> $con->error";
  }
  echo "<h3 style='color: red'> Transaction Failed! Insufficient Balance in Sender's Account </h3>";
}
$con->close();
}
?>
 
</div>
</div>

<div class="pagebreak">
</div>
<footer>
    <p class="footer__para">@2023All RIGHT RESERVE</p><br>
    <p class="footer__para bar">|</p>
    <p class="footer__para">MADE BY RITIK KUMAR</p>
</footer>



</body>
</html>
