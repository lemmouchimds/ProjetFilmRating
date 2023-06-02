<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maymovie";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['titre'])) 
{

    $titre = $_GET['titre'];
    $query = "SELECT * FROM films WHERE titre = '$titre'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (empty($data)) {
        $stmt = $link->prepare("INSERT INTO films (titre, affiche, emotion, année, description, realisateur) VALUES (?, ?, ?, ?, ?, ?)");
        
        
        $titre = $_GET['titre'];
        $affiche = $_GET['affiche'];
        $emotion = $_GET['emotion'];
        $annee = $_GET['année'];
        $description = $_GET['description'];
        $realisateur = $_GET['realisateur'];
        
        
        $stmt->bind_param("sssiss", $titre, $affiche, $emotion, $annee, $description, $realisateur);
        $result = $stmt->execute();
    }

    header("Location: ../index.php");
    
}