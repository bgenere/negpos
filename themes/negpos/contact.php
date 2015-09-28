<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
if (function_exists('printContactForm')) {
	?>
	<!DOCTYPE html>
	<html><!-- Contact -->
		<head>
		<?php include ("head.php"); ?>
		</head>
		<body>
			<!-- theme body open filter -->
			<?php zp_apply_filter('theme_body_open'); ?>
		
			<?php include("navbar.php"); ?>
		
			<div id="main" class="container">

				<div class="row" id="breadcrumb">
						<h6><?php printGalleryIndexURL(' » '); ?><strong><?php echo gettext("Archive View"); ?></strong></h6>
				</div>
		
				<div class="row" id="content">

					<h2><?php echo gettext('Contact us') ?></h2>
					<?php
					printContactForm();
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