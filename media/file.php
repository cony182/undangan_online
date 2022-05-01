<?php
    require 'functions.php';

    $tampil = mysqli_query($conn, "SELECT * FROM files");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>File</title>
    </head>
<body>
    <form action="act.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files"><br>
        <button type="submit" name="upload">Add</button>
    </form>
    <?php while($data = mysqli_fetch_array($tampil)): ?>
        <tr>
            <td>
            <img src="<?= "files/".$data['file']; ?>">
            </td>
        </tr>
    <?php endwhile ?>
</body>
</html>