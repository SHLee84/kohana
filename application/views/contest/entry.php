<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Contest'; ?></title>
	</head>
	<body>
		<a href="/kohana/contest"><?php echo 'Go to Contest'; ?></a>
		<?php if (isset($id))
		{
			echo '<h1>Edit Member</h1>';
		}
		else
		{
			echo '<h1>Add New Member</h1>';
		} ?>		
		<form action="/kohana/contest/details" method="post">
			<?php if (isset($id))
			{
				echo '<input type="hidden" name="id" value="'.$id.'" />';
			} ?>
			<label for="firstname"><?php echo 'First Name'; ?></label><br /><input id="firstname" name="firstname" type="text" placeholder="<?php echo 'First Name Here...'; ?>" value="<?php if (isset($firstname)) { echo $firstname; } ?>" /><br />
			<span class="error"><?php if (isset($errors)) { echo $errors->firstname; } ?></span>
			<label for="email"><?php echo 'Email Address'; ?></label><br /><input id="email" name="email" type="text" placeholder="<?php echo 'Enter Email Here...'; ?>" value="<?php if (isset($email)) { echo $email; } ?>" /><br />
			<span class="error"><?php if (isset($errors)) { echo $errors->email; } ?></span>
			<button type="submit"><?php echo 'Save'; ?></button>
		</form>
	</body>
</html>