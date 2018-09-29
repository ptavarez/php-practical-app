<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	<?php
		// Step 1: Make a class called Dog
		// Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
		// Step 3: Make a method named ShowAll that echos all the properties
			class Dog {
				var $breed = 'Pitbull';
				var $eyeColor = 'Sky Blue';
				var $furColor = 'White';
				var $age = 5;
				
				function ShowAll() {
					$deats = [
						'breed' => $this->breed,
						'eye_color' => $this->eyeColor,
						'fur_color' => $this->furColor,
						'age' => $this->age
					];
					print_r($deats);
				}
			}
		// Step 4: Instantiate the class / create object and call it pitbull
		// Step 5: Call the method ShowAll
			$pitbull = new Dog;
			$pitbull->ShowAll();
			
	?>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
