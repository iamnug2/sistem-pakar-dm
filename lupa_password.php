<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />


<?php
$act=$_GET['act'];
if ($act=="lupa"){
?>
<div class="text_area" align="justify">      
<br /><div class="title">Halaman Lupa Password</div>
<form action="?page=5&act=pertanyaan" method="post" align="left" cellpadding="5">
<table align="left" cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
<tr>
    <td width="44%" valign="top">Masukkan Username Anda</td>
    <td width="1%" valign="top">:</td>
    <td width="55%" valign="bottom" ><span id="sprytextfield70">
      <input name="username" type="text" size="20" maxlength="30"/>
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Username Harus Diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Panjang minimal 5 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan tanpa spasi.</span></td>
  </tr>
  <tr>
    <td valign="top"></td>
    <td valign="top"></td>
    <td valign="bottom" ><input type="radio" name="status" value="user" checked />
          USER
	  <input  type="radio" name="status" value="pakar" />
          PAKAR</td>
  </tr>
  
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
  </tr>
	<tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="tombol" value="Lanjutkan"/>
    </div></td>
	</tr>  
</table>
  
  		</div>   
<?php

}

 


if ($act=="pertanyaan"){
    $username = $_POST['username'];
	$status   = $_POST['status'];
	if($status=='user'){
		
	    $qry = mysql_query("SELECT * FROM data_user WHERE username='$username'");
	    $cek = mysql_num_rows(mysql_query("SELECT * FROM data_user WHERE username='$username'"));
		}
		else {
		  $qry = mysql_query("SELECT * FROM data_pakar WHERE username='$username'");
	      $cek = mysql_num_rows(mysql_query("SELECT * FROM data_pakar WHERE username='$username'"));
		}
    
	
	if ($cek>0){
	$data = mysql_fetch_array($qry);

?>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<div class="text_area" align="justify">      
<br /><div class="title">Jawab Pertanyaan Rahasia</div>

<form action="?page=5&act=ubah" method="post" align="left" cellpadding="5">
<input  name="username" value="<?php echo $username;?>" type="hidden"/>
<input  name="status" value="<?php echo $status;?>" type="hidden"/>
<table align="left" cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
   <tr>
    <td valign="top">Pertanyaan Rahasia</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php echo $data['pertanyaan'];?>
  </tr>
</tr>
    <tr>
    <td>Jawaban Anda</td>
    <td>:</td>
    <td><span id="sprytextfield88">
      <input name="jawaban" type="text" size="30" maxlength="30">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Jawaban harus diisi.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span>
	  </span></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
	<tr>
    <td></td>
	<td></td>
	<td><input type="submit" name="Ubah" value="Lanjutkan"/></td>
    </tr>  

</table>
  
  		</div>   
<?php
}else{
     echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=5&act=lupa2\">";
}


}


if ($act=="lupa2"){
?>
<div class="text_area" align="justify">      
<br /><div class="title">Halaman Lupa Password</div>
<form action="?page=5&act=pertanyaan" method="post" align="left" cellpadding="5">
<table align="left" cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
<tr>
    <td valign="top">Masukkan Username Anda</td>
    <td valign="top">:</td>
    <td valign="bottom" ><span id="sprytextfield70">
      <input name="username" type="text" size="20" maxlength="30"/>
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Username Harus Diisi.</span>
	  <span class="textfieldMinCharsMsg"><img src="images/cancel_f2.png"width="10" height="10"> Panjang minimal 5 karakter.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan tanpa spasi.</span>
	  <br><span class="style2"><font color="red"><strong> Username Salah atau Tidak Ada Dalam Database</strong></font></span>	
</span></td>

<tr>
    <td valign="top"></td>
    <td valign="top"></td>
    <td valign="bottom" ><input type="radio" name="status" value="user" checked />
          USER
	  <input  type="radio" name="status" value="pakar" />
          PAKAR   
	     	
</td>
  </tr>

  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  </tr>
	<tr>
    <td></td>
	<td></td>
	<td><input type="submit" name="tombol" value="Lanjutkan"/></td>
    </tr>  

</table>
  
  		</div>   
<?php

}




