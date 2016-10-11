<!DOCTYPE html>
<!--
Name: updateEmployee.php

grabs post data from entry.php and updates photos and info accordingly.
-->
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

	session_start();

	//grab post data from entry.php
	$employeenumber = $_POST['employeenumber'];
	$employeename = $_POST['employeename'];
	$datejoined = $_POST['datejoined'];
	$department = $_POST['department'];
	$annualsalary = $_POST['annualsalary'];
	$project = $_POST['project'];

	$link = mysqli_connect("127.0.0.1:8889", "root", "root", "test") or die('cannot connect');

	//update query for employee information.
	$query = "UPDATE EmployeeInformation SET EmployeeName = '$employeename', DateJoined = '$datejoined', Department = '$department', AnnualSalary = '$annualsalary', Project = '$project' WHERE EmployeeNumber='$employeenumber';";
	$result = mysqli_query($link, $query) or die("query failed" . mysqli_connect_error());

	mysqli_close();

	//grab new photo information
	$len = count($_FILES['image']['name']);
	$_FILES['image']['tmp_name'];

	if(isset($_FILES['image']) && $_FILES['image']['size'] > 0)
	{
		//delete, and insert new photo
		$query = "DELETE FROM EmployeePhotos WHERE EmployeeNumber = '$employeenumber'";
		$result = mysqli_query($link, $query) or die("photo delete failed");

		$tmpName = $_FILES['image']['tmp_name'];
		//read the file
		$fp = fopen($tmpName, 'r');
		$data = fread($fp, filesize($tmpName));
		$data = addslashes($data);
		fclose($fp);

		$query = "INSERT INTO EmployeePhotos VALUES ('', '$employeenumber', '$data')";
		$result = mysqli_query($link, $query) or die("photo upload failed" . mysqli_connect_error());

	}
	else
	{

		$error = "IMAGE FAILED TO UPLOAD";

	}

	mysqli_close();

	/*
	$len = count($_FILES['image']['name']);
	$_FILES['image']['tmp_name'];

	if(isset($_FILES['image']) && $_FILES['image']['size'] > 0)
	{

		$query = "DELETE FROM EmployeePhotos WHERE EmployeeNumber = '$employeenumber'";
		$result = mysqli_query($link, $query) or die("photo delete failed");

		mysqli_close();

		$tmpName = $_FILES['image']['tmp_name'];
		//read the file
		$fp = fopen($tmpName, 'r');
		$data = fread($fp, filesize($tmpName));
		$data = addslashes($data);
		fclose($fp);

		$query = "INSERT INTO EmployeePhotos VALUES ('', '$employeenumber', '$data')";
		$result = mysqli_query($link, $query) or die("photo upload failed");

		mysqli_close();

	}
	*/
	//information when user is updated
	echo "
	<div class='login animation-fast'>
		<div class='outer'>
			<div class='container'>
				<i class='fa fa-thumbs-up fa-4x'></i>
						<p>User was updated sucessfully!</p>
						<br/><a class='button' href='./employeeDirectory.php'>Return to Employee Directory</a>
						</div>
						</div>
						</div>
						";

?>
</body>
</html>
