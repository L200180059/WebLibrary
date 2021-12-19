<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'functions.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

//mendeteksi admin atau staff
$deteksi = mysqli_fetch_array($data);
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
	if($cek > 0){
		if ($deteksi['level']=='admin') {
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = "admin";
			echo "<script>alert('Berhasil melakukan proses login');document.location.href='index.php?user=$username';</script>";
		}else{
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = "member";
			$_SESSION['id_user'] = $deteksi['id'];
			echo "<script>alert('Berhasil melakukan proses login');document.location.href='indexmember.php?user=$username';</script>";
		}
	}else{
		echo "<script>alert('Gagal melakukan login, coba lagi');</script>";
		header("location:login.php?pesan=gagal");
	}
?>