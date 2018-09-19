<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">
		
	<aside class="col-xs-4">
		<?php Navigation();?>
	</aside><!--SIDEBAR-->
		
	<article class="main-content col-xs-8">
		<?php
    // Step 1: Make 2 variables called num1 and num2 and set 1 to value 10 and the other 20:
		$num1 = 10;
		$num2 = 20;
    // Step 2: Add the two variables and display the sum with echo:
		echo $num1 + $num2.'<br>';
    // Step 3: Make 2 Arrays with the same values, one regular and the other associative
		$manga = array('Naruto', 'Bleach', 'One Piece');
		$anime = array('zero' => 'Naruto', 'one' => 'Bleach', 'two' => 'One Piece' );
		
		echo $manga[0].'<br>';
		echo $anime['zero']
		?>
	</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
