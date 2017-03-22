<?php
session_start();
include_once 'connect.php';

// 
//checks if password is correct
if(isset($_POST['login']) && $_POST['login']=='connect'){
	$result=sqlsrv_query($conn, "SELECT user_id, user_name, user_pasw FROM dbo.users WHERE [user_name]='{$_POST['name']}'" );
$row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

if($_POST['name']==$row['user_name'] && $_POST['password']==$row['user_pasw'] && $_POST['name']!="" && $_POST['password']!=""){
$_SESSION['username']=$row['user_name'];
$_SESSION['id']=$row['user_id'];
header("Location: darbas.php");
die();
}else{
	echo "<a href='prisijungimas.php'>prisijungti nepavyko</a>";
	die();
}
print_r($row);
}
sqlsrv_close($conn);
?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Prisijungimas</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
.container {
	margin-top: 20px;
}
</style>
</head>
<body>

	<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2 ">
	<h1>Prieš pradedant naudotis aplikacija,<br>būtina užsiregistruoti</h1>
		<form action="prisijungimas.php" method="post">
		<input type="hidden" name="login" value="connect">
		<input type="text" name="name" placeholder="Prisijungimo vardas"><br>
		<input type="password" name="password" placeholder="Slaptažodis"><br>
		<input type="submit" value="prisijungimas">
		
		
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
</body>
</html>