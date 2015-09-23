 <!-- navbar - begin -->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="logo" href="#">
        <img src="<?php echo $_zp_themeroot;?>/images/logo.png" height="50px"  alt="Logo Negpos" >
      </a>
    </div> 
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <?php echo "Actualités"; ?>
          <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
          <?php printAllNewsCategories("", 
                                       FALSE, 
                                       "", 
                                       "", 
                                       FALSE);
			    ?>
          </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"
               href="<?php echo html_encode(getCustomPageURL('gallery')); ?>" >
               <?php echo gettext("Gallery"); ?>
               <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
            <?php printAlbumMenuList( "list",
                                      FALSE,
                                      "",
                                      "",
                                      "",
                                      "",
                                      "",
                                      0,
                                      FALSE,
                                      FALSE,
                                      FALSE);
			      ?>
          </ul>
        </li>
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Informations
           <span class="caret"></span></a>
           <ul class="dropdown-menu">
               <?php printPageMenu("list", 
                                   "",
                                   "",
                                   "", 
                                   "",
                                   "",
                                   0,
                                   FALSE);
               ?>
           </ul> 
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div> 
  </div> <!-- container-fluid -->
</nav>
 <!-- navbar - end --> 