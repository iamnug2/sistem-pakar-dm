<?php
	session_start();
	unset($_SESSION['SESS_USERNAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="icon" type="image/gif" href="images/favicon.ico" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar Diagnosa Penyakit Diabetes Melitus</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php  include("library.php"); include("koneksi_db.php");?>

</head>

<body>

<div id="container">
    
  <div>
        <ul class="solidblockmenu">
         <?php navigator_web();?>		 
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
      <?php form_login();?> 
      </div>
      
      <div id="right_column">
	  <?php
	 // error_reporting("E_ALL ^ E_NOTICE"); //MENGHILANGKAN ERROR
	  @$page	= $_GET['page'];
		if ($page==1)
			include ('halaman_utama.php');
		
		else if ($page==2)
			include ('bantuan.php');
		else if ($page==3)
			include ('informasi.php');
		else if ($page==4)
			include ('registrasi.php');
		else if ($page==5)
			include ('lupa_password.php');
		else if ($page=="berhasil")
			include ('berhasil_registrasi.php');
		else if ($page=="gagal")
			include ('gagal_registrasi.php');
		else if ($page=="gagal2")
			include ('gagal_registrasi2.php');
		else if ($page=="gagal_login")
			include ('gagal_login.php');
		else if ($page=="gagal_login2")
			include ('gagal_login2.php');
		else if ($page=="haruslogin")
			include ('harus_login.php');
		else
			include ('halaman_utama.php');	
	?>
   	 		
    </div>
     <div id="rapi"></div>
	<div id="footer" align="center">
    <?php footer_web();?>
    </div>
</div>

</body>
</html>