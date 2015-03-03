<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextArea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextArea.css" rel="stylesheet" type="text/css" />
<?php
	require_once('otentifikasi.php');
	include("koneksi_db.php");
	$act=$_GET['act'];
	include("paging.php");
	if ($act=="tampilgejala"){
?>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div class="text_area" align="justify">      
<br /><div class="title">Pengolahan Data Gejala</div>
<form action="?page=5&act=carigejala" method="post">
<table align="center" cellpadding="5" cellspacing="0">
  
  <tr>
    <td class="subtitle">Cari Data Nama Gejala</td>
    <td class="subtitle">:</td>
    <td><input name="nama_gejala2" type="text" id="nama_gejala2" size="25" /></td>
    <td valign="middle"><span id="sprytextfield11">
      <input name="submit" type="submit" value="Cari" />
      <br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Data yang akan dicari harus dii</span></span></td>
  </tr>
</table>
</form>
<?php  $jmldata= mysql_num_rows(mysql_query("SELECT * FROM gejala")); echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> record gejala</center>";?>
<br><table border="1"  align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
  <tr bgcolor="#0066CC" align="center">
    <td width="21"><div align="center"><b><font color="white" size=3>Id</font></b></div></td>
    <td width="958"><b><font color="white" size=3>Nama Gejala</font></b></td>
    <td colspan="2"><b><font color="white" size=3>Proses</font></b></td>
    </tr>
  <?php
$p = new Paging;
$batas = 10;
$posisi = $p->cariPosisi($batas);

$no=0;
$qlog = mysql_query("SELECT * FROM gejala ORDER BY kode_gejala ASC LIMIT $posisi,$batas");
while($data = mysql_fetch_array($qlog)){
$no++;
?>
   	<tr class="<?php if($no%2==1) echo "isitabelganjil"; else echo "isitabelgenap";?>">
    <td align="center"><div align="center"><?php echo $data['kode_gejala'];?></div></td>
    <td><?php echo $data['nama_gejala'];?></td>
    <td width="33" align="center"><a href="?page=5t&amp;act=editgejala&amp;kode_gejala=<?php echo $data['kode_gejala'];?>"><img src="images/Modify.png" width="18" height="18" border="0" align="absmiddle" /> Ubah</a></td>
    <td width="39" align="center"><a href="?page=5t&act=editgejala&kode_gejala=<?php echo $data['kode_gejala'];?>"></a><a href="?page=5&act=hapusgejala&kode_gejala=<?php echo $data['kode_gejala'];?>" onclick="return confirm('Apakah anda yakin data gejala ini akan dihapus?')"><img src="images/Erase.png" width="18" height="18" border="0" align="absmiddle"> Hapus</a></td>
  </tr>
  <?php }?>
  <tr>
	<td colspan="4" align="center"><a href="?page=5&act=tambahgejala"><img src="images/95.png" width="24" height="24"  border="0" align="absmiddle"> Tambah</a></td>
    </tr>
  </table>
  <?php
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM gejala"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);
echo "<br><center>$linkHalaman</center>";
?>
  
</div>   

		
<?php
}


