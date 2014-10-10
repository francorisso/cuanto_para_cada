<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Bootstrap, from Twitter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-top: 60px;
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }

	  @media (max-width: 980px) {
		/* Enable use of floated navbar text */
		.navbar-text.pull-right {
		  float: none;
		  padding-left: 5px;
		  padding-right: 5px;
		}
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
  </head>

<body ng-app="project_calculator">

<div class="container-fluid">
	<div class="row-fluid" ng-controller="ProjectCalculatorController as projectmanager">
	  	<h1>Project profits per developer</h1>
		<div class="hero-unit" ng-repeat="project in projectmanager.projects">
			<h2>Project: {{ project.name }}</h2>
			Total amount: <input type="text" value="{{ project.amount }}" />
			<table class="table">
				<thead>
					<tr>
						<th>Developer</th>
						<th>Hours</th>
						<th>Profit</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="developer in project.hours_developers">
						<td>{{ developer.name }}</td>
						<td><input type="text" value="{{ developer.hours }}" /></td>
						<td>{{ (developer.hours/project.hours_total) * project.amount }}</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div><!--/row-->

	<footer>
		<p>&copy; <a href="http://720developments.com" target="_blank">720developments.com</a></p>
	</footer>

</div><!--/.fluid-container-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
		

</body>
</html>