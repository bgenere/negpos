<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
if (function_exists('printContactForm')) {
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
			<?php if (class_exists('RSS')) printRSSHeaderLink('Gallery', gettext('Gallery RSS')); ?>
		</head>
		<body>
			<?php zp_apply_filter('theme_body_open'); ?>
		
			<div id="main">
		
				<div id="header">
					<?php include("header.php"); ?>
				</div>
		
				<div id="content">
				
					<div id="breadcrumb">
							<h2><?php printGalleryIndexURL(' » '); ?><strong><?php echo gettext("Archive View"); ?></strong></h2>
					</div>
				
					<div id="content-left">
						<h2><?php echo gettext('Contact us') ?></h2>
						<?php
						printContactForm();
						?>
				
					</div><!-- content left-->
				
				
					<div id="sidebar">
						<?php include("sidebar.php"); ?>
					</div><!-- sidebar -->
				
					<div id="footer">
						<?php include("footer.php"); ?>
					</div>
				
				</div><!-- content -->
		
			</div><!-- main -->
			<?php zp_apply_filter('theme_body_close');?>
		</body>
	</html>
	<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
	?>