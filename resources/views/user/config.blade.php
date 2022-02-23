<?php

//Membuat Koneksi ke Database
$conn = mysqli_connect("localhost","root","","shopy");

function submit($data)
{
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = strtolower(stripslashes($data["password"]));

    //cek nama sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if (mysqli_fetch_assoc($result)) {
		echo " 
		<script> 
		alert('username yang dipilih sudah terdaftar, Silahkan buat username baru!');

		</script>";
		return false;
	}


    //tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}