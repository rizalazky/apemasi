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
$dta = mysql_fetch_array(mysql_query("SELECT id,file FROM `upload` WHERE jenisdata='faktork' AND file LIKE '%BMG%' ORDER BY id DESC"));
$nama_file_k = $dta['file'];
$dtb = mysql_fetch_array(mysql_query("SELECT id,file FROM `upload` WHERE jenisdata='alokasi' AND file LIKE '%BMG%' ORDER BY id DESC"));
$nama_file_a = $dtb['file'];
$qperlu = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BMG' ORDER BY id DESC"));
$debit = mysql_fetch_array(mysql_query("SELECT debit FROM `elevasi` WHERE kode='BMG' ORDER BY id_elevasi DESC"));
$bbg = $debit['debit'] / $qperlu['q_diberikan'];
if ($bbg >= 1) {
	$kfaktor = "1";
} else {
	$kfaktor = $bbg;
}
$faktork = number_format($kfaktor, 2);
$sal1 = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BMG' AND id='1' ORDER BY id DESC"));
$sal2 = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BMG' AND id='2' ORDER BY id DESC"));
$sal3 = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BMG' AND id='3' ORDER BY id DESC"));

?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>DISTRIBUSI AIR MEJAGONG</title>
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
	<link href="index_files/nama_saluran.css" rel="stylesheet" type="text/css">
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
	<div class="root">
		<div class="vbox wb_container" id="wb_header" ">

			<div id="wb_element_instance360" class="wb_element">
				<ul class="hmenu">
					<li><a href="../../index.php" target="_self" title="Kembali Ke Web">Home</a></li>
					<li><a href="../" target="_self" title="Apemasi">Kembali ke Portal</a></li>
					<li class="active"><a href="../../login.php" title="Login">Login</a></li>
				</ul>
			</div>
			<div id="wb_element_instance361" class="wb_element"><img alt="full-black-hd-wallpaper-20"
					src="index_files/1a4aa7f7d2b35bbbc4f1da1b4ad447f1_1370x1370.jpg"></div>
			<div id="wb_element_instance362" class="wb_element"><img alt="ad020141fc2f005dddc1f68896ad312e_124x71"
					src="index_files/88b899f98e7355b3690480284e69655b_124x71.png"></div>
			<div id="wb_element_instance363" class="wb_element" style=" line-height: normal;">
				<h1 class="wb-stl-heading1"><strong><span style="color:#ffffff;">APEMASI</span></strong></h1>
			</div>
			<div id="wb_element_instance364" class="wb_element" style=" line-height: normal;">
				<h3 class="wb-stl-heading3"><b><span style="color:#ffffff;">BALAI PSDA PEMALI COMAL</span></b>
				</h3>
			</div>
		</div>
		<div class="wb_container" style="height: 250px;">
			<div id="wb_element_instance514" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance515" class="wb_element" style=" line-height: normal;">
				<h3 class="wb-stl-heading3" style="text-align: center;"><strong>SKEMA DISTRIBUSI AIR DAERAH IRIGASI MEJAGONG</strong></h3>

			</div>
			<div id="wb_element_instance516" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>Sungai&nbsp;</strong></p>
			</div>
			<div id="wb_element_instance517" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>Areal</strong></p>
			</div>
			<div id="wb_element_instance518" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>:&nbsp; Sungai Comal</strong></p>
			</div>
			<div id="wb_element_instance519" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>:&nbsp; 1.2014,61 Ha</strong></p>
			</div>
			<div id="wb_element_instance520" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>Lokasi&nbsp;</strong></p>
			</div>
			<div id="wb_element_instance521" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>:&nbsp; Randudongkal,Pemalang</strong></p>
			</div>
			<div id="wb_element_instance522" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>Periode</strong></p>
			</div>
			<div id="wb_element_instance523" class="wb_element" style=" line-height: normal;">
				<p class="wb-stl-normal"><strong>:&nbsp;<?php echo $periode;?></strong></p>
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
</div><div id="wb_element_instance530" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: right;"><?php echo $debit['debit']?></h4>
</div><div id="wb_element_instance531" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>m3/dtk</strong></p>
</div><div id="wb_element_instance532" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: right;"><?php echo $qperlu['q_diberikan']?></h4>
</div><div id="wb_element_instance533" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong>m3/dtk</strong></p>
</div><div id="wb_element_instance534" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><strong><?php echo $faktork?></strong></h1>
</div><div id="wb_element_instance535" class="wb_element"><img alt="f598400e35acc1b78bed66921344964e_190x120" src="index_files/1d4329a1f7ad3d40fbd720a4e2910981_190x120.png"><script type="text/javascript">
				$("#wb_element_instance535").fancybox({
					href: "gallery_gen/1d4329a1f7ad3d40fbd720a4e2910981_fancybox.png",
					"hideOnContentClick": true
				});
			</script></div>
		</div>


		<div class="vbox wb_container" id="wb_main">



			<!--Nama nama Saluran di mejagong-->

			<div class="nama_saluran" id="nama_saluran1">
				<span>SAL.INDUK MEJAGONG</span>
			</div>
			<div class="nama_saluran" id="nama_saluran2">
				<span>SAL.SEK LODAYA</span>
			</div>
			<div class="nama_saluran" id="nama_saluran3">
				<span>SAL.SEK LODAYA</span>
			</div>
			<div class="nama_saluran" id="nama_saluran4">
				<span>SAL.SEK BANJARANYAR</span>
			</div>
			<div class="nama_saluran" id="nama_saluran5">
				<span>SAL.SEK KEMIRI SEWU</span>
			</div>
			<div class="nama_saluran" id="nama_saluran6">
				<span>SAL.SEK PUCUNG</span>
			</div>
			<div class="nama_saluran" id="nama_saluran7">
				<span>SS. BANJARANYAR</span>
			</div>
			<div class="nama_saluran" id="nama_saluran8">
				<span>SAL.SEK BANJARANYAR</span>
			</div>
			<div class="nama_saluran" id="nama_saluran9">
				<span>SAL.SEK JONGKE</span>
			</div>
			<div class="nama_saluran" id="nama_saluran10">
				<span>SAL.SEK PASEH</span>
			</div>

			<!--AkhirNama nama Saluran di mejagong-->

			<div id="wb_element_instance365" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 80px; width: 80%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
				<span class="panah" id="panah-1">&#9668;</span>
			</div>
			<div id="wb_element_instance367" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 250px; width: 1px; height: 240%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
				<span class="panah" id="panah-6">&#9660;</span>
			</div>
			<div id="wb_element_instance368" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 100px 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance395" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -50px 0 0 30px; width: 50%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
				<span class="panah" id="panah-4">&#9668;</span>
				<span class="panah" id="panah-5">&#9658;</span>
			</div>
			<!-- <div id="wb_element_instance396" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #000000;">
				</div>
			</div> -->
			<div id="wb_element_instance397" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 30%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance398" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
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
			<div id="wb_element_instance447" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #ffffff;">
				</div>
			</div>
			<div id="wb_element_instance450" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -220px 0 0 130px; width: 1px; height: 155px; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
				<span class="panah" id="panah-2">&#9660;</span>
			</div>
			<div id="wb_element_instance451" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance452" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -50px 0 0 40px; width: 697%; height: 1px; left: 0; top: 50%; border-top: 3px solid #000000;">
				</div>
				<span class="panah" id="panah-3">&#9668;</span>
			</div>
			<div id="wb_element_instance453" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -50px 0 0 40px; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #000000;">
				</div>
			</div>
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
			<div id="wb_element_instance482" class="wb_element">
				<div></div>
			</div>
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

			<!-- Tabel Keterangan -->

			<table id="tbl-ket">
				<tbody>
					
					<tr>
						<td>Keterangan :</td>
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

			<!--Download-->

			<div id="wb_element_instance793" class="wb_element">
				<a class="wb_button" href="../../uplod/<?php echo $nama_file_a;?>"><span>Download Perhitungan Distribusi Air</span></a>
			</div>
			<div id="wb_element_instance794" class="wb_element">
				<a class="wb_button" href="../../uplod/<?php echo $nama_file_k;?>"><span>Download Perhitungan Faktor K</span></a>
			</div> 
			<!--akhir  Download
			
			<!--Pintu-->
			<div id="wb_element_instance639" class="wb_element"><img alt="7fecf5181145437a79a8af4ad249f5c2_130x67" src="index_files/air.png"></div>
			<!--akhir pintu-->
			<?php
		$area = array(1424.78,148.77,148.77,0.00,669.34,474.52,333.76,146.74,50.83,89.93,0.0);
		$lokasi = array(
			"B.Mg 1","B.Lo 3","B.Lo 3 s/d 6","SS. KEMIRI SEWU","B.Ba 6","B.Ba 8","B.Ba 8 s/d 12","SS.Pucung","SS.Paseh","SS.Jongke","PADARAPAH"
		);
		$sql_total=mysql_query("SELECT id from alokasi");
		$total=mysql_num_rows($sql_total);
		$start=$total-49;//total dikurangi 44 data import
		$data=array();
		for($x=1;$x<=$total;$x++){
			$urut=$start+$x;
			$q = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE id='$urut' AND di='BMG' ORDER BY id ASC"));
			if(count($q)>1){
				array_push($data,$q['q_diberikan']);
			}
		}
		for ($i = 1; $i <12; $i++) {
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
									<td><?php echo $data[$i-1]; ?> <span style="font-size:8px;"><b>m3/dt</b></span></td>
								</tr>
							</tbody>
						</table>
					<?php 
			 } ?>
		</div>

		<script type="text/javascript">
			$(function () {
				$("#wb_element_instance835").hide();
			});
		</script>
	</div>
	</div>
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