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
    <?php include("includes/navbar.php"); ?>
    <div class="container">
    <div class="container-fluid">
      <div class="row-fluid">
	<div class="span8">
	  <div class="hero-unit" style="background-image:url('assets/img/logo.png'); background-repeat:no-repeat; background-position:right bottom;">
            <h1>Catalyst for Success</h1>
	    <br>
            <p>With an element of chemistry and a touch of magic, a future scientist is born.</p>
        <p><a class="btn btn-primary btn-large" href="about.php">Learn more &raquo;</a></p>
	  </div>
	</div>
	<div class="span4">
	  <div id="homepage-slider" class="carousel slide">
	    <div class="carousel-inner">
	      <div class="item">
		<img src="assets/img/fire.jpg" alt="" />
		<div class="carousel-caption">
		<p>Hydrogen + Fire = Awesome</p>
		</div>
	      </div>
	      <div class="active item">
		<img src="http://sphotos-b.xx.fbcdn.net/hphotos-ash4/486367_441521299237828_1765681476_n.jpg" alt="" />
		<div class="carousel-caption">
		<p>Our Team</p>
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
        <div class="span4">
          <h2>Sign Up for a Show</h2>
           <p>We would love to put on a show for anyone who is interested! Please contact Jason Ge or email info@catayst4success.org for scheduling or any questions. </p>
          <p><a class="btn" href="mailto:info@catalyst4success.org">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Brochure</h2>
			<p> Learn what Catalyst 4 Success is all about. Please read our brochure in order to learn more about how we can help you.</p>
			<p><a class="btn" href="assets/brochure.pdf">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Video</h2>
			<p> Here is a brief video showcasing a few of our experiments.</p>
			<p><a class="btn" href="http://www.youtube.com/watch?v=FA7TD0zTeNw">Video &raquo;</a></p>

       </div>
      </div>

      <?php include("includes/footer.php"); ?>
  </body>
</html>
