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
			 	<div class="row" id="header">
				 	<?php include("header.php"); ?>
				</div>
				<div class="row" id="breadcrumb">
					<h2><?php printGalleryIndexURL(' » '); ?></h2>
				</div>
		
				<div class="row" id="content">
					<div class="col-sm-4" id="sidebar">
						<?php include("sidebar.php"); ?>
					</div><!-- sidebar -->		
			
					<div class="col-sm-8" id="content-left">
						<h1><?php echo gettext('User Registration') ?></h1>
						<?php  printRegistrationForm();  ?>
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
	<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
	?>	