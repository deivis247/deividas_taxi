<?php
session_start();

?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Darbas</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
  #map {
        height: 85%;
        width: 100%;
       }
       .background-White{
       background-color:white;
       z-index: 15;
       border:1px solid black;
       }
</style>
</head>
<body>

	<div class="container">

		<!-- Nav bar -->
		<nav class="navbar navbar-default" style="margin-bottom: 0px;">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
						aria-expanded="false">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Taksi vairuotojo aplikacija</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">Nustatymai </a></li>
						<li><a href="#">Sąskaitos pildymas</a></li>
						<li class="active"><a href="klientu_vertinimas.php">Mano užsakymai</a></li>
						<li><a href="#">Kur daugiau užsakymų</a></li>
						<li><a href="#">Neapmokėti užsakymai</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Nav bar -->
	
	<div class="row">
	<h1>Mano užsakymai</h1>
	<div class="col-md-10">
	<p><span onclick="display('form1');">+370 612 12345  12:35 Iš Naikupės 20 į Taikos 64 2017 01 20 20:15</span></p>
	<form id="form1" style="display:none;">
	<input type="checkbox" value="Agresyvus">Agresyvus<br>
	<input type="checkbox" value="Nesusimokėjo">Nesusimokėjo<br>
	<input type="checkbox" value="Paliko arbatpinigiu">Paliko arbatpinigiu<br>
	<input type="submit" value="saugoti">
	</form>
	
		<p><span onclick="display('form2');">+370 612 12345  12:35 Iš Naikupės 20 į Taikos 64 2017 01 20 20:15</span></p>
	<form id="form2" style="display:none;">
	<input type="checkbox" value="Agresyvus">Agresyvus<br>
	<input type="checkbox" value="Nesusimokėjo">Nesusimokėjo<br>
	<input type="checkbox" value="Paliko arbatpinigiu">Paliko arbatpinigiu<br>
	<input type="submit" value="saugoti">
	</form>
	
	
		<p><span onclick="display('form3');">+370 612 12345  12:35 Iš Naikupės 20 į Taikos 64 2017 01 20 20:15</span></p>
	<form id="form3" style="display:none;">
	<input type="checkbox" value="Agresyvus">Agresyvus<br>
	<input type="checkbox" value="Nesusimokėjo">Nesusimokėjo<br>
	<input type="checkbox" value="Paliko arbatpinigiu">Paliko arbatpinigiu<br>
	<input type="submit" value="saugoti">
	</form>
	
	
		<p><span onclick="display('form4');">+370 612 12345  12:35 Iš Naikupės 20 į Taikos 64 2017 01 20 20:15</span></p>
	<form id="form4" style="display:none;">
	<input type="checkbox" value="Agresyvus">Agresyvus<br>
	<input type="checkbox" value="Nesusimokėjo">Nesusimokėjo<br>
	<input type="checkbox" value="Paliko arbatpinigiu">Paliko arbatpinigiu<br>
	<input type="submit" value="saugoti">
	</form>
	
	
		<p><span onclick="display('form5');">+370 612 12345  12:35 Iš Naikupės 20 į Taikos 64 2017 01 20 20:15</span></p>
	<form id="form5" style="display:none;">
	<input type="checkbox" value="Agresyvus">Agresyvus<br>
	<input type="checkbox" value="Nesusimokėjo">Nesusimokėjo<br>
	<input type="checkbox" value="Paliko arbatpinigiu">Paliko arbatpinigiu<br>
	<input type="submit" value="saugoti">
	</form>
	</div>
	
	
	
	
	
	
	
	
	</div>
	
	
	
	
	</div>
	<!-- /container -->









	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	  <script src="js/custom.js" >

	  </script>
	 
	 
	   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX5p59PmIY0dPUMA3lNvBY0Rg-XcLACM4&callback=getLocation">
    </script>
	
	
	
   
</body>
</html>