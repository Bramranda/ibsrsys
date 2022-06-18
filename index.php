<?php 

	//Koneksi Database

$server="localhost";
$user="root";
$pass="";
$database="ibsrsys";


 $koneksi=mysqli_connect($server,$user,$pass,$database) or die(mysqli_error($koneksi));


 //jika tombol simpan diklik
 	if (isset($_POST['bsimpan']))
 	{
 		//Pengujian Apakah Data Akan diedit Atau disimpan baru
 		if($_GET['hal']=="edit")  
 		{
 			//Data Akan diedit
 			$edit=mysqli_query($koneksi," UPDATE table_ibs set
 											tanggal    ='$_POST[ttanggal]',
 											rm         ='$_POST[trm]',
 											nama       ='$_POST[tnama]',
 											tgl_lahir  ='$_POST[tlahir]',
 											tgl_lahir  ='$_POST[tumur]',
 											tgl_lahir  ='$_POST[tjk]',
 											ruangan    ='$_POST[truangan]',
 											vicite     ='$_POST[tvicite]',
 											asa        ='$_POST[tasa]',
 											tanda      ='$_POST[ttanda]',
 											libat      ='$_POST[tlibat]',
 											operasi    ='$_POST[toperasi]',
 											diagnosa   ='$_POST[tdiagnosa]',
 											Klasifikasi='$_POST[tklasifikasi]',
 											jaminan    ='$_POST[tjaminan]',
 											wlaksana   ='$_POST[twlaksana]',
 											wselesai   ='$_POST[twselesai]',
 											jadwalop   ='$_POST[tjadwalop]',
 											telat      ='$_POST[ttelat]',
 											asalpasien ='$_POST[tasalpasien]',
 											dokterop   ='$_POST[tdokterop]',
 											anestesi   ='$_POST[tanestesi]',
 											anestesi   ='$_POST[tjanestesi]',
 											obat       ='$_POST[tobat]',
 											scor      ='$_POST[tscor]',
 											ket        ='$_POST[tket]'
 											WHERE id_pasien ='$_GET[id]'

 										");
 		if ($edit)//Jika Edit Sukses
 		 {
 			echo "<script>
 			alert('Edit Data SUKSES!')
 			documen.location='index.php';
 			</script>";
 		}
 		else
 		{
 			echo "<script>
 			alert('Edit Data GAGAL!')
 			documen.location='index.php';
 			</script>";
 		}

 		}else
 		{
 			//data Akan Di simpan Baru

 			$simpan=mysqli_query($koneksi,"INSERT INTO table_ibs  (tanggal,rm,nama,tgl_lahir,Umur,jk,ruangan,vicite,
 				asa,tanda,libat,operasi,diagnosa,Klasifikasi,jaminan,wlaksana,wselesai,jadwalop,telat,
 				asalpasien,dokterop,anestesi,janestesi,obat,scor,ket)
 										values ('$_POST[ttanggal]', 
		 										'$_POST[trm]',
		 										'$_POST[tnama]',
		 										'$_POST[tlahir]',
		 										'$_POST[tumur]',
		 										'$_POST[tjk]',
		 										'$_POST[truangan]',
		 										'$_POST[tvicite]',
		 										'$_POST[tasa]',
		 										'$_POST[ttanda]',
		 										'$_POST[tlibat]',
		 										'$_POST[toperasi]',
		 										'$_POST[tdiagnosa]',
		 										'$_POST[tklasifikasi]',
		 										'$_POST[tjaminan]',
		 										'$_POST[twlaksana]',
		 										'$_POST[twselesai]',
		 										'$_POST[tjadwalop]',
		 										'$_POST[ttelat]',
		 										'$_POST[tasalpasien]',
		 										'$_POST[tdokterop]',
		 										'$_POST[tanestesi]',
		 										'$_POST[tjanestesi]',
		 										'$_POST[tobat]',
		 										'$_POST[tscor]',
		 										'$_POST[tket]')

 										");
 		if ($simpan)//Jika Simpan Sukses
 		 {
 			echo "<script>
 			alert('Simpan Data SUKSES!')
 			documen.location='index.php';
 			</script>";
 		}
 		else
 		{
 			echo "<script>
 			alert('Simpan Data GAGAL!')
 			documen.location='index.php';
 			</script>";
 		}

 		}
 
 	}


 	//Pengujian Jika TOmbol Edit atau Hapus
 	if(isset($_GET['hal']))
 	{
 		//Pengujian Jika Edit data
 		if($_GET ['hal']=="edit")
		{
			// Tampilkan Data yang Akan diedit
			$tampil=mysqli_query($koneksi,"SELECT *FROM table_ibs WHERE id_pasien='$_GET[id]'");
			$data=mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika Data Di Temukan,maka data titampung ke dalam variabel
				$vtanggal=$data['tanggal'];
				$vrm=$data['rm'];
				$vnama=$data['nama'];
				$vtgl_lahir=$data['tgl_lahir'];
				$vtgl_lahir=$data['umur'];
				$vtgl_lahir=$data['jk'];
				$vruangan=$data['ruangan'];
				$vvicite=$data['vicite'];
				$vasa=$data['asa'];
				$vtanda=$data['tanda'];
				$vlibat=$data['libat'];
				$voperasi=$data['operasi'];
				$vdiagnosa_prepost=$data['diagnosa'];
				$vklasifikasi=$data['klasifikasi'];
				$vjaminan=$data['jaminan'];
				$vwlaksana=$data['wlaksana'];
				$vwselesai=$data['wselesai'];
				$vjadwalop=$data['jadwalop'];
				$vtelat=$data['telat'];
				$vasalpasien=$data['asalpasien'];
				$vruangan=$data['ruangan'];
				$vdokterop=$data['dokterop'];
				$vanestesi=$data['anestesi'];
				$vjanestesi=$data['janestesi'];
				$vobat=$data['obat'];
				$vscor=$data['scor'];
				$vket=$data['ket'];
			}
		}
		else if($_GET['hal']=="hapus")
		{
			//Persiapan Hapus Data
			$hapus=mysqli_query($koneksi,"DELETE FROM table_ibs WHERE id_pasien='$_GET[id]'");
			if($hapus){

				echo "<script>
 			alert('Hapus Data Berhasil!')
 			documen.location='index.php';
 			</script>";


			}
		}
 	}



 ?>





