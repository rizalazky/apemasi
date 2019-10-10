<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
$dt = mysql_fetch_array(mysql_query("SELECT id,periode,bulan,tahun FROM `alokasi` ORDER BY id DESC"));
$period = $dt['periode'];
$blan = $dt['bulan'];
$thn = $dt['tahun'];
$bulan = getBulan($blan);
$jmlhari = jumlahhari($blan, $thn);
if ($period == 'I') {
	$per = "1-15";
} else {
	$per = "16-" . $jmlhari;
}
$periode = $per . " " . $bulan . " " . $thn;
$dta = mysql_fetch_array(mysql_query("SELECT id,file FROM `upload` WHERE jenisdata='faktork' AND file LIKE '%BPR%' ORDER BY id DESC"));
$nama_file_k = $dta['file'];
$dtb = mysql_fetch_array(mysql_query("SELECT id,file FROM `upload` WHERE jenisdata='alokasi' AND file LIKE '%BPR%' ORDER BY id DESC"));
$nama_file_a = $dtb['file'];
$qperlu = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BPR' ORDER BY id DESC"));
$debit = mysql_fetch_array(mysql_query("SELECT debit FROM `elevasi` WHERE kode='BPR' ORDER BY id_elevasi DESC"));
$bbg = $debit['debit'] / $qperlu['q_diberikan'];
if ($bbg >= 1) {
	$kfaktor = "1";
} else {
	$kfaktor = $bbg;
}
$faktork = number_format($kfaktor, 2);
$sal1 = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BPR' AND id='1' ORDER BY id DESC"));
$sal2 = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BPR' AND id='2' ORDER BY id DESC"));
$sal3 = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BPR' AND id='3' ORDER BY id DESC"));

