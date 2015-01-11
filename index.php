<html>
	<head>
		<title>Dashboard</title>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="jquery-ui-1.11.2.custom/jquery-ui.min.css" rel="stylesheet" >
		<link href="dashboard.css" rel="stylesheet">

	</head>
	<body>
		<div class="row dashboardheader">
			<div class="span4">
				<img src="images/Citi.png" width="80px"/>
			</div>
			<div class="span8">
				<h1>Real time Monitoring Dashboard [ POC ]</h1>
			</div>
		</div>
		<hr>
		<div class="container dashboard">

			<div class="row">
				<div class="span2 giveRightBorder">
					<ul class="nav nav-pills nav-stacked">
					  <li role="presentation" id="enableLiveLatencyStats" class="active"><a href="#">Live Latency Stats</a></li>
					  <li role="presentation" id="enableHistoryLatencyStats"><a href="#">Latency History Stats</a></li>
					</ul>
				</div>
				<div class="span9">
					<br>
					<div id="liveLatencyStats" style="width:100%;"></div>
					<br>
					<div id="historyLatencyStats" style="width:80%;"></div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/highstock.js"></script>
    	<script type="text/javascript" src="js/exporting.js"></script>
    	<script type="text/javascript" src="js/liveStats.js"></script>
    	<script type="text/javascript" src="js/historyLatencyStats.js"></script>

	</body>
</html>

