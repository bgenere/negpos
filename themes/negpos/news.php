<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) 
	die();
if (class_exists('Zenpage') && ZP_NEWS_ENABLED) {
	?>
	<!DOCTYPE html>
	<html><!-- News -->
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
					<h6>
						<?php
							printGalleryIndexURL(' » ');
							printNewsIndexURL(NULL, ' '); ?><strong><?php
							printZenpageItemsBreadcrumb(' » ', '');
							printCurrentNewsCategory(" » ");
							?><?php
							printNewsTitle(" » ");
							printCurrentNewsArchive(" » ");
							?></strong>
					</h6>
				</div>
			
				<div id="content">
			
					<?php
					// single news article
					if (is_NewsArticle()) {
						if (getPrevNewsURL()) { ?><div><?php printPrevNewsLink(); ?></div><?php }
						if (getNextNewsURL()) { ?><div><?php printNextNewsLink(); ?></div><?php }
							?>
						<h3><?php printNewsTitle(); ?></h3>
						<div><span><?php printNewsDate(); ?> | <?php
								if (function_exists('getCommentCount')) {
									echo gettext("Comments:");
									?> <?php echo getCommentCount(); ?> |<?php } ?> </span> <?php printNewsCategories(", ", gettext("Categories: "), "newscategories"); ?></div>
						<?php
						printNewsContent();
						printCodeblock(1);
						?>
						<?php printTags('links', gettext('<strong>Tags:</strong>') . ' ', 'taglist', ', '); ?>
						<br />
						<?php @call_user_func('printRating'); ?>
						<?php
						// COMMENTS TEST
						@call_user_func('printCommentForm');
					} else {
						printNewsPageListWithNav(gettext('next »'), gettext('« prev'), true, 'pagelist', true);
						// news article loop
						while (next_news()):;
							?>
							<div>
								<h3><?php printNewsURL(); ?></h3>
								<div>
									<span>
										<?php
										printNewsDate();
										if (function_exists('getCommentCount')) {
											?>
											|
											<?php
											echo gettext("Comments:");
											?>
											<?php
											echo getCommentCount();
										}
										?>
									</span>
									<?php
									echo ' | ';
									printNewsCategories(", ", gettext("Categories: "), "list-inline");
									?>
								</div>
								<?php
								printNewsContent();
								printCodeblock(1);
								if (getTags()) {
									echo gettext('<strong>Tags:</strong>');
								} printTags('links', '', 'taglist', ', ');
								?>
							</div>
							<?php
						endwhile;
						printNewsPageListWithNav(gettext('next »'), gettext('« prev'), true, 'pagelist', true);
					}
					?>			
					
				</div><!-- content -->			
				<?php include("footer.php"); ?>
				
			</div><!-- main -->
			<!-- theme body close filter -->
			<?php zp_apply_filter('theme_body_close');?>
		</body>
	</html>
	<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
?>