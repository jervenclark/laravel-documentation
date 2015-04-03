<?php 
	require __DIR__ . '/src/parse_md.php';	
	$docs = new Parse_MD('\..\src\assets\md\\');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	   
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Docs</title>
	<link type="text/css" rel="stylesheet"  href="public/bootstrap/dist/css/bootstrap.min.css" >
	<style type="text/css">
		.h1, .h2, .h3, h1, h2, h3, #documentation {
			margin-top: 50px;
			margin-bottom: 20px;
		}
		.h4, h4{
			margin-top: 35px;
			margin-bottom: 10px;	
		}

		.tabs-left > .nav-tabs > li{
			float: none;
		}

		.tabs-left > .nav-tabs > li > a{
			min-width: 74px;
			margin-right: 0;
			margin-bottom: 3px;
		}

		.tabs-left > .nav-tabs {
			float: left;
			margin-right: 19px;
			border-right: 1px solid #ddd;
		}

		.tabs-left > .nav-tabs > li > a {
			margin-right: -1px;
			-webkit-border-radius: 4px 0 0 4px;
			-moz-border-radius: 4px 0 0 4px;
			border-radius: 4px 0 0 4px;
		}

		.tabs-left > .nav-tabs > li > a:hover,
		.tabs-left > .nav-tabs > li > a:focus {
			border-color: #eeeeee #dddddd #eeeeee #eeeeee;
		}

		.tabs-left > .nav-tabs .active > a,
		.tabs-left > .nav-tabs .active > a:hover,
		.tabs-left > .nav-tabs .active > a:focus {
			border-color: #ddd transparent #ddd #ddd;
			*border-right-color: #ffffff;
		}
	</style>
</head>
<body>
	<div id="main-container" class="container">
		<div class="row">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked" role="tablist" id="documentation">
					<?php
						foreach ($docs::$pages as $key => $value) {													
							echo "<li role=\"presentation\"><a href=\"#{$value['name']}\" role=\"tab\" data-toggle=\"tab\" class=\"text-capitalize\">{$value['name']}</a></li>";							
						}
					?>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="tab-content">
					<?php
						foreach ($docs::$pages as $key => $value) {	
							echo "<div class=\"tab-pane\" id=\"{$value['name']}\"  role=\"tabpanel\" >{$value['content']}</div>";					
						}
					?>
				</div>
			</div>			
		</div>
		<script src="public/jquery/dist/jquery.min.js"></script>    
		<script src="public/bootstrap/dist/js/bootstrap.min.js"></script>
		<script>
			$(function () {
				$('#documentation a:first').tab('show');
			})
		</script>
	</body>
</html>