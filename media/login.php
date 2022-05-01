<?php 
session_start();


if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {


	$password = $_POST["password"];


    $resultpass = mysqli_query($conn, "SELECT * FROM user WHERE password = '$password'");

	// cek username
	if( mysqli_num_rows($resultpass) === 1 ) {
        //set session
		$_SESSION["login"] = true;
        
			header("Location: index.php");
			exit;
		}


	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">Wrong Password!</p>
<?php endif; ?>

<form action="" method="post">

	<ul>
		
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
			<button type="submit" name="login">Login</button>
		
	</ul>
	
</form>







</body>
</html>