if ($act=="pertanyaan2"){
    $username = $_GET['u'];
	$status   = $_GET['s'];
	if($status=='user'){
		
	    $qry = mysql_query("SELECT * FROM data_user WHERE username='$username'");
	    $cek = mysql_num_rows(mysql_query("SELECT * FROM data_user WHERE username='$username'"));
		}
		else {
		  $qry = mysql_query("SELECT * FROM data_pakar WHERE username='$username'");
	      $cek = mysql_num_rows(mysql_query("SELECT * FROM data_pakar WHERE username='$username'"));
		}
    
	
	if ($cek>0){
	$data = mysql_fetch_array($qry);

?>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<div class="text_area" align="justify">      
<br /><div class="title">Jawab Pertanyaan Rahasia</div>

<form action="?page=5&act=ubah" method="post" align="left" cellpadding="5">
<input  name="username" value="<?php echo $username;?>" type="hidden"/>
<input  name="status" value="<?php echo $status;?>" type="hidden"/>
<table align="left" cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
   <tr>
    <td valign="top">Pertanyaan Rahasia</td>
    <td valign="top">:</td>
    <td valign="bottom" ><?php echo $data['pertanyaan'];?>
  </tr>
</tr>
    <tr>
    <td>Jawaban Anda</td>
    <td>:</td>
    <td><span id="sprytextfield88">
      <input name="jawaban" type="text" size="30" maxlength="30">
	  <span class="textfieldRequiredMsg"><img src="images/cancel_f2.png"width="10" height="10"> Jawaban harus diisi.</span>
	  <span class="textfieldInvalidFormatMsg"><img src="images/cancel_f2.png"width="10" height="10"> Format penulisan salah.</span>
	  <br><span class="style2"><font color="red"><strong> Jawaban Anda Tidak Cocok Dalam Database</strong></font></span>
	  </span></td>
  </tr>
  <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
	<tr>
    <td></td>
	<td></td>
	<td><input type="submit" name="Ubah" value="Lanjutkan"/></td>
    </tr>  

</table>
  
  		</div>   
<?php
}else{
     echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=5&act=pertanyaan2\">";
}
}


if ($act=="ubah"){
  function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
    $username = $_POST['username'];
	$status   = $_POST['status'];
	$jawaban  = clean($_POST['jawaban']);
	
	if($status=='user'){
		
	    
	    $cek = mysql_num_rows(mysql_query("SELECT * FROM data_user WHERE username='$username' and jawaban='".md5($_POST['jawaban'])."'"));
		}
		else {
		  
	      $cek = mysql_num_rows(mysql_query("SELECT * FROM data_pakar WHERE username='$username' and jawaban='".md5($_POST['jawaban'])."'"));
		}
	
	
	
	if ($cek>0){
?>
<div class="text_area" align="justify">      
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<br /><div class="title">Password Anda Berhasil Direset</div>
<form action="?page=5&act=acubah&u=<?php echo $username;?>&s=<?php echo $status;?>"" method="post" align="left" cellpadding="5">
<table align="left" cellpadding="5" width="100%">
<tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
  <tr>
    <td colspan="3"><div class="subtitle">Isi Password Baru Anda</div></td>
  </tr>
  <tr>
    <td valign="top">Username</td>
    <td valign="top">:</td>
    <td valign="bottom" >
      <input name="username" type="text" size="30" maxlength="30" disabled value="<?php echo $username;?>"/>
	  
</td>

  </tr>
  <tr>
    <td valign="top">Password Baru</td>
    <td valign="top">:</td>
    <td valign="bottom"><span id="sprypassword">
	  <input name="password" type="password" id="passwordbaru" size="15" maxlength="30" />
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
    <td></td>
	<td></td>
	<td><input type="submit" name="Ubah" value="Simpan"/></td>
    </tr>  

</table>
  
  		</div>   
	<?php
	   
	}else{
	echo  "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=5&u=$username&s=$status&act=pertanyaan2\">";
	}
	
	

?>
<?php

}

if ($act=="acubah"){
	
	$username = $_GET['u'];
	$status   = $_GET['s'];
	$password = $_POST['password'];
	
	if($status=='user'){
		
	    $qry= mysql_query("UPDATE data_user SET password='".md5($_POST['password'])."' WHERE username='$username'");
	 
		}
		else {
		  $qry= mysql_query("UPDATE data_pakar SET password='".md5($_POST['password'])."' WHERE username='$username'");
	      
		}
		
	
	   
	 if($qry){
	 echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?page=5&act=berhasil\">";;
	 }else{
	 echo "gagal";
	 }

}

if ($act=="berhasil"){
	?>
<div class="text_area" align="justify">
<center><br />
<br />
<img src="images/check_512.png" width="128" height="128" align="absmiddle" title="thanks"/>
<br />
<div class="title">Terima Kasih,<br>
<br>Proses Ubah Password Anda Berhasil Disimpan<br>
<br> Silahkan Login </div></center>

</div>   
<?php
}

?>




		

<script type="text/javascript">
<!--
var sprytextfield09 = new Spry.Widget.ValidationTextField("sprytextfield09","none", {minChars:4,maxChars:4, validateOn:["blur"]});
var sprytextfield88 = new Spry.Widget.ValidationTextField("sprytextfield88","nama", {validateOn:["blur"]});
var sprytextfield70 = new Spry.Widget.ValidationTextField("sprytextfield70","data", {minChars:5, validateOn:["blur"]});
var sprypassword = new Spry.Widget.ValidationPassword("sprypassword",{minChars:6, validateOn:["blur"]});
var sprytextfield08 = new Spry.Widget.ValidationTextField("sprytextfield08","nama", {validateOn:["blur"]});

var spryconfirm = new Spry.Widget.ValidationConfirm("spryconfirm", "sprypassword",{validateOn:["blur"]});

//-->
</script>