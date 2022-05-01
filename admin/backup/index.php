
<?php

require 'functions.php';

$daftar = query("SELECT * FROM dbase1"); 

$idn = $_GET["id"];

$content = query("SELECT * FROM dbase1 WHERE id = $id")[0];
   
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>HaiCony</title>
    <!--<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Petra Langenbacher">
    <meta name="author" content="Petra Langenbacher">
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template 
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <!--<a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">HaiCony</span>
            <span class="d-none d-lg-block">
         <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
         </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>-->
        
        <div class="navbar-collapse" >
            <ul class="navbar-nav">
            <?php foreach($daftar as $db) : ?>
                <li class="nav-item"> 
                    <a class="nav-link" href="#<?= $db["id"];?>">
                        <?= $db["judul"];?>
                    </a>
                </li>

                
            <?php endforeach ?>
                <!--<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">Belajar</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">File</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#international">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">File</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#interests">Note</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#projects">Video</a>
                </li>-->
            </ul>
        </div>
        
    </nav> 
    
    <?php foreach($daftar as $db) : ?>
    <!--CODE HASIL COPY DARI CODE ORI-->
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="">
        <div class="w-100">
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0"><?= $db["judul"]; ?></h3>
                    <div><?= $db["teks"];?></div>
                    <p></p>
                </div>
                <div class="resume-date text-md-right">
                    <a href="content2.php">
                    <span class="text-primary">More..</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach ?>








    <!--CODE ORI-->
    
    <!--<hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <h2 class="mb-5">Buku</h2>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Linux</a></h3>
                    <div class="subheading mb-3">Linux From Scratch</div>
                    <div>Linux Books</div>
                    <p></p>
                </div>
                <div class="resume-date text-md-right">
                    <a href="edit.php">
                    <span class="text-primary">More..</span>
                    </a>
                </div>
            </div>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">PDF file</h3>
                    <div class="subheading mb-3">PDF Extension Book</div>
                    <p>Download</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">more..</span>
                </div>
            </div>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Other</h3>
                    <div class="subheading mb-3">Etc</div>
                    <p>Other Things</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">More..</span>
                </div>
            </div>
        </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
        <div class="w-100">
            <h2 class="mb-5">Exp</h2>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Working student</h3>
                    <div class="subheading mb-3">Majalengka</div>
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
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="international">
        <div class="w-100">
            <h2 class="mb-5">International Experience</h2>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Voluntary work</h3>
                    <div class="subheading mb-3">Heart Children‘s Home, Malindi, Kenia</div>
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
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
        <div class="w-100">
            <h2 class="mb-5">Skills</h2>
            <h3 class="mb-0">Programming Languages &amp; Tools</h3>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Java">
                    <i class="fab fa-java"></i>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Android">
                    <i class="fab fa-android"></i>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="HTML">
                    <i class="fab fa-html5"></i>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="CSS">
                    <i class="fab fa-css3-alt"></i>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="JavaScript">
                    <i class="fab fa-js-square"></i>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="php">
                    <i class="fab fa-php"></i>
                </li>
                <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Adobe Photoshop">
                    <i class="fab fa-adobe"></i>
                </li>
            </ul>
            <h3 class="mb-0">Language skills</h3>
            <div class="subheading mb-3"></div>
            <ul class="fa-ul mb-0">
                <li>
                     <div class="subheading mb-3"> <i class="fa-li fa fa-volume-up"></i> German (native)</div>
                </li>
                <li>
                     <div class="subheading mb-3"> <i class="fa-li fa fa-volume-up"></i> English (C1)</div>
                </li>
                <li>
                     <div class="subheading mb-3"> <i class="fa-li fa fa-volume-down"></i> French (A2)</div>
                </li>
                <li>
                    <div class="subheading mb-3"> <i class="fa-li fa fa-volume-down"></i> Spanish (A2)</div>
                </li>
            </ul>
        </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
        <div class="w-100">
            <h2 class="mb-5">Interests</h2>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">Voluntary work</h3>
                    <div class="subheading mb-3">Agnes-Neuhaus-Heim, Bamberg</div>
                    <p>Voluntary work in a home for mentally ill people</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">since January 2018</span>
                </div>
            </div>
            <h3 class="mb-0">Activities</h3>
            <ul class="fa-ul mb-0">
                <li>
                    <div class="subheading mb-3"> <i class="fa-li fa fa-horse"></i> Horse riding (RA 4) </div>
                </li>
                <li>
                    <div class="subheading mb-3"> <i class="fa-li fa fa-water"></i> Diving (PADI Open Water Diver) </div>
                </li>
                <li>
                    <div class="subheading mb-3"> <i class="fa-li fa fa-plane"></i> Travelling </div>
                </li>
                <li>
                    <div class="subheading mb-3"> <i class="fa-li fa fa-running"></i> Fitness </div>
                </li>
            </ul>
        </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="projects">
        <div class="w-100">
            <h2 class="mb-5">Projects</h2>
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <a class="portfolio-item" id="popMaster">
                        <span class="caption">
                        <span class="caption-content">
                           <h2>Master thesis</h2>
                        </span>
                        </span>
                        <img class="img-fluid" src="img/masterthesis.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="portfolio-item" id="popUnmappd">
                        <span class="caption">
                        <span class="caption-content">
                           <h2>Unmappd</h2>
                        </span>
                        </span>
                        <img class="img-fluid" src="img/unmappd.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="portfolio-item" id="popTastyFreedom">
                        <span class="caption">
                        <span class="caption-content">
                           <h2>Tasty Freedom</h2>
                        </span>
                        </span>
                        <img class="img-fluid" src="img/tastyfreedom.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="portfolio-item" id="popStrawberryMuffin">
                        <span class="caption">
                        <span class="caption-content">
                           <h2>Strawberry &amp; Muffin</h2>
                        </span>
                        </span>
                        <img class="img-fluid" src="img/strawberrymuffin.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="portfolio-item" id="popEmvoi">
                        <span class="caption">
                        <span class="caption-content">
                           <h2>Emvoi</h2>
                        </span>
                        </span>
                        <img class="img-fluid" src="img/emvoi.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4">
                    <a class="portfolio-item" id="popFishbook">
                        <span class="caption">
                        <span class="caption-content">
                           <h2>Fishbook</h2>
                        </span>
                        </span>
                        <img class="img-fluid" src="img/fishbook.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Master Thesis
    <div class="modal fade" id="modalMaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Master Thesis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 modal-style small">Master thesis 'Computing in the Humanities' </p>
                    <p class="mb-0 modal-style">Subject: A collaborative tool for the acquisition and mapping of geospatial data</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Unmappd
    <div class="modal fade" id="modalUnmappd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Unmappd</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 modal-style small"> Project within the module 'Mobile Assistance Systems' (University of Bamberg)</p>
                    <p class="mb-0 modal-style">Android-Application: Geo-Game to discover Bamberg's nicest places of culture &amp; beer!</p>
                    <img class="img-fluid" src="img/unmappd.png" alt="">
                    <p class="mb-0 modal-style"> Game design summary:
                        <br/> Unmapped combines the very best parts of the city of Bamberg - Beer and Culture. Up to four players or teams of players compete in estimating the distance of their position as well as the geographic direction to places of cultural interest and breweries. The app is a spatial exploration game. The game has been designed as a playful approach to build the players’ mental maps of Bamberg. It takes only a few minutes to get familiar with the rules and the smartphone interface. Unmappd is generally played as a pedestrian game. With the game being round based, it is an ideal choice for applications where the time frame is potentially flexible and depends on the players available time and motivation. Therefore, the game can be played with one to four rounds. Unmappd can be played in simple or advanced modus, which challenges the players to make more accurate direction guesses.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tasty Freedom
    <div class="modal fade" id="modalTastyFreedom" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tasty Freedom</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 modal-style small"> Project within the module '3D Project' (Universidade da Madeira)</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video width="800" height="450" src="media/tastyfreedom.mp4" controls></video>
                    </div>
                    <p class="mb-0 modal-style">3D modelling and animation, creation of a short trailer of an 3D Animation movie.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary videobutton" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Strawberry&Muffin
    <div class="modal fade" id="modalStrawberryMuffin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Strawberry &amp; Muffin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0  modal-style small"> Private project</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="video" width="800" height="450" src="media/strawberrymuffin.mp4" controls></video>
                    </div>
                    <p class="mb-0  modal-style">Short 3D Animation movie about the love between a strawberry and a muffin.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Emvoi
    <div class="modal fade" id="modalEmvoi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Emvoi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 modal-style small"> Project within the module 'Embodied Interaction' (Universidade da Madeira)</p>
                    <p class="mb-0  modal-style">‘EMVOI’ is an Embodied Volume Indicator that reacts to the sound intensity of its environment by imitating different human expressions depending on the volume level. The artefact consists of a shape similar to a dog that contains an Android phone. To monitor the volume level the microphone sensor of Android is used while the Accelerometer sensor is supposed to measure the direct interaction with the user.</p>
                    <img class="img-fluid" src="img/emvoi.JPG" alt="">
                    <p class="mb-0  modal-style">The primary field of application is the classroom environment of primary schools, because school children are exposed to various types of noise. Previous research has shown that noise has detrimental effects upon children’s performance at school, including reduced memory, motivation, and reading ability [3]. EMVOI is supposed to promote an appropriate noise level by increasing the children’s self-awareness as well as the empathy towards other people by showing emotions that directly result from their behaviour.As an ethnographic research method interviews with primary school teachers and future teachers were used to find out more about their strategies to maintain and improve the working environment in their classroom. Those outcomes were considered in the implementation of the artefact.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Fishbook
    <div class="modal fade" id="modalFishbook" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Fishbook</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 modal-style small"> Project within the module 'Interaction Design Methods' (Universidade da Madeira)</p>
                    <p class="mb-0 modal-style">Prototypical development of an Android app for divers using interaction design methods.</p>
                    <img class="img-fluid" src="img/fishbook2.JPG" alt="">
                    <p class="mb-0 modal-style">Interaction design methods included: </p>
                    <ul>
                        <li>Interviews</li>
                        <li>Personas</li>
                        <li>Storyboards</li>
                        <li>Moodboard</li>
                        <li>User Tests</li>
                        <li>Behavioral Mapping</li>
                        <li>Five Whys</li>
                        <li>User Tests</li>
                        <li>Empathy Tools</li>
                        <li>System Usability Scale</li>
                    </ul>
                    <img class="img-fluid" src="img/fishbook1.JPG" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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