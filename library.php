
<script type="text/javascript">
<!--
function popup(url) 
{
 var width  = 580;
 var height = 300;
 var left   = (screen.width  - width)/2;
 var top    = (screen.height - height)/2;
 var params = 'width='+width+', height='+height;
 params += ', top='+top+', left='+left;
 params += ', directories=no';
 params += ', location=no';
 params += ', menubar=no';
 params += ', resizable=yes';
 params += ', scrollbars=yes';
 params += ', status=no';
 params += ', toolbar=no';
 newwin=window.open(url,'funnyfacebox', params);
 if (window.focus) {newwin.focus()}
 return false;
}
// -->
</script>




<?php
function koneksi_db(){
		$is_localhost=true;
		if($is_localhost){
			$host = "localhost";
			$database = "dbsispakdm";
			$user = "root";
			$password = "";
		}
		else{
			$host = "";
			$database = "";
			$user = "";
			$password = "";
		}
		$link=mysql_connect($host,$user,$password);
		mysql_select_db($database,$link);
		if(!$link)
			echo "Error : ".mysql_error();
		return $link;
	}


function footer_web()
	  {
	  ?>
	  <center>
&copy; Copyright 2015 All Right Reserved <br />
 Sistem Pakar Konsultasi Penyakit Diabetes Melitus
       </center>
	  <?php
	  }
function navigator_web()
	  {
	          @$current1 = $_REQUEST['current1'];
			  @$current2 = $_REQUEST['current2'];
			  @$current3 = $_REQUEST['current3'];
			  ?>
			  <li><a href="index.php?page=1&current1=current"  class="<?php echo $current1;?>" ><img src="images/menu/blue_circle - home.png" width="24" height="24" align="absmiddle" border=0px /> BERANDA </a></li>
              <li><a href="index.php?page=2&current2=current"  class="<?php echo $current2;?>" ><img src="images/menu/blue_circle - question.png" width="24" height="24"  align="absmiddle" border=0px /> PETUNJUK </a></li>
              <li><a href="index.php?page=3&current3=current"  class="<?php echo $current3;?>" ><img src="images/menu/blue_circle - print preview.png" width="24" height="24" align="absmiddle" border=0px /> INFORMASI</a></li>
			    <?php
			   
			  
	  }
function navigator_web_pakar()
	  {
	          @$current1 = $_REQUEST['current1'];
			  @$current2 = $_REQUEST['current2'];
			  @$current3 = $_REQUEST['current3'];
			  ?>
<li><a href="pakar_index.php?page=1&current1=current"  class="<?php echo $current1;?>" ><img src="images/menu/blue_circle - home.png" width="24" height="24" align="absmiddle"border=0px/> BERANDA </a></li>
<li><a href="pakar_index.php?page=2&current2=current"  class="<?php echo $current2;?>" ><img src="images/menu/blue_circle - question.png" width="24" height="24" align="absmiddle"border=0px/> PETUNJUK</a></li>
<li><a href="pakar_index.php?page=3&current3=current"  class="<?php echo $current3;?>" ><img src="images/menu/blue_circle - print preview.png" width="24" height="24" align="absmiddle"border=0px/> INFORMASI</a></li>
			  <?php
			   
			  
	  }
function navigator_web_user()
	  {
	          @$current1 = $_REQUEST['current1'];
			  @$current2 = $_REQUEST['current2'];
			  @$current3 = $_REQUEST['current3'];
			  @$current7 = $_REQUEST['current7'];
			  @$current8 = $_REQUEST['current8'];
			  @$current9 = $_REQUEST['current9'];
			  @$current10 = $_REQUEST['current10'];
			  ?>
<li><a href="user_index.php?page=1&current1=current" class="<?php echo $current1;?>"><img src="images/menu/blue_circle - home.png" width="24" height="24" align="absmiddle"/> Beranda</a></li>
<li><a href="user_index.php?page=9&current9=current&act=tampilprofil&u=<?php echo $_SESSION['SESS_USERNAME']; ?>" class="<?php echo $current9;?>"><img src="images/menu/blue_circle - user.png" width="24" height="24" align="absmiddle"/> Profil</a></li>
<li><a href="user_index.php?page=10&current10=current&act=ubahpass&u=<?php echo $_SESSION['SESS_USERNAME']; ?>" class="<?php echo $current10;?>"><img src="images/menu/blue_circle - key.png" width="24" height="24" align="absmiddle"/> Ubah Pass</a></li>
<li><a href="user_index.php?page=7&current7=current&act=diagnosa&induk=&u=<?php echo $_SESSION['SESS_USERNAME']; ?>" class="<?php echo $current7;?>"><img src="images/menu/blue_circle - loop.png" width="24" height="24" align="absmiddle"/> Diagnosa</a></li>
<li><a href="user_index.php?page=8&current8=current&act=0&u=<?php echo $_SESSION['SESS_USERNAME']; ?>" class="<?php echo $current8;?>"><img src="images/menu/blue_circle - stats.png" width="24" height="24" align="absmiddle"/> Hasil Diagnosa</a></li>
<li><a href="index.php" onClick="return confirm('Apakah Anda Yakin Akan Logout Dari Halaman ini?') class="<?php echo $current3;?>"><img src="images/menu/blue_circle - standby.png" width="24" height="24" align="absmiddle"/> Logout</a></li>
			  <?php
			   
			  
	  }
