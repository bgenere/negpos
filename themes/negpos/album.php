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
			 
			<div class="row" id="breadcrumb">
				<h6><?php printGalleryIndexURL(' » '); printParentBreadcrumb("", " » ", " » "); ?><strong><?php printAlbumTitle(); ?></strong></h6>
			</div>
		
			<div class="row" id="content">
				
				<div><?php printAlbumDesc(); ?></div>
					
				<?php printPageListWithNav("« " . gettext("prev"), gettext("next") . " »"); ?>
				<div id="albums">
					<?php while (next_album()): ?>
						<div class="album">
							<div class="thumb">
								<a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php getBareAlbumTitle(); ?>"><?php printCustomAlbumThumbImage(getBareAlbumTitle(), NULL, 95, 95, 95, 95); ?></a>
							</div>
							<div class="albumdesc">
								<h3><a href="<?php echo html_encode(getAlbumURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php printBareAlbumTitle(); ?>"><?php printAlbumTitle(); ?></a></h3>
								<?php printAlbumDate(""); ?>
								<div><?php echo shortenContent(getAlbumDesc(), 45, '...'); ?></div>
								<?php
								if (function_exists('printAddToFavorites')) {
									echo "<br />";
									printAddToFavorites($_zp_current_album);
								}
								?>
							</div>
							<p style="clear: both; "></p>
						</div>
					<?php endwhile; ?>
				</div>
		
				<div id="images">
					<?php while (next_image()): ?>
						<div class="image">
							<div class="imagethumb"><a href="<?php echo html_encode(getImageURL()); ?>" title="<?php printBareImageTitle(); ?>"><?php printImageThumb(getBareImageTitle()); ?></a></div>
						</div>
					<?php endwhile; ?>
				</div>
				<p style="clear: both; "></p>
				<?php
					printPageListWithNav("« " . gettext("prev"), gettext("next") . " »");
					printTags('links', gettext('<strong>Tags:</strong>') . ' ', 'taglist', ', ');
				?>
				<br style="clear:both;" /><br />
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
				<br style="clear:both;" />
				<?php
				if (function_exists('printAddToFavorites')) printAddToFavorites($_zp_current_album);
				@call_user_func('printRating');
				@call_user_func('printCommentForm');
				?>	
					
			</div><!-- content -->
			
			<div class="row" id="footer">
					<?php include("footer.php"); ?>
			</div>
			
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html>