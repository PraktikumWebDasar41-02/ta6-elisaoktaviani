<?php

$konek = mysqli_connect('localhost','root','','d_modul6');
$result = mysqli_query($konek, "SELECT * FROM d_modul6");

echo 
'<center><table border = "4px">
	<thead>
        <tr>
        
			<th>Caption Postingan</th>
			<th> Tanggal Upload</th>
            <th> foto </th>
            
		</tr>
	</thead>
<tbody>';


$row = mysqli_fetch_row($result);
echo
	'<tr>
		<td>'.$row[0].'</td>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
	</tr></center>';


	session_start();

	if(isset($_POST['submit'])){
		$caption=$_POST['caption'];
        $tanggal=$_POST['tanggal'];
        $komentar=$_POST['komentar'];
        $foto=$_FILES["foto"];
    }

?>