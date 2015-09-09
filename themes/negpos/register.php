<?php
// force UTF-8 Ø
if (!defined('WEBPATH'))
	die();
if (function_exists('printRegistrationForm')) {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<!-- cl ajout favicon jpg-->
			<link rel="icon" type="image/jpeg" href="http://negpos.fr/negposphoto/uploaded/images/favicon.jpg" />
		
			<meta charset="<?php echo LOCAL_CHARSET; ?>">
			<?php zp_apply_filter('theme_head'); ?>
			<?php printHeadTitle(); ?>
			<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" type="text/css" />
		</head>
		<body>
			<?php zp_apply_filter('theme_body_open'); ?>
			
			<div id="main">
			
					<div id="header">
							<?php include("header.php"); ?>
					</div>
			
			<div id="content">
			
				<div id="breadcrumb">
					<h2><?php printGalleryIndexURL(' » '); ?></h2>
				</div>
			
				<div id="content-left">
					<h1><?php echo gettext('User Registration') ?></h1>
					<?php  printRegistrationForm();  ?>
				</div><!-- content left-->
			
				<div id="sidebar">
					<?php include("sidebar.php"); ?>
				</div><!-- sidebar -->
					
				<div id="footer">
					<?php include("footer.php"); ?>
				</div>
			
			</div><!-- content -->
			
			</div><!-- main -->
			<?php zp_apply_filter('theme_body_close'); ?>
		</body>
	</html>
	<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
	?>	