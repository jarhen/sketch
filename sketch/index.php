<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="col-lg-12 text-center" style="margin-top:20px;color:#fff;"><h2>Whiteboard</h2></div>
		<div class="col-lg-12">
			<div class="demo" id="colors_demo">
					<div class="col-lg-3" style="margin-top:20px;">
						<div class="panel-group">
						
							<div class="panel panel-black">
							  <div class="panel-heading">Actions</div>
								  <div class="panel-body">
									<a class="btn btn-primary marker btn-block" href="#colors_sketch" data-tool="marker"><i class="fa fa-pencil" aria-hidden="true"></i> Pen</a>
									<a class="btn btn-warning eraser btn-block"  href="#colors_sketch" data-tool="eraser"><i class="fa fa-trash" aria-hidden="true"></i> Clear all</a>
									<a class="btn btn-danger  eraser btn-block"  id="eraser" href="#colors_sketch" data-tool="true_eraser"><i class="fa fa-eraser" aria-hidden="true"></i> Eraser</a>
									<a href="#colors_sketch" data-download="png" class="btn btn-success btn-block"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
								  </div>
							</div>
							
							<div class="panel panel-black">
							  <div class="panel-heading">Pen Color</div>
							  <div class="panel-body">
								<div class="tools"></div>
							  </div>
							</div>
							
							<div class="panel panel-black">
							  <div class="panel-heading">Pen Size</div>
							  <div class="panel-body"><div class="tools1"></div></div>
							</div>
						  </div>
						
					</div>
					
					<div class="col-lg-9 board">
						<canvas class="canvas" id="colors_sketch" width="1080" height="500"></canvas>
					</div>
					<div class="col-lg-12" style="margin-top:20px;color:#fff;">
						<p class="text-center" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">jaimeframosjr2017</p>
					</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/sketch.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="css/mystyle.css" rel="stylesheet" >
</body>
</html>

