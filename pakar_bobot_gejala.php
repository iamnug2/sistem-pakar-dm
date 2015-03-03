<?php
	include('otentifikasi.php');
?>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<?php  
include("koneksi_db.php");
$act = $_GET['act'];
if($act=="0"){
@$kode_penyakit = $_GET['kode_penyakit'];
?>

<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<div class="text_area" align="justify">
      
<br /><div class="title">Pengolahan Bobot Gejala</div>

<form method="post" action="?page=8&act=simpanbobot">
<table cellpadding="5" width="100%">
<tr>
    <td colspan="3">&nbsp;</td>
</tr>
  <tr>
    <td width="60%" class="subtitle">Tipe Penyakit DM</td>
  </tr>
  <tr>
    <td>
      <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
        <option value="">[ Tipe Penyakit DM ]</option>
        <?php
				$qryp = mysql_query("SELECT * FROM penyakit");
				while($datap = mysql_fetch_array($qryp)){
					if($datap['kode_penyakit']==$kode_penyakit){
						$cek = "selected";
					}
					else{
						$cek = "";
					}
					echo "<option value='?page=8&act=0&kode_penyakit=$datap[kode_penyakit]' $cek>$datap[nama_penyakit]</option>";
				}
				?>
      </select>
      <input type="hidden" name="kode_penyakit" value="<?php echo $kode_penyakit;?>" /></td>
    </tr>
	<br>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td class="subtitle"><div align="center">Daftar Gejala</div></td>
	<td width="1%" class="subtitle"></td>
	<td width="39%" class="subtitle">Bobot (%)</td>
  </tr>
	<?php
	
   $qry = mysql_query("SELECT * FROM relasi_penyakit_gejala,gejala where relasi_penyakit_gejala.kode_penyakit='$kode_penyakit' AND relasi_penyakit_gejala.kode_gejala=gejala.kode_gejala");
	$a = 0;
	while ($data=mysql_fetch_array($qry)){
		++$a;
	?>
  <tr >
    <td >
      <div align="left">
        <input type="hidden" name="kode_gejala[]" value="<?php echo $data['kode_gejala']?>" />
        <?php echo "[".$data['kode_gejala']."]&nbsp;".$data['nama_gejala'];?></div></td>
	<td>:</td>
	<td><span id="sprytextfield<?php echo $a; ?>">
      <input name="bobot[]" type="text" size="2" maxlength="3" value="<?php echo $data['bobot']; ?>"/>
      <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Bobot harus diisi.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nilai harus berupa angka.</span>
	  <span class="textfieldMaxCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Maksimal 3 angka.</span>
	  <span class="textfieldMinValueMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 1 persen.</span>
	  <span class="textfieldMaxValueMsg"><img src="images/cancel_f2.png"width="10" height="10"> Maksimal 100 persen.</span>
</span></td>
    </tr>
  <?php }?>
  <tr><td></td></tr>
  <tr>
    <td colspan="3" class="subtitle">Total Jumlah Bobot Harus 100%</td>
    
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="judul"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data bobot gejala ini akan disimpan?')"/>&nbsp;<input type="reset" value="Normalkan" /></td>
    </tr>
</table>
</form>
</div>
<?php
}


if($act=="berhasil"){
@$kode_penyakit = $_GET['kode_penyakit'];
?>

<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<div class="text_area" align="justify">
      
<br /><div class="title">Bobot Gejala Berhasil Disimpan</div>

<form method="post" action="?page=8&act=simpanbobot">
<table width="100%" align="center" cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td class="subtitle">Nama Penyakit</td>
  </tr>
  <tr>
    <td>
      <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
        <option value="">[ Daftar Penyakit ]</option>
        <?php
				$qryp = mysql_query("SELECT * FROM penyakit");
				while($datap = mysql_fetch_array($qryp)){
					if($datap['kode_penyakit']==$kode_penyakit){
						$cek = "selected";
					}
					else{
						$cek = "";
					}
					echo "<option value='?page=8&act=0&kode_penyakit=$datap[kode_penyakit]' $cek>$datap[nama_penyakit]</option>";
				}
				?>
      </select>
      <input type="hidden" name="kode_penyakit" value="<?php echo $kode_penyakit;?>" /></td>
    </tr>
	<br>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td class="subtitle">Daftar Gejala</td>
	<td class="subtitle"></td>
	<td class="subtitle">Bobot (%)</td>
  </tr>
	<?php
	
   $qry = mysql_query("SELECT * FROM relasi_penyakit_gejala,gejala where relasi_penyakit_gejala.kode_penyakit='$kode_penyakit' AND relasi_penyakit_gejala.kode_gejala=gejala.kode_gejala");
	while ($data=mysql_fetch_array($qry)){
		
	?>
  <tr >
    <td ><input type="hidden" name="kode_gejala[]" value="<?php echo $data['kode_gejala']?>" /><?php echo "[".$data['kode_gejala']."]&nbsp;".$data['nama_gejala'];?></td>
	<td>:</td>
	<td><span id="sprytextfield5">
      <input name="bobot[]" type="text" size="2" maxlength="3" value="<?php echo $data['bobot']; ?>"/>
      <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Bobot harus diisi.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nilai harus berupa angka.</span>
	  <span class="textfieldMaxCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Maksimal 3 angka.</span>
	  <span class="textfieldMinValueMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 1 persen.</span>
	  <span class="textfieldMaxValueMsg"><img src="images/cancel_f2.png"width="10" height="10"> Maksimal 100 persen.</span>
</span></td>
    </tr>
  <?php }?>
  <tr><td></td></tr>
  <tr>
    <td colspan="3" class="subtitle">Total Jumlah Bobot Harus 100%</td>
    
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td align="center" class="judul"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data bobot gejala ini akan disimpan?')"/>&nbsp;<input type="reset" value="Normalkan" /></td>
    </tr>
</table>
</form>
</div>
<?php
}


