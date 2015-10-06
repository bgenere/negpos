<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
?>
<!DOCTYPE html>
<html><!-- Image -->
	<head>
		<?php include ("head.php"); ?>
	</head>
	<body>
		<?php zp_apply_filter('theme_body_open'); ?>
		
		<?php include("navbar.php"); ?>
		
		<div id="main" class="container">
			<div class="lead"> 
				<?php printGalleryTitle(); ?>	
			</div> 
			<div class="breadcrumb">
				<h6><?php printGalleryIndexURL(' » '); printParentBreadcrumb("", " » ", " » ");
				printAlbumBreadcrumb("  ", " » ");
				?>
					<strong><?php printImageTitle(); ?></strong> (<?php echo imageNumber() . "/" . getNumImages(); ?>)
				</h6>
			</div>
		
			<div class="row" id="content">
				<div class="col-md-2 pager"><!-- The Navigation thumbnail -->
					<?php
						printPagedThumbsNav(12, TRUE,'«', '»', NULL, NULL, NULL, NULL, FALSE,FALSE,6 );
					?>
				</div>			
				<div class="col-md-6 thumbnail"> <!-- The Image -->
					<?php
						if (isImagePhoto()) {
							$tburl = getFullImageURL();
						} else {
							$tburl = NULL;
						}
						if (!empty($tburl)) {
							?>
							<a href="<?php echo html_encode(pathurlencode($tburl)); ?>" title="<?php printBareImageTitle(); ?>">
								<?php
							}
							printCustomSizedImageMaxSpace(getBareImageTitle(), 580, 580, 'img-responsive');
							?>
							<?php
							if (!empty($tburl)) {
								?>
							</a>
							<?php
						}
					?>
					<br />
				</div>
				<div class="col-md-4">
						<div id="imagedesc"><?php printImageDesc(); ?></div>
						<?php
						if (getTags()) {
							echo gettext('<strong>Tags:</strong>');
						} printTags('links', '', 'taglist', ', ');
						?>
						
						<?php
						if (function_exists('printSlideShowLink')) {
							echo '<span id="slideshowlink">';
							printSlideShowLink();
							echo '</span>';
						}
						?>

						<?php
						if (getImageMetaData()) {
							printImageMetadata(NULL, 'colorbox');
						}
						?>

						
						<?php If (function_exists('printAddToFavorites')) printAddToFavorites($_zp_current_image); 
							@call_user_func('printRating'); 
							@call_user_func('printGoogleMap'); 
						?>
						<?php @call_user_func('printCommentForm'); ?>
				</div>
							
					
			</div><!-- content -->
			
			<?php include("footer.php"); ?>
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html>