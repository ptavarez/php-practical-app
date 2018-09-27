<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

<aside class="col-xs-4">
  <?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
  <?php
    $connection = mysqli_connect('localhost', 'root', '', 'movies');
    $query2 = "SELECT * FROM  films";
    $result2 = mysqli_query($connection, $query2);
    
    if(isset($_POST['submit'])) {
      $title = $_POST['title'];
      $genre = $_POST['genre'];
      $rating = $_POST['rating'];
      $release_date = $_POST['release_date'];
      
      if($title && $genre && $rating && $release_date) {
        if($connection) {
          echo '<div class="col-sm-12 text-center">Popular Movies</div>';
        } else {
          die('Connection Fail');
        }
        
        $query = "INSERT INTO films(title, genre, rating, release_date)
                  VALUES('$title', '$genre', '$rating', '$release_date')";
                  
        $result = mysqli_query($connection, $query);
        if(!$result) {
          die('Query FAILED' . mysqli_error($connection));
        }
      } else {
        echo "All Fields Required!";
      }
    }
	?>
  <form class="" action="7.php" method="post">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="genre">Genre</label>
      <input type="text" name="genre" class="form-control">
    </div>
    <div class="form-group">
      <label for="rating">Rating</label>
      <input type="text" name="rating" class="form-control">
    </div>
    <div class="form-group">
      <label for="release_date">Release Date</label>
      <input type="text" name="release_date" class="form-control">
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Create">
  </form>
  <br>
  <div class="col-sm-12">
    <?php
      while($row = mysqli_fetch_assoc($result2)) {
    ?>
    <pre>
      <?php print_r($row); ?>
    </pre>
    <?php } ?>
  </div>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
