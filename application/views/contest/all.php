<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo __('Contest'); ?></title>
	</head>
	<body>
		<?php echo HTML::anchor(Route::url('default', array('controller' => 'part1')), __('Go to Part 1')); ?>
		<h1><?php echo __('Welcome to Contest'); ?></h1>
		<table>
			<thead>
				<tr>
					<th>
						<?php echo __('First Name'); ?>
					</th>
					<th>
						<?php echo __('Email Address'); ?>
					</th>
					<th>
						<?php echo __('Action'); ?>
					</th>
				</tr>
			</thead>
<?php 
	if ( ! isset($members))
	{ 
		echo '<tfoot><tr><td colspan="3">'.__('No results found').'.</td></tr></tfoot>';
	}
	else
	{ 
		echo '<tbody>';
		foreach($members as $member)
		{
			echo '<tr><td>'.$member->firstname.'</td><td>'.$member->email.'</td><td>'.HTML::anchor(Route::url('default', array('controller' => 'contest', 'action' => 'details', 'id' => $member->id)), __('Edit')).'</td></tr>';
		}
		echo '</tbody>';
 	} ?>
		</table>
		<br />
		<?php echo HTML::anchor(Route::url('default', array('controller' => 'contest', 'action' => 'details')), __('Add New')); ?>
	</body>
</html>