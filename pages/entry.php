<?php
/*
Name: Entry.php

This is the employee modify / new employee input page. It is able to distrigunish between modifying of employee and
new employees with get data. Two functions, newEntry and modifyEntry are what create the form for user entry.
*/
session_start();

//form function to bring in formatting and keep within webpage
function form(){
  echo "
    <div class='navigation'>
      <div class='icon'>
        <i class='fa fa-bars fa-2x' aria-hidden='true'></i>
      </div>
      <div class='nav-items'>
        <a class='nav-item' href='./mainPage.php'>Home</a>
        <a class='nav-item' href='./employeeDirectory.php'>Employee Directory</a>
        <a class='nav-item' href='./entry.php?type=new'>Add User</a>
        <a class='nav-item' href='../index.php' class='logout'>Logout</a>
      </div>
      </div>
      <div class='site-wrap bg'>";


  //uses get data to distringih between a new employee and a modify employee (and employee number)
  $type = $_GET["type"];
	$employee = $_GET["employee"];

    if ($type == "new")
	{
		newEntry();
	}

	if ($type == "modify")
	{
		modifyEntry($employee);
	}

	echo "</div>";

}

//newEntry function creates a standard form for new employee entry and image upload, calls insertEmployee.php.
function newEntry()
{

	echo "<h1>Add User</h1><br/><form enctype='multipart/form-data' name ='newEntry' action='./insertEmployee.php' method='post' onsubmit='return validateForm()'>";

	echo "<table>";

	echo "<tr>";
	echo "<td>Employee Name: </td><td><input type='text' name='employeename'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Photo:</td><td><input name='MAX_FILE_SIZE' value='102400' type='hidden'><input name='image' accept='image/jpeg' type='file'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Date Joined: </td><td><input type='text' name='datejoined'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Department:</td><td><input type='text' name='department'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Annual Salary: $</td><td><input type='text' name='annualsalary'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Project:</td><td><input type='text' name='project'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td style='background-color:#FFFFFF;' colspan=2><button type='submit' name='submit' value='Submit'>Submit</button>";
	echo "<button type='reset' name='reset' value='Reset'>Reset</button></td>";
	echo "</tr>";

	echo "</table>";

	echo "</form></div>";

}

//modify entry populates an employee based on employee number.
function modifyEntry($employee)
{

		//connect to mySQL and populates images and information.
	 $link = mysqli_connect("127.0.0.1:8889", "root", "root", "test") or die ("cannot connect");

     $sql = "SELECT * FROM employeeInformation WHERE EmployeeNumber = '$employee';";

     $result = mysqli_query($link, $sql) or die ("query failed" . mysqli_connect_error());

     $info = mysqli_fetch_assoc($result);

     $query = "SELECT image FROM EmployeePhotos WHERE EmployeeNumber = '$employee';";

	 $result = mysqli_query($link, $query) or die("Query failed" .mysqli_connect_error());

	 $row = mysqli_fetch_ASSOC($result);

	//set the header for the image

	echo "<h1>Modify User</h1><br/><form enctype='multipart/form-data' name ='newEntry' action='./updateEmployee.php' method='post' onsubmit='return validateForm()'>";
	//echo "<h1>Modify User</h1><br/><form enctype='multipart/form-data' name='modifyUser' action='./updateEmployee.php' method='post' onsubmit='return validateForm()'>";

	echo "<table>";

	echo "<tr>";
	echo "<td>Employee Number:</td><td><input type='text' value='$info[EmployeeNumber]' name='employeenumber'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Employee Name: </td><td><input type='text' value='$info[EmployeeName]' name='employeename'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Photo:</td><td>";

	//header("Content-type: image/jpeg");

	//base 64 for image.
	echo '<img src="data:image/jpeg;base64,'. base64_encode($row['image']) .'" alt="No Image" style="width:100px; height:100px;"" />';
	echo "<br><br>";
	echo "<input name='MAX_FILE_SIZE' value='102400' type='hidden'><input name='image' accept='image/jpeg' type='file'>";

	echo "</td></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Date Joined: </td><td><input type='text' value='$info[DateJoined]' name='datejoined'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Department:</td><td><input type='text' value='$info[Department]' name='department'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Annual Salary:</td><td>$ <input type='text' value='$info[AnnualSalary]' name='annualsalary'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>Project:</td><td><input type='text' value='$info[Project]' name='project'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td style='background-color:#FFFFFF;' colspan=2><button type='submit' name='submit' value='Submit Changes'>Submit</button>";
	echo "</form>";
	echo "<form action='./delete.php' method='post' onsubmit='return validateForm()' style='display:inline-block;'>";
	echo "<button type='submit' name='submit'>Delete</button></td>";
	echo "<input type='hidden' name='employeenumber' value='$employee'>";
	echo "</form>";
	echo "</tr>";

	echo "</table></div>";

	mysqli_close($link);

}

?>
<!--creates the header to the page-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Creation &amp; Modification</title>
  <link rel="stylesheet" href="../css/style.css"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="functions.js"></script>
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
