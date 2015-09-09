<?php

// force UTF-8 Ø

if (!defined('WEBPATH')) 
	die();

?>
<!DOCTYPE html >
<html>
<head>
<!-- cl ajout favicon jpg-->
<link rel="icon" type="image/jpeg" href="http://negpos.fr/negposphoto/uploaded/images/favicon.jpg" />

	<?php zp_apply_filter('theme_head'); ?>
	<title><?php echo getBareAlbumTitle(); ?> | <?php echo getBareGalleryTitle(); ?></title>
	<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
	<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/style.css" type="text/css" />
	<?php printRSSHeaderLink('Album',getAlbumTitle()); ?>
</head>
<body>
<?php zp_apply_filter('theme_body_open'); ?>

<div id="main">

		<div id="header">
		<h1><?php echo getGalleryTitle();?></h1>
			<?php if (getOption('Allow_search')) {
				$album_list = array('albums'=>array($_zp_current_album->name),'pages'=>'0', 'news'=>'0');
				printSearchForm(NULL, 'search', NULL, gettext('Search album'), NULL, NULL, $album_list);
			} ?>

<<!-- cl rajout des selecteurs de langue -->>
                <div id="position_flag_b"><?php if (function_exists('printLanguageSelector')) {
	        printLanguageSelector("langselector");
	        }
                ?> </div>

		</div>

<div id="content">

	<div id="breadcrumb">
<h2><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext('Index'); ?>"><?php echo gettext("Index"); ?></a><?php printParentBreadcrumb(' » ',' » ',''); ?> &raquo; <strong><?php printAlbumTitle(true);?></strong></h2>
</div>

	<div id="content-left">
	<div><?php printAlbumDesc(true); ?></div>


<?php printPageListWithNav("&laquo; ".gettext("prev"), gettext("next")." &raquo;"); ?>
			<div id="albums">
			<?php while (next_album()): ?>
			<div class="album">
				<div class="thumb">
					<a href="<?php echo html_encode(getAlBumURL());?>" title="<?php echo gettext('View album:'); ?> <?php getBareAlbumTitle();?>"><?php printCustomAlbumThumbImage(getBareAlbumTitle(), NULL, 95, 95, 95, 95); ?></a>
						</div>
				<div class="albumdesc">
					<h3><a href="<?php echo html_encode(getAlBumURL());?>" title="<?php echo gettext('View album:'); ?> <?php echo getBareAlbumTitle();?>"><?php printAlbumTitle(); ?></a></h3>
						<?php printAlbumDate(""); ?>
					<div><?php echo shortenContent(getAlbumDesc(), 45,'...'); ?></div>
				</div>
				<p style="clear: both; "></p>
			</div>
			<?php endwhile; ?>
		</div>

			<div id="images">
			<?php while (next_image()): ?>
			<div class="image">
				<div class="imagethumb"><a href="<?php echo html_encode(getImageURL ());?>" title="<?php echo getBareImageTitle();?>"><?php printImageThumb(getBareImageTitle()); ?></a></div>
			</div>
			<?php endwhile; ?>

		</div>
				<p style="clear: both; "></p>
		<?php printPageListWithNav("&laquo; ".gettext("prev"), gettext("next")." &raquo;"); ?>
		<?php printTags('links', gettext('<strong>Tags:</strong>').' ', 'taglist', ', '); ?>
		<br style="clear:both;" /><br />
		<?php
		if (function_exists('printGoogleMap')) {
			echo '<p id="maplink">';
			printGoogleMap();
			echo '</p>';
		}
		?>
	<?php if (function_exists('printSlideShowLink')) {
			echo '<span id="slideshowlink">';
			printSlideShowLink(gettext('View Slideshow'));
			echo '</span>';
		}
		?>
	<br style="clear:both;" />
	<?php if (function_exists('printRating')) { printRating(); }?>
	<?php
	if (function_exists('printCommentForm')) {
	  printCommentForm();
	}	?>

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