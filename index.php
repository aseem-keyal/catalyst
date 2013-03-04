<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <?php include ("includes/header.php"); ?>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <script type="text/javascript" charset="utf-8">
        $('.homepage-slider').carousel({
              interval: 2000
                  })
    </script>
    <?php include("includes/navbar.php"); ?>
  <div id="homepage-slider" class="carousel slide">
	    <div class="carousel-inner">
	      <div class="active item">
		<img src="assets/img/carousel1.jpg" alt="" />
		<div class="carousel-caption">
		<p>Creekside Elementary</p>
		</div>
	      </div>
	      <div class="item">
		<img src="assets/img/carousel2.jpg" alt="" />
		<div class="carousel-caption">
		<p>Cherokee Point Elementary</p>
		</div>
	      </div>
	      <div class="item">
		<img src="assets/img/carousel3.jpg" alt="" />
		<div class="carousel-caption">
		<p>Park Village Elementary</p>
		</div>
	      </div>
	    </div>
	    <a class="carousel-control left" href="#homepage-slider" data-slide="prev">&lsaquo;</a>
	    <a class="carousel-control right" href="#homepage-slider" data-slide="next">&rsaquo;</a>
	  </div>
    <div class="container">
    <div class="container-fluid">
      <!-- Example row of columns -->
        <div class="row-fluid">
            <div class="span7">
                <h2>Our Mission</h2>
   <p>Catalyst for Success is a non-profit organization that aims to promote STEM education in order to inspire a new generation of scientists. We provide chemistry magic shows that consist of many cool demonstrations that present science in a fun and engaging way. In addition, we are coordinating with many schools to set up "hands on" activities where the children can try their own experiments.</p>
                <p>Within the first five weeks we will have...
		     <ul>
			 <li>Reached 3000 students</li>
				 <li>Performed for 5 schools from the San Diego, Poway, and Chula Vista Districts</li>
		     </ul>
		</p>
                <p><a class="btn" href="about.php">Learn More &raquo;</a></p>
            </div>
            <div class="span5">
                <h2>Press Release</h2>
                <p> Check out our latest press release from our most recent events!</p>
                 <ul class="nav nav-list">
   <li><a href="assets/catalystpressrelease2.pdf">2/22/13--1 Month: 1000 Students</a></li>
   <li><a href="assets/catalystpressrelease1.pdf">2/1/13--Catalyst for Success Has Its First Show</a></li>
   <li><p><a class="btn" href="about-pressrelease.php">See All &raquo;</a></p></li>
                </ul>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
