<?php
	require_once('otentifikasi.php');
?>

<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<?php  include("koneksi_db.php");
include("paging.php");
$act=$_GET['act'];
if ($act=="tampilpenyakit"){?>
<div class="text_area" align="justify">      
<br />
<div class="title">Pengolahan Data Tipe Penyakit DM </div>
<br />
<form action="?page=4&act=caripenyakit" method="post">
<table align="center" cellpadding="5" cellspacing="0">

  <tr>
    <td><div class="subtitle">Cari Data Tipe Penyakit</div></td>
    <td><div class="subtitle">:</div></td>
    <td><input name="nama_penyakit2" type="text" id="nama_penyakit2" size="25" /></td>
    <td><span id="sprytextfield21">
      <input name="submit" type="submit" value="Cari" />
      <br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Data yang akan dicari harus dii</span></span></td>
  </tr>
</table>
</form>

<?php  $jmldata= mysql_num_rows(mysql_query("SELECT * FROM penyakit")); echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> record penyakit</center>";?>
<br>
<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#007FFF">
  <tr bgcolor="#0066CC" align="center">
    <td width="19"><div align="center"><b><font color="white" size=3>Id</font></b></div></td>
    <td width="690"><b><font color="white" size=3>Tipe Penyakit DM </font></b></td>
    <td colspan="3"><b><font color="white" size=3>Proses</font></b></td>
    </tr>
  <?php

	
$p = new Paging;
$batas = 10;
$posisi = $p->cariPosisi($batas);

$no=0;
$qlog = mysql_query("SELECT * FROM penyakit ORDER BY kode_penyakit ASC LIMIT $posisi,$batas");
while($data = mysql_fetch_array($qlog)){
$no++;
	?>
	<tr class="<?php if($no%2==1) echo "isitabelganjil"; else echo "isitabelgenap";?>">
    <td align="center"><?php echo $data['kode_penyakit'];?></td>
    <td><?php echo $data['nama_penyakit'];?></td>
    <td width="49" align="center"><a href="?page=4&amp;act=detailpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"><img src="images/Text preview.png" width="20" height="20" border="0" align="absmiddle" /> Detail</a></td>
    <td width="42" align="center"><a href="?page=4&amp;act=editpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"><img src="images/Modify.png" width="20" height="20" border="0" align="absmiddle" /> Ubah</a></td>
    <td width="51" align="center"><a href="?page=4&act=hapuspenyakit&kode_penyakit=<?php echo $data['kode_penyakit'];?>" onclick="return confirm('Apakah anda yakin data penyakit ini akan dihapus?')"><img src="images/Erase.png" width="20" height="20" border="0" align="absmiddle"> Hapus</a></td>
  </tr>
  <?php }?>
  <tr>
	<td colspan="5" align="center"><a href="?page=4&act=tambahpenyakit"><img src="images/95.png" width="24" height="24"  border="0" align="absmiddle"> Tambah</a></td>
    </tr>
  </table>
  <?php
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM penyakit"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);
echo "<center>$linkHalaman</center>";
?>
  
  
</div>   
	</div>
<?php
}


