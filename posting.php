<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masukkan Postingan Anda</title>
</head>
<body bgcolor="#c6e2ff">
<center>
    <h2>Upload Foto</h2>
    <form action="" method="POST">
    <tr>
		<td>&nbsp &nbsp Caption Postingan</td>
		<td><input type="text" name="caption" required=""><br></td>
	</tr>

     <tr>
		<td>&nbsp &nbsp &nbsp &nbspTanggal Upload</td>
		<td><input type="text" name="tanggal" required=""><br></td>
	</tr>

    <tr>
		<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspKomentar</td>
		<td><input type="text" name="komentar" required=""><br></td>
	</tr>

        <tr>
		<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Masukkan Foto</td>
		<td><input type="file" name="foto" required=""><br></td>
	</tr>

    <tr>
		<td><br><input type="submit" name="submit" value="submit"><br></td>
	</tr>
</center>
</body>
</html>


<?php
	$konek = mysqli_connect('localhost','root','','d_modul6');

	session_start();

	if(isset($_POST['submit'])){
		$caption=$_POST['caption'];
        $tanggal=$_POST['tanggal'];
        $komentar=$_POST['komentar'];
        $foto=$_FILES["foto"]["name"];
        $tampung= str_word_count($caption);
            if($tampung<30){
                echo "maaf terjadi error";
            }else{
                echo"hasil perhitungan kata: ".$hasil;
            }
        
        

        $query=mysqli_query($konek,"INSERT INTO jurnal_6 VALUES ($nama,'$nim','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat')");

        if($query){
    
            header('Location:daftarposting.php');
    
        }
    }
?>