<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
?>
<!DOCTYPE html>
<html><!-- Gallery -->
	<head>
		<?php include ("head.php"); ?>
	</head>
	<body>
		<!-- theme body open filter -->
		<?php zp_apply_filter('theme_body_open'); ?>
		
		<?php include("navbar.php"); ?>
		
		<?php include("carousel.php"); ?>
		
		<div id="main" class="container">

			<div class="row" id="breadcrumb">
				<h6><?php printGalleryIndexURL(' » '); ?></h6>
			</div>
		
			<div class="row" id="content">
				
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>
								<span class="glyphicon glyphicon-pushpin"></span>
								<?php printGalleryTitle(); ?>
							</h4>
						</div>
						<div class="panel-body">
							<!-- Gallery description -->
							<?php printGalleryDesc(); ?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">		
							<h4>
								<span class="glyphicon glyphicon-film"></span>
								<?php echo gettext("Gallery"); ?>
							</h4>
						</div>
						<div class="panel-body" id="albums">
							<?php while (next_album()): ?>
							<div class="album">
								<span class="thumb">
									<a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printBareAlbumTitle(); ?>"><?php printCustomAlbumThumbImage(getBareAlbumTitle(), NULL, 95, 95, 95, 95); ?></a>
								</span>
								<span class="albumdesc">
									<h5><a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printBareAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h5>
									<?php printAlbumDate(""); ?>
									<div><?php echo shortenContent(getAlbumDesc(), 45, '...'); ?></div>
								</span>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
            	</div> <!-- col-md-8 -->	
				
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>
								<span class="glyphicon glyphicon-file"></span>
								Actualités
							</h4>
						</div>
						<div class="panel-body">
							<?php printAllNewsCategories("", 
                                       FALSE, 
                                       "", 
                                       "", 
                                       TRUE);
			    			?>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>
								<span class="glyphicon glyphicon-info-sign">
								Informations
							</h4>
						</div>
						<div class="panel-body">
							<!-- Page List -->
							<?php printPageMenu("list", 
                                   "",
                                   "",
                                   "", 
                                   "",
                                   "",
                                   0,
                                   TRUE);
							?>
						</div>
					</div>
            	</div> <!-- col-md-4 -->				
									
			</div><!-- content -->
			
			<div class="row" id="footer">
					<?php include("footer.php"); ?>
			</div>
			
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html> <!-- Gallery -->