if ($act=="berhasil"){
?>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div class="text_area" align="justify">      
<br /><div class="title">Data Gejala Berhasil Disimpan</div>
<br />
<form action="?page=5&act=carigejala" method="post">
<table align="center" cellpadding="5" cellspacing="0">
  
  <tr>
    <td class="subtitle">Cari Data Nama Gejala</td>
    <td class="subtitle">:</td>
    <td><input name="nama_gejala2" type="text" id="nama_gejala2" size="25" /></td>
    <td valign="middle"><span id="sprytextfield11">
      <input name="submit" type="submit" value="Cari" />
      <br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Data yang akan dicari harus dii</span></span></td>
  </tr>
</table>
</form>
<?php  $jmldata= mysql_num_rows(mysql_query("SELECT * FROM gejala")); echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> record gejala</center>";?>
<br><table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
  <tr bgcolor="#0066CC" align="center">
    <td width="3%"><b><font color="white" size=3>Id</font></b></td>
    <td width="88%"><b><font color="white" size=3>Nama Gejala</font></b></td>
    <td colspan="2"><b><font color="white" size=3>Proses</font></b></td>
    </tr>
  <?php
$p = new Paging;
$batas = 10;
$posisi = $p->cariPosisi($batas);

$no=0;
$qlog = mysql_query("SELECT * FROM gejala ORDER BY kode_gejala ASC LIMIT $posisi,$batas");
while($data = mysql_fetch_array($qlog)){
$no++;
?>
   	<tr class="<?php if($no%2==1) echo "isitabelganjil"; else echo "isitabelgenap";?>">
    <td align="center"><?php echo $data['kode_gejala'];?></td>
    <td><?php echo $data['nama_gejala'];?></td>
    <td width="4%" align="center"><a href="?page=5t&amp;act=editgejala&amp;kode_gejala=<?php echo $data['kode_gejala'];?>"><img src="images/Modify.png" width="20" height="20" border="0" align="absmiddle" /> Ubah</a></td>
    <td width="5%" align="center"><a href="?page=5&act=hapusgejala&kode_gejala=<?php echo $data['kode_gejala'];?>" onclick="return confirm('Apakah anda yakin data gejala ini akan dihapus?')"><img src="images/Erase.png" width="20" height="20" border="0" align="absmiddle"> Hapus</a></td>
  </tr>
  <?php }?>
  <tr>
	<td colspan="4" align="center"><a href="?page=5&act=tambahgejala"><img src="images/95.png" width="24" height="24"  border="0" align="absmiddle"> Tambah</a></td>
    </tr>
  </table>
  <?php
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM gejala"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);
echo "<br><center>$linkHalaman</center>";
?>
  
</div>   

		
<?php
}



