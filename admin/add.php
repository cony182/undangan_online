<?php

session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

	require 'functions.php';	
	//$dbs = query("SELECT * FROM dbase1");

	//cek apakah tombol add sudah di tekan
	if(isset($_POST["submit"])){

	if( add($_POST) > 0 ) {
		echo "
		<script>
			alert('gagal');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('berhasil');
			document.location.href = 'index.php';
		</script>
	";
	}
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
	<div class="main bg-dark">
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
			<div class="col-md-12">
				<div class="col-md-11 container-input justify-content-center">
					<form class="container-form" action="" method="post">
							<input class="bg-dark mb-3 input-judul font" type="textarea" rows="1" name="add" id="add" required placeholder="Masukkan Judul.." autocomplete="off"></input>
							<textarea class="bg-dark mb-4 input-text font" type="text" name="note" id="add" placeholder="Masukkan Catatan.." autocomplete="off"></textarea>
							<button class="btn btn-sm btn-block btn-success mb-3" type="submit" name="submit">Add</button>
					</form>
				</div>
				<br>
			</div>
		<!-- <form action="" method="post">
			<p>
				<input type="text" name="add" id="add" cols="100" required placeholder="Masukkan Judul.." autocomplete="off"></input>
			</p>
			<p>
				<textarea type="text" name="note" id="add" cols="150" rows="30" placeholder="Masukkan Catatan.." autocomplete="off"></textarea>
				<br></br>
				<button type="submit" name="submit">Add</button>
			</p>
		</form> -->
	</div>


	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>


