<?php
include "../../config/koneksi.php";
include "../../config/fungsi_indotgl.php";
$dt     = mysql_fetch_array(mysql_query("SELECT id,periode,bulan,tahun FROM `alokasi` ORDER BY id DESC"));
$period   = $dt['periode'];
$blan     = $dt['bulan'];
$thn      = $dt['tahun'];
$bulan    = getBulan($blan);
$jmlhari  = jumlahhari($blan,$thn);
    if($period=='I'){$per="1-15";}
    else {$per="16-".$jmlhari;}
$periode  = $per." ".$bulan." ".$thn;
$dta      = mysql_fetch_array(mysql_query("SELECT id,file FROM `upload` WHERE jenisdata='faktork' ORDER BY id DESC"));
$nama_file_k  =$dta['file'];
$dtb          = mysql_fetch_array(mysql_query("SELECT id,file FROM `upload` WHERE jenisdata='alokasi' ORDER BY id DESC"));
$nama_file_a  =$dtb['file'];
$qperlu = mysql_fetch_array(mysql_query("SELECT id,q_diberikan FROM `alokasi` WHERE di='BPR' ORDER BY id DESC"));
$debit = mysql_fetch_array(mysql_query("SELECT debit FROM `elevasi` WHERE kode='BPR' ORDER BY id_elevasi DESC"));
$bbg  = $debit['debit']/$qperlu['q_diberikan'];
  if($bbg>=1){$kfaktor="1";}
  else {$kfaktor=$bbg;}
