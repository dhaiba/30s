<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Roulette.js Demo</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css">
		<link rel="stylesheet" href="bootstrap-responsive.css">
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/ui-lightness/jquery-ui.css">
		<link rel="stylesheet" href="demo.css">
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="./">Roulette.js</a>
					<div class="nav-collapse collapse" id="main-menu">
						<ul class="nav pull-right" id="main-menu-right">
							<li><a rel="tooltip" target="_blank" href="https://github.com/akira-kuriyama/roulette.js" >Github<i class="icon-share-alt"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="page-header" style="">
				<h1>
					Roulette.js DEMO
				</h1>
			</div>

			<div class="row">
				<div class="span4">
					<div class="roulette_container" >
						<div class="roulette" style="display:none;">
							<img src="star.png"/>
							<img src="flower.png"/>
							<img src="coin.png"/>
							<img src="mshroom.png"/>
							<img src="chomp.png"/>
						</div>
					</div>
					<div class="btn_container">
						<p>
						<button class="btn btn-large btn-primary start"> START </button>
						<button class="stop btn-large btn btn-warning"> STOP </button>
						</p>
					</div>
					<div class="log_container">
						<p class="demo_label">Log</p>
						<div id="msg">
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="right_container">
						<p class="demo_label">Paramater</p>
						<div class="speed_value param_label">
							<span class="param_name">speed :</span> <span class="speed_param"></span>
						</div>
						<div id="speed"> </div>
						
						<div class="duration_value param_label">
							<span class="param_name">duration :</span> <span class="duration_param"></span>
						</div>
						<div id="duration"> </div>
						
						<div class="stop_image_number_value param_label">
							<span class="param_name">stop image number :</span> <span class="stop_image_number_param"></span>
						</div>
						<input id="stopImageNumber" name="stopImageNumber"/>
						<span class="image_sample">
							<img data-value="0"  src="star.png"/>
							<img data-value="1"  src="flower.png"/>
							<img data-value="2"  src="coin.png"/>
							<img data-value="3"  src="mshroom.png"/>
							<img data-value="4"  src="chomp.png"/>
							<img data-value="-1" src="random.png" title="random"/>
						</span>
					</div>
					<div class="right_container code_container">
						<p class="demo_label">Code</p>
						<span class="label label-info" style>JavaScript</span>
							<pre>
var option = {
	speed : <span class="speed_param"></span>,
	duration : <span class="duration_param"></span>,
	stopImageNumber : <span class="stop_image_number_param"></span>,
	startCallback : function() {
		console.log('start');
	},
	slowDownCallback : function() {
		console.log('slowDown');
	},
	stopCallback : function($stopElm) {
		console.log('stop');
	}
}
$('div.roulette').roulette(option);	
							</pre>
						<span class="label label-info" style>HTML</span>
							<pre>

&lt;div class="roulette" style="display:none;"&gt; 
	&lt;img src="http://example.com/star.png"/&gt;
	&lt;img src="http://example.com/flower.png"/&gt;
	&lt;img src="http://example.com/coin.png"/&gt;
	&lt;img src="http://example.com/mshroom.png"/&gt;
	&lt;img src="http://example.com/chomp.png"/&gt;
&lt;/div&gt; 
							</pre>
					</div>
				</div>
			</div>
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
		<script src="../roulette.js"></script>
		<script src="demo.js"></script>

	</body>
</html>

