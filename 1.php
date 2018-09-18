<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">
	
<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	<?php
		/*
		Step 1:  Use the Echo Function to say hello with html h1 tags embedded
		inside php.
		Step 2: Write a comment above the echo function and explain
		what that function is doing.
		*/

		// This variable creates a string with a greeting to the world.
		$greeting = 'Hello World';
		
		/*
		The code below echos an h1 element with the greeting variable
		concatenated to it.
		*/
		echo '<h1>'.$greeting.'</h1>';
	?>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
