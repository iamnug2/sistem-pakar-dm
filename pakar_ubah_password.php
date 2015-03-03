<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextArea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextArea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />


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
	if ($act=="ubahpass"){
?>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div class="text-area-user" align="justify">      
<br /><div class="title">Ubah Password  <?php echo $username;?></div>
<?php
    $username = $_GET['u'];
	$qry = mysql_query("SELECT * FROM data_pakar WHERE username='$username'");
	$data = mysql_fetch_array($qry);

	
?>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<div class="text_area" align="justify">
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<form action="?page=7&act=acubahpass&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table width="100%">
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td valign="top">Username</td>
    <td valign="top">:</td>
    <td valign="bottom" >
      <input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username;?>"/>
	  
</td>
  </tr>
    <tr>
    <td valign="top">Password Lama</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword9">
	  <input name="passwordlama" type="password" id="passwordlama" size="15" maxlength="30" />
	  <span class="passwordRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  </td>
	   
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    
  </tr>
  <tr>
    <td valign="top">Password Baru</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword99">
	  <input name="passwordbaru" type="password" id="passwordbaru" size="15" maxlength="30" />
	  <span class="passwordRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  <br>
	  <span class="style2">Panjang minimal 6 karakter.</span> 
	  </td>
	   
  </tr>
  <tr>
    <td>Konfirmasi Password Baru</td>
    <td>:</td>
    <td><span id="spryconfirm">
      <input name="passwordbaru2" type="password" size="15" maxlength="30" />
      <span class="confirmRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Konfirmasi Password Harus Diisi.</span> 
         <span class="confirmInvalidMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Cocok.</span></span></td>
  </tr>
   <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Jika Anda Lupa Password</div></td>
  </tr>
  <tr>
    <td>Pilih Pertanyaan Rahasia</td>
    <td>:</td>
    <td><select name="pertanyaan" id="pertanyaan">
        <option value="Apa Makanan Favorit Anda?">Apa Makanan Favorit Anda?</option>
		<option value="Apa Buku Favorit Anda?">Apa Buku Favorit Anda?</option>
		<option value="Apa Nama Sekolah Dasar Anda?">Apa Nama Sekolah Dasar Anda?</option>
		<option value="Siapa Nama Sahabat Anda Waktu Masih Kecil?">Siapa Nama Sahabat Anda Waktu Masih Kecil?</option>
		<option value="Siapa Nama Guru Favorit Anda?">Siapa Nama Guru Favorit Anda?</option>
        <option value="Di Kota Manakah Ibu Anda Lahir?">Di Kota Manakah Ibu Anda Lahir?</option>
      </select></td>
  </tr>
  <tr>
    <td>Jawaban Anda</td>
    <td>:</td>
    <td><span id="sprytextfield889">
      <input name="jawaban" type="text" size="30" maxlength="30">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Jawaban harus diisi.</span>
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

</div>
<?php
}
elseif ($act=="acubahpass"){
	
		
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
		
	$username = $_GET['u'];
	$pertanyaan = $_POST['pertanyaan'];
	$jawaban = clean($_POST['jawaban']);
	$passwordlama = $_POST['passwordlama'];
	$passwordbaru = $_POST['passwordbaru'];
	
	
	
	

	
if( isset($_POST['tombol'])) {
   if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code'])) ) {
   
    $cek = mysql_num_rows(mysql_query("SELECT * FROM data_pakar WHERE username='$username' and password='".md5($_POST['passwordlama'])."'"));
	
	if ($cek>0){
	   $qry= mysql_query("UPDATE data_pakar SET password='".md5($_POST['passwordbaru'])."',  
	   pertanyaan='$pertanyaan', jawaban='".md5($_POST['jawaban'])."' WHERE username='$username'");
	   
	   echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=7&current0=curren&act=berhasil&u=$username\">";
	}else{
	echo  "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=7&current0=curren&act=gagal&u=$username\">";
	}
	
	
	}else{
	echo "<meta http-equiv=\"refresh\" content=\"0; url=pakar_index.php?page=7&current0=curren&act=gagal2&u=$username\">";
	}
}
	
}

elseif ($act=="berhasil"){
?>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
 
<div class="text_area" align="justify">
<center>
<p></p>
<div align="center">
<br/>
<br/>
<img src="images/check_512.png" width="128" height="128" align="absmiddle" title="thanks"/>
  <br />
</div>
<div class="title">Terima Kasih,<br>
<br>Proses Ubah Password Anda Berhasil Disimpan<br>
</center></div>

<?php

}

