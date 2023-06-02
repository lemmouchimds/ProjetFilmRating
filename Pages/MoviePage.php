<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title> <!--Movie Name-->

    <?php
        if (isset($_POST['rating'])) 
        {
            $query = "UPDATE movies SET rating = :rating WHERE id = :id";
        }


        if(isset($_GET['titre']) && isset($_GET['année']) && isset($_GET['rating']) && isset($_GET['emotion']) && isset($_GET['description'])  && isset($_GET['realisateur'])  && isset($_GET['affiche'])  && isset($_GET['nbvisite']))
        {
            
            $movieDetails = ['titre' => $_GET['titre'], 
            'année' => $_GET['année'],
             'rating' => $_GET['rating'], 
            'emotion' => $_GET['emotion'],
            'realisateur' => $_GET['realisateur'],
            'nbvisite' => $_GET['nbvisite'], 
            'description' => $_GET['description'],
            'affiche' => $_GET['affiche']];

        }
        else
        {

            echo 'error';

            $movieDetails = ['name' => 'Forrest Gump', 
            'year' => 1997, 'rating' => '5', 
            'time' => '2h 22min',
            'genre' => 'Drame', 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, ratione. Incidunt vel repudiandae rem aspernatur at optio excepturi labore expedita fuga tempore, quas voluptatem eveniet similique voluptate aut quisquam illum!',
            'img' => "https://th.bing.com/th/id/R.7c0a795e1741324dcdd0e87c51c8bd0f?rik=vFCUAh6jM8sHmg&pid=ImgRaw&r=0"];
        }
        ?>

</head>
<body>
    <header>
        <!-- return to home -->
        <a href="./../">Back to home</a>
    </header>
     <h1>

        <?php
            echo $movieDetails['name'];
        ?>
    </h1>

    <p>
        <?php
            echo $movieDetails['description'];
        ?>
    </p>

    <?php
        // foreach($movieDetails['genre'] as $genre){
        //     echo "<li>$genre</li>";
        // }
        echo $movieDetails['genre'];
    ?>

    <div>year :
        <?php
            echo $movieDetails['year'];
        ?> 
</div>

            <form action="" method="post">
                <label for="">Add rating</label>
                <input type="number" name="rating" id="rating" min="0" max="10" require>

                <button type="submit">Submit</button>
            </form>
     
</body>
</html>