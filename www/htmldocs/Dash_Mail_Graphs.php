<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Mail Graphs</title>
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
          
		<style type="text/css">
			a.nounderline{
			text-decoration: none;
			color: black;
			}
		</style>
		  
		  <h1 class="page-header">Mail Graphs</h1>
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
            </div>
          </div>

          <h2 class="sub-header">Python Development Mail Graphs</h2>
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
		    <!--==================Pre Scripts For Query Wrapper==================-->  
		<!--Load the AJAX API-->
		<!-- JChartFX scripts -->
        <link href="js/styles/jchartfx.css" rel="stylesheet" type="text/css"/>
        <script src="js/jchartfx.system.js" type="text/javascript"></script>
        <script src="js/jchartfx.coreBasic.js" type="text/javascript"></script>
        <script src="js/jchartfx.advanced.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<br/><br/>
		<div id='new_thread_chart' style='width:700px;height:400px;'></div>
		<br/><br/>
		<div id='msg_count_1999' style='width:700px;height:400px;'></div>

	   
	<script type="text/javascript">
		var tarray = [];
		$.getJSON('json/newthreads.json', function (json) {  
			for (var key in json) {
				if (json.hasOwnProperty(key)) {
					var item = json[key];
					tarray.push({
						year2013: item.year2013,
						year2012: item.year2012,
						year2011: item.year2011,
						year2010: item.year2010,
						Month: item.Month});
				}
			}
		});
		
		
	</script>
		
	<!-- Chart Scripting -->
	<script type="text/javascript">
		  
		//$("#num_threads").text("Total number of threads: " + totalthreads);
		
	   var chart1 = new cfx.Chart();
		chart1.setGallery(cfx.Gallery.Lines);
		populatethreadchart(chart1);
		var titles = chart1.getTitles();
		var title = new cfx.TitleDockable();
		title.setText("New Threads");
		titles.add(title);    
		chart1.create('new_thread_chart');
		
		var chart2 = new cfx.Chart();
		PopulateCarProduction(chart2);
		chart2.setGallery(cfx.Gallery.Pie);
		var data = chart2.getData();
		data.setPoints(5);
		data.setSeries(1);
		var titles = chart2.getTitles();
		var title = new cfx.TitleDockable();
		title.setText("Messages Sent By User (1999)");
		titles.add(title);
		chart2.getAllSeries().getPointLabels().setVisible(true);
		chart2.create('msg_count_1999');

	function PopulateCarProduction(chart2) {
		 var json = (function () {
				var json = null;
				$.ajax({
					'async': false,
					'global': false,
					'url': 'json/messagecount1999.json',
					'dataType': "json",
					'success': function (data) {
						json = data;
					}
				});
				return json;
			})();
			chart2.setDataSource(json);
	}

	function populatethreadchart(chart1) {      
			var json = (function () {
				var json = null;
				$.ajax({
					'async': false,
					'global': false,
					'url': 'json/newthreads.json',
					'dataType': "json",
					'success': function (data) {
						json = data;
					}
				});
				return json;
			})();
			chart1.setDataSource(json);
		}
		
	</script>
		  
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