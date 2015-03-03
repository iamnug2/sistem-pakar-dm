<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextArea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextArea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />


<style type="text/css">
<!--
.style2 {
	font-size: xx-small;
	font-style: italic;
	color: #333333;
}
-->
</style>
<?php
	require_once('otentifikasi.php');
	include("koneksi_db.php");
	$act=$_GET['act'];
	$username = $_GET['u'];
	if ($act=="tampilprofil"){
?>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div class="text-area-user" align="justify">      
<br /><div class="title">Profil  <?php echo $username;?></div>
<?php

    
	$qry = mysql_query("SELECT * FROM data_user WHERE username='$username'");
	$data = mysql_fetch_array($qry);
	
?>
<form action="?page=9&act=ubahprofil&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table align="left" cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    <tr>
    <td colspan="3"><div class="subtitle">Biodata User (Pasien) </div></td>
    
  </tr>
  <td width="16%"></tr>
  <tr>
    <td valign="top">Nama  </td>
    <td width="2%" valign="top">:</td>
    <td width="82%" valign="bottom" ><?php echo $data['nama_user'];?>  </tr>
  <tr>
    <td valign="top">Usia</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php echo $data['usia'];?> tahun
  </tr>
  <tr>
    <td valign="top">Jenis Kelamin</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php if ($data['jenis_kelamin']== 'L'){
	echo 'Laki-Laki';
	}else{
	echo 'Perempuan';
	};?>
  </tr>
   <tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php echo $data['alamat'];?>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  
	<tr>
    <td colspan="3" align="center"><input type="submit" name="Ubah" value="Ubah Profil"/></td>
    </tr>  

</table>
  
  		</div>   

		
<?php
}
elseif ($act=="ubahprofil"){
	
	$username = $_GET['u'];
	$qry = mysql_query("SELECT * FROM data_user WHERE username='$username'");
	$data = mysql_fetch_array($qry);

	
?>
<br>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="text-area-user" align="justify">
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextArea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextArea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<div class="title">Ubah Profil <?php echo $username;?></div>
<br>
<form action="?page=9&act=acubahprofil&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table width="100%">
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  
  <tr>
    <td colspan="3"><div class="subtitle">Biodata User (Pasien)</div></td>
    
  </tr>
  <tr>
    <td>Nama </td>
    <td>:</td>
    <td><span id="sprytextfield491">
      <input name="nama_user" type="text" size="30" maxlength="30" value="<?php echo $data['nama_user'];?>">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nama Anak harus diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Panjang minimal 2 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span></span></td>
  </tr>
  <tr>
    <td valign="top">Usia</td>
    <td valign="top">:</td>
    <td valign="bottom">
	<span id="validsel">
	<select name="usia">
      <option value="10" <?php if ($data['usia']== '10') echo 'selected';?>>10 Tahun</option>
	  <option value="11" <?php if ($data['usia']== '11') echo 'selected';?>>11 Tahun</option>
	  <option value="12" <?php if ($data['usia']== '12') echo 'selected';?>>12 Tahun</option>
	  <option value="13" <?php if ($data['usia']== '13') echo 'selected';?>>13 Tahun</option>
      <option value="14" <?php if ($data['usia']== '14') echo 'selected';?>>14 Tahun</option>
      <option value="15" <?php if ($data['usia']== '15') echo 'selected';?>>15 Tahun</option>
      <option value="16" <?php if ($data['usia']== '16') echo 'selected';?>>16 Tahun </option>
      <option value="17" <?php if ($data['usia']== '17') echo 'selected';?>>17 Tahun </option>
      <option value="18" <?php if ($data['usia']== '18') echo 'selected';?>>18 Tahun</option>
      <option value="19" <?php if ($data['usia']== '19') echo 'selected';?>>19 tahun </option>
      <option value="20" <?php if ($data['usia']== '20') echo 'selected';?>>20 Tahun</option>
      <option value="21" <?php if ($data['usia']== '21') echo 'selected';?>>21 Tahun</option>
      <option value="22" <?php if ($data['usia']== '22') echo 'selected';?>>22 Tahun</option>
      <option value="23" <?php if ($data['usia']== '23') echo 'selected';?>>23 Tahun</option>
      <option value="24" <?php if ($data['usia']== '24') echo 'selected';?>>24 Tahun </option>
      <option value="25" <?php if ($data['usia']== '25') echo 'selected';?>>25 Tahun</option>
      <option value="26" <?php if ($data['usia']== '26') echo 'selected';?>>26 Tahun</option>
      <option value="27" <?php if ($data['usia']== '27') echo 'selected';?>>27 Tahun </option>
      <option value="28" <?php if ($data['usia']== '28') echo 'selected';?>>28 Tahun</option>
      <option value="29" <?php if ($data['usia']== '29') echo 'selected';?>>29 Tahun </option>
      <option value="30" <?php if ($data['usia']== '30') echo 'selected';?>>30 Tahun</option>
      <option value="31" <?php if ($data['usia']== '31') echo 'selected';?>>31 Tahun </option>
      <option value="32" <?php if ($data['usia']== '32') echo 'selected';?>>32 Tahun </option>
      <option value="33" <?php if ($data['usia']== '33') echo 'selected';?>>33 Tahun</option>
      <option value="34" <?php if ($data['usia']== '34') echo 'selected';?>>34 Tahun</option>
      <option value="35" <?php if ($data['usia']== '35') echo 'selected';?>>35 Tahun</option>
      <option value="36" <?php if ($data['usia']== '36') echo 'selected';?>>36 Tahun </option>
      <option value="37" <?php if ($data['usia']== '37') echo 'selected';?>>37 Tahun </option>
      <option value="38" <?php if ($data['usia']== '38') echo 'selected';?>>38 Tahun</option>
      <option value="39" <?php if ($data['usia']== '39') echo 'selected';?>>39 Tahun </option>
      <option value="40" <?php if ($data['usia']== '40') echo 'selected';?>>40 Tahun </option>
      <option value="41" <?php if ($data['usia']== '41') echo 'selected';?>>41 Tahun </option>
      <option value="42" <?php if ($data['usia']== '42') echo 'selected';?>>42 Tahun</option>
      <option value="43" <?php if ($data['usia']== '43') echo 'selected';?>>43 Tahun</option>
      <option value="44" <?php if ($data['usia']== '44') echo 'selected';?>>44 Tahun</option>
      <option value="45" <?php if ($data['usia']== '45') echo 'selected';?>>45 Tahun</option>
      <option value="46" <?php if ($data['usia']== '46') echo 'selected';?>>46 Tahun</option>
      <option value="47" <?php if ($data['usia']== '47') echo 'selected';?>>47 Tahun</option>
      <option value="48" <?php if ($data['usia']== '48') echo 'selected';?>>48 Tahun</option>
      <option value="49" <?php if ($data['usia']== '49') echo 'selected';?>>49 Tahun </option>
      <option value="50" <?php if ($data['usia']== '50') echo 'selected';?>>50 Tahun </option>
      <option value="51" <?php if ($data['usia']== '51') echo 'selected';?>>51 Tahun</option>
      <option value="52" <?php if ($data['usia']== '52') echo 'selected';?>>52 Tahun</option>
      <option value="53" <?php if ($data['usia']== '53') echo 'selected';?>>53 Tahun</option>
      <option value="54" <?php if ($data['usia']== '54') echo 'selected';?>>54 Tahun</option>
      <option value="55" <?php if ($data['usia']== '55') echo 'selected';?>>55 Tahun</option>
      <option value="56" <?php if ($data['usia']== '56') echo 'selected';?>>56 Tahun </option>
      <option value="57" <?php if ($data['usia']== '57') echo 'selected';?>>57 Tahun</option>
      <option value="58" <?php if ($data['usia']== '58') echo 'selected';?>>58 Tahun </option>
      <option value="59" <?php if ($data['usia']== '59') echo 'selected';?>>59 Tahun</option>
      <option value="60" <?php if ($data['usia']== '60') echo 'selected';?>>60 Tahun</option>
      <option value="61" <?php if ($data['usia']== '61') echo 'selected';?>>61 Tahun</option>
      <option value="62" <?php if ($data['usia']== '62') echo 'selected';?>>62 Tahun</option>
      <option value="63" <?php if ($data['usia']== '63') echo 'selected';?>>63 Tahun </option>
      <option value="64" <?php if ($data['usia']== '64') echo 'selected';?>>64 Tahun</option>
      <option value="65" <?php if ($data['usia']== '65') echo 'selected';?>>65 Tahun</option>
      <option value="66" <?php if ($data['usia']== '66') echo 'selected';?>>66 Tahun</option>
      <option value="67" <?php if ($data['usia']== '67') echo 'selected';?>>67 Tahun</option>
      <option value="68" <?php if ($data['usia']== '68') echo 'selected';?>>68 Tahun</option>
      <option value="69" <?php if ($data['usia']== '69') echo 'selected';?>>69 Tahun </option>
      <option value="70" <?php if ($data['usia']== '70') echo 'selected';?>>70 Tahun</option>
	
	</select>
	<span class="selectRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Usia harus dipilih.</span></span>
    </td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input name="jenis_kelamin" type="radio" value="L" <?php if ($data['jenis_kelamin']== 'L'){
	echo 'checked';
	}?>> Laki-laki 
                <input name="jenis_kelamin" type="radio" value="P" <?php if ($data['jenis_kelamin']== 'P'){
	echo 'checked';
	}
	?>> Perempuan</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><span id="sprytextfield69">
      <input name="alamat" type="text" size="50" maxlength="100" value="<?php echo $data['alamat'];?>"/>
      <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Alamat harus diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 4 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span>
	  </span></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  
  
  <tr>
	<td>Masukan Angka Berikut</td>
	<td>:</td>
	<td><span id="sprytextfield779">
	<img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12"/>
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMaxCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span></span></td>
  
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="SIMPAN" />
	<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
	</td>
    </tr>
</table>
</form>
</div>

<script type="text/javascript">
<!--

var sprypassword9 = new Spry.Widget.ValidationPassword("sprypassword9",{minChars:6, validateOn:["blur"]});

var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39","none", {minChars:5, validateOn:["blur"]});
var sprytextfield491 = new Spry.Widget.ValidationTextField("sprytextfield491","nama", {minChars:2, validateOn:["blur"]});
var sprytextfield59 = new Spry.Widget.ValidationTextField("sprytextfield59","integer",{minValue:1,maxValue:12, maxChars:2, validateOn:["blur"]});
var sprytextfield69 = new Spry.Widget.ValidationTextField("sprytextfield69","alamat", {minChars:4, validateOn:["blur"]});
var sprytextfield779 = new Spry.Widget.ValidationTextField("sprytextfield779","none", {minChars:4,maxChars:4, validateOn:["blur"]});
var sprytextfield889 = new Spry.Widget.ValidationTextField("sprytextfield889","nama", {validateOn:["blur"]});
var validsel = new Spry.Widget.ValidationSelect("validsel", {validateOn:["blur"]});



//-->
</script>


<?php
}
elseif ($act=="acubahprofil"){
	
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	$username = $_GET['u'];
		
	//Sanitize the POST values
	
	$nama_user = clean($_POST['nama_user']);
	$usia = clean($_POST['usia']);
	$jenis_kelamin = clean($_POST['jenis_kelamin']);
	$alamat = clean($_POST['alamat']);
	
	
	
	
	

	
if( isset($_POST['tombol'])) {
   if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code'])) ) {
   
    $cek = mysql_num_rows(mysql_query("SELECT * FROM data_user WHERE username='$username'"));
	
	if ($cek>0){
	   $qry= mysql_query("UPDATE data_user SET nama_user='$nama_user', usia='$usia', jenis_kelamin='$jenis_kelamin', alamat='$alamat'
	    WHERE username='$username'");
	   
	   echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=9&current9=curren&act=berhasil&u=$username\">";
	}else{
	echo  "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=9&current9=curren&act=gagal&u=$username\">";
	}
	
	
	}else{
	echo "<meta http-equiv=\"refresh\" content=\"0; url=user_index.php?page=9&current9=curren&act=gagal2&u=$username\">";
	}
}
	
}

