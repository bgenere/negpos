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
			<div class="lead"> 
				<?php printGalleryTitle(); ?>	
			</div>
				<div class="breadcrumb">
					<h6><?php printGalleryIndexURL(' » '); ?></h6>
				</div>
		
				<div id="content">

					<h2><?php echo gettext('Contact us') ?></h2>
					<?php
					printContactForm();
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