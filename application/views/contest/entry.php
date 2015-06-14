<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo __('Contest'); ?></title>
	</head>
	<body>
		<?php echo HTML::anchor(Route::url('default', array('controller' => 'contest')), __('Go to Contest')); ?>
		<?php if (isset($id))
		{
			echo '<h1>'.__('Edit Member').'</h1>';
		}
		else
		{
			echo '<h1>'.__('Add New Member').'</h1>';
		} ?>		
		<form action="" method="post">
			<?php if (isset($id))
			{
				echo '<input type="hidden" name="id" value="'.$id.'" />';
			} ?>
			<label for="firstname"><?php echo __('First Name'); ?></label>
			<br /><input id="firstname" name="firstname" type="text" placeholder="<?php echo 'First Name Here...'; ?>" value="<?php if (isset($firstname)) { echo $firstname; } ?>" />
			<br />
			<span class="error"><?php if (isset($errors["firstname"])) { echo $errors["firstname"].'<br />'; } ?></span>
			<label for="email"><?php echo __('Email Address'); ?></label>
			<br /><span class="error"><?php if (isset($errors["email"])) { echo $errors["email"].'<br />'; } ?></span>
			<input id="email" name="email" type="text" placeholder="<?php echo 'Enter Email Here...'; ?>" value="<?php if (isset($email)) { echo $email; } ?>" />
			<br />
			<button type="submit"><?php echo __('Save'); ?></button>
		</form>
	</body>
</html>