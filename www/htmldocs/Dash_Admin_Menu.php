<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Home</title>
	<!--dbadmin-->
	<!--notadmin-->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/Dash_Home.css" rel="stylesheet">

  </head>

  <body>

     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Dash_Home.php">CSCI311 Dashboard Project</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Dash_Home.php">Dashboard Home</a></li>
            <li><a href="Dash_Profile.php">Profile</a></li>
			<li><a href="Dash_Admin_Menu.php">Admin</a></li>
            <li><a href="../index.php?logout">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="Dash_Home.php">Overview</a></li>
		    <li><a href="Dash_Mail_Data.php">Mail Data</a></li>
            <li><a href="Dash_Bugs_Data.php">Bugs & Issues Data</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="Dash_Mail_Stats.php">Mail Statistics</a></li>
            <li><a href="Dash_Bugs_Stats.php">Bug & Issue Statistics</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="Dash_Mail_Graphs.php">Mail Graphs</a></li>
            <li><a href="Dash_Bugs_Graphs.php">Bug & Issue Graphs</a></li>
          </ul>
		  <ul class="nav nav-sidebar">
            <li><a href="http://hg.python.org/">Python Repository</a></li>
			<li><a href="Dash_Import_Data.php">Import Data</a></li>
			<li><a href="Dash_Add_Data.php">Add Data</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Admin Menu</h1>
          <h2 class="sub-header">Section title</h2>
			This is where the information to Add users and change permissions go!.
			<?php
			// checking for minimum PHP version
			if (version_compare(PHP_VERSION, '5.3.7', '<')) {
				exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
			} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
				// if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
				// (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
				require_once("libraries/password_compatibility_library.php");
			}

			// include the configs / constants for the database connection
			require_once("../config/db.php");

			// load the login class
			require_once("../classes/Login.php");
			$login = new Login();
			if($_SESSION['Role'] == 'Admin') {
				echo '<p>You Are An Admin!</p>';
			    $mysqli = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				$myQuery = "SELECT * FROM users";
				$result = $mysqli->query($myQuery) or die($mysqli->error);
				
				echo "<table name=\"User_table\" style=\"border:2px solid black;\">";
				echo "<tr style=\"border:2px solid black; padding: 5px;\">";
				echo "<th style=\"border:2px solid black; padding: 5px;\">User Id</th>";
				echo "<th style=\"border:2px solid black; padding: 5px;\">Username</th>";
				echo "<th style=\"border:2px solid black; padding: 5px;\">Password</th>";
				echo "<th style=\"border:2px solid black; padding: 5px;\">E-mail</th>";
				echo "<th style=\"border:2px solid black; padding: 5px;\">Access Level</th>";
				echo "<th style=\"border:2px solid black; padding: 5px;\">Edit Account</th>";
				echo "<th style=\"border:2px solid black; padding: 5px;\">Account Control</th>";
				echo "</tr>";
				while ($login_rows = $result->fetch_assoc()) {
					echo "<tr style=\"border:2px solid black; padding: 5px;\">";
					echo "<th style=\"border:2px solid black; padding: 5px;\">";
					echo $login_rows['user_id'];
					echo "</th>";
					echo "<th style=\"border:2px solid black; padding: 5px;\">";
					echo $login_rows['user_name'];
					echo "</th >";
					echo "<th style=\"border:2px solid black; padding: 5px;\">";
					echo "<a href='ResetPassword.php?id=" . $login_rows['user_id'] . "'>Reset Password</td>";
					echo "</th>";
					echo "<th style=\"border:2px solid black; padding: 5px;\">";
					echo $login_rows['user_email'];
					echo "</th>";
					echo "<th style=\"border:2px solid black; padding: 5px;\">";
					echo $login_rows['Role'];
					echo "</th>";
					echo "<th style=\"border:2px solid black; padding: 5px;\">";
					echo "<a href='updatedb.php?id=" . $login_rows['user_id'] . "'>Update Permission</td>";
					echo "</th>";
					echo "</th>";
					echo "<th style=\"border:2px solid black; padding: 5px;\">";
					echo "<a href='deleteuser.php?id=" . $login_rows['user_id'] . "'>Delete User</td>";
					echo "</th>";
					echo "</tr>";
				}
				echo "</table>";
			}		
			else{
				echo '<p>You Are Not An Administrator</p>';
				include("views/logged_in.php");
			}
			?>
			
			<br/>
			<br/>
				
			
			
        </div>
      </div>
    </div>	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
