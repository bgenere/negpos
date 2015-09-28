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

				<div class="row" id="breadcrumb">
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
			
				<div class="row" id="content">
			
						<?php
						// single news article
						if (is_NewsArticle()) {
							if (getPrevNewsURL()) { ?><div class="singlenews_prev"><?php printPrevNewsLink(); ?></div><?php }
								if (getNextNewsURL()) { ?><div class="singlenews_next"><?php printNextNewsLink(); ?></div><?php }
								if (getPrevNewsURL() OR getNextNewsURL()) { ?><br style="clear:both" /><?php }
								?>
							<h3><?php printNewsTitle(); ?></h3>
							<div class="newsarticlecredit"><span class="newsarticlecredit-left"><?php printNewsDate(); ?> | <?php
									if (function_exists('getCommentCount')) {
										echo gettext("Comments:");
										?> <?php echo getCommentCount(); ?> |<?php } ?> </span> <?php printNewsCategories(", ", gettext("Categories: "), "newscategories"); ?></div>
							<?php
							printNewsContent();
							printCodeblock(1);
							?>
							<?php printTags('links', gettext('<strong>Tags:</strong>') . ' ', 'taglist', ', '); ?>
							<br style="clear:both;" /><br />
							<?php @call_user_func('printRating'); ?>
							<?php
							// COMMENTS TEST
							@call_user_func('printCommentForm');
						} else {
							printNewsPageListWithNav(gettext('next »'), gettext('« prev'), true, 'pagelist', true);
							echo "<hr />";
							// news article loop
							while (next_news()):;
								?>
								<div class="newsarticle">
									<h3><?php printNewsURL(); ?></h3>
									<div class="newsarticlecredit">
										<span class="newsarticlecredit-left">
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
											?></span>
										<?php
										echo ' | ';
										printNewsCategories(", ", gettext("Categories: "), "newscategories");
										?>
									</div>
									<?php
									printNewsContent();
									printCodeblock(1);
									if (getTags()) {
										echo gettext('<strong>Tags:</strong>');
									} printTags('links', '', 'taglist', ', ');
									?>
									<br style="clear:both;" /><br />
								</div>
								<?php
							endwhile;
							printNewsPageListWithNav(gettext('next »'), gettext('« prev'), true, 'pagelist', true);
						}
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
	<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
?>