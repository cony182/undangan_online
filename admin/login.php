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
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Add</title>
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styleadd.css">
</head>
<body>
	<div class="main-login bg-dark">
            <!-- navbar -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../media/index.php">File Manager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More..
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="media/file.php">Add file</a>
                        <a class="dropdown-item" href="#">About</a>
                        </div>
                    </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="#">Cony Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
			</nav>
		<!-- Input -->
			<div class="col-md-12 d-flex justify-content-center bg-dark my-5">
				<div class="col-md-5 bg-dark my-5">
				<br>
				</div>	
			</div>
			<div class="col-md-12 d-flex justify-content-center">
				<div class="col-md-5 d-flex">
				<h1 class="bg-dark font my-2">Login</h1>
				</div>
			</div>
			<div class="col-md-12 d-flex justify-content-center bg-dark">
				<div class="col-md-5 d-flex container-input justify-content-center bg-dark mb-2">
					<form class="container-form d-flex justify-content-center bg-dark my-5" action="" method="post">
							<?php if( isset($error) ) : ?>
								<p style="color: red; font-style: italic;">Wrong Password!</p>
							<?php endif; ?>
						<input class="form-control bg-dark mb-1" type="password" name="password" id="password">
						<button class="btn btn-sm btn-primary ml-2" type="submit" name="login">Login</button>
					</form>
				</div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>			



	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Login</h1>



<form action="" method="post">

	<ul>
		
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
			<button type="submit" name="login">Login</button>
		
	</ul>
	
</form>







</body>
</html> -->