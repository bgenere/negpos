 <!-- Get Files in thème/images/slider -->
 <?php
	$path = $_zp_themeroot."/images/slider/";
	$filepattern = $path."*.jpg";
	$files = glob($filepattern);
    //Show files
	echo $files ."<br/>";
?> 
 
 <!-- Carousel - begin -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo $_zp_themeroot;?>/images/slider/headbanner.jpg" >		
		</div>
		<div class="item">
			<img src="<?php echo $_zp_themeroot;?>/images/slider/headbanner2.jpg" >
		</div>
		<div class="item">
			<img src="<?php echo $_zp_themeroot;?>/images/slider/headbanner3.jpg" >
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- Carousel - end -->