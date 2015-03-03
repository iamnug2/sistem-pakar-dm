

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="icon" type="image/gif" href="images/favicon.gif" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar Diagnosa Penyakit Anak Yang Disebabkan Infeksi Virus</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<?php  include("library.php"); include("koneksi_db.php");?>

</head>

<body onLoad="javascript: window.print()"> 

<div id="templatemo_container">
    <div class="templatemo_line"></div>   
    
  <div class="templatemo_line"></div> 
  <div id="templatemo_header">
  <div id="templatemo_site_title"></div>
  <div id="templatemo_site_slogan"></div>
  </div>
  
  <div class="templatemo_line"></div>    
	
    <div id="templatemo_content" align="center">
	
      
      
      <div id="templatemo_right_column" align="center">
	  <center>
	  <?php
	  
	  
$id=$_GET['id'];
$username=$_GET['u'];
$qry = mysql_query("SELECT * FROM hasil_diagnosa, data_user WHERE  id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
$data = mysql_fetch_array($qry);
    
	


?>
<div class="text_area" align="justify">  
<br>
<div class="title">
  <div align="center"><strong>Hasil Diagnosa</strong></div>
</div>
<br />
<table  cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td height="30" colspan="3" class="subtitle">Biodata User (Pasien) </td>
    </tr>
  <tr>
    <td width="138"><strong>Nama </strong></td>
    <td width="3">:</td>
    <td width="898"><?php echo $data['nama_user'];?></td>
  </tr>
   <tr>
    <td><strong>Usia</strong></td>
    <td>:</td>
    <td><?php echo $data['usia'];?> tahun</td>
  </tr>
  <tr>
    <td><strong>Jenis Kelamin</strong></td>
    <td>:</td>
    <td><?php if ($data['jenis_kelamin']=='L') echo "Laki-laki"; else echo "Perempuan";?></td>
  </tr>
  <tr>
    <td><strong>Alamat</strong></td>
    <td>:</td>
    <td><?php echo $data['alamat'];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td colspan="3" class="subtitle">Hasil Diagnosa</td>
    </tr>
  
  <tr>
    <td><div align="right"><strong>Kesimpulan</strong></div></td>
    <td>:</td>
    <td>Hasil kesimpulan diagnosa, anak anda tidak mengalami jenis penyakit anak yang disebabkan virus, disebabkan tidak ada gejala yang anak anda alami.</td>
  </tr>
 
  <tr>
    <td><div align="right"><strong>Waktu Diagnosa</strong></div></td>
    <td>:</td>
    <td><?php echo tgl_indo($data['tanggal_diagnosa']);?></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
</table>
</div>

   	 		
    </div>
	<div id="templatemo_footer" align="center">
    </div>

</center>
</body>
</html>
<?php
