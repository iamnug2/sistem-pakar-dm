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
<table align="left" cellpadding="5" width="100%">
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
	   <br><span class="style2"><font color="red"><strong> Username Anda Sudah Digunakan.</strong></font></span>
	
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
    <td colspan="3"><div class="subtitle">Biodata User (Pasien) </div></td>
    
  </tr>
  <tr>
    <td>Nama </td>
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
      <option value="10">10 Tahun</option>
      <option value="11">11 Tahun</option>
      <option value="12">12 Tahun</option>
      <option value="13">13 Tahun</option>
      <option value="14">14 Tahun</option>
      <option value="15">15 Tahun</option>
      <option value="16">16 Tahun </option>
      <option value="17">17 Tahun </option>
      <option value="18">18 Tahun</option>
      <option value="19">19 tahun </option>
      <option value="20">20 Tahun</option>
      <option value="21">21 Tahun</option>
      <option value="22">22 Tahun</option>
      <option value="23">23 Tahun</option>
      <option value="24">24 Tahun </option>
      <option value="25">25 Tahun</option>
      <option value="26">26 Tahun</option>
      <option value="27">27 Tahun </option>
      <option value="28">28 Tahun</option>
      <option value="29">29 Tahun </option>
      <option value="30">30 Tahun</option>
      <option value="31">31 Tahun </option>
      <option value="32">32 Tahun </option>
      <option value="33">33 Tahun</option>
      <option value="34">34 Tahun</option>
      <option value="35">35 Tahun</option>
      <option value="36">36 Tahun </option>
      <option value="37 ">37 Tahun </option>
      <option value="38">38 Tahun</option>
      <option value="39">39 Tahun </option>
      <option value="40">40 Tahun </option>
      <option value="41 ">41 Tahun </option>
      <option value="42">42 Tahun</option>
      <option value="43">43 Tahun</option>
      <option value="44">44 Tahun</option>
      <option value="45">45 Tahun</option>
      <option value="46">46 Tahun</option>
      <option value="47">47 Tahun</option>
      <option value="48">48 Tahun</option>
      <option value="49">49 Tahun </option>
      <option value="50">50 Tahun </option>
      <option value="51">51 Tahun</option>
      <option value="52">52 Tahun</option>
      <option value="53">53 Tahun</option>
      <option value="54">54 Tahun</option>
      <option value="55">55 Tahun</option>
      <option value="56">56 Tahun </option>
      <option value="57">57 Tahun</option>
      <option value="58">58 Tahun </option>
      <option value="59">59 Tahun</option>
      <option value="60">60 Tahun</option>
      <option value="61">61 Tahun</option>
      <option value="62">62 Tahun</option>
      <option value="63">63 Tahun </option>
      <option value="64">64 Tahun</option>
      <option value="65">65 Tahun</option>
      <option value="66">66 Tahun</option>
      <option value="67">67 Tahun</option>
      <option value="68">68 Tahun</option>
      <option value="69">69 Tahun </option>
      <option value="70">70 Tahun</option>
</select>
	<span class="selectRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Usia Anak harus dipilih.</span></span>
	</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input name="jenis_kelamin" type="radio" value="L" checked="checked" /> Laki-laki 
                <input name="jenis_kelamin" type="radio" value="P" /> Perempuan</td>
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