function menu_pakar()
	  {
	          @$current0 = $_REQUEST['current0'];
			  @$current = $_REQUEST['current'];
			  @$current4 = $_REQUEST['current4'];
			  @$current5 = $_REQUEST['current5'];
			  @$current6 = $_REQUEST['current6'];
			  ?>
			 			  
<!-- Start css3menu.com BODY section -->
<ul id="menu-kiri" class="topmenu">
	<li class="topfirst"><a href="pakar_index.php?page=7&current0=current&act=ubahpass&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"  class="<?php echo $current0;?>">Ganti Password<img src="images/menu/blue_circle - key.png" alt="Ganti Password" width="24" height="24" align="absmiddle"/></a></li>
	<li class="topmenu"><a href="pakar_index.php?page=4&current4=current&act=tampilpenyakit" class="<?php echo $current4;?>">Daftar Jenis Penyakit<img src="images/menu/blue_circle - document text.png" alt="Tipe Diabetes Melitus" width="24" height="24" align="absmiddle"/></a></li>
	<li class="topmenu"><a href="pakar_index.php?page=5&current5=current&act=tampilgejala"  class="<?php echo $current5;?>">Daftar Gejala<img src="images/menu/blue_circle - my documents.png" alt="Daftar Gejala" width="24" height="24" align="absmiddle"/></a></li>
	<li class="topmenu"><a href="pakar_index.php?page=6&current6=current&act=relasi" class="<?php echo $current6;?>">Relasi<img src="images/menu/blue_circle - link.png" alt="Relasi" width="24" height="24" align="absmiddle"/></a></li>
	<li class="topmenu"><a href="pakar_index.php?page=8&current=current&act=0"  class="<?php echo $current;?>">Bobot Gejala<img src="images/menu/blue_circle - percent.png" alt="Bobot Gejala" width="24" height="24" align="absmiddle"/></a></li>
	<li class="toplast"><a href="index.php" onClick="return confirm('Apakah Anda Yakin Akan Logout Dari Halaman ini?')">Logout<img src="images/menu/blue_circle - standby.png" alt="Logout" width="24" height="24" align="absmiddle"/></a></li>
</ul>
<!-- End css3menu.com BODY section -->
			  
			  
		      <?php
			   
			  
	  }
function menu_user()
	  {
			  session_start();
			  //$username = $_REQUEST['username'];
			  $current7 = $_REQUEST['current7'];
			  $current8 = $_REQUEST['current8'];
			  $current9 = $_REQUEST['current9'];
			  $current10 = $_REQUEST['current10'];
			  ?>
			  
			  <ul class="glossymenu"> 
			  <li><a href="user_index.php?page=9&current9=current&act=tampilprofil&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"   class="<?php echo $current9;?>"><img src="images/user.png" width="25" height="25" align="absmiddle"border=0px/>  Profil </a></li>
			  <!---<li><a href="user_index.php?page=10&current10=current&act=ubahpass&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"   class="<?php echo $current10;?>"><img src="images/config.png" width="25" height="25" align="absmiddle"border=0px/>  Ubah Password </a></li>--->
			  <li><a href="user_index.php?page=7&current7=current&act=diagnosa&induk=&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"  class="<?php echo $current7;?>"><img src="images/langmanager.png" width="25" height="25" align="absmiddle"border=0px/>  Diagnosa</a></li>
			  <li><a href="user_index.php?page=8&current8=current&act=0&u=<?php echo $_SESSION['SESS_USERNAME']; ?>"  class="<?php echo $current8;?>"><img src="images/query.png" width="25" height="25" align="absmiddle"border=0px/>  Lihat Hasil Diagnosa </a></li>
			  <li><a href="index.php" onClick="return confirm('Apakah Anda Yakin Akan Logout Dari Halaman ini?')"><img src="images/restore_f2.png" width="25" height="25" align="absmiddle"border=0px/> LOGOUT</a></li>
			  </ul>
		      <?php
			   
			  
	  }	  	  
	    
      
