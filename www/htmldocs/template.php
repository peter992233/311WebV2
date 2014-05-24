<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Template Page</title>
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
            <li class="active"><a href="#">Overview</a></li>
             <li><a href="Dash_Mail_Data.php">Mail Data</a></li>
            <li><a href="#">Bug Data</a></li>
            <li><a href="#">Issue Data</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Mail Statistics</a></li>
            <li><a href="">Bug Statistics</a></li>
            <li><a href="">Issue Statistics</a></li>
            <li><a href="">Mixed Queries</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Mail Graphs</a></li>
            <li><a href="">Bug Graphs</a></li>
            <li><a href="">Issue Graphs</a></li>
			<li><a href="">Mixed Graphs</a></li>
          </ul>
		  <ul class="nav nav-sidebar">
            <li><a href="">Python Repository</a></li>
			<li><a href="">Pull Data</a></li>
			<li><a href="">Add Data</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard Home</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Mail</h4>
              <span class="text-muted">Data Link</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bugs</h4>
              <span class="text-muted">Data Link</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Issues</h4>
              <span class="text-muted">Data Link</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Data Link</span>
            </div>
          </div>

          <h2 class="sub-header">Python Development Dashboard Summary</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Size</th>
                  <th>Date Updated</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Total Mail Sent</td>
                  <td>1510512</td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Total Mail Recieved</td>
                  <td>660123</td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Average Mail Sent Per User</td>
                  <td>100</td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Most Mail Sent</td>
                  <td>2000</td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Bugs Reported</td>
                  <td>2000</td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Bugs Resolved</td>
                  <td>2000</td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Issues Reported</td>
                  <td>2000</td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Issues Resolved</td>
                  <td>2000</td>
                  <td>24/05/2014</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>