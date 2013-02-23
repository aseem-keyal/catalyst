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
    <div class="container">
    <div class="container-fluid">
      <div class="row-fluid">
	<div class="span10">
	  <div id="homepage-slider" class="carousel slide">
	    <div class="carousel-inner">
	      <div class="active item">
		<img src="assets/img/carousel1.jpg" alt="" />
		<div class="carousel-caption">
		<p>The Setup</p>
		</div>
	      </div>
	      <div class="item">
		<img src="assets/img/carousel2.jpg" alt="" />
		<div class="carousel-caption">
		<p>The Execution</p>
		</div>
	      </div>
	      <div class="item">
		<img src="assets/img/carousel3.jpg" alt="" />
		<div class="carousel-caption">
		<p>The Result</p>
		</div>
	      </div>
	    </div>
	    <a class="carousel-control left" href="#homepage-slider" data-slide="prev">&lsaquo;</a>
	    <a class="carousel-control right" href="#homepage-slider" data-slide="next">&rsaquo;</a>
	  </div>
	</div>
      </div>

      <!-- Example row of columns -->
        <div class="row-fluid">
            <div class="span7">
                <h2>Mission Statement</h2>
                <p> We will do our best to make STEM education fun by focusing on the concept of a magic show, where the members of our organization use basic chemical reactions to introduce young students to the more captivating and exciting part of science. We aim to have long-term we plan to lead a science fair as a second component of our program and to provide regular assistance to the children.</p>
                <p>A Few Stats: Within the first one month of shows, we will have reached approximately 2000 students. By March 2013, we will be at 3000 kids from 5 schools from three different districts in under 5 weeks of performing shows.</p>
                <p><a class="btn" href="about.php">Learn More &raquo;</a></p>
            </div>
            <div class="span5">
                <h2>Press Release</h2>
                <p> Check out our latest press release from our most recent events!</p>
                <p><a class="btn" href="assets/catalystpressrelease1.pdf">View details &raquo;</a></p>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
