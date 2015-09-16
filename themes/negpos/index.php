<?php
// force UTF-8 Ø
if($zenpage = extensionEnabled('zenpage')) { // check if Zenpage is enabled or not
	if (checkForPage(getOption("zenpage_homepage")) && ZP_PAGES_ENABLED) { // switch to a news page
		$ishomepage = true;
		echo "<!-- Home Page - begin-->\n";
		include ('pages.php');
		echo "<!-- Home Page - end-->\n";
	} else {
		echo "<!-- Gallery - begin - zenpage activated-->\n";
		include ('gallery.php');
		echo "<!-- Gallery - end-->\n";
	}
} else {
	echo "<!-- Gallery - begin - zenpage not activated-->\n";
	include ('gallery.php');
	echo "<!-- Gallery - end-->\n";
}
?>