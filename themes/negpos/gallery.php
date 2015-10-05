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
		
		<div id="main" class="container">

			<div class="lead"> 
				<?php printGalleryTitle(); ?>	
			</div>
			<div class="breadcrumb">
				<h6><?php printGalleryIndexURL(' » '); ?></h6>
			</div>
			
			<?php include("carousel.php"); ?>
			<br />
					
			<div class="row" id="content">
				
				<div class="col-md-8">
					<div>
						<!-- Gallery description -->
						<?php printGalleryDesc(); ?><hr>
					</div>
					<h3>
						<?php echo gettext("Gallery"); ?>
					</h3>
			
					<ul class="list-inline">
					<?php while (next_album()): ?>
						<li class="thumbnail">
							<a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printBareAlbumTitle(); ?>"><?php printCustomAlbumThumbImage(getBareAlbumTitle(),"",240,"", 240, 160); ?></a>
							<h4><a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printBareAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h4>								
							<p>
								<?php printAlbumDate(""); ?>
							    <?php echo shortenContent(getAlbumDesc(), 45, '...'); ?>
							</p>
						</li>
					<?php endwhile; ?>
					</ul>

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
			<?php include("footer.php"); ?>

			
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html> <!-- Gallery -->