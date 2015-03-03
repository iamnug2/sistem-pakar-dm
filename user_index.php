<?php
require_once('otentifikasi.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="icon" type="image/gif" href="images/favicon.gif" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar Diagnosa Penyakit Anak Yang Disebabkan Infeksi Virus</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php 
require_once('otentifikasi.php');
include("library.php");?>

</head>

<body>

<div id="container">

  <div>
	    <ul class="solidblockmenu">
         <?php navigator_web_user();?>		 
        </ul>
	</div>
    
  <div class="line"></div> 
  <div id="header">
  <div id="site_title"></div>
  <div id="site_slogan"></div>
  </div>
  <div class="line"></div>    
	
          <div id="elemen-isi-user">
	  <?php
	  @$page	= $_GET['page'];
		if ($page==1)
			include ('user_halaman_utama.php');
		
		else if ($page==2)
			include ('bantuan.php');
		else if ($page==3)
			include ('informasi.php');
		else if ($page==7)
			include ('user_diagnosa.php');
		else if ($page==8)
			include ('user_lihat_hasil_diagnosa.php');
		else if ($page==9)
			include ('user_profil.php');
		else if ($page==10)
			include ('user_ubah_password.php');
		else
			include ('user_halaman_utama.php');	
	?>
    </div>
	<div id="footer" align="center">
    <?php footer_web();?>
    </div>
</div>

</body>
</html>