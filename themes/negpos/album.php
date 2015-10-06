<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
?>
<!DOCTYPE html >
<html><!-- Album -->
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
				<h6><?php printGalleryIndexURL(' » '); printParentBreadcrumb("", " » ", " » "); ?><strong><?php printAlbumTitle(); ?></strong></h6>
			</div>
		
			<div id="content">
				
				<div><?php printAlbumDesc(); ?></div>					
				<?php printPageListWithNav("« " . gettext("prev"), gettext("next") . " »",FALSE,TRUE,"pager",TRUE,9); ?>
				<ul class="list-inline">
					<?php while (next_album()): ?>
						<li class="thumbnail">
							<a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php getBareAlbumTitle(); ?>"><?php printCustomAlbumThumbImage(getBareAlbumTitle(),"",240,"", 240, 160); ?></a>
							<h4><a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printBareAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h4>
							<p>
								<?php printAlbumDate(""); ?>
								<?php echo shortenContent(getAlbumDesc(), 40, '...'); ?>
								<?php
								if (function_exists('printAddToFavorites')) {
									echo "<br />";
									printAddToFavorites($_zp_current_album);
								}
								?>
							</p>
						</li>
					<?php endwhile; ?>
				</ul>
		
				<ul class="list-inline">
					<?php while (next_image()): ?>
						<li>
							<a href="<?php echo html_encode(getImageURL()); ?>" title="<?php printBareImageTitle(); ?>"><?php printImageThumb(getBareImageTitle(),"img-thumbnail"); ?></a>
						</li>
					<?php endwhile; ?>
				</ul>

				<?php
					printPageListWithNav("« " . gettext("prev"), gettext("next") . " »",FALSE,TRUE,"pager",TRUE,9); 
					printTags('links', gettext('<strong>Tags:</strong>') . ' ', 'taglist', ', ');
				?>
				<br />
				<?php
				if (function_exists('printGoogleMap')) {
					echo '<p id="maplink">';
					printGoogleMap();
					echo '</p>';
				}
				?>
				<?php
				if (function_exists('printSlideShowLink')) {
					echo '<span id="slideshowlink">';
					printSlideShowLink();
					echo '</span>';
				}
				?>
				<br/>
				<?php
				if (function_exists('printAddToFavorites')) printAddToFavorites($_zp_current_album);
				@call_user_func('printRating');
				@call_user_func('printCommentForm');
				?>	
					
			</div><!-- content -->
			<?php include("footer.php"); ?>
			
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html>