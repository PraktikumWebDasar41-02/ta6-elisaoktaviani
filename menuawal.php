<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran</title>
</head>
<body bgcolor="#c6e2ff">
<center>
	<h2><b> Registrasi Mahasiswa</b></h2>

	<form action="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" required=""></td>
			</tr>

			<tr>
				<td>Kelas</td>

				<td><input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01<br></td>

				<td><input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02<br></td>

				<td><input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03<br></td>

				<td><input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04<br></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>

				<td><input type="radio" name="jeniskelamin" value="Laki-Laki" required="">Laki-Laki<br></td>

				<td><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br></td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td><input type="checkbox" name="hobi" value="Bersepeda">Bersepeda</td><br>
				<td><input type="checkbox" name="hobi" value="Berenang">Berenang</td><br>
				<td><input type="checkbox" name="hobi" value="Menyanyi">Menyanyi</td><br>
				<td><input type="checkbox" name="hobi" value="Makan">Makan</td><br>
				<td><input type="checkbox" name="hobi" value="Tidur">Tidur</td><br>
			</tr>

			<tr>
			<td>Fakultas</td>
				<td><select name="fakultas" required="">
    				<option value="FIT">Fakultas Ilmu Terapan</option>
                    <option value="FKB">Fakultas Fakultas Komunikasi Bisnis</option>
                    <option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
                    <option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
                    <option value="FIF">Fakultas Informatika</option>
    			</select></td>
    		</tr>

    		<tr>
    			<td>Alamat</td>
    			<td><textarea name="alamat" placeholder=""></textarea></td>
    		</tr>

			<tr>
				<td><br><input type="submit" name="submit" value="submit"></td>
			</tr>
			</center>

</body>
</html>


<?php
	$konek = mysqli_connect('localhost','root','','d_modul6');

	session_start();

	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$kelas=$_POST['kelas'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
/*
		if(empty($_POST)['nama']))||if(empty($_POST)['nim']))||if(empty($_POST)['kelas']))||if(empty($_POST)['jeniskelamin']))||
			if(empty($_POST)['hobi']))||if(empty($_POST)['fakultas']))||if(empty($_POST)['alamat'])){
				echo "<script language= 'javascript'>alert('data harus diisi');
				document.location=('masuk.php')";
		}else{
				echo "<script language= 'javascript'>alert('data berhasil diiisi');
				document.location=('masuk.php')";
		}

	}
*/

	$error=array();

		if(strlen($_POST['nama']) <= 35){

			$error['nama']=="Harus diisi";

		} if(strlen($_POST['nim']) != 10){

			$error['nim']=="Harus 10 karakter";

		}if(empty($_POST($kelas))){

			$error['kelas']=="kelas harus diisi";

		}if(empty($jeniskelamin)){

			$error['jeniskelamin']=="Jenis Kelamin harus diisi";

		}if(empty($hobi)){

			$error['hobi']=="hobi harus diisi";

		}if(empty($fakultas)){

			$error['fakultas']=="fakultas harus diisi";

		}


	$query=mysqli_query($konek,"INSERT INTO jurnal_6 VALUES ($nama,'$nim','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat')");

	if($query){

		header('Location:masuk.php');

	}
}

?>