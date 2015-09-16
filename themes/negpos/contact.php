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
		
			<div id="main" class="container">
			 	<div class="row" id="header">
				 	<?php include("header.php"); ?>
				</div>
				<div class="row" id="breadcrumb">
						<h2><?php printGalleryIndexURL(' » '); ?><strong><?php echo gettext("Archive View"); ?></strong></h2>
				</div>
		
				<div class="row" id="content">
					<div class="col-sm-4" id="sidebar">
						<?php include("sidebar.php"); ?>
					</div><!-- sidebar -->		
				
					<div class="col-sm-8" id="content-left">
						<h2><?php echo gettext('Contact us') ?></h2>
						<?php
						printContactForm();
						?>
				
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