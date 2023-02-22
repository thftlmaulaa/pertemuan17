<?php 
require 'function.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" href="style1.css">
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Halaman Registrasi</h1>
<form action="" method="post">


<div class="container">
            <form>
                <label>Username</label>
                <br>
                <input type="text">
                <br>
                <label for="password">password :</label>
				<br>
			    <input type="password" name="password" id="password">
				<br>
                <label for="password2">konfirmasi password :</label>
				<br>
			    <input type="password" name="password2" id="password2">
                <button>Register</button>
                <p> Sudah punya akun?
                  <a href="index.html">Login di sini</a>
                </p>
            </form>
        </div>
</body>
</html>