if ($act=="berhasil"){?>
<div class="text_area" align="justify">      
<br /><div class="title">Data Tipe Penyakit DM Berhasil Disimpan</div>
<br />
<form action="?page=4&act=caripenyakit" method="post">
<table align="center" cellpadding="5" cellspacing="0">

  <tr>
    <td><div class="subtitle">Cari Data Tipe Penyakit</div></td>
    <td><div class="subtitle">:</div></td>
    <td><input name="nama_penyakit2" type="text" id="nama_penyakit2" size="25" /></td>
    <td><span id="sprytextfield21">
      <input name="submit" type="submit" value="Cari" />
      <br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Data yang akan dicari harus dii</span></span></td>
  </tr>
</table>
</form>

<?php  $jmldata= mysql_num_rows(mysql_query("SELECT * FROM penyakit")); echo "<center style=text-decoration:blink>Terdapat <b>$jmldata</b> record penyakit</center>";?>
<br>
<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
  <tr bgcolor="#0066CC" align="center">
    <td width="19"><b><font color="white" size=3>Id</font></b></td>
    <td width="690"><b><font color="white" size=3>Tipe Penyakit DM </font></b></td>
    <td colspan="3"><b><font color="white" size=3>Proses</font></b></td>
    </tr>
  <?php

	
$p = new Paging;
$batas = 10;
$posisi = $p->cariPosisi($batas);

$no=0;
$qlog = mysql_query("SELECT * FROM penyakit ORDER BY kode_penyakit ASC LIMIT $posisi,$batas");
while($data = mysql_fetch_array($qlog)){
$no++;
	?>
	<tr class="<?php if($no%2==1) echo "isitabelganjil"; else echo "isitabelgenap";?>">
    <td align="center"><?php echo $data['kode_penyakit'];?></td>
    <td><?php echo $data['nama_penyakit'];?></td>
    <td width="49" align="center"><a href="?page=4&amp;act=detailpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"><img src="images/Text preview.png" width="20" height="20" border="0" align="absmiddle" /></a><a href="?page=4&amp;act=detailpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"> Detail</a><a href="?page=4&amp;act=detailpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"> </a></td>
    <td width="42" align="center"><a href="?page=4&amp;act=editpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"><img src="images/Modify.png" width="20" height="20" border="0" align="absmiddle" /> </a><a href="?page=4&amp;act=editpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>">Ubah</a></td>
    <td width="51" align="center"><a href="?page=4&act=editpenyakit&kode_penyakit=<?php echo $data['kode_penyakit'];?>"></a><a href="?page=4&amp;act=hapuspenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>" onclick="return confirm('Apakah anda yakin data penyakit ini akan dihapus?')"><img src="images/Erase.png" width="20" height="20" border="0" align="absmiddle" /></a> <a href="?page=4&act=hapuspenyakit&kode_penyakit=<?php echo $data['kode_penyakit'];?>" onclick="return confirm('Apakah anda yakin data penyakit ini akan dihapus?')">Hapus</a></td>
  </tr>
  <?php }?>
  <tr>
	<td colspan="5" align="center"><a href="?page=4&act=tambahpenyakit"><img src="images/95.png" width="24" height="24"  border="0" align="absmiddle" /> Tambah</a></td>
    </tr>
  </table>
  <?php
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM penyakit"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET['hal'], $jmlhalaman);
echo "<center>$linkHalaman</center>";
?>
  
  
</div>   
	</div>
<?php
}