$faktork  = number_format($kfaktor,2); 
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
	<div class="root">
		<div class="vbox wb_container" id="wb_header">

			<div id="wb_element_instance360" class="wb_element">
				<ul class="hmenu">
					<li><a href="http://bpusdataru-sercit.jatengprov.go.id" target="_self"
							title="Kembali Ke Web">Kembali Ke Web</a></li>
					<li><a href="../" target="_self" title="Apemasi">Kembali ke Portal</a></li>
					<li class="active"><a href="http://sisda.bpusdataru-sercit.jatengprov.go.id/apemasi/" target="_self"
							title="Login">Login</a></li>
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
				<h3 class="wb-stl-heading3"><b><span style="color:#ffffff;">BPSDA PEMALI COMAL</span></b>
				</h3>
            </div>
            
        </div>
            <!--BOX SKEMA AIR(BIRU-BIRU)-->
            <div style="height:250px;">
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
            <p class="wb-stl-normal"><strong>:&nbsp; Sungai Pelus</strong></p>
            </div>
            <div id="wb_element_instance519" class="wb_element" style=" line-height: normal;">
            <p class="wb-stl-normal"><strong>:&nbsp; 1.2014,61 Ha</strong></p>
            </div>
            <div id="wb_element_instance520" class="wb_element" style=" line-height: normal;">
            <p class="wb-stl-normal"><strong>Lokasi&nbsp;</strong></p>
            </div>
            <div id="wb_element_instance521" class="wb_element" style=" line-height: normal;">
            <p class="wb-stl-normal"><strong>:&nbsp; Kembaran, Banyumas</strong></p>
            </div>
            <div id="wb_element_instance522" class="wb_element" style=" line-height: normal;">
            <p class="wb-stl-normal"><strong>Periode</strong></p>
            </div>
            <div id="wb_element_instance523" class="wb_element" style=" line-height: normal;">
            <p class="wb-stl-normal"><strong>:&nbsp; <?php echo $period?></strong></p>
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
            <h4 class="wb-stl-pagetitle" style="text-align: right;"><?php echo $debit['debit'];?></h4>
            </div>
            <div id="wb_element_instance531" class="wb_element" style=" line-height: normal;">
            <p class="wb-stl-normal"><strong>m3/dtk</strong></p>
            </div>
            <div id="wb_element_instance532" class="wb_element" style=" line-height: normal;">
            <h4 class="wb-stl-pagetitle" style="text-align: right;"><?php echo $qperlu['q_diberikan'];?></h4>
            </div>
            <div id="wb_element_instance533" class="wb_element" style=" line-height: normal;">
            <p class="wb-stl-normal"><strong>m3/dtk</strong></p>
            </div>
            <div id="wb_element_instance534" class="wb_element" style=" line-height: normal;">
            <h1 class="wb-stl-heading1" style="text-align: center;"><strong><?php echo $faktork?></strong></h1>
            </div>
            <div id="wb_element_instance535" class="wb_element">
            <img alt="f598400e35acc1b78bed66921344964e_190x120" src="index_files/1d4329a1f7ad3d40fbd720a4e2910981_190x120.png">
            <script type="text/javascript">
                $("#wb_element_instance535").fancybox({
                    href: "gallery_gen/1d4329a1f7ad3d40fbd720a4e2910981_fancybox.png",
                    "hideOnContentClick": true
                });
            </script>
            </div>
            </div>

            <!--AKHIR BOX SKEMA AIR(BIRU-BIRU)-->

		<div class="vbox wb_container" id="wb_main">

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
			<!-- <div id="wb_element_instance369" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance370" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance371" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance372" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance373" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance374" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance375" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance376" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance377" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance378" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance379" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance380" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance381" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance382" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance383" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance384" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance385" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance386" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance387" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance388" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance389" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance390" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance391" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance392" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance393" class="wb_element">
				<div></div>
			</div> -->
			<div id="wb_element_instance394" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -35px 0 0 2px; width: 1px; height: 200%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance395" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 80%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
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
			<!-- <div id="wb_element_instance398" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance399" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance400" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance401" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance402" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance403" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance404" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance405" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance406" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance407" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance408" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance409" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance410" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance411" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance412" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance413" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance414" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance415" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance416" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance417" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance418" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance419" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance420" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance421" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance422" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance423" class="wb_element">
				<div></div>
			</div> -->
			<div id="wb_element_instance424" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: -8px 0 0 0; width: 500%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<!-- <div id="wb_element_instance425" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance426" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance427" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance428" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance429" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance430" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<div id="wb_element_instance431" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 30px 0 0 60px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<!-- <div id="wb_element_instance432" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance433" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance434" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance435" class="wb_element">
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
			</div> -->
			<!-- <div id="wb_element_instance442" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance443" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance444" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance445" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance446" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<div id="wb_element_instance447" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #ffffff;">
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
			<!-- <div id="wb_element_instance451" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
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
			<div id="wb_element_instance455" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance456" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<!-- <div id="wb_element_instance457" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance458" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<div id="wb_element_instance459" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
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
			<div id="wb_element_instance463" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 -79px; width: 10%; height: 200%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
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



			<!-- <div id="wb_element_instance466" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance467" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance468" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance469" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance470" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
			<!-- <div id="wb_element_instance471" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance472" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance473" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance474" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div>
			<div id="wb_element_instance475" class="wb_element">
				<div
					style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 0 0 0 1px; width: 1px; height: 100%; left: 50%; top: 0; border-left: 3px solid #303030;">
				</div>
			</div> -->
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
				<div>
				</div>
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
		</div>
		<!--sss<div id="wb_element_instance500" class="wb_element">
			<div></div>
		</div>
		<div id="wb_element_instance501" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance502" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance503" class="wb_element">
				<div></div>
			</div>
			<div id="wb_element_instance504" class="wb_element">
				<div></div>
			</div>-->
		<!-- <div id="wb_element_instance511" class="wb_element">
			<div></div>
		</div> -->
		<!-- <div id="wb_element_instance512" class="wb_element">
			<div></div>
		</div> -->
		<!--<div id="wb_element_instance513" class="wb_element">
				<div></div>
            </div> -->
            
           




            <!--<div id="wb_element_instance536" class="wb_element" style=" line-height: normal;">
                <p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
            </div>
            <div id="wb_element_instance537" class="wb_element" style=" line-height: normal;">
                <p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
            </div>
            <div id="wb_element_instance538" class="wb_element" style=" line-height: normal;">
                <p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
            </div>
            <div id="wb_element_instance539" class="wb_element" style=" line-height: normal;">
                <p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
            </div>
            <div id="wb_element_instance540" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
            </div><div id="wb_element_instance541" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
            </div><div id="wb_element_instance542" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
            </div><div id="wb_element_instance543" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
            </div><div id="wb_element_instance544" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
            </div><div id="wb_element_instance545" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
            </div><div id="wb_element_instance546" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance547" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance548" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance549" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance550" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance551" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance552" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance553" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance554" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance555" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance556" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance557" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance558" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance559" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance560" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance561" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance562" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance563" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance564" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance565" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance566" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance567" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance568" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance569" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance570" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance571" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance572" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance573" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance574" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance575" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance576" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance577" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance578" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance579" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance580" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance581" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance582" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance583" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance584" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance585" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance586" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance587" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance588" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance589" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance590" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance591" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance592" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance593" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance594" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance595" class="wb_element"><div></div></div><div id="wb_element_instance596" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance597" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance598" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance599" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance600" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance601" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance602" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance603" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance604" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance605" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance606" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance607" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance608" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance609" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance610" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance611" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance612" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance613" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance614" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance615" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance616" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance617" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance618" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance619" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance620" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance621" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance622" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance623" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance624" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance625" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance626" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance627" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance628" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance629" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance630" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance631" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance632" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance633" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance634" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance635" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance636" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>A:</strong></span></p>