elseif ($act=="gagal"){

	$username = $_GET['u'];
	$qry = mysql_query("SELECT * FROM data_pakar WHERE username='$username'");
	$data = mysql_fetch_array($qry);

	
?>
<br>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="text_area" align="justify">
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<div class="title"><font color="red">Ubah Password Gagal Disimpan</font></div>
<br>
<form action="?page=7&act=acubahpass&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table width="100%">
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td valign="top">Username</td>
    <td valign="top">:</td>
    <td valign="bottom" >
      <input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username;?>"/>
	  
</td>

  </tr>
 
    <tr>
	<td valign="top">Password Lama</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword9">
	  <input name="passwordlama" type="password" id="passwordlama" size="15" maxlength="30" />
	  
	  <span class="passwordRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  <br><span class="style2"><font color="red"><strong> Password Lama Salah</strong></font></span> </td>
	   
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    
  </tr>
  <tr>
    <td valign="top">Password Baru</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword99">
	  <input name="passwordbaru" type="password" id="passwordbaru" size="15" maxlength="30" />
	  <span class="passwordRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  <br>
	  <span class="style2">Panjang minimal 6 karakter.</span> 
	  </td>
	   
  </tr>
  <tr>
    <td>Konfirmasi Password Baru</td>
    <td>:</td>
    <td><span id="spryconfirm">
      <input name="passwordbaru2" type="password" size="15" maxlength="30" />
      <span class="confirmRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Konfirmasi Password Harus Diisi.</span> 
         <span class="confirmInvalidMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Cocok.</span></span></td>
  </tr>
  
  
  
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Jika Anda Lupa Password</div></td>
  </tr>
  <tr>
    <td>Pilih Pertanyaan Rahasia</td>
    <td>:</td>
    <td><select name="pertanyaan" id="pertanyaan">
        <option value="Apa Makanan Favorit Anda?">Apa Makanan Favorit Anda?</option>
		<option value="Apa Buku Favorit Anda?">Apa Buku Favorit Anda?</option>
		<option value="Apa Nama Sekolah Dasar Anda?">Apa Nama Sekolah Dasar Anda?</option>
		<option value="Siapa Nama Sahabat Anda Waktu Masih Kecil?">Siapa Nama Sahabat Anda Waktu Masih Kecil?</option>
		<option value="Siapa Nama Guru Favorit Anda?">Siapa Nama Guru Favorit Anda?</option>
        <option value="Di Kota Manakah Ibu Anda Lahir?">Di Kota Manakah Ibu Anda Lahir?</option>
      </select></td>
  </tr>
  <tr>
    <td>Jawaban Anda</td>
    <td>:</td>
    <td><span id="sprytextfield889">
      <input name="jawaban" type="text" size="30" maxlength="30">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Jawaban harus diisi.</span>
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


<?php
}

elseif ($act=="gagal2"){

	$username = $_GET['u'];
	$qry = mysql_query("SELECT * FROM data_pakar WHERE username='$username'");
	$data = mysql_fetch_array($qry);

	
?>
<br>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="text_area" align="justify">
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<div class="title"><font color="red">Ubah Password Gagal Disimpan</font></div>
<br>
<form action="?page=7&act=acubahpass&u=<?php echo $username;?>" method="post" align="left" cellpadding="5">
<table width="100%">
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td valign="top">Username</td>
    <td valign="top">:</td>
    <td valign="bottom" >
      <input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username;?>"/>
	  
</td>

  </tr>
 
    <tr>
	<td valign="top">Password Lama</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword9">
	  <input name="passwordlama" type="password" id="passwordlama" size="15" maxlength="30" />
	  
	  <span class="passwordRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  </td>
	   
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    
  </tr>
  <tr>
    <td valign="top">Password Baru</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword99">
	  <input name="passwordbaru" type="password" id="passwordbaru" size="15" maxlength="30" />
	  <span class="passwordRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  <br>
	  <span class="style2">Panjang minimal 6 karakter.</span> 
	  </td>
	   
  </tr>
  <tr>
    <td>Konfirmasi Password Baru</td>
    <td>:</td>
    <td><span id="spryconfirm">
      <input name="passwordbaru2" type="password" size="15" maxlength="30" />
      <span class="confirmRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Konfirmasi Password Harus Diisi.</span> 
         <span class="confirmInvalidMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Cocok.</span></span></td>
  </tr>
  
  
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Jika Anda Lupa Password</div></td>
  </tr>
  <tr>
    <td>Pilih Pertanyaan Rahasia</td>
    <td>:</td>
    <td><select name="pertanyaan" id="pertanyaan">
        <option value="Apa Makanan Favorit Anda?">Apa Makanan Favorit Anda?</option>
		<option value="Apa Buku Favorit Anda?">Apa Buku Favorit Anda?</option>
		<option value="Apa Nama Sekolah Dasar Anda?">Apa Nama Sekolah Dasar Anda?</option>
		<option value="Siapa Nama Sahabat Anda Waktu Masih Kecil?">Siapa Nama Sahabat Anda Waktu Masih Kecil?</option>
		<option value="Siapa Nama Guru Favorit Anda?">Siapa Nama Guru Favorit Anda?</option>
        <option value="Di Kota Manakah Ibu Anda Lahir?">Di Kota Manakah Ibu Anda Lahir?</option>
      </select></td>
  </tr>
  <tr>
    <td>Jawaban Anda</td>
    <td>:</td>
    <td><span id="sprytextfield889">
      <input name="jawaban" type="text" size="30" maxlength="30">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Jawaban harus diisi.</span>
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
	<br><span class="style2"><font color="red"><strong> Angka yang Anda Masukan Salah</strong></font></span> </td>
  
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
var sprypassword99 = new Spry.Widget.ValidationPassword("sprypassword99",{minChars:6, validateOn:["blur"]});
var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39","none", {minChars:5, validateOn:["blur"]});
var sprytextfield49 = new Spry.Widget.ValidationTextField("sprytextfield49","nama", {minChars:2, validateOn:["blur"]});
var sprytextfield59 = new Spry.Widget.ValidationTextField("sprytextfield59","integer",{minValue:1,maxValue:12, maxChars:2, validateOn:["blur"]});
var sprytextfield69 = new Spry.Widget.ValidationTextField("sprytextfield69","alamat", {minChars:4, validateOn:["blur"]});
var sprytextfield779 = new Spry.Widget.ValidationTextField("sprytextfield779","none", {minChars:4,maxChars:4, validateOn:["blur"]});
var sprytextfield889 = new Spry.Widget.ValidationTextField("sprytextfield889","nama", {validateOn:["blur"]});
var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword99",{validateOn:["blur"]});

//-->
</script>