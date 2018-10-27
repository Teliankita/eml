<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <link rel="stylesheet" href="css/design.css">
  <link rel="stylesheet" href="css/style.css">
  

  </head>
<body>
       <!--Navbar-->

    <nav class="navbar navbar-default color fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="eML 2K18" src="images/encounter.png" style="max-width: 50%;">
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
                    <li class="act">
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
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>

            </div>
            <br>
     

    <img>
      <center><h1>Sign upform</h1>
<p style="color: white;">Please fill in this for joining to the workshop.</p>
</center>


       <div class="container">
           <form action="process.php" method="POST" enctype="multipart/form-data">
           
    <label style="color: white;" for="Username">Username:</label>
                                    <input type="Username" class="form-control" id="Username" placeholder="Enter Username" name="uname">
                        <label style="color: white;"for="Organication name">Organication name:</label>
                                    <input type="Organication name" class="form-control" id="Oame" placeholder="Enter Organication name" name="Oname">
                                
                                  <label style="color: white;" for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                 
                                  <label style="color: white;" for="Paper">Paper:</label>
                                    <input type="paper" class="form-control" id="paper" placeholder="Enter Enter Based on Paper(ex-IEEE,etc)" name="paper">
                                  
                                  <label style="color: white;" for="Address">Address:</label>
                                    <input type="Address" class="form-control" id="Address" placeholder="Enter Address" name="Address">
                                 
                                  <label style="color: white;" for="Phone number">Phone number:</label>
                                    <input type="phone number" class="form-control" id="pnumber" placeholder="Enter phone number" name="pnumber">
                                
                                <label style="color: white;" for="Phone number">Gender:</label>
                                <select id="gen" name="gen" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                       
                                      </select>
                                      <label style="color: white;" for="Upload File">Upload File:</label>
                                      <input type="Upload File" class="form-control" id="myFile" placeholder="Enter Pdf File" name="img" multiple>
 <input type="file" >
 <br>
 <input type="checkbox"><a href="Termes And Condicatin.php" target="_blank">Termes And Condicatin</a><br>

 <button type="button" class="btn btn-danger" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></a>
 <button type="submit" class="signupbtn btn btn-success" id="sign_up" name="sign_up">Sign Up</button>

                                      </form>

  



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
                    <li>
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

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
    </footer>
    <!-- Footer end -->
            </div>  

                </body>
              </html>
              
