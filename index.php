<?php include 'config.php' ?>
<?php
$veri = $db->prepare("SELECT * from servers WHERE id=:id");
$veri->execute(array(
	'id' => 0
));

$fetch = $veri->fetch (PDO::FETCH_ASSOC);
?>

<?php
$veri = $db->prepare("SELECT * from ayarlar WHERE id=:id");
$veri->execute(array(
	'id' => 1
));

$ayarlar = $veri->fetch (PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
	<title>İndex sayfası</title>
</head>
<style type="text/css">
	.logo > img {
		max-height: 280px
	}

	@font-face {
		font-family: 'Evogria';
		src: url('//cdn.zulaoyun.com/sitecdn/TR/Content/hesapzulaoyun/fonts/Evogria.otf') format('opentype');
		font-weight: normal;
		font-style: normal;
	}

	body {
		background: url("assets/uploads/<?php echo $ayarlar['bg_img'] ?>") fixed;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: top center;
		font-family: 'Evogria', sans-serif;
	}

	.effect:hover {
		-webkit-box-shadow: 0px 0px 60px 0px rgba(217,140,24,0.4);
		-moz-box-shadow: 0px 0px 60px 0px rgba(217,140,24,0.4);
		box-shadow: 0px 0px 60px 0px rgba(217,140,24,0.4);
	}

	.effect-video {
		-webkit-box-shadow: 0px 0px 60px 0px rgba(255,255,255,0.1);
		-moz-box-shadow: 0px 0px 60px 0px rgba(255,255,255,0.1);
		box-shadow: 0px 0px 60px 0px rgba(255,255,255,0.1);
	}

	.bg-new {
		background-color: rgba(0,0,0,0.4);
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-new sticky-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse pl-5" id="navbarNavAltMarkup">
				<div class="navbar-nav">
				<a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo $ayarlar['tanitim_link'] ?>">TANITIM SAYFASI</a>
				<?php if (strlen($ayarlar['forum_link']) > 1): ?>
					<a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo $ayarlar['forum_link'] ?>">FORUM</a>
				<?php endif ?>
				<?php if (strlen($ayarlar['wiki_link']) > 1): ?>
					<a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo $ayarlar['wiki_link'] ?>">WİKİ</a>
				<?php endif ?>
				</div>
			</div>
	</nav>
	<div class="container">
		<div class="row">
		<div class="col-md-12 logo text-center">
			<img src="assets/uploads/<?php echo $ayarlar['logo'] ?>" class="img-fluid">
		</div>
		</div>
		
		<div class="text-center text-white h3 mb-3">SERVERİNİ SEÇ</div>


<?php if ( ($fetch['s1_active']==1) && ($fetch['s2_active'] == 0 ) && ($fetch['s3_active'] == 0 ) ): ?>
		<div class="text-center"><small class="text-white" style="font-size: 10px">Açılış: <?php echo $fetch['s1_date'] ?></small></div>
		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<a href="">
					<img class="img-fluid effect" src="assets/uploads/<?php echo $fetch['s1_img'] ?>">
				</a>
			</div>
		</div>
<?php endif ?>

<?php if ( ($fetch['s1_active'] ==1) && ($fetch['s2_active'] == 1 ) && ($fetch['s3_active'] == 0 ) ):  ?>
		<div class="row mt-5">
			<div class="col-md-5 text-center">
				<div class="text-center"><small class="text-white" style="font-size: 10px">Açılış: <?php echo $fetch['s1_date'] ?></small></div>
				<a href="">
					<img class="img-fluid effect" src="assets/uploads/<?php echo $fetch['s1_img'] ?>">
				</a>
			</div>

			<div class="col-md-5 offset-md-2 text-center">
				<div class="text-center"><small class="text-white" style="font-size: 10px">Açılış: <?php echo $fetch['s2_date'] ?></small></div>
				<a href="">
					<img class="img-fluid effect" src="assets/uploads/<?php echo $fetch['s2_img'] ?>">
				</a>
			</div>
		</div>
<?php endif ?>

<?php if ( ($fetch['s1_active'] ==1) && ($fetch['s2_active'] == 1 ) && ($fetch['s3_active'] == 1 )):  ?>
		<div class="text-center"><small class="text-white" style="font-size: 10px">Açılış: <?php echo $fetch['s1_date'] ?></small></div>
		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<a href="">
					<img class="img-fluid effect" src="assets/uploads/<?php echo $fetch['s1_img'] ?>">
				</a>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-md-5 text-center">
				<div class="text-center"><small class="text-white" style="font-size: 10px">Açılış: <?php echo $fetch['s2_date'] ?></small></div>
				<a href="">
					<img class="img-fluid effect" src="assets/uploads/<?php echo $fetch['s2_img'] ?>">
				</a>
			</div>

			<div class="col-md-5 offset-md-2 text-center">
				<div class="text-center"><small class="text-white" style="font-size: 10px">Açılış: <?php echo $fetch['s3_date'] ?></small></div>
				<a href="">
					<img class="img-fluid effect" src="assets/uploads/<?php echo $fetch['s3_img'] ?>">
				</a>
			</div>
		</div>
<?php endif ?>


<?php if (strlen($fetch['youtube'] > 0)): ?>
		<div class="row">
			<div class="col-md-8 offset-md-2 mt-5">
				<div class="embed-responsive embed-responsive-16by9 effect-video effect">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $fetch['youtube'] ?>" allowfullscreen></iframe>
				</div>
			</div>
		</div>
<?php endif ?>

			
<footer>
	<small class="text-center d-block m-3 text-warning" style="font-size: 11px">2019 &copy; Designed By FKT</small> <!-- Emeğe saygı için lütfen bu kısmı silmeyiniz. -->
</footer>
	</div>
</body>
</html>