?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>DISTRIBUSI AIR PADUREKSO</title>
	<!-- base href="http://uk.zyro.com/data/a/l/alokasiair.esy.es/out/" -->
	<meta name="viewport" content="width=992">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<link href="index_files/bootstrap.css" rel="stylesheet" type="text/css">
	<script src="index_files/jquery-1.js" type="text/javascript"></script>
	<script src="index_files/bootstrap.js" type="text/javascript"></script>
	<script src="index_files/main.js" type="text/javascript"></script>

	<link href="index_files/site.css" rel="stylesheet" type="text/css">
	<link href="index_files/common.css" rel="stylesheet" type="text/css">
	<link href="index_files/3.css" rel="stylesheet" type="text/css">
	<script src="index_files/jquery_002.js" type="text/javascript"></script>
	<link href="index_files/jquery.css" rel="stylesheet" type="text/css">
	<script src="index_files/jquery.js" type="text/javascript"></script>

	<script type="text/javascript">
		var currLang = '';
	</script>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>
	<!-- <div style="height:300px; background:red;padding-top:15px;">
		<div style="height:200px; width:200px; background:black; margin: auto; justify-content:center">
			
		</div>
			
	</div> -->
	<div class="root">
		<div class="vbox wb_container" id="wb_header">

			<div id="wb_element_instance360" class="wb_element">
				<ul class="hmenu">
					<li><a href="http://bpusdataru-pc.jatengprov.go.id" target="_self"
							title="Kembali Ke Web">Kembali Ke Web</a></li>
					<li><a href="../" target="_self" title="Apemasi">Kembali ke Portal</a></li>
					<li class="active"><a href="http://sisda.bpusdataru-sercit.jatengprov.go.id/apemasi/" target="_self"
							title="Login">Login</a></li>
				</ul>
			</div>
			<div id="wb_element_instance361" class="wb_element"><img alt="full-black-hd-wallpaper-20"
					src="index_files/1a4aa7f7d2b35bbbc4f1da1b4ad447f1_1370x1370.jpg">
			</div>
			<div id="wb_element_instance362" class="wb_element"><img alt="ad020141fc2f005dddc1f68896ad312e_124x71"
					src="index_files/88b899f98e7355b3690480284e69655b_124x71.png">
			</div> 
			<div id="wb_element_instance363" class="wb_element" style=" line-height: normal;">
				<h1 class="wb-stl-heading1"><strong><span style="color:#ffffff;">APEMASI</span></strong></h1>
			</div>
			<div id="wb_element_instance364" class="wb_element" style=" line-height: normal;">
				<h3 class="wb-stl-heading3"><b><span style="color:#ffffff;">BALAI PSDA PEMALI COMAL</span></b>
				</h3>
			</div>
		</div>
		
				<div class="vbox wb_container" style="background:transparent;height:300px;margin-left:-90px;">
					<div id="wb_element_instance514" class="wb_element">
							<div></div>
						</div>
						<div id="wb_element_instance515" class="wb_element" style=" line-height: normal;">
							<h3 class="wb-stl-heading3" style="text-align: center;"><strong>SKEMA DISTRIBUSI AIR DAERAH IRIGASI
									PADUREKSO</strong></h3>

						</div>
						<div id="wb_element_instance516" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>Sungai&nbsp;</strong></p>
						</div>
						<div id="wb_element_instance517" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>Areal</strong></p>
						</div>
						<div id="wb_element_instance518" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>:&nbsp; Sungai Sengkareng</strong></p>
						</div>
						<div id="wb_element_instance519" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>:&nbsp; 2.388,00 Ha</strong></p>
						</div>
						<div id="wb_element_instance520" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>Lokasi&nbsp;</strong></p>
						</div>
						<div id="wb_element_instance521" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>:&nbsp; Karanganyar,Pekalongan</strong></p>
						</div>
						<div id="wb_element_instance522" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>Periode</strong></p>
						</div>
						<div id="wb_element_instance523" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal"><strong>:&nbsp; <?php echo $periode ?></strong></p>
						</div>
						<div id="wb_element_instance524" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal" style="text-align: center;"><strong>Debit Tersedia</strong></p>
						</div>
						<div id="wb_element_instance525" class="wb_element">
							<div></div>
						</div>
						<div id="wb_element_instance526" class="wb_element">
							<div></div>
						</div>
						<div id="wb_element_instance527" class="wb_element">
							<div></div>
						</div>
						<div id="wb_element_instance528" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal" style="text-align: center;"><strong>Debit Diperlukan</strong></p>
						</div>
						<div id="wb_element_instance529" class="wb_element" style=" line-height: normal;">
							<p class="wb-stl-normal" style="text-align: center;"><strong>Faktor K</strong></p> 

							<p class="wb-stl-normal" style="text-align: center;"><strong>ditetapkan</strong></p>
						</div>
						<div id="wb_element_instance530" class="wb_element" style=" line-height: normal;">
							<h4 class="wb-stl-pagetitle" style="text-align: right;"><?php echo $debit['debit'] ?></h4>
						</div>
						<div id="wb_element_instance531" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">
							<strong>m3/dtk</strong></p>
						</div>
						<div id="wb_element_instance532" class="wb_element" style=" line-height: normal;">
							<h4 class="wb-stl-pagetitle" style="text-align: right;"><?php echo $qperlu['q_diberikan'] ?></h4>
						</div>
						<div id="wb_element_instance533" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>m3/dtk</strong></p>
						</div>
						<div id="wb_element_instance534" class="wb_element" style=" line-height: normal;">
							<h1 class="wb-stl-heading1" style="text-align: center;"><strong><?php echo $faktork; ?></strong></h1>
						</div>
						<div id="wb_element_instance535" class="wb_element"><img alt="f598400e35acc1b78bed66921344964e_190x120" src="index_files/1d4329a1f7ad3d40fbd720a4e2910981_190x120.png"><script type="text/javascript">
										$("#wb_element_instance535").fancybox({
											href: "gallery_gen/1d4329a1f7ad3d40fbd720a4e2910981_fancybox.png",
											"hideOnContentClick": true
										});
									</script>
						</div>
			</div>
		<div class="vbox wb_container" id="wb_main" >

			<div id="wb_element_instance365" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 50%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance366" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 100%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance367" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance368" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 100px 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance394" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -35px 0 0 2px; width: 1px; height: 180%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance395" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 80%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance397" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance423" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -8px 0 0 0; width: 500%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance424" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -8px 0 0 0; width: 500%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance425" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance426" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance427" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance428" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance429" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance430" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance431" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 30px 0 0 60px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance432" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance433" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance434" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance435" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance436" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance437" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance438" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance439" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance440" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance441" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance442" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance443" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance444" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance445" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance446" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance447" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance448" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 55px; width: 1px; height: 600%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance449" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 15px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance450" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 -10px; width: 1px; height: 300px; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance451" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance452" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -50px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #000000;">
				</div>
			</div>
			<div id="wb_element_instance453" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -35px 0 0 -32px; width: 200%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance454" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 190px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<!-- <div id="wb_element_instance455" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<div id="wb_element_instance456" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance457" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance458" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<!-- <div id="wb_element_instance459" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<div id="wb_element_instance460" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<!-- <div id="wb_element_instance461" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<div id="wb_element_instance462" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 10%; border-left: 3px solid #303030;">
				</div>
			</div>
			<!-- <div id="wb_element_instance463" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 -79px; width: 10%; height: 200%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<div id="wb_element_instance464" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 -5px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance465" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 -5px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>

			<!-- ondol2 dll dibawh ini -->


			<div id="wb_element_instance476" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance477" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance478" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance479" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance480" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance481" class="wb_element">
				<div></div>
			</div>
			<!--<div id="wb_element_instance482" class="wb_element">
				<div></div>
			</div>-->
			<div id="wb_element_instance483" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance484" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance485" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance486" class="wb_element">
				<div></div>
			</div>
			<!--<div id="wb_element_instance487" class="wb_element">
				<div></div>
			</div>-->
			<div id="wb_element_instance488" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance489" class="wb_element">
				<div></div>
			</div>
			<!-- <div id="wb_element_instance490" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance491" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance492" class="wb_element">
				<div></div>
			</div>-->
			<div id="wb_element_instance493" class="wb_element">
				<div></div>
			</div>
			<!--<div id="wb_element_instance494" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance495" class="wb_element">
				<div></div>
			</div>-->
			<div id="wb_element_instance496" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance497" class="wb_element">
				<div></div>
			</div>
			<!--<div id="wb_element_instance498" class="wb_element">
				<div></div>
			</div>-->
			<div id="wb_element_instance499" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance505" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance506" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance507" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance508" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance509" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance510" class="wb_element">
				<div></div>
			</div>
			<!-- nama saluran skema -->
			<div id="nama_saluran3" class="nama_saluran">
				<span>SAL. INDUK PADUREKSO</span>
			</div>
			<div id="nama_saluran4" class="nama_saluran">
				<span>SAL. SEK. KARANG GONDANG</span>
			</div>
			<div id="nama_saluran5" class="nama_saluran">
				<span>SAL. INDUK PADUREKSO</span>
			</div>
			<div id="nama_saluran6" class="nama_saluran">
				<span>SAL. SEK. KULU</span>
			</div>
			<div id="nama_saluran7" class="nama_saluran">
				<span>SAL. SEK. GEJLIK</span>
			</div>
			<div id="nama_saluran8" class="nama_saluran">
				<span>SAL. SEK. TANJUNG SARI</span>
			</div>
			<div id="nama_saluran9" class="nama_saluran">
				<span>SAL. SEK. BANJARANYAR</span>
			</div>
			<div id="nama_saluran10" class="nama_saluran">
				<span>SAL. SEK. KARANYAR</span>
			</div>
			<div id="nama_saluran11" class="nama_saluran">
				<span>SAL. SEK. WONOPRINGO</span>
			</div>

			<!-- Tabel Keterangan -->

			<table id="tbl-ket">
				<tbody>
					
					<tr>
						<td style="text-decoration:underline;">Keterangan</td>
						<td></td>
					</tr>
					<tr>
						<td><div class="ond-merah"></div></td>
						<td>: Bangunan Bagi Sadap</td>
					</tr>
					<tr>
						<td><div class="ond-biru"></div></td>
						<td>: Bangunan Sadap</td>
					</tr>
				</tbody>
			</table>

			<!-- Akhir Table Keterangan -->


			<!--download-->
			<div id="wb_element_instance793" class="wb_element">
				<a class="wb_button" href="../../uplod/<?php echo $nama_file_a;?>"><span>Download Perhitungan Distribusi Air</span></a>
			</div>
			<div id="wb_element_instance794" class="wb_element">
				<a class="wb_button" href="../../uplod/<?php echo $nama_file_k;?>"><span>Download Perhitungan Faktor K</span></a>
			</div>
			<!--akhir download-->


			<!-- Gambar pintu -->
			<div id="wb_element_instance639" class="wb_element">
				<img alt="7fecf5181145437a79a8af4ad249f5c2_130x67" src="index_files/air.png">
			</div>
			<!-- akhir pintu -->
			<?php
		$area = array(34, 44, 92, 126, 11, 72, 50, 55, 119, 91, 119, 41, 11, 11, 72, 78, 141, 42, 31, 15, 44, 67, 74, 85, 121, 53, 11, 0, 30, 13, 62, 165, 94, 113, 10, 30, 99, 11);
		$lokasi = array(
			"B. Pr 1 Ki", "B. Pr 2 Ka", "B. Pr 2 Ki", "B. Pr 2 Tg", "B. Pr 3 Ka", "B. Pr 3 Ki", "B. Pr 3 Tg", "B. Ka 1 Ka", "B. Ka 2 Ka", "B. Ka 2 Ki", "B. Ka 2 Tg", "B. Ka 3 Ka", "B. Ka 3 Ki", "B. Ka 4 Ka", "B. Ka 5 Ka", "B. Ka 6 Ka", "B. Ka 7 Ka", "B. Ka 7 Ki", "B. Wp 1 Ki", "B. Wp 2 Ka", "B. Wp 2 Ki", "B. Ba 1 Ki", "B. Ba 1 Tg", "B. Ba 2 Ka", "B. Ba 2 Ki", "B. Ba 2 Tg", "B. Kl 1 Ki", "B. Kl 1 Ki2", "B. Kl 2 Ka", "B. Kl 2 Ki", "B. Kl 3 Ki", "B. Kl 4 Ki", "B. Ts 1 Ki", "B. Gjl 1 Ka", "B. Gjl 1 Ki", "B. Kg 1 Ka", "B. Kg 2 Ka", "B. Kg 2 Ki"
		);
		$sql_total = mysql_query("SELECT id from alokasi");
		$total = mysql_num_rows($sql_total);
		$start = $total - 48;//total dikurangi 44 data import

		for ($i = 1; $i <= 38; $i++) {
			$urut = $start + $i;
			$q = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE id='$urut' AND di='BPR' ORDER BY id ASC"));
			?>			
						<table id="table-<?php echo $i ?>" class="table-style">
							<thead>
								<th id="header-table-<?php echo $i ?>" colspan="2"><?php echo $lokasi[$i - 1]; ?></th>
							</thead>
							<tbody>
								<tr>
									<td>Areal :</td>
									<td><?php echo $area[$i - 1]; ?> Ha</td>
								</tr>
								<tr>
									<td>Q Alir :</td>
									<td><?php echo $q['q_diberikan']; ?> <span style="font-size:8px;"><b>m3/dt</b></span></td>
								</tr>
							</tbody>
						</table>
					<?php 
			}

			?>
		</div>

		<script type="text/javascript">
			$(function () {
				$("#wb_element_instance835").hide();
			});
		</script>
	
	<div class="vbox wb_container">
		<p style="text-align: center; padding: 1ex; font-size: 10pt; color: black; border: 3px none #000000;">© 2019
			E-SISDA
			PEMALI COMAL</p>
		<!-- <div id="wb_element_instance834" class="wb_element">
			<div></div>
		</div> -->
	</div>
	<div class="wb_sbg"></div>
	</div>

	<div id="fancybox-tmp"></div>
	<div id="fancybox-loading">
		<div></div>
	</div>
	<div id="fancybox-overlay"></div>
	<div id="fancybox-wrap">
		<div id="fancybox-outer">
			<div class="fancybox-bg" id="fancybox-bg-n"></div>
			<div class="fancybox-bg" id="fancybox-bg-ne"></div>
			<div class="fancybox-bg" id="fancybox-bg-e"></div>
			<div class="fancybox-bg" id="fancybox-bg-se"></div>
			<div class="fancybox-bg" id="fancybox-bg-s"></div>
			<div class="fancybox-bg" id="fancybox-bg-sw"></div>
			<div class="fancybox-bg" id="fancybox-bg-w"></div>
			<div class="fancybox-bg" id="fancybox-bg-nw"></div>
			<div id="fancybox-content"></div><a id="fancybox-close"></a>
			<div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico"
					id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico"
					id="fancybox-right-ico"></span></a>
		</div>
	</div>
</body>

</html>