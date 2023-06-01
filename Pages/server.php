<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maymovie";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['titre'])) 
{

    //$query = "insert into films (titre, annee, rating, emotion, description, affciche, realisateur) values (?,?,?,?,?,?) ";
    
    $stmt = $link->prepare("INSERT INTO films (titre, affiche, emotion, annee, description, realisateur) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $titre, $affiche, $emotion, $annee, $description, $realisateur);
    $result = $stmt->execute();
    header("Location: ../index.php");
    if ($result) {
        echo "Data inserted";
    } else {
        echo "Data not inserted";
    }


    # code...
}