elseif ($act=="berhasil"){
?>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div class="text-area-user" align="justify">      
<br /><div class="title">Profil  <?php echo $username;?> Berhasil Disimpan</div>
<?php

    
	$qry = mysql_query("SELECT * FROM data_user WHERE username='$username'");
	$data = mysql_fetch_array($qry);
	
?>
<form action="?page=9&act=ubahprofil&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table align="left" cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    <tr>
    <td colspan="3"><div class="subtitle">Biodata User (Pasien)</div></td>
    
  </tr>
  <td width="15%"></tr>
  <tr>
    <td valign="top">Nama </td>
    <td width="2%" valign="top">:</td>
    <td width="83%" valign="bottom" ><?php echo $data['nama_user'];?>  </tr>
  <tr>
    <td valign="top">Usia</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php echo $data['usia'];?> tahun
  </tr>
  <tr>
    <td valign="top">Jenis Kelamin</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php if ($data['jenis_kelamin']== 'L'){
	echo 'Laki-Laki';
	}else{
	echo 'Perempuan';
	};?>
  </tr>
   <tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php echo $data['alamat'];?>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  

</table>
  
  		</div>   

<?php

}

elseif ($act=="gagal"){

	$username = $_GET['u'];
	$qry = mysql_query("SELECT * FROM data_user WHERE username='$username'");
	$data = mysql_fetch_array($qry);

	
?>
<br>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="text-area-user" align="justify">
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<div class="title"><font color="red">Ubah Profil <?php echo $username;?> Gagal Disimpan</font></div>
<br>
<form action="?page=9&act=acubahprofil&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  
   <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Biodata User (Pasien)</div></td>
    
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><span id="sprytextfield49">
      <input name="nama_user" type="text" size="30" maxlength="30" value="<?php echo $data['nama_user'];?>">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nama harus diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Panjang minimal 2 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span></span></td>
  </tr>
   <tr>
    <td valign="top">Usia</td>
    <td valign="top">:</td>
    <td valign="bottom">
	<span id="validsel">
	<select name="usia">
      <option value="10" <?php if ($data['usia']== '10') echo 'selected';?>>10 Tahun</option>
	  <option value="11" <?php if ($data['usia']== '11') echo 'selected';?>>11 Tahun</option>
	  <option value="12" <?php if ($data['usia']== '12') echo 'selected';?>>12 Tahun</option>
	  <option value="13" <?php if ($data['usia']== '13') echo 'selected';?>>13 Tahun</option>
      <option value="14" <?php if ($data['usia']== '14') echo 'selected';?>>14 Tahun</option>
      <option value="15" <?php if ($data['usia']== '15') echo 'selected';?>>15 Tahun</option>
      <option value="16" <?php if ($data['usia']== '16') echo 'selected';?>>16 Tahun </option>
      <option value="17" <?php if ($data['usia']== '17') echo 'selected';?>>17 Tahun </option>
      <option value="18" <?php if ($data['usia']== '18') echo 'selected';?>>18 Tahun</option>
      <option value="19" <?php if ($data['usia']== '19') echo 'selected';?>>19 tahun </option>
      <option value="20" <?php if ($data['usia']== '20') echo 'selected';?>>20 Tahun</option>
      <option value="21" <?php if ($data['usia']== '21') echo 'selected';?>>21 Tahun</option>
      <option value="22" <?php if ($data['usia']== '22') echo 'selected';?>>22 Tahun</option>
      <option value="23" <?php if ($data['usia']== '23') echo 'selected';?>>23 Tahun</option>
      <option value="24" <?php if ($data['usia']== '24') echo 'selected';?>>24 Tahun </option>
      <option value="25" <?php if ($data['usia']== '25') echo 'selected';?>>25 Tahun</option>
      <option value="26" <?php if ($data['usia']== '26') echo 'selected';?>>26 Tahun</option>
      <option value="27" <?php if ($data['usia']== '27') echo 'selected';?>>27 Tahun </option>
      <option value="28" <?php if ($data['usia']== '28') echo 'selected';?>>28 Tahun</option>
      <option value="29" <?php if ($data['usia']== '29') echo 'selected';?>>29 Tahun </option>
      <option value="30" <?php if ($data['usia']== '30') echo 'selected';?>>30 Tahun</option>
      <option value="31" <?php if ($data['usia']== '31') echo 'selected';?>>31 Tahun </option>
      <option value="32" <?php if ($data['usia']== '32') echo 'selected';?>>32 Tahun </option>
      <option value="33" <?php if ($data['usia']== '33') echo 'selected';?>>33 Tahun</option>
      <option value="34" <?php if ($data['usia']== '34') echo 'selected';?>>34 Tahun</option>
      <option value="35" <?php if ($data['usia']== '35') echo 'selected';?>>35 Tahun</option>
      <option value="36" <?php if ($data['usia']== '36') echo 'selected';?>>36 Tahun </option>
      <option value="37" <?php if ($data['usia']== '37') echo 'selected';?>>37 Tahun </option>
      <option value="38" <?php if ($data['usia']== '38') echo 'selected';?>>38 Tahun</option>
      <option value="39" <?php if ($data['usia']== '39') echo 'selected';?>>39 Tahun </option>
      <option value="40" <?php if ($data['usia']== '40') echo 'selected';?>>40 Tahun </option>
      <option value="41" <?php if ($data['usia']== '41') echo 'selected';?>>41 Tahun </option>
      <option value="42" <?php if ($data['usia']== '42') echo 'selected';?>>42 Tahun</option>
      <option value="43" <?php if ($data['usia']== '43') echo 'selected';?>>43 Tahun</option>
      <option value="44" <?php if ($data['usia']== '44') echo 'selected';?>>44 Tahun</option>
      <option value="45" <?php if ($data['usia']== '45') echo 'selected';?>>45 Tahun</option>
      <option value="46" <?php if ($data['usia']== '46') echo 'selected';?>>46 Tahun</option>
      <option value="47" <?php if ($data['usia']== '47') echo 'selected';?>>47 Tahun</option>
      <option value="48" <?php if ($data['usia']== '48') echo 'selected';?>>48 Tahun</option>
      <option value="49" <?php if ($data['usia']== '49') echo 'selected';?>>49 Tahun </option>
      <option value="50" <?php if ($data['usia']== '50') echo 'selected';?>>50 Tahun </option>
      <option value="51" <?php if ($data['usia']== '51') echo 'selected';?>>51 Tahun</option>
      <option value="52" <?php if ($data['usia']== '52') echo 'selected';?>>52 Tahun</option>
      <option value="53" <?php if ($data['usia']== '53') echo 'selected';?>>53 Tahun</option>
      <option value="54" <?php if ($data['usia']== '54') echo 'selected';?>>54 Tahun</option>
      <option value="55" <?php if ($data['usia']== '55') echo 'selected';?>>55 Tahun</option>
      <option value="56" <?php if ($data['usia']== '56') echo 'selected';?>>56 Tahun </option>
      <option value="57" <?php if ($data['usia']== '57') echo 'selected';?>>57 Tahun</option>
      <option value="58" <?php if ($data['usia']== '58') echo 'selected';?>>58 Tahun </option>
      <option value="59" <?php if ($data['usia']== '59') echo 'selected';?>>59 Tahun</option>
      <option value="60" <?php if ($data['usia']== '60') echo 'selected';?>>60 Tahun</option>
      <option value="61" <?php if ($data['usia']== '61') echo 'selected';?>>61 Tahun</option>
      <option value="62" <?php if ($data['usia']== '62') echo 'selected';?>>62 Tahun</option>
      <option value="63" <?php if ($data['usia']== '63') echo 'selected';?>>63 Tahun </option>
      <option value="64" <?php if ($data['usia']== '64') echo 'selected';?>>64 Tahun</option>
      <option value="65" <?php if ($data['usia']== '65') echo 'selected';?>>65 Tahun</option>
      <option value="66" <?php if ($data['usia']== '66') echo 'selected';?>>66 Tahun</option>
      <option value="67" <?php if ($data['usia']== '67') echo 'selected';?>>67 Tahun</option>
      <option value="68" <?php if ($data['usia']== '68') echo 'selected';?>>68 Tahun</option>
      <option value="69" <?php if ($data['usia']== '69') echo 'selected';?>>69 Tahun </option>
      <option value="70" <?php if ($data['usia']== '70') echo 'selected';?>>70 Tahun</option>
	</select>
	<span class="selectRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Usia harus dipilih.</span></span>
    </td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input name="jenis_kelamin" type="radio" value="L" <?php if ($data['jenis_kelamin']== 'L'){
	echo 'checked';
	}?>> Laki-laki 
                <input name="jenis_kelamin" type="radio" value="P" <?php if ($data['jenis_kelamin']== 'P'){
	echo 'checked';
	}
	?>> Perempuan</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><span id="sprytextfield69">
      <input name="alamat" type="text" size="50" maxlength="100" value="<?php echo $data['alamat'];?>"/>
      <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Alamat harus diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 4 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span>
	  </span></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Jika Anda Lupa Password</div></td>
  </tr>
  
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
	<td>Masukan Angka Berikut</td>
	<td>:</td>
	<td><span id="sprytextfield779">
	<img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12"/>
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMaxCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span></span></td>
  
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="SIMPAN" />
	<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
	</td>
    </tr>
</table>
</form>
</div>


<?php
}