elseif ($act=="editpenyakit"){
	$kode_penyakit = $_GET['kode_penyakit'];
	$qry = mysql_query("SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
	$data = mysql_fetch_array($qry);
	
?>
<br>
<div class="text_area" align="justify">
<div class="title">Ubah Data Tipe Penyakit DM</div>
<br>
<form action="?page=4&act=aceditpenyakit" method="post">
<table width="100%">
 <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td class="subtitle">Id</td>
    <td class="subtitle">:</td>
    <td><input name="tkode" type="text" size="5" maxlength="5" disabled value="<?php echo $kode_penyakit;?>" />
    <input name="kode_penyakit" type="hidden" value="<?php echo $kode_penyakit;?>" /></td>
  </tr>
  <tr>
    <td class="subtitle">Nama Penyakit</td>
    <td class="subtitle">:</td>
    <td><span id="sprytextfield22"><input name="nama_penyakit" type="text" value="<?php echo $data['nama_penyakit'];?>" size="30" />
	<br />
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nama penyakit harus diisi</span></span></td>
  </tr>
  <tr>
    <td class="subtitle">Definisi</td>
    <td class="subtitle" align="center">:</td>
    <td><span id="sprytextarea1"><textarea name="definisi" cols="60" rows="3"><?php echo $data['definisi'];?></textarea>
	<br><span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Definisi penyakit masih kosong.</span></span></td>
  </tr>
  <tr>
    <td class="subtitle">Pengobatan</td>
    <td class="subtitle" align="center">:</td>
    <td><span id="sprytextarea2"><textarea name="pengobatan" cols="60" rows="3"><?php echo $data['pengobatan'];?></textarea>
	<br><span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Pengobatan masih kosong.</span></span></td>
</td>
  </tr>
  <tr>
    <td class="subtitle">Pencegahan</td>
    <td class="subtitle" align="center">:</td>
    <td><span id="sprytextarea3"><textarea name="pencegahan" cols="60" rows="3"><?php echo $data['pencegahan'];?></textarea>
	<br><span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Pencegahan masih kosong.</span></span></td>
</td>
  </tr>
   <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data penyakit ini akan disimpan?')"/>
	<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" /></td>
    </tr>
</table>
</form>
</div>
<?php
}
elseif ($act=="aceditpenyakit"){
	$kode_penyakit = $_POST['kode_penyakit'];
	$nama_penyakit = $_POST['nama_penyakit'];
	$definisi = $_POST['definisi'];
	$pengobatan = $_POST['pengobatan'];
	$pencegahan = $_POST['pencegahan'];

	mysql_query("UPDATE penyakit SET nama_penyakit='$nama_penyakit', definisi='$definisi', pengobatan='$pengobatan' , pencegahan='$pencegahan' WHERE kode_penyakit='$kode_penyakit'");
	echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=4&act=berhasil\">";
}
elseif ($act=="detailpenyakit"){
	$kode_penyakit = $_GET['kode_penyakit'];
	$qry = mysql_query("SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
	$data = mysql_fetch_array($qry);
?>
<br>
<div class="text_area" align="justify">
<div class="title">Detail Tipe Penyakit DM <?php echo $data['nama_penyakit'];?></div>
<br>
<table width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td width="14%" valign="top" class="subtitle">Id Penyakit</td>
    <td width="1%" valign="top" >:</td>
    <td width="85%" valign="top"><?php echo $kode_penyakit;?></td>
  </tr>
  <tr>
    <td class="subtitle" valign="top">Jenis DM </td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['nama_penyakit'];?></td>
  </tr>
  <tr>
    <td class="subtitle" valign="top">Gejala</td>
    <td valign="top">:</td>
    <td valign="top">    	<?php
		$sql_gejala = "SELECT gejala.* FROM gejala,relasi_penyakit_gejala
						WHERE gejala.kode_gejala=relasi_penyakit_gejala.kode_gejala
						AND relasi_penyakit_gejala.kode_penyakit='$data[kode_penyakit]'";
		$qry_gejala = mysql_query($sql_gejala);
			$i=0;
			while($hsl_gejala=mysql_fetch_array($qry_gejala)){
				$i++;
				echo "$i. $hsl_gejala[nama_gejala] <br>";
			} 
			?>
</td>
  </tr>
  <tr>
    <td class="subtitle" valign="top">Definisi</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['definisi'];?></td>
  </tr>
  <tr>
  <tr>
    <td class="subtitle" valign="top">Pengobatan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['pengobatan'];?></td>
  </tr>
  <tr>
    <td class="subtitle" valign="top">Pencegahan</td>
    <td valign="top">:</td>
    <td valign="top"><?php echo $data['pencegahan'];?></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
  <tr>
    <td colspan="3" align="center"><input type="button" name="kembali" value="Kembali" onclick="javascript:history.go(-1)" /></td>
    </tr>
</table>
</div>
<?php }

elseif ($act=="hapuspenyakit"){
  $kode_penyakit = $_GET['kode_penyakit'];
  if(mysql_num_rows(mysql_query("SELECT * FROM relasi_penyakit_gejala WHERE kode_penyakit='$kode_penyakit'")) < 1){	
	if ($kode_penyakit != ""){
		mysql_query("DELETE FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
		echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=4&act=berhasil\">";
	}
	else {
		echo "Data penyakit belum dipilih.";
	}
  }
  else{
	$qry = mysql_query("SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");
	$data = mysql_fetch_array($qry);
	echo "<center><br><br><b>Maaf, penyakit <font color=red> $data[nama_penyakit]</font> tidak bisa dihapus karena sedang digunakan atau berelasi dengan suatu gejala.</b></center>";
  ?><br><center><input type="button" name="batal" value="Kembali" onclick="javascript:history.go(-1)" /></center>
	<?php
  }
}
if ($act=="tambahpenyakit"){
?>

<div class="text_area" align="justify">      
<br />
<div class="title">Tambah Data Tipe Penyakit DM </div>
<br />
<form action="?page=4&act=actambahpenyakit" method="post">
<table>
  <tr>
    <td>Id Penyakit</td>
    <td valign="top">:</td>
    <td><input name="kode_penyakit" type="text" size="5" maxlength="5" disabled value="<?php echo kdautopenyakit("penyakit", "P");?>" />
    <input name="kode_penyakit" type="hidden" value="<?php echo kdautopenyakit("penyakit", "P");?>" /></td>
  </tr>
  
  <tr>
    <td>Tipe Penyakit DM</td>
    <td valign="top">:</td>
    <td><span id="sprytextarea1"><textarea name="nama_penyakit" cols="60" rows="3"></textarea>
    <br />
	<span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nama penyakit masih kosong.</span></span></td>
  </tr>
  <tr>
    <td>Definisi</td>
    <td valign="top">:</td>
    <td><span id="sprytextarea2"><textarea name="definisi" cols="60" rows="3"></textarea>
    <br />
	<span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Definisi penyakit masih kosong.</span></span></td>
  </tr>
  <tr>
    <td>Pengobatan</td>
    <td valign="top">:</td>
    <td><span id="sprytextarea3"><textarea name="pengobatan" cols="60" rows="3"></textarea>
    <br />
	<span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Pengobatan  masih kosong.</span></span></td>
  </tr>
  <tr>
    <td>Pencegahan</td>
    <td valign="top">:</td>
    <td><span id="sprytextarea4"><textarea name="pencegahan" cols="60" rows="3"></textarea>
    <br />
	<span class="textareaRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Pencegahan masih kosong.</span></span></td>
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
elseif ($act=="actambahpenyakit"){
	$kode_penyakit = $_POST['kode_penyakit'];
	$nama_penyakit = $_POST['nama_penyakit'];
	$definisi = $_POST['definisi'];
	$pengobatan = $_POST['pengobatan'];
	$pencegahan = $_POST['pencegahan'];
	$cek = mysql_query("SELECT * FROM penyakit");
	$jumlah = mysql_num_rows($cek);
	$id = $jumlah+1;
		mysql_query("INSERT INTO penyakit  (kode_penyakit, nama_penyakit, definisi, pengobatan, pencegahan) VALUES  ('$kode_penyakit','$nama_penyakit','$definisi','$pengobatan','$pencegahan')");
		echo "<meta http-equiv=\"refresh\" content=\"0; url=?page=4&act=berhasil\">";
}
elseif($act=="caripenyakit"){
  @$nama_penyakit = $_POST['nama_penyakit'];
  $cari=mysql_query("SELECT * FROM penyakit WHERE nama_penyakit='$nama_penyakit'");
  $jumlah=mysql_num_rows($cari);
  if($jumlah<1){
  ?>
  <div class="text_area" align="justify">      
<br />
<div class="title">Data Tipe Penyakit DM Tidak Ditemukan</div>
<br />
  <form action="?page=4&act=caripenyakit" method="post">
<table align="center" cellpadding="5" cellspacing="0">
<tr>
    <td colspan="3">&nbsp;</td>
</tr>
  <tr>
    <td class="subtitle">Cari Data Tipe Penyakit</td>
    <td class="subtitle">:</td>
    <td><span id="sprytextfield21"><input name="nama_penyakit" type="text" id="nama_penyakit" size="25" />
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
    echo "<center style=text-decoration:blink><br><br><b>Maaf, data <font color=red>'$nama_penyakit'</font> tidak ditemukan dalam database.</b></center>";
	?><br><center><input type="button" name="batal" value="Kembali" onclick="javascript:history.go(-1)" /></center>
	<?php

  }else{
  ?>
<div class="text_area" align="justify">      
<br /><div class="title">Data Tipe Penyakit DM Ditemukan</div>
<br />
<form action="?page=4&act=caripenyakit" method="post">
<table align="center" cellpadding="5" cellspacing="0">
<tr>
    <td colspan="3">&nbsp;</td>
</tr>
  <tr>
    <td class="subtitle">Cari Data Tipe Penyakit</td>
    <td valign="top">:</td>
    <td><span id="sprytextfield21"><input name="nama_penyakit" type="text" id="nama_penyakit" size="25" />
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
<br>
</form>
<table border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#666666">
  <tr bgcolor="#0066CC" align="center">
    <td width="340"><b><font color="white" size=3>Tipe  Penyakit DM </font></b></td>
    <td colspan="3"><b><font color="white" size=3>Proses</font></b></td>
    </tr>
  <?php

	
	$qry = mysql_query("SELECT * FROM penyakit WHERE nama_penyakit='$nama_penyakit' ");
	while($data=mysql_fetch_array($qry)){
		
	?>
	<tr>
    <td><?php echo $data['nama_penyakit'];?></td>
    <td width="49" align="center"><a href="?page=4&amp;act=detailpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"><img src="images/Text preview.png" width="20" height="20" border="0" align="absmiddle" /></a><a href="?page=4&amp;act=detailpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"> Detail</a></td>
    <td width="42" align="center"><a href="?page=4&amp;act=editpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"><img src="images/Modify.png" width="20" height="20" border="0" align="absmiddle" /></a><a href="?page=4&amp;act=editpenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>"> Ubah</a></td>
    <td width="51" align="center"><a href="?page=4&act=hapuspenyakit&kode_penyakit=<?php echo $data['kode_penyakit'];?>" onclick="return confirm('Apakah anda yakin data penyakit ini akan dihapus?')"> </a><a href="?page=4&amp;act=hapuspenyakit&amp;kode_penyakit=<?php echo $data['kode_penyakit'];?>" onclick="return confirm('Apakah anda yakin data penyakit ini akan dihapus?')"><img src="images/Erase.png" width="20" height="20" border="0" align="absmiddle" /></a> <a href="?page=4&act=hapuspenyakit&kode_penyakit=<?php echo $data['kode_penyakit'];?>" onclick="return confirm('Apakah anda yakin data penyakit ini akan dihapus?')">Hapus</a></td>
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
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21");
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22");

var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4");
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5");

//-->
</script>