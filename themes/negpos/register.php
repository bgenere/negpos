<?php
// force UTF-8 Ø
if (!defined('WEBPATH'))
	die();
if (function_exists('printRegistrationForm')) {
	?>
	<!DOCTYPE html>
	<html><!-- Register -->
		<head>
		<?php include ("head.php"); ?>
	</head>
		<body>
			<?php zp_apply_filter('theme_body_open'); ?>
			
			<?php include("navbar.php"); ?>
		
			<div id="main" class="container">
			 	
				<div class="row" id="breadcrumb">
					<h6><?php printGalleryIndexURL(' » '); ?></h6>
				</div>
		
				<div class="row" id="content">

					<h1><?php echo gettext('User Registration') ?></h1>
					<?php  printRegistrationForm();  ?>
			
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