<!DOCTYPE html>
<html>
		<head>
			<title > INSTALASI BEDAH SENTRAL</title>
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
			 <div class="container">
			<h1 class="text-center" mt-3><img src="img/ibs.png.png" width="75" height="75" />REGISTER PASIEN IBS</h1>

			<!--Awal Card Form-->
			<div class="card mt-3">
				<div class="card-header bg-primary text-white">
					INPUT NAMA PASIEN
				</div>
			 
				<div class="card-body">
					<form method="post" action="">
						<div class="form-group">
							<label>Tanggal Pelaksanaan</label>
							<input type="date" name="ttanggal" value="<?=@$vtanggal ?>" class="form-control" placeholder="Input nim Anda disini" required="">
							
						</div>
						<div class="form-group">
							<label>Nomor RM</label>
							<input type="text" name="trm"value="<?=@$vrm ?>" class="form-control" placeholder="00-00-00-00" required="">	
						</div>
						<div class="form-group">
							<label>Nama Pasien</label>
							 <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Masukan Nama Pasien Dengan Benar">
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							 <input type="date" name="tlahir" value="<?=@$vlahir?>" class="form-control" placeholder="" >
						</div>
						<div class="form-group">
							<label>umur</label>
							 <input type="number" name="tumur" value="<?=@$vumur?>" class="form-control" placeholder="" >
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							 <select class="form-control" name="tjk" value="<?=@$vjk?>">
							 	<option></option>
							 	<option>Laki-laki</option>
							 	<option>Perempuan</option>
							 </select>
						</div>
						<div class="form-group">
							<label>Asal Ruangan</label>
							 <select class="form-control" name="truangan">
								 <option><?=@$vruangan?>Pilih</option>
								 <option value="ADE-IRMA">ADE IRMA</option>
								 <option value="S1-SI">DEWI SARTIKA</option>
								 <option value="S1-Ti">LARUFA</option>
								  <option value="S1-Ti">ICU</option>
								   <option value="S1-Ti">HCU</option>
								    <option value="S1-Ti">NICU</option>
								     <option value="S1-Ti">EDELWEIS</option>
								     <option value="S1-Ti">SUDIRMAN</option>
							 </select>
						</div>
						<div class="form-group">
							<label>Pre Vicite</label>
							<select class="form-control" name="tvicite">
								<OPTION><?=@$vicite?>....</OPTION>
								<option value="IBS">IBS</option>
								<option value="Ruangan">RUANGAN</option>
							</select>
						</div>

						<div class="form-group">
							<label>Asa Scor</label>
							<select class="form-control" name="tasa">
								<OPTION><?=@$vasa?>...</OPTION>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>	
						</div>
						<div class="form-group">
							<label>Penandaan</label>
							<select class="form-control" name="ttanda">
								<OPTION><?=@$vtanda?>...</OPTION>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
								<option value="Tidak-Perluh">Tidak Perluh</option>
							</select>
						<div class="form-group">
							<label>Melibatkan Pasien/Keluarga ?</label>
							<select class="form-control" name="tlibat">
								<OPTION><?=@$vlibat?></OPTION>
								<option value="Ya">Ya</option>
								<option value="Tidak">Tidak</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>

						<div class="form-group">
							<label>Nama Operasi</label>
							 <input type="text" name="toperasi" value="<?=@$voperasi?>" class="form-control" placeholder="Masukan Nama Pasien Dengan Benar">
						</div>
						<div class="form-group">
							<label>Diagnosa Pre Dan Post operasi</label>
							 <input type="text" name="tdiagnosa" value="<?=@$vdiagnosa?>" class="form-control" placeholder="Masukan nama diagnosa dengan benar">
						</div>
						<div class="form-group">
							<label>Klasifikasi Operasi</label>
							<select class="form-control" name="tklasifikasi">
								<OPTION><?=@$vklasifikasi?>...</OPTION>
								<option value="Extra Mayor">Extra Mayor</option>
								<option value="Supra Mayor">Supra Mayor</option>
								<option value="Mayor">Mayor</option>
								<option value="Medium">Medium</option>
								<option value="Minor">Minor</option>
							</select>	
						</div>
						<div class="form-group">
							<label>Jaminan</label>
							<select class="form-control" name="tjaminan">
								<OPTION><?=@$vjaminan?>...</OPTION>
								<option value="1">Pribadi</option>
								<option value="2">BPJS Kesehatan</option>
								<option value="3">Asuransi/Perusahaan</option>
							</select>	
						</div>
						
						<div class="form-group">
							<label>Waktu Terlaksana</label>
							<input type="text" name="twlaksana"value="<?=@$vwlaksana ?>" class="form-control" placeholder="Klik gambar Jam" required="">
						</div>

						<div class="form-group">
							<label>Waktu Selesai</label>
							<input type="text" name="twselesai"value="<?=@$vwselesai ?>" class="form-control" placeholder="Klik Gambar Jam" required="">
						</div>

						<div class="form-group">
							<label>Dijadwalkan</label>
							<input type="text" name="tjadwalop"value="<?=@$vjadwalop ?>" class="form-control" placeholder="Klik Gambar Jam" required="">
						</div>


						<div class="form-group">
							<label>Alasan Terlambat</label>
							 <input type="text" name="ttelat" value="<?=@$vtelat?>" class="form-control" placeholder="Apa alasan telat?">
						</div>

						<div class="form-group">
							<label>Asal Pasien</label>
							 <select class="form-control" name="tasalpasien"value="<?=@$vasalpasien?>">
							 	<option></option>
							 	<option value="Rumah Sakir Rs Yos Sudarso">Rumah Sakit Rs Yos Sudarso</option>
							 	<option value="Pasus">Pasus</option>
							 </select>
						</div>


						<div class="form-group">
							<label>Dokter Operator</label>
							 <select class="form-control" name="tdokterop">
								 <option><?=@$vdokterop ?>Pilih</option>
								 <option value="dr.Ananto Pratikno,SpOG,MARS">dr.Ananto Pratikno,SpOG,MARS</option>
								 <option value="dr.Masdarul Maarif,SpOG">dr.Masdarul Maarif,SpOG</option>
								 <option value="dr.Engga Lift Irwanto, SpOG">dr.Engga Lift Irwanto, SpOG</option>
								  <option value="dr.Alexander Cahyadi, SpBS">dr.Alexander Cahyadi, SpBS</option>
								   <option value="dr.Engga Lift Irwanto, SpOG">dr.Edi Leonardo Simbolon,SpOT</option>
								    <option value="dr.Alvarino,SpB.U">dr.Alvarino,SpB.U</option>
								    <option value="dr.Daan Khambri,SpB Onk,M.Kes">dr.Daan Khambri,SpB Onk,M.Kes</option>
								   <option value="dr.Hendra Maska,Sp.OT">dr.Hendra Maska,Sp.OT</option>
								   <option value="dr.Juni Mitra,SpB-KBD">dr.Juni Mitra,SpB-KBD</option>
								    <option value="dr.Daan Khambri,SpB Onk,M.Kes">dr.Daan Khambri,SpB Onk,M.Kes</option>
								   <option value="dr.Harmen,Sp.M">dr.Harmen,Sp.M</option>
								   <option value="dr.Al Hafiz,Sp.THT-KL(K)">dr.Al Hafiz,Sp.THT-KL(K)</option>
								    <option value="dr.Novialdi,Sp.THT">dr.Novialdi,Sp.THT</option>
								     <option value="dr.Benny Raymond,SpBP-RE">dr.Benny Raymond,SpBP-RE</option>
								      <option value="dr.Krisna Lukman,Sp.THT">dr.Krisna Lukman,Sp.THT</option>
								       <option value="dr.Al Hafiz,Sp.THT-KL(K)">dr.Al Hafiz,Sp.THT-KL(K)</option>
								        <option value="dr.Julita,Sp.M">dr.Julita,Sp.M</option>
								         <option value="dr.Kemala Sayuti,Sp.M">dr.Kemala Sayuti,Sp.M</option>
								          <option value="dr.I piet Iskandar,MD,MS,FINANCS">dr.I piet Iskandar,MD,MS,FINANCS</option>
								           <option value="dr.Yahya Marpaung,SpB.FINANCS">dr.Yahya Marpaung,SpB.FINANCS</option>
								             <option value="dr.Musrineldy,SpB">dr.Musrineldy,SpB</option>



							 </select>
						</div>
						<div class="form-group">
							<label>Dokter Anestesi</label>
							 <select class="form-control" name="tanestesi">
								 <option><?=@$vanestesi ?>Pilih</option>
								 <option value="dr.Edi Widodo,Sp.An">dr.Edi Widodo,Sp.An</option>
								 <option value="dr.Emilzon Taslim,Sp.An">dr.Emilzon Taslim,Sp.An</option>
								 <option value="dr.Rinal efendi,Sp.An">dr.Rinal Efendi,Sp.An</option>

							 </select>
						</div>

						<div class="form-group">
							<label>Jenis Anestesi</label>
							 <select class="form-control" name="tjanestesi">
								 <option><?=@$vjnestesi ?>Pilih</option>
								 <option value="Umum">Umum</option>
								 <option value="Spinal">Spinal</option>
								 <option value="Spinalum">Spinalum</option>
								 <option value="Lokal">Lokal</option>

							 </select>
						</div>

						<div class="form-group">
							<label>Pemberian Obat Antibiotik</label>
							 <input type="text" name="tobat" value="<?=@$vobat?>" class="form-control" placeholder="Masukan Nama AB Kurang dari 1jam atau lebih">
						</div>

						<div class="form-group">
							<label>Aldrate/Brimage Scor</label>
							 <input type="text" name="tscor" value="<?=@$vscor?>" class="form-control" placeholder="">
						</div>
						<div class="form-group">
							<label>Ket.</label>
							 <input type="text" name="tket" value="<?=@$vket?>" class="form-control" placeholder="">
						</div><br><br>

						<button type="submit" class="btn btn-success" name="bsimpan"> Simpan</button>
						<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
						</div>
						</div>
						<marquee> Lengkapi data dengan baik dan benar</marquee>
					</form>
				</div>		
			</div>

			<!--Akhir Card Form-->

		<!---------------------------------------------------------------------------------------------------------------------->





		<!--Awal Card Table-->
		<div class="container">
		 	<div class="table-responsive">
			 <table class="table table-bordered">
			 	<thead class="bg-primary text-white text-center" >
			 		<tr class="text-center">
			 			<th>No</th>
			 			<th>Tanggal pelaksanaan</th>
			 			<th>Nomor.RM</th>
			 			<th>NamaPasien</th>
			 			<th>Tanggal lahir</th>
			 			<th>Umur</th>
			 			<th>Jenis Kelamin</th>
			 			<th>Ruangan</th>
			 			<th>Pre Vicite</th>
			 			<th>Asa</th>
			 			<th>Penandaan</th>
			 			<th>Melibatkan Pasien/Keluarga</th>
			 			<th>Nama Operasi</th>
			 			<th>Diagnosa Pre & Post operasi</th>
			 			<th>Klasifikasi Operasi</th>
			 			<th>Jaminan</th>
			 			<th>Waktu Terlaksana</th>
			 			<th>Waktu Selesai</th>
			 			<th>Dijadwalkan</th>
			 			<th>Alasan Telat</th>
			 			<th>Asal Pasien</th>
			 			<th>Dokter Operator</th>
			 			<th>Dokter Anestesi</th>
			 			<th>Jenis Anestesi</th>
			 			<th>Pemberian Obat Antibiotik</th>
			 			<th>Scor</th>
			 			<th>Ket</th>
			 			<th>Aksi</th>
			 		</tr>
			 	</thead>
			 	<?php 

			 		$no=1; 

					$tampil=mysqli_query($koneksi,"SELECT * from table_ibs order by id_pasien desc");
					while($data=mysqli_fetch_array($tampil)):
			 	 ?>
			 	<tbody>
			 		<tr class="text-center">
			 			<td><?=$no++; ?></td>
			 			<td><?=$data['tanggal']; ?></td>
			 			<td><?=$data['rm'];?></td>
			 			<td><?=$data['nama'];?></td>
			 			<td><?=$data['tgl_lahir'];?></td>
			 			<td><?=$data['umur'];?></td>
			 			<td><?=$data['jk'];?></td>
			 			<td><?=$data['ruangan'];?></td>
			 			<td><?=$data['vicite'];?></td>
			 			<td><?=$data['asa'];?></td>
			 			<td><?=$data['tanda'];?></td>
			 			<td><?=$data['libat'];?></td>
			 			<td><?=$data['operasi'];?></td>
			 			<td><?=$data['diagnosa'];?></td>
			 			<td><?=$data['klasifikasi'];?></td>
			 			<td><?=$data['jaminan'];?></td>
			 			<td><?=$data['wlaksana'];?></td>
			 			<td><?=$data['wselesai'];?></td>
			 			<td><?=$data['jadwalop'];?></td>
			 			<td><?=$data['telat'];?></td>
			 			<td><?=$data['asalpasien'];?></td>
			 			<td><?=$data['dokterop'];?></td>
			 			<td><?=$data['anestesi'];?></td>
			 			<td><?=$data['janestesi'];?></td>
			 			<td><?=$data['obat'];?></td>
			 			<td><?=$data['scor'];?></td>
			 			<td><?=$data['ket'];?></td> 
			 			<td>
			 				 	<a href="index.php?hal=edit&id=<?=$data['id_pasien']?>" class="btn btn-warning">Edit</a>
								<a href="index.php?hal=hapus&id=<?$data['id_pasien']?>"
						 onclick="return confirm('Apakah Yakin Akan Menghapus data ini?')" class="btn btn-danger">Hapus</a>
			 			</td>
			 		</tr>
			 		<?php echo $no; ?>
			 <?php endwhile;// Penutup Perulangan While ?>
			</table>
				<a href="laporanop.php" class="btn btn-warning">Laporan Operasi IBS Bulanan</a>
			
			 </tbody>


			 </table>
			<script type="text/javascript" src="js/bootstrap/min.js"></script>
		 </div>
		</div>
</body>
</html>
