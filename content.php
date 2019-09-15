<?php
   include "config/koneksi.php";
   include "config/library.php";
   include "config/fungsi_indotgl.php";
   include "config/fungsi_combobox.php";
   include "config/class_paging.php";

   // Bagian Home
   if ($_GET['module']=='home'){
   if ($_SESSION['leveluser']=='admin'){
   echo "
  
   <div id='main-content'>
   <div class='container_12'>
   <div class='grid_12'>
                             
   <p>Silahkan klik menu pilihan yang berada di sebelah kiri<br/>atau pilih ikon-ikon pada  
   Control Panel di bawah ini:</p>
   </div>

   <div class='grid_12'>
   <div class='block-border'>
   <div class='block-header'>
   <h1>BERANDA</h1>
   <span></span> 
   </div>
   <div class='block-content'>
 
   <ul class='shortcut-list'>
  
   <li><a href=media.php?module=user><img src='img/user.png'/>Setting User</a></li>
   <li><a href=media.php?module=inbox><img src='img/kontak.png'/>Inbox</a></li>
   <li><a href=media.php?module=elevasi><img src='img/nilai.png'/>Elevasi</a></li>
   <li><a href=media.php?module=rekap><img src='img/katalog.png'/>Laporan</a></li>
   <li><a href=media.php?module=bendung><img src='img/modul.png'/>Bendung</a></li>
   </ul>

  <p align=right>Login : $hari_ini, ";
  echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p>";
  
   // Statistik user
  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu   = time(); // 

  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
  // Kalau belum ada, simpan data user tersebut ke database
  if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  else{
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  }

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik 
  WHERE tanggal='$tanggal' GROUP BY  tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $bataswaktu       = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

  $path = "counter/";
  $ext = ".png";

  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  for ( $i = 0; $i <= 9; $i++ ){
	   $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
  }

  
 
  } elseif ($_SESSION['leveluser']=='user'){
  
 echo "<div id='main-content'>
 <div class='container_12'>
 <div class='grid_12'>
                             
 <p>Silahkan klik menu pilihan yang berada di sebelah kiri untuk navigasi sistem informasi bendungan anda. <br/></p>
 </div>
 <div class='grid_12'>
   <div class='block-border'>
   <div class='block-header'>
   <h1>BERANDA</h1>
   <span></span> 
   </div>
   <div class='block-content'>
 
 <ul class='shortcut-list'>
  <ul class='shortcut-list'>
  
   <li><a href=media.php?module=user><img src='img/user.png'/>Setting User</a></li>
   <li><a href=media.php?module=inbox><img src='img/kontak.png'/>Inbox</a></li>
   <li><a href=media.php?module=elevasi><img src='img/nilai.png'/>Elevasi</a></li>
   <li><a href=media.php?module=rekap><img src='img/katalog.png'/>Laporan</a></li>
   <li><a href=media.php?module=bendung><img src='img/modul.png'/>Bendung</a></li>
   </ul>
  </ul>


 <p align=right>Login : $hari_ini, ";
  echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p>";
  
   // Statistik user
  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu   = time(); // 

  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
  // Kalau belum ada, simpan data user tersebut ke database
  if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  else{
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  }

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $bataswaktu       = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

  $path = "counter/";
  $ext = ".png";

  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  for ( $i = 0; $i <= 9; $i++ ){
	   $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
  }

 echo " </div>";
 }
 }


// (BARU) Bagian inbox
elseif ($_GET[module]=='inbox'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_inbox/inbox.php";
  }
}

// Bagian guru
elseif ($_GET['module']=='petugas'){
    if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_petugas/petugas.php";
  }
}

// Bagian siswa
elseif ($_GET[module]=='bendung'){
   if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user' OR $_SESSION[leveluser]=='siswa'){
    include "modul/mod_bendung/bendung.php";
  }
}

// Bagian User
elseif ($_GET['module']=='user'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user' OR $_SESSION[leveluser]=='siswa'){
    include "modul/mod_users/users.php";
  }
}

// Bagian Modul
elseif ($_GET['module']=='modul'){
   if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_modul/modul.php";
  }
}
// Bagian mapel
elseif ($_GET['module']=='elevasi'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_elevasi/elevasi.php";                            
  }
}

// Bagian rekap
elseif ($_GET['module']=='rekap'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_rekap/rekap.php";
  }
}

  
  // Bagian Background
  elseif ($_GET[module]=='distribusi'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
  include "modul/mod_distribusi/distribusi.php";}}   


// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}


?>
