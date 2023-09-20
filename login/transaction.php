<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is customers
$database = 'customers';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
// $sql = " SELECT * FROM tbl_transaction ORDER BY Date_Time ASC ";
$sql="SELECT * from tbl_transaction WHERE Transaction_Id>202100";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <link href="https://api.fontshare.com/v2/css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="Transaction.css">
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
            <a class="header__link" href="#">Transaction History</a>
          </li>
          <li>
            <a class="header__link" href="sendmoney.php">sendmoney</a>
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


	<section>
		<h1>Transaction history</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
        <th>Transaction ID</th>
        <th>sender Account No</th>
        <th>sender Name</th>
        <th>receiver Account No</th>
        <th>receiver Name</th>
        <th>Amount</th>
        <th>Sender Balance</th>
        <th>Receiver_Balance</th>
        <th>status</th>
        <th>Date/Time</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>

			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
        <td><?php echo $rows['Transaction_Id'];?></td>
        <td><?php echo $rows['Sender_AccountNo'];?></td>
        <td><?php echo $rows['Sender_Name'];?></td>
        <td><?php echo $rows['Receiver_AccountNo'];?></td>
        <td><?php echo $rows['Receiver_Name'];?></td>
        <td><?php echo $rows['Amount'];?></td>
        <td><?php echo $rows['Sender_Balance'];?></td>
        <td><?php echo $rows['Receiver_Balance'];?></td>
        <td><?php echo $rows['Status'];?></td>
        <td><?php echo $rows['Date_Time'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
