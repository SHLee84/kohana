<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Part 2'; ?></title>
	</head>
	<body>
		<a href="<?php echo 'part2'; ?>"><?php echo 'contest'; ?></a>
		<h1><?php echo 'This is Part 2'; ?></h1>
		<?php echo $content; ?>
		<form name="member">
			<input type="text" placeholder="<?php echo 'First Name Here...'; ?>" /><br />
			<input type="text" placeholder="<?php echo 'Enter Email Here...'; ?>" /><br />
		</form>
	</body>
</html>