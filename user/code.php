<?php 
//koneksi
$conn = new mysqli('localhost','root','','penjualankue');
if($conn->connect_error){
	die("Connection error". $conn->connect_error);
}
 
//tampil data dari database
$result = $conn->query("SELECT namakue FROM kue");
if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
        echo $row["namakue"];
	}
}

?>