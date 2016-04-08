<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link href="css/scrolling-nav.css" rel="stylesheet" type="text/css"/>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Meredith Browne | Web Development Portfolio</title>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="container-fluid">
        <header class="row">
            <?php include 'view/header.php'; ?>
        </header>
        
        <!-- HOME SECTION -->
        <section id="home" class="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Meredith Browne</h1>
                        <h2>Web Development Portfolio</h2>
                        <a class="btn btn-default page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ABOUT SECTION -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>About</h2>
                        <img src="img/mere.jpg" id="mere-pic" class="img-circle">
                        <span></span>
                        <h3>Education</h3>
                        <h4>University of North Carolina - Charlotte</h4>
                        <span>Bachelor of Arts in Computer Science</span><br>
                        <span>Concentration on Web & Mobile Application Development</span><br>
                        <br>
                        <h4>Appalachian State University</h4>
                        <span>Bachelor of Science in Communication Disorders</span><br>
                        <h3>Skills</h3>
                        <span>HTML</span><br>
                        <span>CSS</span><br>
                        <span>JavaScript</span><br>
                        <span>MySQL</span><br>
                        <span>Java</span><br>
                        <span>PHP</span><br>
                        <span>Bootstrap Framework</span><br>
                        <span>Android Application Development</span><br>
                        <span>Prototyping using Axure RP and Balsamiq</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- PROJECTS SECTION -->
        <section id="projects" class="projects-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Projects</h2>
                        <div class="row">
                            <div class="project-table col-md-4 col-sm-4">
                                <a href="projects/worldcities/">
                                    <h3>World Cities</h3>
                                    <img src="img/world-cities.jpg">
                                </a>
                                <h4>Description</h4>
                                <span>Created for ITIS4166</span><br>
                                <span>Network-Based Application Development</span><br>
                                <span>Integrates Google Maps API</span><br>
                                <span>Bootstrap Framework</span>
                                <br>
                            </div>
                            <div class=" project-table col-md-4 col-sm-4">
                                <a href="projects/stonecenter/">
                                    <h3>Stone Center</h3>
                                    <img src="img/stone-center.jpg">
                                </a>
                                <h4>Description</h4>
                                <span>Created for ITIS2300</span><br>
                                <span>Intro to Web Application Development</span><br>
                                <span>HTML, CSS, & JavaScript</span><br>
                                <span>&nbsp;</span>
                            </div>
                            <div class="project-table col-md-4 col-sm-4">
                                <a href="projects/spotfinder/">
                                    <h3>SpotFinder</h3>
                                    <img src="img/spot-finder.jpg">
                                </a>
                                <h4>Description</h4>
                                <span>Created for ITIS3130</span><br>
                                <span>Human-Computer Interaction</span><br>
                                <span>Mobile Application Prototype</span><br>
                                <span>HTML, CSS, & JavaScript</span><br>
                                <span>Google Maps API</span>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="project-table col-md-4 col-sm-4">
                                <a href="projects/axure_prototype/">
                                    <h3>Fraction Concentration</h3>
                                    <img src="img/fraction-concentration.jpeg">
                                </a>
                                <h4>Description</h4>
                                <span>Created for ITIS3150</span><br>
                                <span>Rapid Prototyping</span><br>
                                <span>High Fidelity Axure Prototype</span><br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CONTACT SECTION -->
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 container">
                        <?php include 'contact_manager/add_contact.php'; ?>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="row">
            <?php include 'view/footer.php'; ?>
        </footer>
        
        <!-- JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/npm.js" type="text/javascript"></script>
        <script src="js/jquery-2.2.0.min-2.js" type="text/javascript"></script>
        <script src="js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="js/scrolling-nav.js" type="text/javascript"></script>
    </body>
</html>

