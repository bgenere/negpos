<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
?>
<!DOCTYPE html>
<html><!-- Password -->
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
				
		
				<div id="content-error">
			
					<div class="errorbox">
							<?php printPasswordForm('', true, false); ?>
					</div>
			
					<?php
						if (!zp_loggedin() && function_exists('printRegisterURL') && $_zp_gallery->isUnprotectedPage('register')) {
							printRegisterURL(gettext('Register for this site'), '<br />');
							echo '<br />';
						}
					?>
				</div>
		
		
					
			</div><!-- content -->
			
			<div class="row" id="footer">
					<?php include("footer.php"); ?>
			</div>
			
		</div><!-- main -->
		<!-- theme body close filter -->
		<?php zp_apply_filter('theme_body_close');?>
	</body>
</html>