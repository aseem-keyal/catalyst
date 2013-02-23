<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <?php include("includes/header.php"); ?>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <?php include("includes/navbar.php"); ?>
    <div class="container">
      <ul class="nav nav-tabs">
      <li><a href="#goal" data-toggle="tab">Our Goal</a></li>
      <li><a href="#members" data-toggle="tab">Our Members</a></li>
      <li><a href="#press" data-toggle="tab">Press Release</a></li>
      </ul>
    <br>
      <div class="tab-content">
	<div class="tab-pane active" id="goal">
	  <?php include('about/goal.php'); ?>
	</div>
	<div class="tab-pane" id="members">
	  <?php include('about/members.php'); ?>
      </div> <!--End Our members tab div-->
    <div class="tab-pane" id="press">
        <?php include('about/pressrelease.php'); ?>
    </div>
    </div> <!--End all tab content-->
      <?php include ("includes/footer.php"); ?>
  </body>
</html>
