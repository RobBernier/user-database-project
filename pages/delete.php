<?php
  /*
  Name: delete.php

  This is called from entry.php, and deletes all associated entries.
  */

session_start();

function form(){
	//grab post data for employee to be deleted
	$employeenumber = $_POST['employeenumber'];

	$link = mysqli_connect("127.0.0.1:8889", "root", "root", "test") or die('cannot connect');

  //PHP delete for employee photo (due to FK assignment)
  $query = "DELETE FROM EmployeePhotos WHERE EmployeeNumber = '$employeenumber'";
  $result = mysqli_query($link, $query) or die("photo delete failed");

  mysqli_close();

  //PHP delete for employee information
  $query = "DELETE FROM EmployeeInformation WHERE EmployeeNumber = '$employeenumber'";
  $result = mysqli_query($link, $query) or die("info delete failed");

  mysqli_close();

  //echo back that employee is deleted.
  	echo "
		<div class='login animation-fast'>
    	<div class='outer'>
     	 <div class='container'>
      	  <i class='fa fa-thumbs-up fa-4x'></i>
       		 <p>Employee $employee Deleted Sucessfully.</p><br/><a class='button' href='./employeeDirectory.php'>Return to Employee Directory</a>
     	</div>
    	</div>
  		</div>
  		";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Page</title>
  <link rel="stylesheet" href="../css/style.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg">
  <?php
  if(empty($_SESSION['username']) && empty($_SESSION['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
  }
  if($_SESSION['password'] == "1234" && $_SESSION['username'] == "Framingham"){
    form();
  }else {
    error();
  }
   ?>
</body>
</html>
