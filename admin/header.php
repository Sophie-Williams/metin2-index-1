<?php 
ob_start();
@session_start(); 
 ?>
<?php include '../config.php' ?>
<?php 
$veri = $db->prepare("SELECT * from ayarlar WHERE id=:id");
$veri->execute(array(
	'id' => 1
));

$fetch = $veri->fetch (PDO::FETCH_ASSOC);


$kullanicisor=$db->prepare("SELECT * FROM users where user=:kad");
$kullanicisor->execute(array(
'kad' => $_SESSION['kadi'] ));
$say=$kullanicisor->rowCount();

if ($say==0) {
    header('location:login');
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
	<title>Admin sayfası</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand navbar-light bg-light sticky-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse pl-5" id="navbarNavAltMarkup">
				<div class="navbar-nav">
				<a class="nav-item nav-link mr-3 font-weight-bold" href="index">SERVERLER</a>
				<a class="nav-item nav-link mr-3 font-weight-bold" href="ayarlar">AYARLAR</a>
				</div>
				<div class="navbar-nav ml-auto">
				<a class="nav-item nav-link font-weight-bold" href="logout"><small><?php echo $_SESSION['kadi'] ?> </small> ÇIKIŞ YAP</a>
				</div>
			</div>
	</nav>
	<div class="container">
	
<style type="text/css">
		body {
		background: url("../assets/uploads/<?php echo $fetch['bg_img'] ?>") fixed;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: top center;
	}
</style>