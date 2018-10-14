<?php

$konek = mysqli_connect('localhost','root','','d_modul6');

$result = mysqli_query($konek, "SELECT * FROM jurnal_6");


echo 

'<center><table border = "4px">

	<thead>

		<tr>

			<th> nama</th>

			<th> nim </th>

			<th> kelas </th>

			<th> Jenis Kelamin</th>

			<th>hobi </th>

			<th> fakultas </th>

			<th> alamat </th>

		</tr>

	</thead>

<tbody>';



$row = mysqli_fetch_row($result);

echo

	'<tr>

		<td>'.$row[0].'</td>

		<td>'.$row[1].'</td>

		<td>'.$row[2].'</td>

		<td>'.$row[3].'</td>

		<td>'.$row[4].'</td>

		<td>'.$row[5].'</td>

		<td>'.$row[6].'</td>

	</tr></center>';

?>

<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

 	<br><br><br>

	<center>

		<h2><b>Daftar Data Mahasiswa Yang Telah Diinput</b></h2>

	<form action="" method="POST">

		<input type="submit" name="submit" value="Logout"><br><br>

	</form>

</body>

</html>

<?php

    session_start();

	if (isset($_POST['submit'])) {

			$nim=$_POST['nama'];

			$nama=$_POST['nim'];

			$email=$_POST['kelas'];

			$jeniskelamin=$_POST['jeniskelamin'];

			$tanggal_lahir=$_POST['hobi'];

			$prodi=$_POST['fakultas'];

            $fakultas=$_POST['alamat'];	
            

		session_destroy();

		header("Location:login.php");

    }

?>