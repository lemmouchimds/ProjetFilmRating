<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recommendations.css">
    <title>recommendations</title>

  <?php
  require_once 'sqlconn.php';
  ?>

</head>

<body>
    
  <header>
    <img src="data:image/jpeg;base64,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"
      alt="" >
      
      <a href="./../">Back to home</a>
  </header>
     
  <h1>
    voici une liste de recommendations:
  </h1>

  <h2>
    BON VISIONNAGE!
  </h2>


  <div class="film">

    <?php
      $emotion = $GET['emotion'];

      $query = "SELECT * FROM movies WHERE genre = '$emotion'";

      $result = mysqli_query($conn, $query);
      $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    ?>
    
      
    <?php
    foreach($data as $movie){
      echo "<div class='movie'>";
      echo "<h2>".$movie['name']."</h2>";
      echo "<img src='".$movie['img']."' alt='Poster de ".$movie['name']."'>";
      echo "<p>".$movie['description']."</p>";
      echo "<a href='movie.php?name=".$movie['name']."&date=".$movie['date']."&rating=".$movie['rating']."&genre=".$movie['genre']."&desc=".$movie['description']."&img=".$movie['img']."&acteurs=".$movie['acteurs']."&realisateur=".$movie['realisateur']."'>voir plus</a>";
      echo "</div>";
    }
    ?>

  </div>  
    

</body>

</html>