<?php 
	include"koneksi.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post">
 		<table>
 			<tr>
 				<td>NAMA</td>
 				<td>:</td>
 				<td><input type="text" name="Nama"></td>
 			</tr>
 			<tr>
 				<td>NO HP</td>
 				<td>:</td>
 				<td><input type="text" name="No_Hp"></td>
 			</tr>
 			<tr>
 				<td>ALAMAT</td>
 				<td>:</td>
 				<td><input type="text" name="Alamat"></td>
 			</tr>
 			<tr>
 				<td>EMAIL</td>
 				<td>:</td>
 				<td><input type="email" name="email"></td>
 			</tr>
 			<tr>
 				<td>TEMPAT LAHIR</td>
 				<td>:</td>
 				<td><input type="text" name="tempat_lahir"></td>
 			</tr>
 			<tr>
 				<td>TANGGAL LAHIR</td>
 				<td>:</td>
 				<td><input type="date" name="tanggal_lahir"></td>
 			</tr>
 			<tr>
 				<td>STATUS</td>
 				<td>:</td>
 				<td><select name="status">
 			    	<option>Nikah</option>
 			    	<option>Belum Nikah</option>
 			    </select></td>
 			</tr>
 			<tr>
 				<td>AGAMA</td>
 				<td>:</td>
 				<td><select name="agama">
 			    	<option>Islam</option>
 			    	<option>Non Islam</option>
 			    </select></td>
 			</tr>
 			<tr>
 				<td>TINGGI BADAN</td>
 				<td>:</td>
 				<td><input type="number" name="tinggi_badan"></td>
 			</tr>
 			<tr>
 				<td>BERAT BADAN</td>
 				<td>:</td>
 				<td><input type="number" name="berat_badan"></td>
 			</tr>
 			<tr>
 				<td>JENIS KELAMIN</td>
 				<td>:</td>
 				<td><select name="jenis_kelamin">
 			    	<option>Laki-laki</option>
 			    	<option>Perempuan</option>
 			    </select></td>
 			</tr>
 			<tr>
 				<td>NO IDENTITAS</td>
 				<td>:</td>
 				<td><input type="number" name="no_identitas"></td>
 			</tr>
 			<tr>
 				<td><input type="submit" name="simpan" value="SIMPAN"></td>
 			</tr>
 		</table>
 	</form>
 
 </body>
 </html>

 <?php 
 		if(isset($_POST['simpan'])){
 			$nama=$_POST['Nama'];
 			$no_hp=$_POST['No_Hp'];
 			$alamat=$_POST['Alamat'];
 			$email=$_POST['email'];
 			$tempat_lahir=$_POST['tempat_lahir'];
 			$tanggal_lahir=$_POST['tanggal_lahir'];
 			$status=$_POST['status'];
 			$agama=$_POST['agama'];
 			$tinggi_badan=$_POST['tinggi_badan'];
 			$berat_badan=$_POST['berat_badan'];
 			$jenis_kelamin=$_POST['jenis_kelamin'];
 			$no_identitas=$_POST['no_identitas'];
 			
 			$data=mysqli_query($koneksi,"INSERT INTO tb_user(id_User,Nama,No_Hp,Alamat,email,tempat_lahir,tanggal_lahir,status,agama,tinggi_badan,berat_badan,jenis_kelamin,no_identitas) values (0,'$nama','$no_hp','$alamat','$email','$tempat_lahir','$tanggal_lahir','$status','$agama','$tinggi_badan','$berat_badan','$jenis_kelamin','$no_identitas')");
 			header('location:tampil.php');
 		}
  ?>