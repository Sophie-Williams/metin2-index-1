<?php include '../config.php' ?>
<?php
ob_start();
session_start();
?>
<?php


if (isset($_POST['admin_form'])) {
	$kadi    = $_POST['admin_kadi'];
	$pass    = $_POST['admin_sifre'];

	$sor=$db->prepare("SELECT * FROM users where user=:user and password=:password");
	$sor->execute(array(
	'user' => $kadi,
	'password' => $pass
	));
	$say=$sor->rowCount();

	if ($say==1) {
		$_SESSION['kadi']=$kadi;
		header('location:index.php');
		exit;
	}	else {
		header('location:login.php?hata=1');
		exit;
	}
}

if (isset($_POST['adminForm'])) {
	$user = $_POST['user'];
	$pass = $_POST['password'];

	$sorgu = $db->prepare("UPDATE users set
		user     =:user,
		password =:pass
		WHERE id = 1
	");

	$update = $sorgu->execute(array(
		'user' => $user,
		'pass' => $pass
	));
}

if (isset($_POST['linkForm'])) {
		$tanitim_link = $_POST['tanitim_link'];
		$forum_link    = $_POST['forum_link'];
		$wiki_link    = $_POST['wiki_link'];
		
		$sorgu        = $db->prepare("UPDATE ayarlar set
		tanitim_link  =:tanitim_link,
		forum_link     =:forum_link,
		wiki_link     =:wiki_link
		WHERE id      = 1
	");

	$update = $sorgu->execute(array(
		'tanitim_link' => $tanitim_link,
		'forum_link'    => $forum_link,
		'wiki_link'    => $wiki_link
	));
}

if (isset($_POST['serverForm'])) {
function RandomCode($limit='8')
{
	$karakterler = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$karaktersay = strlen($karakterler);
	$random = '';
	for ($i=0; $i < $limit; $i++) { 
		$random .= $karakterler[rand(0, $karaktersay-1)];
	}
	return $random;
}
	
	$s1_name    =$_POST['s1_name'];
	$s1_date    =$_POST['s1_date'];
	$s1_link    =$_POST['s1_link'];
	$s1_active  =$_POST['s1_active'];
	
	$s2_name    =$_POST['s2_name'];
	$s2_date    =$_POST['s2_date'];
	$s2_link    =$_POST['s2_link'];
	$s2_active  =$_POST['s2_active'];
	
	$s3_name    =$_POST['s3_name'];
	$s3_date    =$_POST['s3_date'];
	$s3_link    =$_POST['s3_link'];
	$s3_active  =$_POST['s3_active'];
	
	$youtube    =$_POST['youtube'];
	
	$resimkonum = "../assets/uploads";
	
	$tmp_name   = $_FILES['s1_img'] ['tmp_name'];
	$name       = $_FILES['s1_img'] ['name'];
	$boyut      = $_FILES['s1_img'] ['size'];
	$tip        = $_FILES['s1_img'] ['type'];
	
	$tmp_name2  = $_FILES['s2_img'] ['tmp_name'];
	$name2      = $_FILES['s2_img'] ['name'];
	$boyut2     = $_FILES['s2_img'] ['size'];
	$tip2       = $_FILES['s2_img'] ['type'];
	
	$tmp_name3  = $_FILES['s3_img'] ['tmp_name'];
	$name3      = $_FILES['s3_img'] ['name'];
	$boyut3     = $_FILES['s3_img'] ['size'];
	$tip3       = $_FILES['s3_img'] ['type'];

	$uzanti    = substr($name, -4,4);
	$uzanti2    = substr($name2, -4,4);
	$uzanti3    = substr($name3, -4,4);
	

	if (strlen($name) == 0) {
		$resimsql  = $_POST['s1_old_img'];
	} else {
		$resimad   = RandomCode().$uzanti;
		move_uploaded_file($tmp_name, "$resimkonum/$resimad");
		$resimsql  = "$resimad";
	}

	if (strlen($name2) == 0) {
		$resimsql2  = $_POST['s2_old_img'];
	} else {
		$resimad2   = RandomCode().$uzanti2;
		move_uploaded_file($tmp_name2, "$resimkonum/$resimad2");
		$resimsql2  = "$resimad2";
	}

	if (strlen($name3) == 0) {
		$resimsql3  = $_POST['s3_old_img'];
	} else {
		$resimad3   = RandomCode().$uzanti3;
		move_uploaded_file($tmp_name3, "$resimkonum/$resimad3");
		$resimsql3  = "$resimad3";
	}

		

	$kaydet=$db->prepare('UPDATE servers set
		s1_name   =:s1n,
		s1_date   =:s1d,
		s1_link   =:s1l,
		s1_active =:s1a,
		s1_img    =:s1i,
		s2_name   =:s2n,
		s2_date   =:s2d,
		s2_link   =:s2l,
		s2_active =:s2a,
		s2_img    =:s2i,
		s3_name   =:s3n,
		s3_date   =:s3d,
		s3_link   =:s3l,
		s3_active =:s3a,
		s3_img    =:s3i,
		youtube   =:yt
		WHERE id  = 0
	');

	$insert=$kaydet->execute(array(
		's1n' => $s1_name,
		's1d' => $s1_date,
		's1l' => $s1_link,
		's1a' => $s1_active,
		's1i' => $resimsql,
		's2n' => $s2_name,
		's2d' => $s2_date,
		's2l' => $s2_link,
		's2a' => $s2_active,
		's2i' => $resimsql2,
		's3n' => $s3_name,
		's3d' => $s3_date,
		's3l' => $s3_link,
		's3a' => $s3_active,
		's3i' => $resimsql3,
		'yt'  => $youtube
	));
}

if (isset($_POST['bgForm'])) {
function RandomCode($limit='8')
{
	$karakterler = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$karaktersay = strlen($karakterler);
	$random = '';
	for ($i=0; $i < $limit; $i++) { 
		$random .= $karakterler[rand(0, $karaktersay-1)];
	}
	return $random;
}

	$resimkonum = "../assets/uploads";
	
	$tmp_name   = $_FILES['logo'] ['tmp_name'];
	$name       = $_FILES['logo'] ['name'];
	$boyut      = $_FILES['logo'] ['size'];
	$tip        = $_FILES['logo'] ['type'];
	
	$tmp_name2  = $_FILES['bg_img'] ['tmp_name'];
	$name2      = $_FILES['bg_img'] ['name'];
	$boyut2     = $_FILES['bg_img'] ['size'];
	$tip2       = $_FILES['bg_img'] ['type'];

	$uzanti    = substr($name, -4,4);
	$uzanti2    = substr($name2, -4,4);
	

	if (strlen($name) == 0) {
		$resimsql  = $_POST['old_logo'];
	} else {
		$resimad   = RandomCode().$uzanti;
		move_uploaded_file($tmp_name, "$resimkonum/$resimad");
		$resimsql  = "$resimad";
	}

	if (strlen($name2) == 0) {
		$resimsql2  = $_POST['old_bg'];
	} else {
		$resimad2   = RandomCode().$uzanti2;
		move_uploaded_file($tmp_name2, "$resimkonum/$resimad2");
		$resimsql2  = "$resimad2";
	}
		

	$kaydet=$db->prepare('UPDATE ayarlar set
		logo =:logo,
		bg_img =:bg_img
		WHERE id  = 1
	');

	$insert=$kaydet->execute(array(
		'logo' => $resimsql,
		'bg_img' => $resimsql2
	));
}

?>