<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

<?php
		// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
		$num = 5;

		if ($num > 10) {
			echo "I'm greater than 10!"."<br>";
		} elseif ($num < 5) {
			echo "I'm less than 5!"."<br>";
		} else {
			echo "I love PHP"."<br>";
		}
		// Step 2: Make a forloop that displays 10 numbers
		for($i = 1; $i <= 10; $i++) {
			echo $i."<br>";
		}
		// Step 3 : Make a switch Statement that test againts one condition with 5 cases
		switch($num) {
			case 34:
				echo 'I\'m 34!';
			break;
			case 24:
				echo 'I\'m 24!';
			break;
			case 10:
				echo 'I\'m 10!';
			break;
			case 5:
				echo 'I\'m 5!';
			break;
			case 44:
				echo 'I\'m 44!';
			break;
			
			default:
				echo 'Num not found :\'[';
			break;
		}
	?>

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>
