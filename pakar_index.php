<?php
	include('otentifikasi.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="icon" type="image/gif" href="images/favicon.gif" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar Diagnosa Penyakit Diabetes Melitus</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php  include("library.php");?>

</head>

<body>

<div id="container">
  <div>
        <ul class="solidblockmenu">
         <?php navigator_web_pakar();?>		 
        </ul>
	</div>
    
  <div class="line"></div> 
  <div id="header">
  <div id="site_title"></div>
  <div id="site_slogan"></div>
  </div>
	 <div class="line"></div>  
    <div id="content">

        <div id="left_column">
      <?php  menu_pakar();?>
       
      </div>
      
      <div id="elemen-isi-pakar">
	  <?php
	  @$page	= $_GET['page'];
		if ($page==1)
			include ('pakar_halaman_utama.php');
		else if ($page==2)
			include ('bantuan.php');
		else if ($page==3)
			include ('informasi.php');
		else if ($page==4)
			include ('pakar_penyakit.php');
		else if ($page==5)
			include ('pakar_gejala.php');
		else if ($page==6)
			include ('pakar_relasi.php');
		else if ($page==7)
			include ('pakar_ubah_password.php');
		else if ($page==8)
			include ('pakar_bobot_gejala.php');
		else
			include ('pakar_halaman_utama.php');	
	?>
   	 		
    </div>
	<div id="footer" align="center">
    <?php footer_web();?>
    </div>
</div>

</body>
</html>