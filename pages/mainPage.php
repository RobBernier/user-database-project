<?php
session_start();
  //Display table if password is "password"
  //Put all information for main page in here!!!!
function form(){
  echo "
    <div class='navigation'>
      <div class='icon'>
        <i class='fa fa-bars fa-2x' aria-hidden='true'></i>
      </div>
      <div class='nav-items'>
        <a class='nav-item' href='#'>Home</a>
        <a class='nav-item' href='./employeeDirectory.php'>Employee Directory</a>
        <a class='nav-item' href='./entry.php?type=new'>Add User</a>
        <a class='nav-item' href='../index.php' class='logout'>Logout</a>
      </div>
      </div>

    <div class='site-wrap bg'>
        <h1>Homepage</h1>
        <br/>
        <div class='list-container'>
          <a href='#intro-p' class='list-item'>Introduction<i class='fa fa-desktop fa-2x' aria-hidden='true'></i></a>
            <a href='#about-p' class='list-item'>About The Project<i class='fa fa-users fa-2x' aria-hidden='true'></i></a>
            <a href='#responsive-p' class='list-item'>Resonsive Design<i class='fa fa-file-code-o fa-2x' aria-hidden='true'></i></a>
            <a href='#subheading-three-p' class='list-item'>Example Subheading 3<i class='fa fa-globe fa-2x' aria-hidden='true'></i></a>
            <a href='#subheading-four-p' class='list-item'>Example Subheading 4<i class='fa fa-arrow-circle-right fa-2x' aria-hidden='true'></i></a>
        </div>
        <br/>
        <h2 id='intro-p'>This is an example of what a default homepage may look like.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab necessitatibus sequi tenetur optio, accusamus veniam.   Officiis pariatur dolorem, itaque perspiciatis iste doloremque fuga et, maxime soluta ipsam vel laudantium dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h2 id='about-p'>This project was developed with HTML, CSS, JS, PHP, and SQL languages.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h2 id='responsive-p'>This website is responsive. Try resizing your window to see the page adapt.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h2 id='subheading-three-p'>Subheading 3</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div style='overflow-x:auto;'>
      <table bgcolor=#414141>
        <th>Name</th>
        <th>Age</th>
        <th>Date Joined</th>
        <th>Department</th>
        <th>Project Involved</th>
        <th>Annual Salary</th>
        <tr>
          <td>Robert Bernier</td>
          <td>22</td>
          <td>Jan 1st,2016</td>
          <td>Comp Sci</td>
          <td>Adv. Web Final</td>
          <td>$0</td>
        </tr>
        <tr>
          <td>Mick</td>
          <td>34</td>
          <td>Jan 17th,2012</td>
          <td>Biology</td>
          <td>Bio Lab Final</td>
          <td>$2000</td>
        </tr>
        <tr>
          <td>Joe</td>
          <td>45</td>
          <td>Mar 22nd,2009</td>
          <td>Nutrition</td>
          <td>Nutrition Final</td>
          <td>$1000</td>
        </tr>
      </table>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <h2 id='subheading-four-p'>Subheading 4</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>";
}
function error(){
  echo "
  <div class='login animation-fast'>
    <div class='outer'>
      <div class='container'>
        <i class='fa fa-thumbs-down fa-4x'></i>
        <p>You are not allowed to get into the system!</p><br/><a class='button' href='../index.php'>Return to Login</a>
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
  <link rel="stylesheet" href="../css/list-icon-widget.css"/>
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