</div><div id="wb_element_instance637" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance638" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer"><span style="color:#000000;"><strong>Q:</strong></span></p>
</div><div id="wb_element_instance639" class="wb_element"><img alt="7fecf5181145437a79a8af4ad249f5c2_130x67" src="index_files/air.png"></div><div id="wb_element_instance640" class="wb_element"><a class="wb_button" href=""><span>BACN 1 Ki</span></a></div><div id="wb_element_instance641" class="wb_element"><a class="wb_button" href=""><span>BACN1KiCr</span></a></div><div id="wb_element_instance642" class="wb_element"><a class="wb_button" href=""><span>BACN 2 Ki</span></a></div><div id="wb_element_instance643" class="wb_element"><a class="wb_button" href=""><span>BACN2KaCr</span></a></div><div id="wb_element_instance644" class="wb_element"><a class="wb_button" href=""><span>BACN2KiCr</span></a></div><div id="wb_element_instance645" class="wb_element"><a class="wb_button" href=""><span>BACN 3 Ka</span></a></div><div id="wb_element_instance646" class="wb_element"><a class="wb_button" href=""><span>BACN 3 Ki</span></a></div><div id="wb_element_instance647" class="wb_element"><a class="wb_button" href=""><span>BACN 4 Ka</span></a></div><div id="wb_element_instance648" class="wb_element"><a class="wb_button" href=""><span>BACN 4 Ki</span></a></div><div id="wb_element_instance649" class="wb_element"><a class="wb_button" href=""><span>BACN 5 Ki</span></a></div><div id="wb_element_instance650" class="wb_element"><a class="wb_button" href=""><span>BACN 6 Ka</span></a></div><div id="wb_element_instance651" class="wb_element"><a class="wb_button" href=""><span>BACN 7 Ki</span></a></div><div id="wb_element_instance652" class="wb_element"><a class="wb_button" href=""><span>BACN 8 Ka</span></a></div><div id="wb_element_instance653" class="wb_element"><a class="wb_button" href=""><span>BACN 8 Ki</span></a></div><div id="wb_element_instance654" class="wb_element"><a class="wb_button" href=""><span>BACN 9 Ki</span></a></div><div id="wb_element_instance655" class="wb_element"><a class="wb_button" href=""><span>BACN 10 Ka</span></a></div><div id="wb_element_instance656" class="wb_element"><a class="wb_button" href=""><span>BACN 10 Ki</span></a></div><div id="wb_element_instance657" class="wb_element"><a class="wb_button" href=""><span>BK 1 Ka</span></a></div><div id="wb_element_instance658" class="wb_element"><a class="wb_button" href=""><span>BK 1 Ki</span></a></div><div id="wb_element_instance659" class="wb_element"><a class="wb_button" href=""><span>BK 2 Ka</span></a></div><div id="wb_element_instance660" class="wb_element"><a class="wb_button" href=""><span>BK 2 Ka</span></a></div><div id="wb_element_instance661" class="wb_element"><a class="wb_button" href=""><span>BK 1CrKi</span></a></div><div id="wb_element_instance662" class="wb_element"><a class="wb_button" href=""><span>BK 3 Ki</span></a></div><div id="wb_element_instance663" class="wb_element"><a class="wb_button" href=""><span>BK 4 Ki</span></a></div><div id="wb_element_instance664" class="wb_element"><a class="wb_button" href=""><span>BK 4 Tg</span></a></div><div id="wb_element_instance665" class="wb_element"><a class="wb_button" href=""><span>BACR 1 Cr</span></a></div><div id="wb_element_instance666" class="wb_element"><a class="wb_button" href=""><span>BACR 1 Ka</span></a></div><div id="wb_element_instance667" class="wb_element"><a class="wb_button" href=""><span>BACR 2 Ka</span></a></div><div id="wb_element_instance668" class="wb_element"><a class="wb_button" href=""><span>BACR 2 Ki</span></a></div><div id="wb_element_instance669" class="wb_element"><a class="wb_button" href=""><span>BACR 2 Cr</span></a></div><div id="wb_element_instance670" class="wb_element"><a class="wb_button" href=""><span>BACR 3 Ka</span></a></div><div id="wb_element_instance671" class="wb_element"><a class="wb_button" href=""><span>BACR 3 Ki</span></a></div><div id="wb_element_instance672" class="wb_element"><a class="wb_button" href=""><span>BACR 4 Ka</span></a></div><div id="wb_element_instance673" class="wb_element"><a class="wb_button" href=""><span>BACR 4 Ki</span></a></div><div id="wb_element_instance674" class="wb_element"><a class="wb_button" href=""><span>BACR 5 Ka</span></a></div><div id="wb_element_instance675" class="wb_element"><a class="wb_button" href=""><span>BACR3KaCr</span></a></div><div id="wb_element_instance676" class="wb_element"><a class="wb_button" href=""><span>BACR4KaCr</span></a></div><div id="wb_element_instance677" class="wb_element"><a class="wb_button" href=""><span>BACR 6 Ki</span></a></div><div id="wb_element_instance678" class="wb_element"><a class="wb_button" href=""><span>BACR 7 Ki</span></a></div><div id="wb_element_instance679" class="wb_element"><a class="wb_button" href=""><span>BACR 8 Ka</span></a></div><div id="wb_element_instance680" class="wb_element"><a class="wb_button" href=""><span>BACR 8 Ki</span></a></div><div id="wb_element_instance681" class="wb_element"><a class="wb_button" href=""><span>BACR 9 Ka</span></a></div><div id="wb_element_instance682" class="wb_element"><a class="wb_button" href=""><span>BACR 9 Ki</span></a></div><div id="wb_element_instance683" class="wb_element"><a class="wb_button" href=""><span>BACR 10 Ki</span></a></div><div id="wb_element_instance684" class="wb_element"><a class="wb_button" href=""><span>KM1KaCr</span></a></div><div id="wb_element_instance685" class="wb_element"><a class="wb_button" href=""><span>KM2KiCr</span></a></div><div id="wb_element_instance686" class="wb_element"><a class="wb_button" href=""><span>KM 1 Ki</span></a></div><div id="wb_element_instance687" class="wb_element"><a class="wb_button" href=""><span>KM3KiCr</span></a></div><div id="wb_element_instance688" class="wb_element"><a class="wb_button" href=""><span>KM 4 Ka</span></a></div><div id="wb_element_instance689" class="wb_element"><a class="wb_button" href=""><span>KM 2 Ki</span></a></div><div id="wb_element_instance690" class="wb_element"><a class="wb_button" href=""><span>KM 3 Ka</span></a>
</div>
<div id="wb_element_instance691" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>10.00</strong></span></p>
</div>
<div id="wb_element_instance692" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>6.00</strong></span></p>
</div><div id="wb_element_instance693" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.50</strong></span></p>
</div><div id="wb_element_instance694" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.50</strong></span></p>
</div><div id="wb_element_instance695" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.50</strong></span></p>
</div><div id="wb_element_instance696" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>16.50</strong></span></p>
</div><div id="wb_element_instance697" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>12.00</strong></span></p>
</div><div id="wb_element_instance698" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>22.43</strong></span></p>
</div><div id="wb_element_instance699" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>15.50</strong></span></p>
</div><div id="wb_element_instance700" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>10.00</strong></span></p>
</div><div id="wb_element_instance701" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>10.00</strong></span></p>
</div><div id="wb_element_instance702" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>37.00</strong></span></p>
</div><div id="wb_element_instance703" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>1.00</strong></span></p>
</div><div id="wb_element_instance704" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>15.00</strong></span></p>
</div><div id="wb_element_instance705" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>31.00</strong></span></p>
</div><div id="wb_element_instance706" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>27.00</strong></span></p>
</div><div id="wb_element_instance707" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>23.00</strong></span></p>
</div><div id="wb_element_instance708" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>11.75</strong></span></p>
</div><div id="wb_element_instance709" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>4.00</strong></span></p>
</div><div id="wb_element_instance710" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>8.25</strong></span></p>
</div><div id="wb_element_instance711" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>5.00</strong></span></p>
</div><div id="wb_element_instance712" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.50</strong></span></p>
</div><div id="wb_element_instance713" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>10.25</strong></span></p>
</div><div id="wb_element_instance714" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>60.75</strong></span></p>
</div><div id="wb_element_instance715" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>41.75</strong></span></p>
</div><div id="wb_element_instance716" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>1.43</strong></span></p>
</div><div id="wb_element_instance717" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>67.00</strong></span></p>
</div><div id="wb_element_instance718" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>71.95</strong></span></p>
</div><div id="wb_element_instance719" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>8.33</strong></span></p>
</div><div id="wb_element_instance720" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>4.00</strong></span></p>
</div><div id="wb_element_instance721" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>10.95</strong></span></p>
</div><div id="wb_element_instance722" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>7.00</strong></span></p>
</div><div id="wb_element_instance723" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>21.00</strong></span></p>
</div><div id="wb_element_instance724" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>36.00</strong></span></p>
</div><div id="wb_element_instance725" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>15.16</strong></span></p>
</div><div id="wb_element_instance726" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>7.58</strong></span></p>
</div><div id="wb_element_instance727" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>7.99</strong></span></p>
</div><div id="wb_element_instance728" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>198.00</strong></span></p>
</div><div id="wb_element_instance729" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>50.87</strong></span></p>
</div><div id="wb_element_instance730" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>12.27</strong></span></p>
</div><div id="wb_element_instance731" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>12.27</strong></span></p>
</div><div id="wb_element_instance732" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>6.56</strong></span></p>
</div><div id="wb_element_instance733" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>10.23</strong></span></p>
</div><div id="wb_element_instance734" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>49.00</strong></span></p>
</div><div id="wb_element_instance735" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>5.00</strong></span></p>
</div><div id="wb_element_instance736" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>5.00</strong></span></p>
</div><div id="wb_element_instance737" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>116.00</strong></span></p>
</div><div id="wb_element_instance738" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>8.00</strong></span></p>
</div><div id="wb_element_instance739" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>8.14</strong></span></p>
</div><div id="wb_element_instance740" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>55.00</strong></span></p>
</div><div id="wb_element_instance741" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>40.00</strong></span></p>
</div><div id="wb_element_instance742" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance743" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance744" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance745" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance746" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance747" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance748" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.018</strong></span></p>
</div><div id="wb_element_instance749" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.017</strong></span></p>
</div><div id="wb_element_instance750" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.012</strong></span></p>
</div><div id="wb_element_instance751" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.008</strong></span></p>
</div><div id="wb_element_instance752" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.008</strong></span></p>
</div><div id="wb_element_instance753" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.029</strong></span></p>
</div><div id="wb_element_instance754" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance755" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance756" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance757" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance758" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance759" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.012</strong></span></p>
</div><div id="wb_element_instance760" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.004</strong></span></p>
</div><div id="wb_element_instance761" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.009</strong></span></p>
</div><div id="wb_element_instance762" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.002</strong></span></p>
</div><div id="wb_element_instance763" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance764" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.008</strong></span></p>
</div><div id="wb_element_instance765" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.047</strong></span></p>
</div><div id="wb_element_instance766" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.033</strong></span></p>
</div><div id="wb_element_instance767" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance768" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.050</strong></span></p>
</div><div id="wb_element_instance769" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.053</strong></span></p>
</div><div id="wb_element_instance770" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.006</strong></span></p>
</div><div id="wb_element_instance771" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.003</strong></span></p>
</div><div id="wb_element_instance772" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.009</strong></span></p>
</div><div id="wb_element_instance773" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance774" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.016</strong></span></p>
</div><div id="wb_element_instance775" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.028</strong></span></p>
</div><div id="wb_element_instance776" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.015</strong></span></p>
</div><div id="wb_element_instance777" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.009</strong></span></p>
</div><div id="wb_element_instance778" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.010</strong></span></p>
</div><div id="wb_element_instance779" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.154</strong></span></p>
</div><div id="wb_element_instance780" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.040</strong></span></p>
</div><div id="wb_element_instance781" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.010</strong></span></p>
</div><div id="wb_element_instance782" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.010</strong></span></p>
</div><div id="wb_element_instance783" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.005</strong></span></p>
</div><div id="wb_element_instance784" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.000</strong></span></p>
</div><div id="wb_element_instance785" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.038</strong></span></p>
</div><div id="wb_element_instance786" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.004</strong></span></p>
</div><div id="wb_element_instance787" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.004</strong></span></p>
</div><div id="wb_element_instance788" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.090</strong></span></p>
</div><div id="wb_element_instance789" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.006</strong></span></p>
</div><div id="wb_element_instance790" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.006</strong></span></p>
</div><div id="wb_element_instance791" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.043</strong></span></p>
</div><div id="wb_element_instance792" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;"><span style="color:#000000;"><strong>0.031</strong></span></p>
</div><div id="wb_element_instance793" class="wb_element"><a class="wb_button" href="./perhitungan_mt1_jul_2017.pdf"><span>Download Perhitungan Distribusi Air</span></a></div><div id="wb_element_instance794" class="wb_element"><a class="wb_button" href="./faktor_k_mt1_jul_17.pdf"><span>Download Perhitungan Faktor K</span></a>
</div><div id="wb_element_instance795" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.208</strong></p>
</div><div id="wb_element_instance796" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.208</strong></p>
</div><div id="wb_element_instance797" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.208</strong></p>
</div><div id="wb_element_instance798" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.092</strong></p>
</div><div id="wb_element_instance799" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.092</strong></p>
</div><div id="wb_element_instance800" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.074</strong></p>
</div><div id="wb_element_instance801" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.044</strong></p>
</div><div id="wb_element_instance802" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.037</strong></p>
</div><div id="wb_element_instance803" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.029</strong></p>
</div><div id="wb_element_instance804" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.000</strong></p>
</div><div id="wb_element_instance805" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.000</strong></p>
</div><div id="wb_element_instance806" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.000</strong></p>
</div><div id="wb_element_instance807" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.115</strong></p>
</div><div id="wb_element_instance808" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.099</strong></p>
</div><div id="wb_element_instance809" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.088</strong></p>
</div><div id="wb_element_instance810" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.088</strong></p>
</div><div id="wb_element_instance811" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.080</strong></p>
</div><div id="wb_element_instance812" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.033</strong></p>
</div><div id="wb_element_instance813" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.641</strong></p>
</div><div id="wb_element_instance814" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.641</strong></p>
</div><div id="wb_element_instance815" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.591</strong></p>
</div><div id="wb_element_instance816" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.532</strong></p>
</div><div id="wb_element_instance817" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.529</strong></p>
</div><div id="wb_element_instance818" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.520</strong></p>
</div><div id="wb_element_instance819" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.476</strong></p>
</div><div id="wb_element_instance820" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.461</strong></p>
</div><div id="wb_element_instance821" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.451</strong></p>
</div><div id="wb_element_instance822" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.442</strong></p>
</div><div id="wb_element_instance823" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.287</strong></p>
</div><div id="wb_element_instance824" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.247</strong></p>
</div><div id="wb_element_instance825" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.228</strong></p>
</div><div id="wb_element_instance826" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.223</strong></p>
</div><div id="wb_element_instance827" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.185</strong></p>
</div><div id="wb_element_instance828" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.181</strong></p>
</div><div id="wb_element_instance829" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.177</strong></p>
</div><div id="wb_element_instance830" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.087</strong></p>
</div><div id="wb_element_instance831" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.080</strong></p>
</div><div id="wb_element_instance832" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.074</strong></p>
</div><div id="wb_element_instance833" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: right;"><strong>0.031</strong></p>
</div><div id="wb_element_instance835" class="wb_element" style="width: 100%; display: none;"> -->
		<script type="text/javascript">
			$(function () {
				$("#wb_element_instance835").hide();
			});
		</script>
	</div>
	</div>
	<div class="vbox wb_container" id="wb_footer">

		<div id="wb_element_instance834" class="wb_element">
			<div></div>
		</div>
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