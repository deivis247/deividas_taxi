<?php
session_start();
include_once 'connect.php';
$result=sqlsrv_query($conn, "SELECT order_from_loc, order_id FROM dbo.orders" );
$rows=array();
while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
	$rows[$row['order_id']]['location_from']=$row['order_from_loc'];
	$rows[$row['order_id']]['order_id']=$row['order_id'];
}
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
  position: absolute;
        height: 600px;
        width: 100%;
        z-index:0;
       }
       #background-White{
       background-color:white;
       z-index: 1;
       border:1px solid black;
       position:relative;
       }
          #background-White1{
       background-color:white;
       z-index: 1;
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
						<li class="active"><a href="#">Nustatymai <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Sąskaitos pildymas</a></li>
						<li><a href="klientu_vertinimas.php">Mano užsakymai</a></li>
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



			<!-- item -->
			<div class="col-md-12 ">
				<div id="map"></div>
				<!-- kreditai ir reitingai -->
				<div id="background-White" class="background-White col-md-2">
					<p>
						Kreditai: <b>phpkodas</b>
					</p>
					<p>
						Reitingas - <b>phpkodas</b>
					</p>


				</div>
				<a href="#" class="btn btn-default">Pertauka</a> <a href="#"
					class="btn btn-default">Klientas iš gatvės</a>
	
			</div>
<div id="background-White1" class=" col-md-4">
				<table>
			<?php foreach ($rows as $orders){?>
					<tr>
						<td><?=$orders['location_from']; ?></td>
						<td><a href="#" class="btn btn-default">IMU</a></td>
						<td></td>
					</tr>
					<?php }?>
					
				</table>

			</div>
			<!-- item -->
		

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
