 <!-- navbar - begin -->
 <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="logo" href="<?php echo getGalleryIndexURL(); ?>">
        <img src="<?php echo $_zp_themeroot;?>/images/logo.png" height="50px"  alt="Logo Negpos" >
      </a>
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="../news">
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
           <span class="caret"></span>
          </a>
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
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-search"></span>
            </a>
            <div class="dropdown-menu">
                <?php if (getOption('Allow_search')) {
				          printSearchForm("","form-group","",""); 
				          } 
		            ?>
            </div>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-flag"></span>
            </a>
            <div class="dropdown-menu">
              <?php @call_user_func('printLanguageSelector', "langselector"); ?>
            </div>
          </li>   
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-user"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <?php
				          if ($_zp_gallery_page != 'contact.php') {
                  printCustomPageURL(gettext('Contact us'), 'contact', '', '');
                  } else {
                    echo gettext("Contact us");
                  }
                ?>
              </li>
              <?php
                if (function_exists("printUserLogin_out")) {
                  echo '<li>';
                  printUserLogin_out("","");
                  echo "</li>";
                }
              ?>
            </ul>
         </li>  
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
             <img src="<?php echo FULLWEBPATH.'/'.ZENFOLDER ?>/images/rss.png" alt="RSS Feed">
            </a>
            <ul class="dropdown-menu">
              <?php
              if (!is_null($_zp_current_album)) {
                printRSSLink('Album', '<li>', gettext('Album RSS'), '</li>');
                ?>
                <?php
              }
              ?>
              <?php
              printRSSLink('Gallery', '<li>', gettext('Gallery'), '</li>');
              ?>
              <?php
              if (extensionEnabled('zenpage') && ZP_NEWS_ENABLED) {
                printRSSLink("News", "<li>", gettext("News"), '</li>');
              }
              ?>
            </ul>
         </li>                   
      </ul>
    </div> 
  </div> <!-- container-fluid -->
</nav>
 <!-- navbar - end --> 