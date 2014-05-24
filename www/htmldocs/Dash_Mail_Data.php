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

          <h2 class="sub-header">Python Development Mail Data</h2>
		  <?php
		   $totalsent = 660123;
		   $totalreceived = 325532;
		   $AvgSent = 14;
		   
		  ?>
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
                  <td><?php echo $totalsent?></td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Total Mail Recieved</td>
                  <td><?php echo $totalreceived?></td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Average Mail Sent Per User</td>
                  <td><?php echo $AvgSent = 14?></td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Average Mail Received Per User</td>
                  <td><?php echo $AvgReceived = 5?></td>
                  <td>24/05/2014</td>
                </tr>
				<tr>
                  <td>Most Mail Sent</td>
                  <td><?php echo $Mostsent = 152?></td>
                  <td>24/05/2014</td>
                </tr>
              </tbody>
            </table>
          </div>
		  
		  
		<div name="Charts">
			<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		    <script type="text/javascript">
		    google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
				  ['Year', 'Sent', 'Recieved'],
				  ['1999',  1000,      400],
				  ['2000',  1170,      460],
				  ['2001',  660,       1120],
				  ['2002',  1030,      540]
				]);

				var options = {
				  title: 'Mail Sent/Recieved By Year',
				  hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
				};

				var chart = new google.visualization.ColumnChart(document.getElementById('mail_over_time_chart'));
				chart.draw(data, options);
			  }
			  
			  
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart2);
			function drawChart2() {
				var data2 = google.visualization.arrayToDataTable([
				  ['Year', 'Sent', 'Recieved'],
				  ['1999',  1111,      400],
				  ['2000',  1170,      460],
				  ['2001',  660,       1120],
				  ['2002',  1030,      540]
				]);

				var options2 = {
				  title: 'Average Sent/Recieved By Year',
				  hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
				};

				var chart2 = new google.visualization.ColumnChart(document.getElementById('avg_over_time_chart'));
				chart2.draw(data2, options2);
			  }
			</script>
			<div id="mail_over_time_chart" style="width: 900px; height: 500px;"></div>
			<div id="avg_over_time_chart" style="width: 900px; height: 500px;"></div>
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