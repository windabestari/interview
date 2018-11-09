<?php 
	include"koneksi.php";
	$id=$_GET['id'];
	$data=mysqli_query($koneksi,"SELECT *FROM tb_user WHERE id='$id'");
	$pecah=mysqli_fetch_array($data);
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
 				<td><input type="text" name="nama" value="<?php  echo $pecah['nama']; ?>"></td>
 			</tr>
 			<tr>
 				<td>NO HP</td>
 				<td>:</td>
 				<td><input type="number" name="No_Ho" value="<?php  echo $pecah['No_HP']; ?>"></td>
 			</tr>
 			<tr>
 				<td>ALAMAT</td>
 				<td>:</td>
 				<td><input type="text" name="alamat" value="<?php  echo $pecah['Alamat']; ?>"></td>
 			</tr>
 			<tr>
 				<td>TEMPAT LAHIR</td>
 				<td>:</td>
 				<td><input type="text" name="tempat_lahir" value="<?php  echo $pecah['tempat_lahir']; ?>"></td>
 			</tr>
 			<tr>
 				<td>TANGGAL LAIR</td>
 				<td>:</td>
 				<td><input type="date" name="tanggal_lahir" value="<?php  echo $pecah['tanggal_lahir']; ?>"></td>
 			</tr>
 			<tr>
 				<td>STATUS</td>
 				<td>:</td>
 				<td><input type="text" name="status" value="<?php  echo $pecah['status']; ?>" ></td>
 			</tr>
 			<tr>
 				<td>AGAMA</td>
 				<td>:</td>
 				<td><select type="text" name="agama" value="<?php  echo $pecah['agama']; ?>" >
 					<option>Iislam</option>
 					<option>Non Islam</option>
 				</select></td>
 			</tr>
 			<tr>
 				<td>TINGGI BBADAN</td>
 				<td>:</td>
 				<td><input type="number" name="tinggi_badan" value="<?php  echo $pecah['tinggi_badan']; ?>"></td>
 			</tr>
 			<tr>
 				<td>BERAT BADAN</td>
 				<td>:</td>
 				<td><input type="number" name="berat_badan" value="<?php  echo $pecah['berat_badan']; ?>" ></td>
 			</tr>
 			<tr>
 				<td>JENIS KELAMIN</td>
 				<td>:</td>
 				<td><select name="jenis_kelamin" value="<?php  echo $pecah['jenis_kelamin']; ?>" >
 					<option>laki-laki</option>
 					<option>perempuan</option>
 				</select></td>
 			</tr>
 			<tr>
 				<td>NO IDENTITAS</td>
 				<td>:</td>
 				<td><input type="number" name="no_identitas" value="<?php  echo $pecah['no_identitas']; ?>" ></td>
 			</tr>
 			<tr>
 				<td><input type="submit" name="simpan"></td>
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

 			$data=mysqli_query($koneksi,"UPDATE tb_user SET Nama='$nama', No_HP='No_Hp',Alamat='$alamat', email='$email', tempat_lahir='$tempat_lahir', status='$status', agama='$agama',tinggi_badan=$tinggi_badan,berat_badan=$berat_badan,jenis_kelamin='$jenis_kelamin',no_identitas='$no_identitas' WHERE id='$id'");
 			header('location:tampil.php');
 		}
  ?>