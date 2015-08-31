<?php
// force UTF-8 Ø
if (!defined('WEBPATH')) 
	die();
if (function_exists('printSlideShow')) {
	?>
	<!DOCTYPE html>
	<html>
		<head>
				<!-- cl ajout favicon jpg-->
				<link rel="icon" type="image/jpeg" href="http://negpos.fr/negposphoto/uploaded/images/favicon.jpg" 	

				<?php zp_apply_filter('theme_head'); ?>
				<title><?php echo printBareGalleryTitle(); ?> <?php echo gettext("Slideshow"); ?></title>
				<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
				<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/slideshow.css" type="text/css" />
		</head>
		<body>
			<?php zp_apply_filter('theme_body_open'); ?>
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