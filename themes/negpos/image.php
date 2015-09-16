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
		
		<div id="main" class="container">
			 <div class="row" id="header">
				<?php include("header.php"); ?>
				<div class="imgnav">
					<?php if (hasPrevImage()) { ?>
						<div class="imgprevious"><a href="<?php echo html_encode(getPrevImageURL()); ?>" title="<?php echo gettext("Previous Image"); ?>">« <?php echo gettext("prev"); ?></a></div>
					<?php } if (hasNextImage()) { ?>
						<div class="imgnext"><a href="<?php echo html_encode(getNextImageURL()); ?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?> »</a></div>
					<?php } ?>
				</div>
			</div>
			<div class="row" id="breadcrumb">
						<h2><?php printGalleryIndexURL(' » '); printParentBreadcrumb("", " » ", " » ");
						printAlbumBreadcrumb("  ", " » ");
						?>
							<strong><?php printImageTitle(); ?></strong> (<?php echo imageNumber() . "/" . getNumImages(); ?>)
						</h2>
			</div>
		
			<div class="row" id="content">
				<div class="col-sm-4" id="sidebar">
					<?php include("sidebar.php"); ?>
				</div><!-- sidebar -->		
			
				<div class="col-sm-8" id="content-left">
			
					<!-- The Image -->
					<?php
					//
					if (function_exists('printThumbNav')) {
						printThumbNav(3, 6, 50, 50, 50, 50, FALSE);
					} else {
						@call_user_func('printPagedThumbsNav', 6, FALSE, gettext('« prev thumbs'), gettext('next thumbs »'), 40, 40);
						}
					?>
				
					<div id="image">
						<?php
							if (getOption("Use_thickbox") && !isImageVideo()) {
								$boxclass = " class=\"thickbox\"";
							} else {
								$boxclass = "";
							}
							if (isImagePhoto()) {
								$tburl = getFullImageURL();
							} else {
								$tburl = NULL;
							}
							if (!empty($tburl)) {
								?>
								<a href="<?php echo html_encode(pathurlencode($tburl)); ?>"<?php echo $boxclass; ?> title="<?php printBareImageTitle(); ?>">
									<?php
								}
								printCustomSizedImageMaxSpace(getBareImageTitle(), 580, 580);
								?>
								<?php
								if (!empty($tburl)) {
									?>
								</a>
								<?php
							}
						?>
					</div>
					<div id="narrow">
							<div id="imagedesc"><?php printImageDesc(); ?></div>
							<?php
							if (getTags()) {
								echo gettext('<strong>Tags:</strong>');
							} printTags('links', '', 'taglist', ', ');
							?>
							<br style="clear:both;" /><br />
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
	
							<br style="clear:both" />
							<?php If (function_exists('printAddToFavorites')) printAddToFavorites($_zp_current_image); 
								@call_user_func('printRating'); 
								@call_user_func('printGoogleMap'); 
							?>
					</div>
					<?php @call_user_func('printCommentForm'); ?>
	
				</div><!-- content left-->			
					
			</div><!-- content -->
			
			<div class="row" id="footer">
					<?php include("footer.php"); ?>
			</div>
			
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html>