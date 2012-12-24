<div class="navbar navbar-fixed-top">
     <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Catalyst 4 Success</a>
          <div class="nav-collapse">
            <ul class="nav">
	    	<?php
	   	$page = $_SERVER['REQUEST_URI'];
	   	?>
              <li <?php if ($page == '/catalyst/index.php' or $page == NULL){ echo 'class="active"'; } ?>><a href="index.php"><i class="icon-home"></i> Home</a></li>
              <li <?php if ($page == '/catalyst/about.php'){ echo 'class="active"'; } ?>><a href="about.php"><i class="icon-briefcase"></i> About</a></li>
              <li <?php if ($page == '/catalyst/contact.php'){ echo 'class="active"'; } ?>><a href="contact.php"><i class="icon-comment"></i> Contact</a></li>
           </ul>
	  </div><!--/.nav-collapse -->
        </div>
     </div>
</div>
