<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) 
	die();
if (class_exists('Zenpage') && ZP_PAGES_ENABLED) {
?>
	<!DOCTYPE html>
	<html><!-- Pages -->
		<head>
			<?php include ("head.php"); ?>
		</head>
		<body>
			<!-- theme body open filter -->
			<?php zp_apply_filter('theme_body_open'); ?>
		
			<div id="main" class="container">
				<div class="row" id="header">
					<?php include("header.php"); ?>
				</div>			
				<div class="row" id="breadcrumb">
								<h2><?php printGalleryIndexURL('');
									if (!isset($ishomepage)) {
										printZenpageItemsBreadcrumb(" » ", "");
									}
									?><strong><?php
										if (!isset($ishomepage)) {
											printPageTitle(" » ");
										}
										?></strong>
								</h2>
				</div>
		
				<div class="row" id="content">
					<div class="col-sm-4" id="sidebar">
						<?php include("sidebar.php"); ?>
					</div><!-- sidebar -->
					
					<div class="col-sm-8" id="content-left">
						<h2><?php printPageTitle(); ?></h2>
						<?php 
							printPageContent();
							printCodeblock(1);
							if(getTags()) { 
								echo gettext('<strong>Tags:</strong>'); 
							} printTags('links', '', 'taglist', ', '); 
						?>
						<br style="clear:both;" /><br />
						<?php @call_user_func('printRating'); ?>
						<?php @call_user_func('printCommentForm'); ?>
					</div><!-- content left-->		

				</div><!-- content -->
				<div class="row" id="footer">
						<?php include("footer.php"); ?>
					</div>
			</div><!-- main -->
			<!-- theme body close filter -->
			<?php zp_apply_filter('theme_body_close'); ?>
		</body>
	</html> <!-- Pages -->
<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
?>