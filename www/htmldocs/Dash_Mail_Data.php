<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Mail Data</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/Dash_Home.css" rel="stylesheet">

  </head>

  <body onload=LoadData()>

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
          <h1 class="page-header">Mail Data</h1>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
             
             
            </div>
          </div>

          <h2 class="sub-header">Python Development Mail Data</h2>
		  <?php
		  require_once("../config/getdata.php");
		  ?>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		  <script type="text/javascript">
				/*  var inStats = [];
				$.getJSON('json/genstats.json', function (json) {  
					for (var key in json) {
						if (json.hasOwnProperty(key)) {
							var inStats = json[key];
							tarray.push({
								Total_Messages: item.Total_Messages,
								Total_number_of_Users: item.Total_number_of_Users,
								Average_Messages: item.Average_Messages,
								Most_Dedicated_User: item.Most_Dedicated_User});
						}
					}
				});
				*/
		function LoadData(){
			$("#Mail_TotMsg").text("146154");
			$("#Mail_TotUsers").text("2723");
			$("#Mail_AvgUsers").text("53");
			$("#Mail_MostDedUser").text("guido (53)");
			};
		  </script>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Size</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Total Mail Sent</td>
                  <td id="Mail_TotMsg"></td>
                </tr>
				<tr>
                  <td>Number Of Users</td>
                  <td id="Mail_TotUsers"></td>
                </tr>
				<tr>
                  <td>Average Mail Sent Per User</td>
                  <td id="Mail_AvgUsers"></td>
                </tr>
				<tr>
                  <td>Most Mail Sent</td>
                  <td id="Mail_MostDedUser"></td>
                </tr>
              </tbody>
            </table>
          </div>
		  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>