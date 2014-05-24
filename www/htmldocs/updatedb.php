<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Edit User Information</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/Dash_Home.css" rel="stylesheet">

  </head>

  <body>
  <h3>Edit User Information</h3>
<form>
	</br>
	<input type="button" onClick="parent.location='Dash_Admin_Menu.php'" value="Go Back To Admin Menu">
</form>
  </br></br>
  <?php
		require_once("../config/db.php");
		$mysqli = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$myQuery = "SELECT * FROM users WHERE user_id = " . $_GET["id"];
		$result = $mysqli->query($myQuery) or die($mysqli->error);
		// escape variables for security
		while ($UDATA = $result->fetch_assoc()) {
		$UID = $UDATA['user_id'];
		$UNAME = $UDATA['user_name'];
		$UMAIL = $UDATA['user_email'];
		$UPERM = $UDATA['Role'];
		}
	?>
	
	<form action="" method="post">
		<bold>ID: </bold><?php echo $UID?>  
		Username: <input type="text" name="in_name" value="<?php echo $UNAME?>">
		E-mail: <input type="text" name="in_mail"value="<?php echo $UMAIL?>">
		<select name="in_select" id="in_select">
			<option value="Guest">Guest</option>
			<option value="Developer">Developer</option>
			<option value="Admin">Admin</option>
		</select>
		<input type="hidden" name="hidden_perm" id="hidden_perm" value="Guest">

		
		<input type="submit">
	</form>
	
	<?php
		$mysqli = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		// escape variables for security
		if(isset($_POST['in_id'])){ $UID = $_POST['in_id'];};
		
		if(isset($_POST['in_name'])){
			$UNAME = $_POST['in_name'];
			$sql = "UPDATE users SET user_name = '$UNAME' WHERE user_id = '$UID' ";
				if (!mysqli_query($mysqli,$sql)) {
				  die('Error: ' . mysqli_error($mysqli));
				}
				else{
					echo "Updated Username to ";
					echo $UNAME;
					echo "</br>";
				}
				
		};
		
		if(isset($_POST['in_mail'])){ 
			$UMAIL = $_POST['in_mail'];
			$sql = "UPDATE users SET user_email = '$UMAIL' WHERE user_id = '$UID' ";
				if (!mysqli_query($mysqli,$sql)) {
				  die('Error: ' . mysqli_error($mysqli));
				}
				else{
					echo "Updated Email to ";
					echo $UMAIL;
					echo "</br>";
				}
		};
		
		if(isset($_POST['hidden_perm'])){ 
			$UPERM = $_POST['hidden_perm'];
			$sql = "UPDATE users SET Role = '$UPERM' WHERE user_id = '$UID' ";
				if (!mysqli_query($mysqli,$sql)) {
				  die('Error: ' . mysqli_error($mysqli));
				}
				else{
					echo "Updated Permission to ";
					echo $UPERM;
					echo "</br>";
				}
				
		};
		mysqli_close($mysqli);
	?>
	
  </body>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  		<script type="text/javascript" defer="defer">
		  $(document).ready(function() {
			$("#in_select").change(function(){
				$("#hidden_perm").val($('#in_select option:selected').val());
			});
		  });
		</script>
</html>

