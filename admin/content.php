<?php

session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

	require 'functions.php';	

	$id = $_GET["id"];

	$content = query("SELECT * FROM dbase1 WHERE id = $id")[0];

if(isset($_POST["save"])){


	//var_dump($_POST); die;

if( edit($_POST) > 0 ) {
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
<title>Edit</title>
</head>
<body style="background-color:grey">
<a>Edit</a>
<form action="" method="post">
	<input type="hidden" name="id" value="<?=$content["id"]?>">
	<textarea type="textarea" name="judul" cols="200" rows="1" required autocomplete="off"><?= $content["judul"]; ?></textarea>
	<br></br>
	<textarea type="textarea" name="content" cols="200" rows="40" autocomplete="off"><?= $content["teks"]; ?></textarea>
	<button type="submit" name="save">Save</button>
</form>
<a href = "add.php">
	<button>add</button>
</a>
<a href="delete.php?id=<?= $content["id"]; ?>" onclick="return confirm('Yakin?');">
<button>Delete</button></a>
</body>
</html>

