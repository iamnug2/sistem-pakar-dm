<?php
// session_start();
include("otentifikasi.php");
include ("koneksi_db.php");
$act=$_GET['act'];
@$induk=$_GET['induk'];
$u=$_SESSION['SESS_USERNAME'];
@$s=$_GET['s'];
if($act=="diagnosa"){
	if($induk==""){
	  $induk='';
	  $s ='';
	  $sqlg = "SELECT * FROM gejala where  kode_induk_ya='$induk' AND kode_induk_tidak='$s'";
	  }else{
	  $induk   = $_GET['induk'];
	  $sqlg = "SELECT * FROM gejala where  kode_induk_ya='$induk'";
	  }
	
	if($s!=''){
	  $s   = $_GET['s'];
	  $sqlg = "SELECT * FROM gejala where  kode_induk_tidak='$s'";
	}
	$qryg = mysql_query($sqlg);
	$datag = mysql_fetch_array($qryg);
	
	$kode_gejala  = $datag['kode_gejala'];
	$nama_gejala  = $datag['nama_gejala'];

?>

<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {font-weight: bold}
-->
</style>
<div class="text-area-user" align="justify">  
<br>
<form action="?page=7&act=diagnosis" method="post">
<input  name="kode_gejala" value="<?php echo $kode_gejala;?>" type="hidden"/>
<table width="100%" align="center" cellpadding="5">
	<tr>
		<td colspan="2"><div class="title">Jawablah pertanyaan di bawah ini :</div></td>
  </tr>
  <tr>
		<td></td>
  </tr>
	<tr>
  	<td colspan="2" align="center"><div class="pertanyaan"><?php echo " &nbsp; Apakah Anda mengalami <b>$nama_gejala</b> ?";?></div></td>
  </tr>
  <tr>
    <td width="50%" align="right"><label><input type="radio" name="jawaban" value="Y" checked="checked" />Ya (Benar)</label></td>
    <td width="50%" align="left"><label><input type="radio" name="jawaban" value="T" />Tidak (Salah)</label></td>
  </tr>
	<tr>
  	<td colspan="2" align="center"><input type="submit" value="Jawab" /></td>
  </tr>
</table>
</form>
</div>
<?php
$u=$_SESSION['SESS_USERNAME'];
$cek_induk=mysql_num_rows(mysql_query("SELECT * FROM gejala where  kode_induk_ya='$induk'"));
$cek_simpul=mysql_num_rows(mysql_query("SELECT * FROM gejala where  kode_induk_tidak='$s'"));
$sql_cekh = "SELECT * FROM tmp_penyakit 
			 WHERE username='$u' 
			 GROUP BY kode_penyakit";
$qry_cekh = mysql_query($sql_cekh);
$hsl_cekh = mysql_num_rows($qry_cekh);
if ($cek_induk == 0 or $cek_simpul==0) {
	
	$hsl_data = mysql_fetch_array($qry_cekh);
	$cek_gejala_valid=mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala where status='1'"));
	$cek_gejala_penyakit=mysql_num_rows(mysql_query("SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala,tmp_penyakit where relasi_penyakit_gejala.kode_penyakit=tmp_penyakit.kode_penyakit"));
	$hasilbobot= mysql_query("SELECT bobot
FROM relasi_penyakit_gejala, tmp_gejala
WHERE kode_penyakit = '$hsl_data[kode_penyakit]'
AND relasi_penyakit_gejala.kode_gejala = tmp_gejala.kode_gejala
AND tmp_gejala.status =1");
	
	$bobot = mysql_fetch_array($hasilbobot);
	$jum = mysql_num_rows($hasilbobot);
	$persentase = 0;
	for($i = 0; $i < $jum; ++$i){
			$persentase=$persentase + $bobot[bobot];
			}
	
	if ($persentase==0){
		$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
	    $qry_pasien = mysql_query($sql_pasien);
	    $hsl_pasien = mysql_fetch_array($qry_pasien);
		$sql_in = "INSERT INTO hasil_diagnosa SET
				  username='$hsl_pasien[username]',
				  kode_penyakit='',
				  tanggal_diagnosa=NOW(),
				  persentase='0'";
		mysql_query($sql_in);
					   
	echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=7&act=hasil0\">";
	exit;
	}else{	
	$sql_pasien = "SELECT * FROM data_user WHERE username='$u'";
	$qry_pasien = mysql_query($sql_pasien);
	$hsl_pasien = mysql_fetch_array($qry_pasien);
		$sql_in = "INSERT INTO hasil_diagnosa SET
				  username='$hsl_pasien[username]',
				  kode_penyakit='$hsl_data[kode_penyakit]',
				  tanggal_diagnosa=NOW(),
				  persentase='$persentase'";
		mysql_query($sql_in);
					   
	echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=7&act=hasil\">";
	exit;
	}
}



}


if($act=="diagnosis"){
	
# Baca variabel Form (If Register Global ON)
$jawaban 	= $_REQUEST['jawaban'];
$kode_gejala   = $_REQUEST['kode_gejala'];

# Mendapatkan username
$u=$_SESSION['SESS_USERNAME'];

# Fungsi untuk menambah data ke tmp_analisa
function AddTmpAnalisa($kode_gejala, $u) {
	$sql_sakit = "SELECT relasi_penyakit_gejala.* FROM relasi_penyakit_gejala,tmp_penyakit 
				  WHERE relasi_penyakit_gejala.kode_penyakit=tmp_penyakit.kode_penyakit 
				  AND username='$u' ORDER BY relasi_penyakit_gejala.kode_penyakit,relasi_penyakit_gejala.kode_gejala";
	$qry_sakit = mysql_query($sql_sakit);
	while ($data_sakit = mysql_fetch_array($qry_sakit)) {
		$sqltmp = "INSERT INTO tmp_analisa (username, kode_penyakit,kode_gejala)
					VALUES ('$u','$data_sakit[kode_penyakit]','$data_sakit[kode_gejala]')";
		mysql_query($sqltmp);
	}
}

# Fungsi hapus tabel tmp_gejala
function AddTmpGejala($kode_gejala, $u,$status) {
	$sql_gejala = "INSERT INTO tmp_gejala (username,kode_gejala,status) VALUES ('$u','$kode_gejala','$status')";
	mysql_query($sql_gejala);
}

# Fungsi hapus tabel tmp_sakit
function DelTmpSakit($u) {
	$sql_del = "DELETE FROM tmp_penyakit WHERE username='$u'";
	mysql_query($sql_del);
}

# Fungsi hapus tabel tmp_analisa
function DelTmpAnlisa($u) {
	$sql_del = "DELETE FROM tmp_analisa WHERE username='$u'";
	mysql_query($sql_del);
}

# PEMERIKSAAN
if ($jawaban == "Y") {
	$sql_analisa = "SELECT * FROM tmp_analisa ";
	$qry_analisa = mysql_query($sql_analisa);
	$data_cek = mysql_num_rows($qry_analisa);
	if ($data_cek >= 1) {
		# Kode saat tmp_analisa tidak kosong
		DelTmpSakit($u);
		$sql_tmp = "SELECT * FROM tmp_analisa 
					WHERE kode_gejala='$kode_gejala' 
					AND username='$u'";
		$qry_tmp = mysql_query($sql_tmp);
		while ($data_tmp = mysql_fetch_array($qry_tmp)) {
			$sql_rsakit = "SELECT * FROM relasi_penyakit_gejala 
							WHERE kode_penyakit='$data_tmp[kode_penyakit]' 
							GROUP BY kode_penyakit";
			$qry_rsakit = mysql_query($sql_rsakit);
			while ($data_rsakit = mysql_fetch_array($qry_rsakit)) {
				// Data penyakit yang mungkin dimasukkan ke tmp
				$sql_input = "INSERT INTO tmp_penyakit (username,kode_penyakit)
							 VALUES ('$u','$data_rsakit[kode_penyakit]')";
				mysql_query($sql_input);
			}
		} 
		// Gunakan Fungsi
		DelTmpAnlisa($u);
		AddTmpAnalisa($kode_gejala, $u);
		$status = '1';
		AddTmpGejala($kode_gejala, $u,$status);
		
		
	}	
	else {
		# Kode saat tmp_analisa kosong
		$sql_rgejala = "SELECT * FROM relasi_penyakit_gejala WHERE kode_gejala='$kode_gejala'";
		$qry_rgejala = mysql_query($sql_rgejala);
		while ($data_rgejala = mysql_fetch_array($qry_rgejala)) {
			$sql_rsakit = "SELECT * FROM relasi_penyakit_gejala 
						   WHERE kode_penyakit='$data_rgejala[kode_penyakit]' 
						   GROUP BY kode_penyakit";
			$qry_rsakit = mysql_query($sql_rsakit);
			while ($data_rsakit = mysql_fetch_array($qry_rsakit)) {
				// Data penyakit yang mungkin dimasukkan ke tmp
				$sql_input = mysql_query("INSERT INTO tmp_penyakit (username,kode_penyakit)
							 VALUES ('$u','$data_rsakit[kode_penyakit]')");
			}
		} 
		// Menggunakan Fungsi
		AddTmpAnalisa($kode_gejala, $u);
		$status = '1';
		AddTmpGejala($kode_gejala, $u,$status);
		
	}
	echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=7&act=diagnosa&induk=$kode_gejala\">";
}


if ($jawaban == "T") {
	$sql_analisa = "SELECT * FROM tmp_analisa ";
	$qry_analisa = mysql_query($sql_analisa);
	$data_cek = mysql_num_rows($qry_analisa);
	if ($data_cek >= 1) {
		# Kode saat tmp_analisa tidak kosong
		DelTmpSakit($u);
		$sql_tmp = "SELECT * FROM tmp_analisa 
					WHERE kode_gejala='$kode_gejala' 
					AND username='$u'";
		$qry_tmp = mysql_query($sql_tmp);
		while ($data_tmp = mysql_fetch_array($qry_tmp)) {
			$sql_rsakit = "SELECT * FROM relasi_penyakit_gejala 
							WHERE kode_penyakit='$data_tmp[kode_penyakit]' 
							GROUP BY kode_penyakit";
			$qry_rsakit = mysql_query($sql_rsakit);
			while ($data_rsakit = mysql_fetch_array($qry_rsakit)) {
				// Data penyakit yang mungkin dimasukkan ke tmp
				$sql_input = "INSERT INTO tmp_penyakit (username,kode_penyakit)
							 VALUES ('$u','$data_rsakit[kode_penyakit]')";
				mysql_query($sql_input);
			}
		} 
		// Gunakan Fungsi
		DelTmpAnlisa($u);
		AddTmpAnalisa($kode_gejala, $u);
		$status = '0';
		AddTmpGejala($kode_gejala, $u,$status);
	}	
	else {
		# Kode saat tmp_analisa kosong
		$sql_rgejala = "SELECT * FROM relasi_penyakit_gejala WHERE kode_gejala='$kode_gejala'";
		$qry_rgejala = mysql_query($sql_rgejala);
		while ($data_rgejala = mysql_fetch_array($qry_rgejala)) {
			$sql_rsakit = "SELECT * FROM relasi_penyakit_gejala 
						   WHERE kode_penyakit='$data_rgejala[kode_penyakit]' 
						   GROUP BY kode_penyakit";
			$qry_rsakit = mysql_query($sql_rsakit);
			while ($data_rsakit = mysql_fetch_array($qry_rsakit)) {
				// Data penyakit yang mungkin dimasukkan ke tmp
				$sql_input = mysql_query("INSERT INTO tmp_penyakit (username,kode_penyakit)
							 VALUES ('$u','$data_rsakit[kode_penyakit]')");
			}
		} 
		// Menggunakan Fungsi
		AddTmpAnalisa($kode_gejala, $u);
		$status = '0';
		AddTmpGejala($kode_gejala, $u,$status);
	}
	echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=7&act=diagnosa&s=$kode_gejala&induk=$kode_gejala\">";
}



}
if ($act=="hasil"){
$u=$_SESSION['SESS_USERNAME'];
$qry = mysql_query("SELECT * FROM hasil_diagnosa, penyakit, data_user WHERE penyakit.kode_penyakit=hasil_diagnosa.kode_penyakit AND hasil_diagnosa.username='$u' AND hasil_diagnosa.username=data_user.username ORDER BY hasil_diagnosa.id_diagnosa DESC LIMIT 1");
$data = mysql_fetch_array($qry);
$id = $data['id_diagnosa'];
mysql_query("TRUNCATE TABLE `tmp_analisa`");
mysql_query("TRUNCATE TABLE `tmp_gejala`");
mysql_query("TRUNCATE TABLE `tmp_penyakit`");
?>
<div class="text-area-user" align="justify">  
<br>
<div class="title">Hasil Diagnosa</div>
<br />
<form action="javascript: void(0)" method="post" align="left" cellpadding="5">
<table width="100%"  cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td height="30" colspan="3" class="subtitle">Biodata User (Pasien) </td>
  </tr>
  <tr>
    <td width="22%"><strong>Nama  </strong></td>
    <td width="2%">:</td>
    <td width="76%"><?php echo $data['nama_user'];?></td>
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
    <td colspan="3"><hr color="#AAAAAA" class="style3"></td>
  </tr>
  <tr>
    <td colspan="3" class="subtitle"><strong>Hasil Diagnosa</strong></td>
  </tr>
  
  <tr>
    <td><div align="right"><strong>Tipe Penyakit DM</strong></div></td>
    <td>:</td>
    <td><?php echo $data['nama_penyakit'];?></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Persentase</strong></div></td>
    <td>:</td>
    <td><?php 
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
<input type="submit" name="submit" value="Cetak"/></td>
  </tr>
</table>
</div>


<?php
}


if ($act=="hasil0"){
$u=$_SESSION['SESS_USERNAME'];
$qry = mysql_query("SELECT * FROM hasil_diagnosa, data_user WHERE hasil_diagnosa.username='$u' AND hasil_diagnosa.username=data_user.username ORDER BY hasil_diagnosa.id_diagnosa DESC LIMIT 1");
$data = mysql_fetch_array($qry);
$id = $data['id_diagnosa'];
mysql_query("TRUNCATE TABLE `tmp_analisa`");
mysql_query("TRUNCATE TABLE `tmp_gejala`");
mysql_query("TRUNCATE TABLE `tmp_penyakit`");
?>
<div class="text-area-user" align="justify">  
<br>
<div class="title">Hasil Diagnosa</div>
<br />
<form action="javascript: void(0)" onclick="popup('cetak2.php?u=<?php echo $u;?>&id=<?php echo $id;?>')" method="post" align="left" cellpadding="5">
<table  cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
  <tr>
    <td height="30" colspan="3" class="subtitle">Biodata User (Pasien) </td>
  </tr>
  <tr>
    <td width="170"><strong>Nama </strong></td>
    <td width="7">:</td>
    <td width="896"><?php echo $data['nama_user'];?></td>
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
    <td valign="top">Hasil kesimpulan diagnosa, anda tidak mengalami jenis penyakit Diabetes Melitus Tipe apapun, disebabkan tidak ada gejala yang anak anda alami.</td>
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


