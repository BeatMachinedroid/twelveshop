<?php 
//koneksi
$conn = new mysqli('localhost','root','','penjualankue');
if($conn->connect_error){
	die("Connection error". $conn->connect_error);
}
 
//tampil data dari database
$resultkue = $conn->query("SELECT namakue FROM kue");
if ($resultkue->num_rows > 0){
	while($row = $resultkue->fetch_assoc()){
        echo '
        <option value="" id="kue1">'.$row["namakue"].'</option>';
	}
}

?>