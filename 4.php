<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	<?php
		// Step1: Define a function and make it return a calculation of 2 numbers
		function subtract() {
			$num1 = 50;
			$num2 = 25;
			
			return '50 - 25 = '.($num1-$num2);
		}
		
		echo subtract()."<br>";
		
		// Step 2: Make a function that passes parameters and call it using parameter values
		function user($first_name, $last_name, $email) {
			$profile = [
				"First_Name" => $first_name,
				"Last_Name" => $last_name,
				"Email" => $email
			];
			
			print_r($profile);
		}
		
		user('Pedro', 'Tavarez', 'pe@dro.com');
	?>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
