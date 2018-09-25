
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">
	
<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	<?php
	// Step1: Make a form that submits three values to POST super global
	if(isset($_POST['submit'])) {
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$users = ['Kim', 'Dro', 'ptavarez', 'killak'];
		
		if($user_name == null && $password == null) {
			echo 'Please enter your user name and password!';
		} elseif($user_name == null) {
			echo 'Please enter a user name!';
		} elseif($password == null) {
			echo 'Please enter a password!';
		} elseif(strlen($password) < 5) {
			echo 'Password must be more than 4 characters!';
		} elseif(in_array($user_name, $users)) {
			echo 'Welcome '.$user_name.'!';
		} else {
			echo $user_name.' is not an active user!';
		}
	}
	?>
	<div>Sign In</div>
	<form action="6.php" method="post">
		<input type="text" placeholder="Username" name="user_name">
		<input type="password" placeholder="Password" name="password">
		<input type="submit" name="submit">
	</form>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
