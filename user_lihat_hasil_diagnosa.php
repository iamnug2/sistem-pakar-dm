<?php
	require_once('auth.php');
?>

<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<?php
	require_once('otentifikasi.php');
	include("koneksi_db.php");
	$act=$_GET['act'];
	$username=$_GET['u'];
	include("paging.php");
	if ($act=="0"){
	
	$cek_hasil=mysql_num_rows(mysql_query("SELECT * FROM hasil_diagnosa WHERE  username='$username'"));
		
		if ($cek_hasil>0){
		
?><br>
<div class="text-area-user" align="justify">    
<div class="title"> Data Hasil Diagnosa</div>

<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
  <tr bgcolor="#0066CC" align="center">
    <td width="4%" align="center"><b><font color="white" size=2>No</font></b></td>
    <td width="14%" align="center"><b><font color="white" size=2>Tanggal Diagnosa</font></b></td>
    <td width="15%" align="center"><b><font color="white" size=2>Nama</font></b></td>
    <td width="55%" align="center"><b><font color="white" size=2>Hasil Diagnosa</font></b></td>
	<td width="12%" align="center"><b><font color="white" size=2>Proses</font></b></td>
	
    </tr>
<?php


$username=$_GET['u'];
$no=0;
$qlog = mysql_query("SELECT * FROM hasil_diagnosa WHERE username='$username' ORDER BY tanggal_diagnosa DESC");
while($data = mysql_fetch_array($qlog)){
$tanggal = tgl_indo($data['tanggal_diagnosa']);
$no++;
?>

  <tr class="<?php if($no%2==1) echo "isitabelganjil"; else echo "isitabelgenap";?>">
    <td align="center"><?php echo $no;?></td>
    <td><div align="center"><?php echo $tanggal;?></div></td>
    <td>
	<?php 
	
	$dnama = mysql_query("SELECT * FROM data_user WHERE username='$username'");
    $nama = mysql_fetch_array($dnama);
	
	echo $nama['nama_user'];?></td>
    <td>
			<?php 
				$qpenyakit = mysql_query("SELECT * FROM penyakit WHERE kode_penyakit='$data[kode_penyakit]'");
				if(mysql_num_rows($qpenyakit)){
					$penyakit = mysql_fetch_array($qpenyakit);
          $persentase = $data['persentase'];
          if($persentase>100){
            $persentase = 100;
          }else{
            $persentase = $persentase;
          }
					echo $penyakit['nama_penyakit']."&nbsp;(".$persentase."%)";
				}
				else{
					echo 'Tidak Mengalami Penyakit';
				}
			?>
	</td>
    <td><div align="center"><a href="?page=8&act=detail&u=<?php echo $username;?>&id=<?php echo $data['id_diagnosa'];?>"><img src="images/Text preview.png" width="24" height="24" border="0" align="absmiddle"> Detail</a></div></td>
  </tr>
<?php
}
?>
	
</table>
</div>
<?php
}else{
?>
<br>
<div class="text-area-user" align="justify">    
<div class="title"> Data Hasil Diagnosa Masih Kosong</div>
<br><br>
<div class="subtitle"> Anda Belum Melakukan Diagnosa</div>
</div>
<?php
}

}

if ($act=='detail'){

$id=$_GET['id'];
$username=$_GET['u'];
$qry = mysql_query("SELECT * FROM hasil_diagnosa,data_user WHERE hasil_diagnosa.id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
$data = mysql_fetch_array($qry);
       
	if ($data['kode_penyakit']!=''){

	$qry = mysql_query("SELECT * FROM hasil_diagnosa, penyakit,data_user WHERE penyakit.kode_penyakit=hasil_diagnosa.kode_penyakit AND id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
$data = mysql_fetch_array($qry);
?>
<div class="text-area-user" align="justify">  
<br>
<div class="title">Hasil Diagnosa</div>
<br />
<form action="javascript: void(0)"  method="post" align="left" cellpadding="5">
<table  cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td height="30" colspan="3" class="subtitle">Biodata User (Pasien)</td>
    </tr>
  <tr>
    <td width="21%"><strong>Nama </strong></td>
    <td width="2%">:</td>
    <td width="77%"><?php 	echo $data['nama_user'];?></td>
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
    <td valign="top"><div align="right"><strong>Tipe Penyakit DM </strong></div></td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['nama_penyakit'];?></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Persentase</strong></div></td>
    <td valign="top">:</td>
    <td valign="top">
    <?php
     $persentase = $data['persentase'];
    if($persentase>100){
       echo '100';
    }else{
       echo $data['persentase'];
    }
    ?> persen</td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Gejala Umum</strong></div></td>
    <td valign="top">:</td>
    <td>
    	<?php
		$sql_gejala = "SELECT gejala.* FROM gejala,relasi_penyakit_gejala
						WHERE gejala.kode_gejala=relasi_penyakit_gejala.kode_gejala
						AND relasi_penyakit_gejala.kode_penyakit='$data[kode_penyakit]'";
		$qry_gejala = mysql_query($sql_gejala);
			$i=0;
			while($hsl_gejala=mysql_fetch_array($qry_gejala)){
				$i++;
				echo "$i. $hsl_gejala[nama_gejala] <br>";
			} 
			?>    </td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Definisi</strong></div></td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['definisi'];?></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Pengobatan</strong></div></td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['pengobatan'];?></td>
  </tr>
  <tr>
    <td valign="top"><div align="right"><strong>Pencegahan</strong></div></td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['pencegahan'];?></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Waktu Diagnosa</strong></div></td>
    <td>:</td>
    <td><?php echo tgl_indo($data['tanggal_diagnosa']);?></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td colspan="3" align="center">
<input type="submit" onclick="popup('cetak.php?act=detail&u=<?php echo $username;?>&id=<?php echo $id;?>')" name="submit" value="Cetak"/></td>
    </tr>
</table>
</div>
<?php
	
	
	
}else{
echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=8&act=detail0&id=$id&u=$username\">";
}	


}

if ($act=="detail0"){
$id=$_GET['id'];
$username=$_GET['u'];
$qry = mysql_query("SELECT * FROM hasil_diagnosa, data_user WHERE  id_diagnosa='$id' AND hasil_diagnosa.username=data_user.username");
$data = mysql_fetch_array($qry);
?>
<div class="text-area-user" align="justify">  
<br>
<div class="title">Hasil Diagnosa</div>
<br />
<form action="javascript: void(0)" onclick="popup('cetak2.php?u=<?php echo $username;?>&id=<?php echo $id;?>')" method="post" align="left" cellpadding="5">
<table  cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td height="30" colspan="3" class="subtitle">Biodata Anak</td>
  </tr>
  <tr>
    <td width="177"><strong>Nama Anak</strong></td>
    <td width="7">:</td>
    <td width="889"><?php echo $data['nama_user'];?></td>
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
    <td valign="top"><div align="right"><strong>Kesimpulan</strong></div></td>
    <td valign="top">:</td>
    <td valign="top">Hasil kesimpulan diagnosa, anak anda tidak mengalami jenis penyakit anak yang disebabkan virus, disebabkan tidak ada gejala yang anak anda alami.</td>
  </tr>
 
  <tr>
    <td><div align="right"><strong>Waktu Diagnosa</strong></div></td>
    <td>:</td>
    <td><?php echo tgl_indo($data['tanggal_diagnosa']);?></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td colspan="3" align="center">
<input type="submit" name="submit" value="Cetak"/></td>
  </tr>
</table>
</div>


<?php
}
?>
