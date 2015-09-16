<?php
// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();
?>
<!DOCTYPE html>
<html><!-- Archive -->
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
						<div id="archive">
							<h3><?php echo gettext('Gallery archive'); ?></h3>
							<?php printAllDates(); ?>
							<hr />
							<?php if (extensionEnabled('zenpage') && ZP_NEWS_ENABLED) { ?>
								<h3><?php echo gettext('News archive'); ?></h3>
								<?php printNewsArchive("archive"); ?>
								<hr />
      							<?php } ?>
			
							<h3><?php echo gettext('Popular Tags'); ?></h3>
							<div id="tag_cloud">
								<?php printAllTagsAs('cloud', 'tags'); ?>
							</div>
					</div>
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