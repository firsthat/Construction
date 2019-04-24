<?php
class Database 
{
	private static $dbName 	   = 'crud_mvc_oop';
	private static $dbHost 	   = 'localhost';
	private static $dbUsername = 'root';
	private static $dbPassword = 'abc123';
	private static $conn = null;
	public function __construct()
	{
		// die('Init function is not allowed');
	}
	public static function connect()
	{
		// One connection through whole application
		if (null == self::$conn)
		{
			try
			{
				self::$conn =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbPassword); 
			} 
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
		return self::$conn;
	}
	public static function disconnect()
	{
		self::$conn = null;
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> PROFIL UTILISATEUR </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet"s href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="">
		
		<div>
			<div class="row">

				<div class="col-md-5">
					<!--LOGO -->
					<nav class="navbar navbar-light ">
						<h2>
							<span id="fondnoir" class="font-weight-bold"> ASSISTANCE </span><br>
							<span id="posrel" class="font-weight-bold"> IMMOBILIERE </span>
						</h2>
					</nav>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-expand-md navbar-light  bg-light mt-4" >
					  <a class="navbar-brand" href="#"></a>
					  <button id="" class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup bg-light">
					    <div class="navbar-nav">
					      <a class="nav-item nav-link font-weight-bold" href="#"><span class="red"> MON PROFILE </span></a>
					      <a class="nav-item nav-link font-weight-bold" href="#"><span class="red">MES PROJETS</span> </a>
					      <a class="nav-item nav-link font-weight-bold" href="#"><span class="red"> PROJETS FINIS </span></a>
					      <a class="nav-item nav-link font-weight-bold" href="#"><span class="red"> CONTACT</span> </a>
					  </div>
				</div>
			</div>
		</div>
	</div>

	<section class="container">
		<div class="card" style="width: 18rem;">
		  <img src="..." class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">Cras justo odio</li>
		    <li class="list-group-item">Dapibus ac facilisis in</li>
		    <li class="list-group-item">Vestibulum at eros</li>
		  </ul>
		  <div class="card-body">
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>
	</section>	




<!--
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>

-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>
</html>