if($act=="gagal"){
$kode_penyakit = $_GET['kode_penyakit'];
?>

<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<div class="text_area" align="justify">
      
<br /><div class="title">Bobot Gejala Gagal Disimpan</div>

<form method="post" action="?page=8&act=simpanbobot">
<table width="100%" align="center" cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td class="subtitle">Nama Penyakit</td>
  </tr>
  <tr>
    <td>
      <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
        <option value="">[ Daftar Penyakit ]</option>
        <?php
				$qryp = mysql_query("SELECT * FROM penyakit");
				while($datap = mysql_fetch_array($qryp)){
					if($datap['kode_penyakit']==$kode_penyakit){
						$cek = "selected";
					}
					else{
						$cek = "";
					}
					echo "<option value='?page=8&act=gagal&kode_penyakit=$datap[kode_penyakit]' $cek>$datap[nama_penyakit]</option>";
				}
				?>
      </select>
      <input type="hidden" name="kode_penyakit" value="<?php echo $kode_penyakit;?>" /></td>
    </tr>
	<br>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td class="subtitle">Daftar Gejala</td>
	<td class="subtitle"></td>
	<td class="subtitle">Bobot (%)</td>
  </tr>
	<?php
	$a=0;
   $qry = mysql_query("SELECT * FROM relasi_penyakit_gejala,gejala where relasi_penyakit_gejala.kode_penyakit='$kode_penyakit' AND relasi_penyakit_gejala.kode_gejala=gejala.kode_gejala");
	while ($data=mysql_fetch_array($qry)){
		++$a;
	?>
  <tr >
    <td ><input type="hidden" name="kode_gejala[]" value="<?php echo $data['kode_gejala']?>" /><?php echo "[".$data['kode_gejala']."]&nbsp;".$data['nama_gejala'];?></td>
	<td>:</td>
	<td><span id="sprytextfield<?php echo $a; ?>">
      <input name="bobot[]" type="text" size="2" maxlength="3" value="<?php echo $data['bobot']; ?>"/>
      <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Bobot harus diisi.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nilai harus berupa angka.</span>
	  <span class="textfieldMaxCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Maksimal 3 angka.</span>
	  <span class="textfieldMinValueMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 1 persen.</span>
	  <span class="textfieldMaxValueMsg"><img src="images/cancel_f2.png"width="10" height="10"> Maksimal 100 persen.</span>
</span></td>
    </tr>
  <?php }?>
  <tr><td></td></tr>
  <tr>
    <td colspan="3" class="subtitle"><font color="red">Total Jumlah Bobot Harus 100%</font></td>
    
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td align="center" class="judul"><input type="submit" name="simpan" value="Simpan" onclick="return confirm('Apakah anda yakin data bobot gejala ini akan disimpan?')"/>&nbsp;<input type="reset" value="Normalkan" /></td>
    </tr>
</table>
</form>
</div>
<?php
}


elseif($act=="simpanbobot"){
	$kode_penyakit = $_POST['kode_penyakit'];
	$bobot = $_POST['bobot'];
	$kode_gejala = $_POST['kode_gejala'];
	
	
	
				
	$jum = count($kode_gejala);
	$total = 0;
	for($i = 0; $i < $jum; ++$i){
			$total=$total + $bobot[$i];
			}
	
	if ($total==100){
	
		for($i = 0; $i < $jum; ++$i){
			$qryr = mysql_query("UPDATE  relasi_penyakit_gejala SET bobot='$bobot[$i]' WHERE kode_penyakit='$kode_penyakit' AND kode_gejala='$kode_gejala[$i]'");
			echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=8&act=berhasil\">";
			}
		}else{
		echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=8&kode_penyakit=$kode_penyakit&act=gagal\">";;
		}
				
	
}
?>


<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11","integer",{minValue:1,maxValue:100, maxChars:3, validateOn:["blur"]});

//-->
</script>
	
