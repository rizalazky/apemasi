<?php
session_start();
error_reporting(0);

//fungsi cek akses user
function user_akses($mod,$id){
	$link = "?module=".$mod;
	$cek = mysql_num_rows(mysql_query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'"));
	return $cek;
}
//fungsi cek akses menu
function umenu_akses($link,$id){
	$cek = mysql_num_rows(mysql_query("SELECT * FROM modul,users_modul WHERE modul.id_modul=users_modul.id_modul AND users_modul.id_session='$id' AND modul.link='$link'"));
	return $cek;
}
//fungsi redirect
function akses_salah(){
	$pesan = "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Maaf Anda tidak berhak mengakses halaman ini</center>";
 	$pesan.= "<meta http-equiv='refresh' content='2;url=media.php?module=home'>";
	return $pesan;
}

if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "err";
  // echo "
  // <link href='css/zalstyle.css' rel='stylesheet' type='text/css'>";

  // echo "
  // </head>
  // <body class='special-page'>
  // <div id='container'>
  // <section id='error-number'>
  
  // <img src='img/lock.png'>
  // <h1>AKSES ILEGAL</h1>
  
  // <p><span class style=\"font-size:14px; color:#ccc;\">
  // Maaf, untuk masuk Halaman Administrator
  // anda harus Login dahulu!</p></span><br/>
  
  // </section>
  
  // <section id='error-text'>
  // <p><a class='button' href='index.php'>   <b>LOGIN DI SINI</b>   </a></p>
  // </section>
  // </div>";
  
}
else{
?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
	<meta charset="utf-8"/>
	<title>.:: APEMASI ::. </title>
	
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" href="css/zalstyle.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    
    
<script language="JavaScript">
function popup(url) {
 window.open(url, "cetak", "width=800px,height=600px,left=20,top=10,resizable=1,scrollbars=1,addressbars=0");
}
</script> 
	
	<script language="javascript">
$(function(){
   $("#tanggal").datepicker({dateFormat:"yy-mm-dd",changeMonth:true,changeYear:true,yearRange:"1930"});
   
     });
</script>    
<script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

  </head>
  <body id="top" >
  <div id="container">
  <div id="header-surround">
  <header id="header">
  <img src="img/logo.png" alt="Grape" class="logo" /> 
									
  <div id="user-info">
  <p> 
  <a href="logout.php" class="button red">Logout</a> </p>
  </div>
  </header>
  </div>
  <div class="fix-shadow-bottom-height"></div>
  
  <aside id="sidebar">
  <section id="login-details">
  <?php include "foto.php"; ?>
  <div class='selamat'><SCRIPT language=JavaScript>var d = new Date();
  var h = d.getHours();
  if (h < 11) { document.write('Selamat pagi,'); }
  else { if (h < 15) { document.write('Selamat siang,'); }
  else { if (h < 19) { document.write('Selamat sore,'); }
  else { if (h <= 23) { document.write('Selamat malam,'); }
  }}}</SCRIPT></div>
  <h3><?php include "nama.php"; ?></h3>
  
  <?php
  $jumHub=mysql_num_rows(mysql_query("SELECT * FROM inbox WHERE Processed='false'"));
  echo "
  <span class=messages> <a href='?module=inbox'>
  <img src='img/icons/packs/fugue/16x16/mail.png' alt='Pesan'>  <span class style=\"color:#66CCFF;\"><b>$jumHub</b></span>
  <span class style=\"font-size:11px; color:#fff;\"> belum dibaca</span></a> </span>";
  ?>
  
  </section>
	<nav id="nav">
  <ul class="menu collapsible shadow-bottom">
	
   <li>
  <a href="javascript:void(0);">
   INBOX</a> 
  <ul class="sub">
  <?php include "menu/menu1.php"; ?>
  </ul>
   <li>
  <a href="javascript:void(0);">
   ELEVASI</a> 
  <ul class="sub">
  <?php include "menu/menu2.php"; ?>
  </ul>
  <li>
  <a href="javascript:void(0);">
   DISTRIBUSI AIR</a> 
  <ul class="sub">
  <?php include "menu/menu6.php"; ?>
  </ul>
  <li>
  <a href="javascript:void(0);">
   LAPORAN</a> 
  <ul class="sub">
  <?php include "menu/menu3.php"; ?>
  </ul>
  <li>
  <a href="javascript:void(0);">
   SETTING</a> 
  <ul class="sub">
  <?php include "menu/menu4.php"; ?>
  </ul>
  <li>
  <a href="javascript:void(0);">
   MODUL USER</a> 
  <ul class="sub">
  <?php include "menu/menu5.php"; ?>
  </ul>
   </ul><br><br><br>
  
  </nav>
  </aside>
		
  <div id="main" role="main">
  <div id="title-bar">
  <ul id="breadcrumbs">
  <li><a href="?module=home" title="Beranda"><span id="bc-home"></span></a></li>
  <li>
    <div class="boxwadahteks">
      <div class="GRwadahteks">
        <div class="GRmlaku">APLIKASI PEMBAGIAN AIR IRIGASI
        <span><?php echo '..:: '.$bpsda.' ::..'; ?></span></div>
      </div>
    </div>
  </li>
  </ul>
  </div>
  <div class="shadow-bottom shadow-titlebar"></div>
  <?php include "content.php"; ?>
  <div class="text-center">© Copyright 2019 - <?php $t=date("Y"); echo $t;?> SISDA Balai PUSDATARU PEMALI COMALL </div>
  </div>
  
  <script src="js/jquery.min.js"></script> 
  <script>window.jQuery||document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>');</script> 
  <script defer type="text/javascript" src="js/zal.js"></script>

  </body></html>
  <?php
  }
  ?>
