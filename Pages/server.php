<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "films";

if (isset($_GET['titre'])) 
{

    $query = "insert into films (titre, annee, rating, emotion, description, affciche, realisateur) values ($_GET['titre'], $_GET['annee'], $_GET['rating'], $_GET['emotion'], $_GET['description'], $_GET['affiche'], $_GET['realisateur'], $_GET['nbvisite']) ";
    $result = mysqli_query($conn, $query);*
    header("Location: ../index.php");
    if ($result) {
        echo "Data inserted";
    } else {
        echo "Data not inserted";
    }


    # code...
}