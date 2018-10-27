<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--google icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/speach1.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>Speaker</title>
</head>
<script>
    var i = 0;
    var txt = 'Our Speakers of eCounter Machine Learning 11 August 2018';
    var speed = 50;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
</script>


<body onload="typeWriter()">
<!--Navbar-->

<nav class="navbar navbar-default color">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="eML 2K18" src="images/encounter.png" style="max-width: 35%;" style="max-width: 50%;">
                </a>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li>
                      <a href="about.php">About</a>
                  </li>
                  <li>
                      <a href="speach.php">Speakers</a>
                  </li>
                  
                  <li>
                      <a href="chart.php">Schedule</a>
                  </li>
                  <li  class="act">
                      <a href="contact.php">Contact</a>
                  </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    

    <div class="container">
            <div class="bg-img">
                    <img src="images/speaker1.jpg" style="max-width: 100%">
                </div>
        <h2 style="text-align: center;">
            <h2 style="color:#F79F1F" id="demo"></h2>
        </h2>
        <br>
        <br>
        <br>

        <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="ulrich.php" class="thumbnail">
                    <img class="img" src="images/unin.jpg" />
                    <p style="text-align:center">Ulrich Bodenhausen
                        <br> AI Coaching</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="crist.php" class="thumbnail">
                    <img class="img" src="images/crist.jpg" />
                    <p style="text-align:center">Christoph Henkelmann
                        <br>DIVISIO</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="reddy.php" class="thumbnail">
                    <img class="img" src="images/skreddy.jpg" />
                    <p style="text-align:center">SK Reddy
                        <br>Hexagon</p>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="faktion.php" class="thumbnail">
                    <img class="img" src="images/img2.jpg" />
                    <p style="text-align:center">Aleksandra Vercauteren
                        <br>Faktion</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">

                <a href="peter.php" class="thumbnail">
                    <img class="img" src="images/new1.jpg" />
                    <p style="text-align:center">Markus Nutz
                        <br>freeyou AG</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="picard.php" class="thumbnail">
                    <img class="img" src="images/new.jpg" />
                    <p style="text-align:center"> Thomas Pawlitzki
                        <br>freeyou AG</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="wilken.php" class="thumbnail">
                    <img class="img" src="images/wilken.jpg" />
                    <p style="text-align:center">Jeremy Wilken
                        <br>Design for Voice</p>

                </a>
            </div>
        </div>
    </div>
     <!--footer-->
     <footer id="footer" class="footer text-center" style="padding: 2rem 0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-menu">
                            <ul class="nav unstyled">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                      <a href="about.php">About</a>
                  </li>
                  <li>
                      <a href="speach.php">Speakers</a>
                  </li>
                  
                  <li>
                      <a href="chart.php">Schedule</a>
                  </li>
                  <li  class="act">
                      <a href="contact.php">Contact</a>
                  </li>
                            </ul>
                        </div>

                        

                        <!-- Footer menu end -->
    
                        <div class="footer-logo">
                            <h2 style="color: rgba(202, 34, 152, 0.719); text-decoration: underline">eML 2K18</h2>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer social end -->
                        <div class="copyright-info">
                            <span>Copyright © 2018 eML. All Rights Reserved.</span>
                        </div>
                        <!-- Copyright info end -->
                    </div>
                    <!-- Content col end -->
                </div>
                <!-- Content row end -->
            </div>
            <!-- Container end -->
    


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa "
        crossorigin="anonymous "></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js "></script>
    <script src="\F:\EML\eML\js\js.js"></script>
</body>

</html>