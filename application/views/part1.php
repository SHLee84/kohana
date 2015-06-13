<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo __('Part 1'); ?></title>
	</head>
	<body>
		<?php echo HTML::anchor(Route::url('default', array('controller' => 'contest')), __('Contest')); ?>
		<h1><?php echo __('This is FIZZBUZZ'); ?></h1>
		<p><?php echo $content; ?></p>
	</body>
</html>