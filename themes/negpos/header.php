<!-- header - begin -->
<!-- removed : <h1><?php printGalleryTitle(); ?></h1> -->
<div class="col-sm-4 panel-group">
	<div class="panel panel-default">
		<div class="panel-header">
		<?php if (function_exists('printLanguageSelector')) {
				printLanguageSelector("langselector");// flags
				//printLanguageSelector(''); // combo text
				}
		?> 
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-content">  
		<?php if (getOption('Allow_search')) {
				//-- need to be generated manually not compliant
				printSearchForm("","form-group","",""); 
				} 
		?>
		</div>
	</div>
</div>
<div class="col-sm-8">
	 <img src="http://negpos.fr/negposphoto/uploaded/images/header.gif" class="img-responsive" alt="NegPos"> 
</div>
<!-- header - end -->
