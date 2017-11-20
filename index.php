<!DOCTYPE HTML>
<html>
<?php include_once(THEME_DIR_PHP.'head.php') ?>
<body>
<?php include(THEME_DIR_PHP.'menu.php') ?>
			<?php
			if($Url->whereAmI()=='page') {
				include(THEME_DIR_PHP.'page.php');
			}
			else {
				include(THEME_DIR_PHP.'home.php');
			}
			?>
<?php include(THEME_DIR_PHP.'footer.php') ?>
</body>
</html>