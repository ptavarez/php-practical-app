<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	<?php
		// Step 1 - Make a variable with some text as value
		$sentence = 'I\'m a variable in disguise';
		$salt = 'iusesomecrazystrings22';
		$hashFormat = '$2y$';
		$hashSalt = $hashFormat.$salt;
		
		// Step 2 - Use crypt() function to encrypt it
		// Step 3 - Assign the crypt result to a variable
		$cryp = crypt($sentence, $hashSalt);
		
		// Step 4 - echo the variable
		echo $cryp;
	?>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
