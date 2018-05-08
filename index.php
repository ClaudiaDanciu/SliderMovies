<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SkyMovieSlider</title>
    <meta name="description" content="SkyMovieSlider">
    <link href="css/style.css" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
    <!--JQuery-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--Ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--JQuery-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--Main CSS-->
    <script src="js/main.js"></script>
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Fonts-->
    <link href='css/sky-medium.woff' rel='stylesheet' type='text/css'>
    <link href='css/sky-regular.woff' rel='stylesheet' type='text/css'>
    <!--tabimage-->
    <link rel="shortcut icon" href="images/logo.png"/>

</head>
<body>
    <!-- Navigation -- Drop down menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="container">
        <a class="navbar-brand " href="index.php"><img class="logo" src="images/logo.png" style="height: 40px;" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav navbar-left container-fluid">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MoodSlider</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#uploads">Uploads</a>
                                <a class="dropdown-item" href="#sliderson">Sliders</a>
                                <a class="dropdown-item" href="">Movies</a>
                            </div>
                    </li>        
                    <li class="nav-item">
                        <a class="nav-link" href="#movies">About Me</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#end">Contact</a>
                    </li>
                  </ul>
    </nav>
        
<!-- End navigation -->
<!-- main page content --> 
<div id="main" class="top-margin">
    <article class="post">
       <!--Logo/Title/Upload--> 
        <div class="row container">
            <div class="col-md-3">
                <img src="images/logo.png" alt="sky" id="logoleft" data-holder-rendered="true" >   
            </div>
            <div class=" col-md-9">
                <!--Title-->
                <h2 class="title bg-light">Sky Cinema</h2>
                <!--End Title-->
                <!--Upload/submit Form-->
                <form action="upload.php" method="post" enctype = "multipart/form-data" id="uploads">
                    <div class="row">
                         <!--Upload-->
                        <div class="col-md-4">
                            <input type="file" name="file" id="file" class="inputfile" />
                            <label for="file" style=" margin-left: 20%">Upload Content</label>
                        </div>
                        <!--End Upload-->
                        <!--Submit-->
                        <p style="align-content: center; margin-left: 13% ">|</p>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Moodslider"/>
                        </div>
                         <!--End Submit-->
                    </div>
                </form>
                 <!--End Upload/submit Form-->
            </div>
        </div>  
       <!--End-Logo/Title/Upload -->
 <!-- Sliders and Movies-->      
<div class="row container">
    <!--Sliders--> 
      
    <div class="mood-sliders col-md-12" id="sliderson">
        <!-- Slider for Agitated and Calm= First Slider-->
        <div class="row mood">
            <h4 class="col-md-2 left-mood">Agitated</h4>
            <div class="col-md-8 slider" id="slider-1"></div>
            <h4 class="col-md-2 right-mood">Calm</h4>
        </div>
        <!-- End Slider for Agitated and Calm= First Slider-->
        <!-- Slider for Happy and Sad= Second Slider-->
        <div class="row mood">
            <h4 class="col-md-2 left-mood">Happy</h4>
            <div class="col-md-8 slider" id="slider-2"></div>
            <h4 class="col-md-2 right-mood">Sad</h4>
        </div>
        <!-- End Slider for Happy and Sad= Second Slider-->
        <!-- Slider for Tired and Wide Awake= Third Slider-->
        <div class="row mood">
            <h4 class="col-md-2 left-mood">Tired</h4>
            <div class="col-md-8 slider" id="slider-3"></div>
            <h4 class="col-md-2 right-mood">Wide Awake</h4>
        </div>
        <!-- End Slider for Tired and Wide Awake= Third Slider-->
        <!-- Slider for Scared and Fearless= Forth Slider-->
        <div class="row mood">
            <h4 class="col-md-2 left-mood">Scared</h4>
            <div class="col-md-8 slider" id="slider-4"></div>
            <h4 class="col-md-2 right-mood">Fearless</h4>
        </div>
        <!-- End Slider for Scared and Fearless= Forth Slider-->
    </div>
    <!--End- Sliders--> 
    
    <!--Images/Titles--> 
        <div class="row col-md-12 " id="movies">
            <!-- First movie-->
            <div class="col-md-2     col-md-offset-2">
                <div class="thumbnail">
                    <img id="image1"   style="width:100%;"><h2 id="nocontent1">No Content</h2>
                    <div class="caption">
                        <p id="title1">No Content</p>
                    </div>
                </div>
            </div>
            <!-- End First movie-->
            <!-- Second movie-->
            <div class="col-md-2">
                <div class="thumbnail">
                    <img id="image2"  style="width:100%;"><h2 id="nocontent2">No Content</h2>
                    <div class="caption">
                        <p id="title2">No Content</p>
                    </div>
                </div>
            </div>
            <!-- Second movie-->
            <div class="col-md-2">
                <div class="thumbnail">
                    <img id="image3" style="width:100%;"><h2 id="nocontent3">No Content</h2>
                    <div class="caption">
                        <p id="title3">No Content</p>
                    </div>
                </div>
            </div>
            <!--End Second movie-->
            <!--Third movie-->
            <div class="col-md-2">
                <div class="thumbnail">
                    <img id="image4" style="width:100%"><h2 id="nocontent4">No Content</h2>
                    <div class="caption">
                        <p id="title4">No Content</p>
                    </div>
                </div>
            </div>
            <!--End Third movie-->
            <!--Fourth movie-->
            <div class="col-md-2">
                <div class="thumbnail">
                    <img id="image5" style="width:100%"><h2 id="nocontent5">No Content</h2>
                    <div class="caption">
                        <p id="title5">No Content</p>
                    </div>
                </div>
            </div>
            <!--End Fourth movie-->
        </div>
    <!--End-Images/Titles--> 


</div>
 <!-- End Sliders and Movies-->  
    </article>
    <!-- End Article-->  
</div>
  <!--end main content-->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!--Footer-->
<footer class="text-center footer" id="end">
    <div class="container">
	<div class="row">
            <div class="full col-md-12">
		<ul class="quick-link">
                    <li><a href="https://www.facebook.com/claudia.borosianu" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="https://twitter.com/Amaradia" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/claudia_danciu/?hl=en" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                    <li><a href="https://www.linkedin.com/in/claudiadanciu/" target="_blank"><i class="fa fa-linkedin"></i> </a></li>
                    
                </ul>
                    <div class="copy-right">
			<p>Copyright ClaudiaDanciu &copy; 2018 - All Rights Reserved. <a href="mailto:contact@claudiadanciu.com">MoodSlider@Sky</a></p>
                    </div>
            </div>
	</div>
    </div>
</footer>
<!--End Footer-->
</body>
</html>