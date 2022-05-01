<?php

    require 'admin/functions.php';

    $daftar = query("SELECT * FROM dbase1");

    //tombol search ditekan
    if(isset($_POST["cari"])){
        $daftar = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Cony Server">
    <meta name="author" content="Cony Server">
    <title>Cony</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style/styles.css" type="text/css" media="screen" rel="stylesheet">
</head>

<body class="bg-dark" id="page-top">
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <a class="navbar-brand js-scroll-trigger" href="#home">Cony</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#file">File</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#admin">Admin</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#page-top">Note</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- LINUX NOTE -->
    <hr class="m-0 bg-dark">
        <section class="resume-section p-3 p-lg-5 bg-dark" id="note">
            <!-- search bar -->
            <form class="d-flex my-lg-0 p-3 bg-dark" action="#page-top" method="post">
                <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search.." autocomplete="off">
                <button class="btn btn-primary" type="submit" name="cari">Search</button>
            </form>
    <div class="row bg-dark pt-2">
            <!-- Judul -->
                <div class="col-md-2 pt-4">
                    <div class="list-group mt-4 judul">
                        <?php foreach($daftar as $db) : ?>
                            <a href="index.php?id=<?=$db["id"];?>" class="list-group-item list-group-item-action list-group-item-dark text-center"><?= $db["judul"];?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            <!-- Content -->
            <div class="col-md-10 resume-item mb-5 pt-3 bg-dark teks">
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
                        <h2 class="mb-0"><?= $content["judul"]; ?></h2>
                        <div class="p-2"><p class="class"><?= $content["teks"]; ?></p></div>
            </div>
    </div>
    </section>
<!-- HOME -->
    <hr class="m-0 bg-dark">
    <section class="resume-section" id="home">
    <div class="jumbotron jumbotron-fluid jumbotron-img">
        <div class="container">
            <h1 class="display-4 text-md-center">Fluid jumbotron</h1>
            <h1 class="lead text-md-center">This is a modified jumbotron that occupies the entire horizontal space of its parent.</h1>
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg js-scroll-trigger" href="#page-top" role="button">Learn more</a>
        </div>
    </div>
    <div class="kontent bg-dark">
    <a href="www.instagram.com/hai.cony/"><i class="bi bi-instagram"></i></a>
    <a href="https://github.com/petralangenbacher">
                        <i class="fab fa-github"></i>
                    </a> <br><br><br><br><br><br><br><br><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolore amet architecto? Quibusdam fugiat et culpa ipsum dignissimos cupiditate aliquid amet quos repellendus praesentium, aut quod illo ea ratione nesciunt corrupti nobis quae numquam? Saepe velit tempore in quod sapiente distinctio quae assumenda odit ratione vitae, sit nostrum cum fugit quos explicabo sequi inventore incidunt odio excepturi? In quaerat officia officiis laborum recusandae? Sunt ipsa ducimus ad voluptate esse repellendus delectus aperiam dignissimos, provident earum magnam veritatis iusto tempora eius in voluptates quod praesentium atque nam rem explicabo optio ipsam perspiciatis? Ipsum adipisci debitis nemo deserunt minus aut doloribus asperiores!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea reiciendis labore fugiat tempora quae, architecto eum, ullam deleniti harum fuga doloribus reprehenderit facere quisquam quis nihil quos, dolores alias! Quibusdam quis at quaerat in! Architecto officia labore cupiditate excepturi culpa amet laboriosam qui laborum animi aliquam provident blanditiis distinctio consequuntur ratione eaque neque, hic quis. Officia ut tenetur sapiente debitis dolorem molestias eligendi esse consequuntur tempore, accusantium sit corporis, necessitatibus corrupti beatae ipsa obcaecati doloribus quia animi. Quae tempora optio qui, eum odio sapiente voluptatibus obcaecati. Soluta in perspiciatis nemo quia, dolores sequi ab ipsum totam ea delectus voluptatum impedit, nam odio. Facilis saepe eveniet repudiandae, commodi optio neque nostrum sapiente tempora nobis laborum! Enim explicabo iure nemo sequi, autem similique quia ad exercitationem nisi, eligendi natus aliquid quod molestiae, molestias iusto recusandae. Unde illum nobis quia molestiae alias temporibus quidem eius, minima, saepe dolores dignissimos hic animi modi, suscipit nostrum? Similique nulla numquam commodi. Sunt, aliquid ut excepturi commodi reiciendis quo, et eaque dolorum deleniti fuga consequatur nostrum laudantium optio labore laborum accusantium totam aspernatur corrupti inventore, veritatis voluptas. Quam rerum pariatur, ipsa quibusdam ducimus temporibus vel nostrum dolorem eum tempore tenetur libero illo ratione provident aliquid quisquam veritatis accusamus asperiores enim? Quidem nisi, aspernatur quasi suscipit consequuntur officia amet impedit. Autem magni odio natus quibusdam vel officia, impedit minus nulla, illum suscipit voluptatem fugiat dolorem sapiente reprehenderit beatae commodi temporibus placeat sint quaerat nobis voluptatum atque inventore? Voluptate quas similique nesciunt impedit labore maiores sequi nobis maxime nulla autem, iste et sint quisquam in sed explicabo optio magnam eius? Enim, praesentium veniam? Laborum odit dicta commodi, fugit soluta nulla aliquid voluptas quisquam quia explicabo assumenda, dolore minus autem? Optio corrupti cum porro ex adipisci esse ipsum, officiis tempore, ad, iure blanditiis quasi soluta eius? Eaque officia maiores quae quis aliquid a esse modi delectus, maxime deserunt? Natus, sit ipsa ab modi vero quo ullam, debitis atque quisquam voluptates adipisci optio cum iure ad! Commodi mollitia corrupti ipsam illum non voluptate fugiat sint velit exercitationem modi illo magni deleniti ducimus, quos ab autem minima aut laboriosam laudantium unde iusto libero quis consequuntur quidem? Quis tenetur sunt dolores molestias laudantium vero culpa consequuntur consequatur vel accusantium, debitis aliquam ducimus voluptates in corrupti, sapiente doloribus praesentium! Accusamus tempore aperiam pariatur voluptatum molestias impedit, mollitia atque fugit eaque deleniti quaerat, laboriosam ipsam?</p>
                    </div>
    </section>
<!-- FILE (NEXT UPDATE) -->
    <!-- <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="file">
        <div class="w-100">
            <h2 class="mb-5">Work Experience</h2>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Working student - Software Development Java</h3>
                    <div class="subheading mb-3">Mediengruppe Oberfranken GmbH &amp; Co. KG, Bamberg</div>
                    <p>Development and adaptation of java applications</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">November 2019 - Present</span>
                </div>
            </div>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Working student - Software Testing</h3>
                    <div class="subheading mb-3">DOCUFY GmbH, Bamberg</div>
                    <p>Error analysis, Software-Tests</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">April 2018 - October 2019</span>
                </div>
            </div>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Working student - Online Editing &amp; Online Marketing</h3>
                    <div class="subheading mb-3">eventsofa GmbH, Berlin</div>
                    <p>Text production, Content Marketing, Search Engine Optimization</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">July 2017 - January 2018</span>
                </div>
            </div>
        </div>
    </section> -->
<!-- ADMIN (NEXT UPDATE) -->
    <!-- <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="admin">
        <div class="w-100 bg-dark">
            <h2 class="mb-5">Admin</h2>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Go To Admin Page</h3>
                    <div class="subheading mb-3">Note & File setup</div>
                    <p>Social work with children</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">September 2016</span>
                </div>
            </div>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Year abroad (Work &amp; Travel)</h3>
                    <div class="subheading mb-3">Australia</div>
                    <p>Year abroad with occasional jobs (farm work, housekeeping)</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">May 2013 - May 2014</span>
                </div>
            </div>
        </div>
    </section> -->
<!-- ABOUT -->
    <div class="container-fluid p-0">
        <section class="resume-section p-3 p-lg-5 d-flex align-items-center bg-dark" id="about">
            <div class="w-100 bg-dark">
                <h1 class="mb-0">Cony
                  <span class="text-primary">Server</span>
               </h1>
                <div class="subheading mb-5">Fleischstraße 11 · 96047 Bamberg ·
                    <!-- <a href="mailto:petra.langenbacher@web.de">petra.langenbacher@web.de</a> -->
                </div>
                <p class="lead mb-5">Hi there! My name is Petra Langenbacher and I am a Master student in ‘Computing in the Humanities’ at the University of Bamberg. </p>
                <p>After finishing my Bachelor in Communication studies with Media Computer Science as my minor subject in 2017, I realised that I am even more interested in Computer Science and Programming, so I decided to switch to that totally different subject. </p>
                <p>Since then I was able to gain knowledge and experience while attending different courses at university but also working as a working student in Software Testing and Web Development. </p>
                <p class="lead mb-5"> </p>
                <div class="social-icons text-md-center">
                    <a href="https://www.linkedin.com/in/petra-langenbacher/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/petralangenbacher">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/petra.langenbacher">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/hai.cony/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </section>
        <div class="cp mb-5 bg-dark text-md-center"><p>dasjdhgasd</p></div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/main.js"></script>
</body>

</html>