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
		
		<?php include("navbar.php"); ?>
		
		<div id="main" class="container">
			<div class="lead"> 
				<?php printGalleryTitle(); ?>	
			</div>
			<div class="breadcrumb">
				<h6><?php printGalleryIndexURL(' » '); ?></h6>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">
							<h4>
								<span class="glyphicon glyphicon-alert"></span>
								404
							</h4>
						</div>
				<div class="panel-body">
					<?php print404status(isset($album) ? $album : NULL, isset($image) ? $image : NULL, $obj); ?>
				</div>
			</div>

			<?php include("footer.php"); ?>

		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html><!-- 404 -->
