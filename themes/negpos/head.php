<!-- head - begin -->
    <meta charset="<?php echo LOCAL_CHARSET; ?>">
	<!-- bootstrap viewport and css -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- theme head filter -->
	<?php zp_apply_filter('theme_head'); ?>
	<!-- bootstrap js -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- head title -->
	<?php printHeadTitle(); ?>
	
	<!--  favicon & styles  -->
	<link rel="icon" type="image/jpeg" href="http://negpos.fr/negposphoto/uploaded/images/favicon.jpg" />
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" type="text/css" />
	<!-- RSS  headers -->
	<?php if (class_exists('RSS')) printRSSHeaderLink('Gallery', gettext('Gallery RSS')); ?>
<!-- head - end -->
