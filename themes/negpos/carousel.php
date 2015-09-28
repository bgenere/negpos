 <!-- Carousel - begin -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo $_zp_themeroot;?>/images/headbanner.jpg" >		
			<div class="carousel-caption">
				<h2>NEGPOS PHOTOGRAPHIE</h2>
			</div>
		</div>
		<div class="item">
			<img src="<?php echo $_zp_themeroot;?>/images/headbanner2.jpg" >
			<div class="carousel-caption">
				<h2>FORMATIONS</h2>
			</div>
		</div>
		<div class="item">
			<img src="<?php echo $_zp_themeroot;?>/images/headbanner3.jpg" >
			<div class="carousel-caption">
				<h2>EXPOSITIONS</h2>
			</div>
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