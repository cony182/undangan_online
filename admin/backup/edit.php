<?php
    require 'functions.php';

    $daftar = query("SELECT * FROM dbase1");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cony Admin</title>
</head>
<body style="background-color:grey;">

<p>
        <?php foreach($daftar as $db) : ?>
    <ul>
        
        <a href = "content.php?id=<?=$db["id"];?>">
        <?= $db["judul"];?></a>
    </ul>
        <?php endforeach ?>

</p>
<a href = "add.php">
	<button>add</button>
</a>
</body>
</html>

