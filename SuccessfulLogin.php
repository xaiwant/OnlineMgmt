<?php
include('header.php');
include('Connection.php');

if (!empty($_SESSION)) {
	?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You have Logged in successfully !!
</div>
    <!-- Indicators -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/slider-1.jpeg" alt="Chania">
                <div class="carousel-caption">
                    <h3>Header of Slide 1</h3>
                    <p>Details of Slide 1. Lorem Ipsum Blah Blah Blah....</p>
                </div>
            </div>
            <div class="item">
                <img src="images/slider-2.jpeg" alt="Chania">
                <div class="carousel-caption">
                    <h3>Header of Slide 2</h3>
                    <p>Details of Slide 2. Lorem Ipsum Blah Blah Blah....</p>
                </div>
            </div>
            <div class="item">
                <img src="images/slider-3.jpeg" alt="Flower">
                <div class="carousel-caption">
                    <h3>Header of Slide3</h3>
                    <p>Details of Slide 3. Lorem Ipsum Blah Blah Blah....</p>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    </div>
	<br><br>
	
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="jobs-for-ui-ux-designer-in-bangalore.html">
<figure>
<p class="job_img">
<img class="img-circle lazy" src="images/doctor.jpeg" data-original="images/doctor.jpeg" alt="Professional Doctors" style="display: inline;">
</p>
</figure>
<h3 class="job_title">Professional Doctors</h3>
<p class="job_exp">Experience: + 25 years</p>
</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="jobs-for-visual-designer-in-bangalore.html">
<figure>
<p class="job_img">
<img class="img-circle lazy" src="images/emergency.jpeg" data-original="images/emergency.jpeg" alt="Emergency Service" style="display: inline;">
</p>
</figure>
<h3 class="job_title">24/7 Emergency Service</h3>
<p class="job_exp">50 + Ameneties</p>
</a>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="internship-for-ui-ux-designer-in-bangalore.html">
<figure>
<p class="job_img">
<img class="img-circle lazy" src="images/Patient-Care.jpeg" data-original="images/Patient-Care.jpeg" alt="Day Care Patient" style="display: inline;">
</p>
</figure>
<h3 class="job_title">Day Care activity</h3>
<p class="job_exp">Expert Pedetricis</p>
</a>
</div>
</div>
<?php
} else {
   header("Location: UserLogin.php");	
}

include('footer.php'); 
?>



 