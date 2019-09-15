<?php

// panggil fungsi validasi xss dan injection
require_once('fungsi_validasi.php');

$server   = "localhost";
$username = "root";
$password = "";
$database = "dbapemasi";
$bpsda    = "BPUSDATARU SERCIT";
$lbpsda   = "Balai SDA Taru Serayu Citanduy";
$lokasi   = "Purwokerto";
$web      = "http://bpsda-sercit.jatengprov.go.id";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

// buat variabel untuk validasi dari file fungsi_validasi.php
$val = new Psda;

?>
