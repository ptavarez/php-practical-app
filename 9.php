<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	<?php
			// Step 1 - Create a link saying Click Here, and set the link href to pass
			// some parameters and use the GET super global to see it.
			$rando = rand(100, 2000);
			print_r($_GET);
			
			// Step 2 - Set a cookie that expires in one week.
			$name = 'CookieMonstah';
			$value = 1994;
			$exp = time() + (60*60*24*7);
			setcookie($name, $value, $exp);

			// Step 3 - Start a session and set it to value, any value you want.
			session_start();
			$_SESSION['$bornYear'] = $_COOKIE['CookieMonstah'];
			echo "<br>";
			echo "Dro was bron on ".$_SESSION['$bornYear'];
	?>
	<br>
	<a href="9.php?id=<?php echo $rando?>">Click Here</a>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
