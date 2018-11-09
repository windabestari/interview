
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>

 <body>
 	<table border="1">
 		<tr>
 			<td>NO</td>
 			<td>NAMA</td>
 			<td>NO HP</td>
 			<td>ALAMAT</td>
 			<td>EMAIL</td>
 			<td>TEMPAT LAHIR</td>
 			<td>TANGGAL LAHIR</td>
 			<td>STATUS</td>
 			<td>AGAMA</td>
 			<td>TINGGI BADAN</td>
 			<td>BERAT BADAN</td>
 			<td>JENIS KELAMIN</td>
 			<td>NO IDENTITAS</td>
 		</tr>
 		 <?php 
 		 include"koneksi.php";
					$data = mysqli_query($koneksi,"SELECT * FROM tb_user");		
				$no = 1;
				while($pecah = mysqli_fetch_array($data)){
		?>
 		 <tr>
 		 	<td><?php echo $no; ?></td>
 			<td><?php echo $pecah['Nama']; ?></td>
 			<td><?php echo $pecah['No_HP']; ?></td>
 			<td><?php echo $pecah['Alamat']; ?></td>
 			<td><?php echo $pecah['email']; ?></td>
 			<td><?php echo $pecah['tempat_lahir']; ?></td>
 			<td><?php echo $pecah['tanggal_lahir']; ?></td>
 			<td><?php echo $pecah['status']; ?></td>
 			<td><?php echo $pecah['agama']; ?></td>
 			<td><?php echo $pecah['tinggi_badan']; ?></td>
 			<td><?php echo $pecah['berat_badan']; ?></td>
 			<td><?php echo $pecah['jenis_kelamin']; ?></td>
 			<td><?php echo $pecah['no_identitas']; ?></td>
 			<td><a href="edit.php?id=<?php echo $pecah['id'];?>">EDIT</a></td>
 		 </tr>
 		<?php $no++;} ?>
 	</table>
 </body>
 </html>