elseif ($act=="gagal2"){

	$username = $_GET['u'];
	$qry = mysql_query("SELECT * FROM data_user WHERE username='$username'");
	$data = mysql_fetch_array($qry);

	
?>
<br>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="text-area-user" align="justify">
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<div class="title"><font color="red">Ubah Profil <?php echo $username;?> Gagal Disimpan</font></div>
<br>
<form action="?page=9&act=acubahprofil&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table width="100%">
 
  
   <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Biodata User (Pasien)</div></td>
    
  </tr>
  <tr>
    <td width="20%">Nama</td>
    <td width="1%">:</td>
    <td width="79%"><span id="sprytextfield49">
      <input name="nama_user" type="text" size="30" maxlength="30" value="<?php echo $data['nama_user'];?>">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Nama harus diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Panjang minimal 2 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span></span></td>
  </tr>
   <tr>
    <td valign="top">Usia</td>
    <td valign="top">:</td>
    <td valign="bottom">
	<span id="validsel">
	<select name="usia">
      <option value="10" <?php if ($data['usia']== '10') echo 'selected';?>>10 Tahun</option>
	  <option value="11" <?php if ($data['usia']== '11') echo 'selected';?>>11 Tahun</option>
	  <option value="12" <?php if ($data['usia']== '12') echo 'selected';?>>12 Tahun</option>
	  <option value="13" <?php if ($data['usia']== '13') echo 'selected';?>>13 Tahun</option>
      <option value="14" <?php if ($data['usia']== '14') echo 'selected';?>>14 Tahun</option>
      <option value="15" <?php if ($data['usia']== '15') echo 'selected';?>>15 Tahun</option>
      <option value="16" <?php if ($data['usia']== '16') echo 'selected';?>>16 Tahun </option>
      <option value="17" <?php if ($data['usia']== '17') echo 'selected';?>>17 Tahun </option>
      <option value="18" <?php if ($data['usia']== '18') echo 'selected';?>>18 Tahun</option>
      <option value="19" <?php if ($data['usia']== '19') echo 'selected';?>>19 tahun </option>
      <option value="20" <?php if ($data['usia']== '20') echo 'selected';?>>20 Tahun</option>
      <option value="21" <?php if ($data['usia']== '21') echo 'selected';?>>21 Tahun</option>
      <option value="22" <?php if ($data['usia']== '22') echo 'selected';?>>22 Tahun</option>
      <option value="23" <?php if ($data['usia']== '23') echo 'selected';?>>23 Tahun</option>
      <option value="24" <?php if ($data['usia']== '24') echo 'selected';?>>24 Tahun </option>
      <option value="25" <?php if ($data['usia']== '25') echo 'selected';?>>25 Tahun</option>
      <option value="26" <?php if ($data['usia']== '26') echo 'selected';?>>26 Tahun</option>
      <option value="27" <?php if ($data['usia']== '27') echo 'selected';?>>27 Tahun </option>
      <option value="28" <?php if ($data['usia']== '28') echo 'selected';?>>28 Tahun</option>
      <option value="29" <?php if ($data['usia']== '29') echo 'selected';?>>29 Tahun </option>
      <option value="30" <?php if ($data['usia']== '30') echo 'selected';?>>30 Tahun</option>
      <option value="31" <?php if ($data['usia']== '31') echo 'selected';?>>31 Tahun </option>
      <option value="32" <?php if ($data['usia']== '32') echo 'selected';?>>32 Tahun </option>
      <option value="33" <?php if ($data['usia']== '33') echo 'selected';?>>33 Tahun</option>
      <option value="34" <?php if ($data['usia']== '34') echo 'selected';?>>34 Tahun</option>
      <option value="35" <?php if ($data['usia']== '35') echo 'selected';?>>35 Tahun</option>
      <option value="36" <?php if ($data['usia']== '36') echo 'selected';?>>36 Tahun </option>
      <option value="37" <?php if ($data['usia']== '37') echo 'selected';?>>37 Tahun </option>
      <option value="38" <?php if ($data['usia']== '38') echo 'selected';?>>38 Tahun</option>
      <option value="39" <?php if ($data['usia']== '39') echo 'selected';?>>39 Tahun </option>
      <option value="40" <?php if ($data['usia']== '40') echo 'selected';?>>40 Tahun </option>
      <option value="41" <?php if ($data['usia']== '41') echo 'selected';?>>41 Tahun </option>
      <option value="42" <?php if ($data['usia']== '42') echo 'selected';?>>42 Tahun</option>
      <option value="43" <?php if ($data['usia']== '43') echo 'selected';?>>43 Tahun</option>
      <option value="44" <?php if ($data['usia']== '44') echo 'selected';?>>44 Tahun</option>
      <option value="45" <?php if ($data['usia']== '45') echo 'selected';?>>45 Tahun</option>
      <option value="46" <?php if ($data['usia']== '46') echo 'selected';?>>46 Tahun</option>
      <option value="47" <?php if ($data['usia']== '47') echo 'selected';?>>47 Tahun</option>
      <option value="48" <?php if ($data['usia']== '48') echo 'selected';?>>48 Tahun</option>
      <option value="49" <?php if ($data['usia']== '49') echo 'selected';?>>49 Tahun </option>
      <option value="50" <?php if ($data['usia']== '50') echo 'selected';?>>50 Tahun </option>
      <option value="51" <?php if ($data['usia']== '51') echo 'selected';?>>51 Tahun</option>
      <option value="52" <?php if ($data['usia']== '52') echo 'selected';?>>52 Tahun</option>
      <option value="53" <?php if ($data['usia']== '53') echo 'selected';?>>53 Tahun</option>
      <option value="54" <?php if ($data['usia']== '54') echo 'selected';?>>54 Tahun</option>
      <option value="55" <?php if ($data['usia']== '55') echo 'selected';?>>55 Tahun</option>
      <option value="56" <?php if ($data['usia']== '56') echo 'selected';?>>56 Tahun </option>
      <option value="57" <?php if ($data['usia']== '57') echo 'selected';?>>57 Tahun</option>
      <option value="58" <?php if ($data['usia']== '58') echo 'selected';?>>58 Tahun </option>
      <option value="59" <?php if ($data['usia']== '59') echo 'selected';?>>59 Tahun</option>
      <option value="60" <?php if ($data['usia']== '60') echo 'selected';?>>60 Tahun</option>
      <option value="61" <?php if ($data['usia']== '61') echo 'selected';?>>61 Tahun</option>
      <option value="62" <?php if ($data['usia']== '62') echo 'selected';?>>62 Tahun</option>
      <option value="63" <?php if ($data['usia']== '63') echo 'selected';?>>63 Tahun </option>
      <option value="64" <?php if ($data['usia']== '64') echo 'selected';?>>64 Tahun</option>
      <option value="65" <?php if ($data['usia']== '65') echo 'selected';?>>65 Tahun</option>
      <option value="66" <?php if ($data['usia']== '66') echo 'selected';?>>66 Tahun</option>
      <option value="67" <?php if ($data['usia']== '67') echo 'selected';?>>67 Tahun</option>
      <option value="68" <?php if ($data['usia']== '68') echo 'selected';?>>68 Tahun</option>
      <option value="69" <?php if ($data['usia']== '69') echo 'selected';?>>69 Tahun </option>
      <option value="70" <?php if ($data['usia']== '70') echo 'selected';?>>70 Tahun</option>
	</select>
	<span class="selectRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Usia harus dipilih.</span></span>
    </td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input name="jenis_kelamin" type="radio" value="L" <?php if ($data['jenis_kelamin']== 'L'){
	echo 'checked';
	}?>> Laki-laki 
                <input name="jenis_kelamin" type="radio" value="P" <?php if ($data['jenis_kelamin']== 'P'){
	echo 'checked';
	}
	?>> Perempuan</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><span id="sprytextfield69">
      <input name="alamat" type="text" size="50" maxlength="100" value="<?php echo $data['alamat'];?>"/>
      <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Alamat harus diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 4 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span>
	  </span></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
 
  
  <tr>
	<td>Masukan Angka Berikut</td>
	<td>:</td>
	<td><span id="sprytextfield779">
	<img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12"/>
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMaxCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span></span>
	<br><span class="style2"><font color="red"><strong> Masukan Angka Salah</strong></font></span> </td>
  
  </tr>
   <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td height="40" colspan="3" align="center" valign="bottom"><input type="submit" name="tombol" value="SIMPAN" />
	<input type="button" name="batal" value="Batal" onclick="javascript:history.go(-1)" />
	</td>
    </tr>
</table>
</form>
</div>


<?php
}


?>
	
<script type="text/javascript">
<!--

var sprypassword9 = new Spry.Widget.ValidationPassword("sprypassword9",{minChars:6, validateOn:["blur"]});

var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39","none", {minChars:5, validateOn:["blur"]});
var sprytextfield491 = new Spry.Widget.ValidationTextField("sprytextfield491","nama", {minChars:2, validateOn:["blur"]});
var sprytextfield59 = new Spry.Widget.ValidationTextField("sprytextfield59","integer",{minValue:1,maxValue:12, maxChars:2, validateOn:["blur"]});
var sprytextfield69 = new Spry.Widget.ValidationTextField("sprytextfield69","alamat", {minChars:4, validateOn:["blur"]});
var sprytextfield779 = new Spry.Widget.ValidationTextField("sprytextfield779","none", {minChars:4,maxChars:4, validateOn:["blur"]});
var sprytextfield889 = new Spry.Widget.ValidationTextField("sprytextfield889","nama", {validateOn:["blur"]});
var validsel = new Spry.Widget.ValidationSelect("validsel", {validateOn:["blur"]});



//-->
</script>