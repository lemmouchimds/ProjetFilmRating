<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title> <!--Movie Name-->

    <?php
        if(isset($_GET['name']))
        // && isset($_GET['année']) && isset($_GET['rating']) && isset($_GET['emotion']) && isset($_GET['description'])  && isset($_GET['realisateur'])  && isset($_GET['affiche'])  && isset($_GET['nbvisite']))
        {
            $titre = $_GET['name'];
            $query = "SELECT * FROM films WHERE titre = '$titre'";

            $host = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "maymovie";

            $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

            //print_r($data);

            if (empty($data)) {
                header("Location: MovieDoesNotExist.html"); // replace error.php with the name of the page you want to redirect to
                exit(); // make sure to exit the script after the redirect
            }

            $movieDetails = [
                'titre' => $data[0]['titre'], 
                'annee' => $data[0]['année'],
                'rating' => $data[0]['rating'], 
                'emotion' => $data[0]['emotion'],
                'realisateur' => $data[0]['realisateur'],
                'nbvisite' => $data[0]['nbvisite'], 
                'description' => $data[0]['description'],
                'affiche' => $data[0]['affiche']
            ];
            //$data[0];

        }
        else
        {
            header("Location: MovieDoesNotExist.html"); 
            exit(); // make sure to exit the script after the redirect
        }

        if (isset($_POST['rating'])) 
        {
            // $query = "UPDATE movies SET rating = :rating WHERE id = :id";

            $currentRate = $movieDetails['rating'];
            $currentNbVisite = $movieDetails['nbvisite'];

            $newRate = (($_POST['rating'] + ($currentRate * $currentNbVisite)) / ($currentNbVisite + 1));
            $currentNbVisite = $currentNbVisite + 1;

            $stmt = $conn->prepare("UPDATE films SET rating = ?, nbvisite = ? WHERE titre = ?");

            $stmt->bind_param("iis", $newRate, $currentNbVisite, $movieDetails['titre']);
            $result = $stmt->execute();
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
            echo $movieDetails['titre'];
            ?>
    </h1>

    <div>
        <img src="<?php echo $movieDetails['affiche']; ?>" alt="" width="300" height="450">
    </div>
    
    <p>
        <?php
            echo $movieDetails['description'];
        ?>
    </p>

    <?php
        echo $movieDetails['emotion'];
    ?>

    <div>year :
        <?php
            echo $movieDetails['annee'];
        ?> 
    </div>

    <form method="Post">
        <label for="">Add rating</label>
        <input type="number" name="rating" id="rating" min="0" max="10" require>

        <button type="submit">Submit</button>
    </form>

    <div>
        current Rating : <?php echo $movieDetails['rating']; ?>
        <br>
        from : <?php echo $movieDetails['nbvisite']; ?> votes 
    </div>
    

    
</body>
</html>