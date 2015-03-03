<link href="style.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
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
<div class="text_area" align="justify">
<br/>
<center><div class="title"><font color="red"><strong>Maaf, Registrasi Anda Gagal</strong></font></div></center>
<br>
<div class="title">Form Registrasi</div>
<form action="proses_registrasi.php" method="post">
<table align="left" cellpadding="5">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td valign="top">Username</td>
    <td valign="top">:</td>
    <td valign="bottom" ><span id="sprytextfield7">
      <input name="username" type="text" size="30" maxlength="30"/>
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Username Harus Diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Panjang minimal 5 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan tanpa spasi.</span>
	  <br>
	  <span class="style2">Panjang minimal 5 karakter.</span>
	
</td>
  </tr>
    <tr>
    <td valign="top">Password</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword">
	  <input name="password" type="password" id="password" size="15" maxlength="30" />
	  <span class="passwordRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Diisi.</span>
	  <span class="passwordMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Minimal 6 karakter.</span></span>
	  <br>
	  <span class="style2">Panjang minimal 6 karakter.</span> 
	  </td>
	   
  </tr>
  <tr>
    <td>Konfirmasi Password</td>
    <td>:</td>
    <td><span id="spryconfirm">
      <input name="password2" type="password" size="15" maxlength="30" />
      <span class="confirmRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Konfirmasi Password Harus Diisi.</span> 
         <span class="confirmInvalidMsg"><img src="images/cancel_f2.png"width="10" height="10"> Password Harus Cocok.</span></span></td>
  </tr>
   <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Biodata Anak</div></td>
    
  </tr>
  <tr>
    <td>Nama Anak</td>
    <td>:</td>
    <td><span id="sprytextfield4">
      <input name="nama_user" type="text" size="30" maxlength="30">
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
	<option value="">Pilih Usia</option>
	<option value="1">1 Tahun</option>
	<option value="2">2 Tahun</option>
	<option value="3">3 Tahun</option>
	<option value="4">4 Tahun</option>
	<option value="5">5 Tahun</option>
	<option value="6">6 Tahun</option>
	<option value="7">7 Tahun</option>
	<option value="8">8 Tahun</option>
	<option value="9">9 Tahun</option>
	<option value="10">10 Tahun</option>
	<option value="11">11 Tahun</option>
	<option value="12">12 Tahun</option></select>
	<span class="selectRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Usia Anak harus dipilih.</span></span>
	</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input name="jenis_kelamin" type="radio" value="L" checked="checked" /> Laki-laki 
                <input name="jk" type="radio" value="P" /> Perempuan</td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><span id="sprytextfield6">
      <input name="alamat" type="text" size="50" maxlength="100" />
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
    <td><span id="sprytextfield88">
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
	<td><span id="sprytextfield77">
	<img src="captchasecurityimages.php?width=100&height=40&character=4" /><br><br><input id="security_code" name="security_code" type="text" size="12"/>
	<span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<span class="textfieldMaxCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Angka harus diisi dengan benar.</span>
	<br><span class="style2"><font color="red"><strong> Angka yang Anda Masukan Salah.</strong></font></span>
	</span></td>
  
  </tr>
  <tr>
    <td height="40" colspan="3" align="right" valign="bottom"><input type="submit" name="tombol" value="Daftar" /><input type="reset" name="reset" value="Hapus" />
	</td>
    </tr>
</table>
</form>
</div>

<script type="text/javascript">
<!--

var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7","data", {minChars:5, validateOn:["blur"]});
var sprypassword = new Spry.Widget.ValidationPassword("sprypassword",{minChars:6, validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3","none", {minChars:5, validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4","nama", {minChars:2, validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5","integer",{minValue:1,maxValue:12, maxChars:2, validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6","alamat", {minChars:4, validateOn:["blur"]});
var sprytextfield77 = new Spry.Widget.ValidationTextField("sprytextfield77","none", {minChars:4,maxChars:4, validateOn:["blur"]});
var sprytextfield88 = new Spry.Widget.ValidationTextField("sprytextfield88","nama", {validateOn:["blur"]});
var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword",{validateOn:["blur"]});
var validsel = new Spry.Widget.ValidationSelect("validsel", {validateOn:["blur"]});
//-->
</script>
