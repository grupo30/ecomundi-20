<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {

    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Bem vindo</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body{
    background-image:url("./assets/bg-teste2.jpg");
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
    }
</style>
</HEAD>
<BODY>
    
	<div class="phppot-container" >
        <div class="col btn btn-danger" style="margin-top:5% !important;"> User Dashboard</div><div class="page-header">
		</div>
		<div class="page-content jumbotron" style="  background-color: green;
            background-image: linear-gradient(to right, darkgoldenrod , yellow);">
  <h4 style="color:white; font-weight:bold;">Bem vindo a sua conta <?php echo $username;?></h4></div>
  <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>
	</div>
</BODY>
</HTML>
