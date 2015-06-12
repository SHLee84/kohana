<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Contest'; ?></title>
	</head>
	<body>
		<a href="<?php echo '/kohana'; ?>"><?php echo 'Go to Part 1'; ?></a>
		<h1><?php echo 'Welcome to Contest'; ?></h1>
		<table>
			<thead>
				<tr>
					<th>
						First Name
					</th>
					<th>
						Email
					</th>
					<th>
						Action
					</th>
				</tr>
			</thead>
<?php 
	if ( ! isset($members))
	{ 
		echo '<tfoot><tr><td colspan="3">No results found.</td></tr></tfoot>';
	}
	else
	{ 
		echo '<tbody>';
		foreach($members as $member)
		{
			echo '<tr><td>'.$member->firstname.'</td><td>'.$member->email.'</td><td><a href="/kohana/contest/details/'.$member->id.'">Edit</a></td></tr>';
		}
		echo '</tbody>';
 	} ?>
		</table>
		<br />
		<a href="<?php echo '/kohana/contest/details'; ?>"><?php echo 'Add New'; ?></a>
	</body>
</html>