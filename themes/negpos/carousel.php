 <!-- Get Files in thème/images/slider -->
 <?php
	$path = getcwd()."/themes/negpos/images/slider";
	$files = scandir($path);
	$filesnb = count($files);
    //Show trace
	/*echo "-- Trace --<br/>";
	echo getcwd();
	echo "<br/>";
	var_dump( $path );
	echo "<br/>";
	for ($i = 2; $i < $filesnb; $i++){
		echo $files[$i];
	}*/
?> 
 
 <!-- Carousel - begin -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo $_zp_themeroot;?>/images/slider/<?php echo $files[2];?>" >		
		</div>
		<?php
			for ($i = 3; $i < $filesnb; $i++){
				echo '<div class="item">';
				echo '<img src="'.$_zp_themeroot.'/images/slider/'.$files[$i].'">';
				echo '</div>';
			}		
		?>
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