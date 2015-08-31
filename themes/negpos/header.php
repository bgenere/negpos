<h1>
	<?php printGalleryTitle(); ?>
</h1>
<?php if (getOption('Allow_search')) {
		printSearchForm("","search","",gettext("Search gallery")); 
		} 
?>
<div id="position_flag">
	<?php if (function_exists('printLanguageSelector')) {
	        printLanguageSelector("langselector");
	        }
	?> 
</div>


