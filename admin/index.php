<?php

session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';

    $daftar = query("SELECT * FROM dbase1");

    //tombol search ditekan
    if(isset($_POST["cari"])){
        $daftar = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin</title>
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <section>
        <div class="main bg-dark">
            <!-- navbar -->
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <!-- SEARCH BAR -->
                        <form class="d-flex mr-4" action="" method="post">
                            <input class="form-control navbar-dark bg-dark mr-2" type="search" name="keyword" placeholder="Search Something.." autocomplete="off">
                            <button class="btn btn-outline-primary btn-sm" type="submit" name="cari">Search</button>
                        </form>
                    <!-- END SEARCH BAR -->
                    <ul class="navbar-nav text-center mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../media/index.php">File Manager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Add</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More..
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="media/file.php">Add file</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
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
            <!-- judul -->
            <div class="row navbar-dark con">
                <div class="col-md-2 judul text-center">
                    <div class="list-group bg-dark" id="list-tab" role="tablist">
                            <?php foreach($daftar as $db) : ?>
                                <a class="list-group-item list-group-item-action bg-dark font border-judul font-judul" href="index.php?id=<?=$db["id"];?>" role="tab" aria-controls="home">
                                    <?= $db["judul"];?>
                                </a>
                            <?php endforeach ?>
                    </div>
                </div>
            <!-- content -->
                            <?php
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
                <div class="col-md">
                    <form class="" action="" method="post">
                    <input type="hidden" name="id" value="<?=$content["id"]?>">
                        <input class="bg-dark font judul-content mb-2 mt-2" type="textarea" name="judul" rows="1" required autocomplete="off" value="<?= $content["judul"]; ?>"></input>
	                    <br>
                        <textarea type="textarea" name="content" class="bg-dark teks font mb-1"><?= $content["teks"]; ?></textarea>
                            <button type="submit" class="btn btn-primary btn-sm btn-block mb-1" name="save">Save</button>
                    </form>
                    <a href="delete.php?id=<?= $content["id"]; ?>" onclick="return confirm('Yakin?');">
                                <button class="btn btn-warning btn-sm btn-block mb-2">Delete</button></a>
                </div>
            </div>
            </div>
            </section>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>




