<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) 
	die();
if (function_exists('printSlideShow')) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<?php include ("head.php"); ?>
	</head>
		<body>
			<?php zp_apply_filter('theme_body_open'); ?>
			
			<?php include("navbar.php"); ?>
					
			<div id="slideshowpage">
				<?php printSlideShow(true,true); ?>
			</div>
			<?php zp_apply_filter('theme_body_close'); ?>
		</body>
	</html>
	<?php
} else {
	include(SERVERPATH . '/' . ZENFOLDER . '/404.php');
}
?>