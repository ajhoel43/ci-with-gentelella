<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<style>
		#main_header {
			text-align: center;
			font-size: 40px;
		}
	</style>
	<body>
		<div id="main_header">
			<?php echo $header; ?>
		</div>
		<?php echo $content; ?>
		<div id="main_footer" style="text-align: center;">
			<?php echo $footer; ?>
		</div>
	</body>
</html>