elseif ($act=="editgejala"){
	$kode_gejala = $_GET['kode_gejala'];
	$qry = mysql_query("SELECT * FROM gejala WHERE kode_gejala='$kode_gejala'");
	$data = mysql_fetch_array($qry);
	$ya = $data['kode_induk_ya'];
	$tidak = $data['kode_induk_tidak'];
	
	$qry1 = "SELECT * FROM gejala WHERE kode_gejala = '$ya'";
	$result1 = mysql_query($qry1);
	$data1 = mysql_fetch_array ($result1);
	
	$nama_gejala_ya = $data1['nama_gejala'];
	
	$qry2 = "SELECT * FROM gejala WHERE kode_gejala = '$tidak'";
	$result2 = mysql_query($qry2);
	$data2 = mysql_fetch_array ($result2);
	
	$nama_gejala_tidak = $data2['nama_gejala'];
	
?>
<br>
<div class="text_area" align="justify">
<div class="title">Ubah Data gejala</div>
<br>
<form action="?page=5&act=aceditgejala" method="post">
<table>
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td class="subtitle">Kode</td>
    <td>:</td>
    <td><input name="kode_gejala" type="text" size="5" maxlength="5" disabled value="<?php echo $kode_gejala;?>" />
    <input name="kode_gejala" type="hidden" value="<?php echo $kode_gejala;?>" /></td>
  </tr>
  <tr>
    <td class="subtitle">Nama Gejala</td>
    <td>:</td>
    <td><span id="sprytextfield22"><input name="nama_gejala" type="text" value="<?php echo $data['nama_gejala'];?>" size="30" />
	<br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nama gejala harus diisi</span></span></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td>Gejala Ini Muncul Setelah</td>
    <td>:</td>
	<td></td>
  </tr>
   <tr>
    <td colspan="3"><br></td>
    
  </tr>
  <tr>
    <td class="subtitle">Jawaban YA pada</td>
    <td>:</td>
    <td><select name="kode_induk_ya" id="kode_induk_ya">
                  <?php
				   if ($ya=='') echo "<option value=''>- TIDAK ADA -</option>";
				   else{ echo "<option value='$ya'>[$ya] $nama_gejala_ya</option>";
				   echo "<option value=''>- TIDAK ADA -</option>";
				   }               
				$qryp = mysql_query("SELECT * FROM gejala where kode_gejala!='$ya'");
				while($datap = mysql_fetch_array($qryp)){
					echo "<option value='$datap[kode_gejala]'>[$datap[kode_gejala]] $datap[nama_gejala]</option>";
				}		  
				?>
                </select>
		</td>
  </tr>
  <tr>
    <td class="subtitle">Jawaban TIDAK pada</td>
    <td>:</td>
    <td><select name="kode_induk_tidak" id="kode_induk_tidak">
                  <?php
				   if ($tidak=='') echo "<option value=''>- TIDAK ADA -</option>";
				   else{ echo "<option value='$tidak'>[$tidak] $nama_gejala_tidak</option>";
				   echo "<option value=''>- TIDAK ADA -</option>";
				   }
				  
				$qryp = mysql_query("SELECT * FROM gejala where kode_gejala!='$tidak'");
				while($datap = mysql_fetch_array($qryp)){
					echo "<option value='$datap[kode_gejala]'>[$datap[kode_gejala]] $datap[nama_gejala]</option>";
				}
				?>
                </select>
		</td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data gejala ini akan disimpan?')"/>
	<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" /></td>
    </tr>
</table>
</form>
</div>
<?php
}
elseif ($act=="aceditgejala"){
	$kode_gejala = $_POST['kode_gejala'];
	$nama_gejala = $_POST['nama_gejala'];
	$kode_induk_ya = $_POST['kode_induk_ya'];
	$kode_induk_tidak = $_POST['kode_induk_tidak'];
	
	
	mysql_query("UPDATE gejala SET nama_gejala='$nama_gejala',kode_induk_ya='$kode_induk_ya',kode_induk_tidak='$kode_induk_tidak' WHERE kode_gejala='$kode_gejala'");
	echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=5&act=berhasil\">";
}
elseif ($act=="hapusgejala"){
  $kode_gejala = $_GET['kode_gejala'];
  
  if(mysql_num_rows(mysql_query("SELECT * FROM relasi_penyakit_gejala WHERE kode_gejala='$kode_gejala'")) < 1){	
	if ($kode_gejala != ""){
		mysql_query("DELETE FROM gejala WHERE kode_gejala='$kode_gejala'");
		echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=5&act=berhasil\">";
	}
	else {
		echo "Data gejala belum dipilih.";
	}
  }
  else{
    $qry = mysql_query("SELECT * FROM gejala WHERE kode_gejala='$kode_gejala'");
	$data = mysql_fetch_array($qry);
	echo "<center ><br><br><b>Maaf, gejala <font color=red> $data[nama_gejala]</font> tidak bisa dihapus karena sedang digunakan atau berelasi dengan suatu penyakit.</b></center>";
  ?><br><center><input type="button" name="batal" value="Kembali" onclick="javascript:history.go(-1)" /></center>
	<?php
  }
}
if ($act=="tambahgejala"){
?>

<div class="text_area" align="justify">      
<br /><div class="title">Tambah Data Gejala</div>
<br />
<form action="?page=5&act=actambahgejala" method="post">
<table>
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td class="subtitle">Kode Gejala</td>
    <td>:</td>
    <td><input name="kode_gejala" type="text" size="5" maxlength="5" disabled value="<?php echo kdautogejala("gejala", "G");?>" />
    <input name="kode_gejala" type="hidden" value="<?php echo kdautogejala("gejala", "G");?>" /></td>
  </tr>
  
  <tr>
    <td class="subtitle">Nama Gejala</td>
    <td>:</td>
    <td><span id="sprytextarea31"><textarea name="nama_gejala" cols="30" rows="3"></textarea><br />
	<span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nama gejala masih kosong.</span></span></td>
  </tr>
  <tr>
   <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
 <tr>
    <td>Gejala Ini Muncul Setelah</td>
    <td>:</td>
	<td></td>
  </tr>
   <tr>
    <td colspan="3"><br></td>
    
  </tr>
  <tr>
    <td class="subtitle">Jawaban YA pada</td>
    <td>:</td>
    <td><select name="kode_induk_ya" id="kode_induk_ya">
                  <option value=''>- TIDAK ADA -</option>
				  <?php
				   
				$qryp = mysql_query("SELECT * FROM gejala");
				while($datap = mysql_fetch_array($qryp)){
					echo "<option value='$datap[kode_gejala]'>[$datap[kode_gejala]] $datap[nama_gejala]</option>";
				}
				?>
                </select>
				</td>
  </tr>
  <tr>
    <td class="subtitle">Jawaban TIDAK pada</td>
    <td>:</td>
    <td><select name="kode_induk_tidak" id="kode_induk_tidak">
				<option value=''>- TIDAK ADA -</option>
	<?php
				  
				$qryp = mysql_query("SELECT * FROM gejala");
				while($datap = mysql_fetch_array($qryp)){
					echo "<option value='$datap[kode_gejala]'>[$datap[kode_gejala]] $datap[nama_gejala]</option>";
				}
				?>
                </select>
				</td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan" />
	<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
      </td>
    </tr>
 
</table>
</form>
</div>
<?php
}
elseif ($act=="actambahgejala"){
	$kode_gejala = $_POST['kode_gejala'];
	$nama_gejala = $_POST['nama_gejala'];
	$kode_induk_ya = $_POST['kode_induk_ya'];
	$kode_induk_tidak = $_POST['kode_induk_tidak'];
	
	
	$cek = mysql_query("SELECT * FROM gejala");
	$jumlah = mysql_num_rows($cek);
	$id = $jumlah+1;
		mysql_query("INSERT INTO gejala  (kode_gejala, nama_gejala, kode_induk_ya, kode_induk_tidak) VALUES  ('$kode_gejala','$nama_gejala','$kode_induk_ya', '$kode_induk_tidak')");
		
		
		echo "<meta http-equiv=\"refresh\" content=\"0; url=?page=5&act=berhasil\">";
}
elseif($act=="carigejala"){
  $nama_gejala = $_POST['nama_gejala'];
  $cari=mysql_query("SELECT * FROM gejala WHERE nama_gejala='$nama_gejala'");
  $jumlah=mysql_num_rows($cari);
  if($jumlah<1){
  ?>
  <div class="text_area" align="justify">      
<br /><div class="title">Data Gejala Tidak Ditemukan</div>
<br />
  <form action="?page=5&act=carigejala" method="post">
<table align="center" cellpadding="5" cellspacing="0">
<tr>
    <td colspan="3">&nbsp;</td>
</tr>
  <tr>
    <td class="subtitle">Cari Data Nama Gejala</td>
    <td>:</td>
    <td><span id="sprytextfield21"><input name="nama_gejala" type="text" id="nama_gejala" size="25" />
	<br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Data yang akan dicari harus diisi</span></span></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td  align="right"><input type="submit" value="Cari" /></td>
    </tr>
</table>
</form>
</div>
  <?php
    echo "<center style=text-decoration:blink><br><br><b>Maaf, data <font color=red>'$nama_gejala'</font> tidak ditemukan dalam database.</b><br></center>";
	?><br><center><input type="button" name="batal" value="Kembali" onclick="javascript:history.go(-1)" /></center>
	<?php

  }else{
  ?>
<div class="text_area" align="justify">      
<br /><div class="title">Data Gejala Ditemukan</div>
<br />
<form action="?page=5&act=carigejala" method="post">
<table align="center" cellpadding="5" cellspacing="0">
   <tr>
     <td colspan="3">&nbsp;</td>
   </tr>
  <tr>
    <td class="subtitle">Cari Data Nama Gejala</td>
    <td>:</td>
    <td><span id="sprytextfield21"><input name="nama_gejala" type="text" id="nama_gejala" size="25" />
	<br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Data yang akan dicari harus diisi</span></span></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td  align="right"><input type="submit" value="Cari" /></td>
    </tr>
</table>
</form>
<br>
<br><table border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
  <tr bgcolor="#0066CC" align="center">
    <td><b><font color="white" size=3>Nama Gejala</font></b></td>
    <td colspan="2"><b><font color="white" size=3>Proses</font></b></td>
    </tr>
  <?php
$qry = mysql_query("SELECT * FROM gejala WHERE nama_gejala='$nama_gejala' ");
	while($data=mysql_fetch_array($qry)){

?>
   	<tr>
    <td><?php echo $data['nama_gejala'];?></td>
    <td align="center"><a href="?page=5t&amp;act=editgejala&amp;kode_gejala=<?php echo $data['kode_gejala'];?>"><img src="images/Modify.png" width="20" height="20" border="0" align="absmiddle" /> Ubah</a> </td>
    <td align="center"><a href="?page=5&act=hapusgejala&kode_gejala=<?php echo $data['kode_gejala'];?>" onclick="return confirm('Apakah anda yakin data gejala ini akan dihapus?')"><img src="images/Erase.png" width="20" height="20" border="0" align="absmiddle"> Hapus</a></td>
  </tr>
  <?php }?>
  
  </table>
  <br><center><input type="button" name="batal" value="Kembali" onclick="javascript:history.go(-1)" /></center>
  
</div>   
	</div>
    <?php
  }

}
?>

	
<script type="text/javascript">
<!--
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22");

var sprytextarea31 = new Spry.Widget.ValidationTextarea("sprytextarea31");

//-->
</script>
