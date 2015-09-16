<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
?>
<!DOCTYPE html>
<html><!-- 404 -->
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
				<h2><?php printGalleryIndexURL(' » '); ?></h2>
			</div>
			<div class="row" id="content-error">	
					<div class="col-sm-12" class="errorbox">
						<?php print404status(isset($album) ? $album : NULL, isset($image) ? $image : NULL, $obj); ?>
					</div>
			</div>
			<div class="row" id="footer">
					<?php include("footer.php"); ?>
			</div>	
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html><!-- 404 -->
