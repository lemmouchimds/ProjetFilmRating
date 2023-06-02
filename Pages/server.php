<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maymovie";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['titre'])) 
{

    //$query = "insert into films (titre, annee, rating, emotion, description, affciche, realisateur) values (?,?,?,?,?,?) ";
    
    $stmt = $link->prepare("INSERT INTO films (titre, affiche, emotion, année, description, realisateur) VALUES (?, ?, ?, ?, ?, ?)");
      
    
    $titre = $_GET['titre'];
    $affiche = $_GET['affiche'];
    $emotion = $_GET['emotion'];
    $annee = $_GET['année'];
    $description = $_GET['description'];
    $realisateur = $_GET['realisateur'];

    
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