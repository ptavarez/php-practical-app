<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	<?php
		// Step 1: Use a pre-built math function here and echo it
			echo rand(10, 100);
			echo '<br>';
			echo pow(10, 10);
			echo '<br>';
		// Step 2:  Use a pre-built string function here and echo it
			$string = 'We out here coding in PHP. Say what?!';
			
			echo strlen($string);
			echo '<br>';
			echo strtoupper($string);
			echo '<br>';
		// Step 3:  Use a pre-built Array function here and echo it
			$list = [78, 99, 44, 23];
			
			sort($list);
			echo '<br>';
			echo print_r($list);
	?>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
