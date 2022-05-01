<?php
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
	<title>Cony Admin</title>
</head>
<body style="background-color:grey;">

<form action="" method="post">
	<p>
		<input type="text" name="add" id="add" cols="100" required></input>
	</p>
	<p>
		<textarea type="text" name="note" id="add" cols="150" rows="30"></textarea>
		<br></br>
		<button type="submit" name="submit">Add</button>
	</p>
</form>
	
</body>
</html>


