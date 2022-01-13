<?php
session_start();

include "./connection/koneksi.php";

//dapatkan data user dari form register
$user = [
	'username' => $_POST['username'],
	'nama' => $_POST['nama'],
    'telp' => $_POST['telp'],
    'alamat' => $_POST['almt'],
	'password' => $_POST['pass'],
	'password_confirmation' => $_POST['repass'],
];

//validasi jika password & password_confirmation sama

if($user['password'] != $user['password_confirmation']){
	$_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
	$_SESSION['username'] = $_POST['username'];
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['telp'] = $_POST['telp'];
    $_SESSION['alamat'] = $_POST['almt'];
	header("Location: /register.php");
	return;
}

//check apakah user dengan username tersebut ada di table users
$query = "select * from acoount where username = ? limit 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

//jika username sudah ada, maka return kembali ke halaman register.
if($row != null){
	$_SESSION['error'] = 'Username: '.$user['username'].' yang anda masukkan sudah ada di database.';
	$_SESSION['nama'] = $_POST['nama'];
    $_SESSION['telp'] = $_POST['telp'];
    $_SESSION['alamat'] = $_POST['almt'];
	$_SESSION['password'] = $_POST['pass'];
	$_SESSION['password_confirmation'] = $_POST['repass'];
	header("Location: /register.php");
	return;
}else{
    //hash password
	$password = password_hash($user['password'],PASSWORD_DEFAULT);

	//username unik. simpan di database.
	$query = "insert into acoount (username, nama, telp, alamat, password) values  (?,?,?,?,?)";
	$stmt = $mysqli->stmt_init();
	$stmt->prepare($query);
	$stmt->bind_param('sssss', $user['username'], $user['nama'], $user['telp'], $user['alamat'], $user['password']);
	$stmt->execute();
	$result = $stmt->get_result();
	var_dump($result);

	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
	header("Location: login.php");
}

?>