function form_login()
	  {
	   
		
		?>
		<link href="style.css" rel="stylesheet" type="text/css">
		<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
		<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
		<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
		<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
		<br />
		<div class="section_box3" align="justify">
		<div class="subtitle">
		  <div align="left"><img src="images/lock-24.png" width="24" height="24"  align="absmiddle"/> Log In</div>
		</div>
	    <form action="login.php" method="post">
		<p>Username
		<span id="sprytextfield1">
        <input name="username" type="text" id="username" size="23" maxlength="30" />
	  <br><span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Username Harus Diisi</span></span>
	  <br/>
		Password
		<span id="sprytextfield2">
        <input name="password" type="password" id="password" size="20" maxlength="15" />
	  <br><span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi</span></span><br/>
	  <input type="radio" name="status" value="user" checked />
          User
	      <input  type="radio" name="status" value="pakar" />
          Pakar          
     <br/>
     <br/><input type="submit" name="login" id="login" value="LOGIN" onclick="radio_box(this.form)"/>
	 <br/><div align="right"><a href="index.php?page=5&act=lupa">Lupa Password</a></div>

	  <div align="center">
<hr/>
	    <p>Jika Belum Terdaftar Klik :</p>
	    <p>
	    <div class="subtitle"><a href="index.php?page=4"> REGISTRASI</a></div>
	  </div></div>
</form><br />
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");

//-->
</script>
<?php
}

			
#fungsi untuk membuat kode otomatis untuk penyakit
function kdautopenyakit($tabel, $inisial){
	$struktur	= mysql_query("SELECT * FROM $tabel");
	$field		= mysql_field_name($struktur, 0);
	$panjang	= mysql_field_len($struktur, 0);
	
	$qry	= mysql_query("SELECT max(".$field.") FROM ".$tabel);
	$row	= mysql_fetch_array($qry);
	if ($row[0]==""){
		$angka = 0;
	}
	else {
		$angka = substr($row[0], strlen($inisial));
	}
	
	$angka++;
	$angka = strval($angka);
	$tmp = "";
	for($i=1; $i <= ($panjang-strlen($inisial)-strlen($angka)); $i++){
		$tmp = $tmp."0";
	}
	return $inisial.$tmp.$angka;
}

#fungsi untuk membuat kode otomatis untuk gejala
function kdautogejala($tabel, $inisial){
	$struktur	= mysql_query("SELECT * FROM $tabel");
	$field		= mysql_field_name($struktur, 0);
	$panjang	= mysql_field_len($struktur, 0);
	
	$qry	= mysql_query("SELECT max(".$field.") FROM ".$tabel);
	$row	= mysql_fetch_array($qry);
	if ($row[0]==""){
		$angka = 0;
	}
	else {
		$angka = substr($row[0], strlen($inisial));
	}
	
	$angka++;
	$angka = strval($angka);
	$tmp = "";
	for($i=1; $i <= ($panjang-strlen($inisial)-strlen($angka)); $i++){
		$tmp = $tmp."0";
	}
	return $inisial.$tmp.$angka;
}


#fungsi untuk konversi tanggal dari mysql ke tgl indonesia
function tgl_indo($tgl){
   $tanggal = substr($tgl,8,2);
   $bulan    = getBulan(substr($tgl,5,2));
   $tahun    = substr($tgl,0,4);
   $jam      = substr($tgl,11,8);
   return $tanggal." ".$bulan." ".$tahun." ".$jam;        
}    
function getBulan($bln){
  switch ($bln){
		case 1:
      return "Januari";
      break;
    case 2:
      return "Februari";
      break;
    case 3:
      return "Maret";
      break;
    case 4:
      return "April";
    	break;
    case 5:
      return "Mei";
      break;
    case 6:
      return "Juni";
      break;
    case 7:
      return "Juli";
      break;
    case 8:
      return "Agustus";
      break;
    case 9:
      return "September";
      break;
    case 10:
      return "Oktober";
      break;
    case 11:
      return "November";
      break;
    case 12:
      return "Desember";
      break;
	}
} 
?>