<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Film Rating</title>
</head>
<body>
    <header>
        <h1>Film Rating</h1>
    </header>
    
    <main>
       <a href="Pages/MoviePage.php">Forest Gump</a>
       <a href="Pages/AddMovie.php">Ajouter</a>
        <div class="choice">

            <p>Quel genre d'emotions voulez-vous ressentir ?</p>

            <form action="">
                <select name="Genre" id="Genre">
                    <option value="Comedie">Comedie</option>
                    <option value="Action">Action</option>
                    <option value="Romance">Romance</option>
                </select>

                <button type="submit">Choose</button>
            </form>
        </div> 

        <div class="bottom-main">
            <div class="new-releases">
                <br>
                
                
                <?php
                    $poster1 = "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg";
                    $title1 = "Lorem";
                    $year1 = "2013";
                    $rating1 = "5/10";
                ?>
                
                <div class="movie-element float-left">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                    <div class="movie-info">
                        <h3><?php echo $title1; ?></h3>
                        <p>Year: <?php echo $year1; ?></p>
                        <span>Rating <?php echo $rating1; ?></span>
                    </div>
                </div>
    
                <div class="movie-element float-left">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg" 
                    alt="" height="300" width="200" class="movie-poster">
                    <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
                <div class="movie-element float-left">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg" 
                    alt="" height="300" width="200" class="movie-poster">
                    <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
            </div>
        
            <div class="suggestions">
                <div class="movie-element float-left">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg" 
                    alt="" height="300" width="200" class="movie-poster">
                    <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2022</p>
                        <span>Rating 9/10</span>
                    </div>
                </div>
                
                <div class="movie-element float-left">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg" 
                    alt="" height="300" width="200" class="movie-poster">
                    <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 1997</p>
                        <span>Rating 10/10</span>
                    </div>
                </div>
    
                <div class="movie-element float-left">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg" 
                    alt="" height="300" width="200" class="movie-poster">
                    <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2010</p>
                        <span>Rating 7.5/10</span>
                    </div>
                </div>
            </div>
            </div>
            <br>
                
                <div class="movie-element">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg?ts=1637015653" 
                    alt="" height="300" width="200" class="movie-poster">
                    <h3>Lorem</h3>
                    <p>Year: 2013</p>
                    <span>Rating 5/10</span>
                </div>
    
                <div class="movie-element">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg?ts=1637015653" 
                    alt="" height="60" width="30" class="movie-poster">
                    <h3>Lorem</h3>
                    <p>Year: 2017</p>
                    <span>Rating 7/10</span>
                </div>
            </div>
    
            <div class="suggestions">
                <div class="movie-element">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg?ts=1637015653" 
                    alt="" height="60" width="30" class="movie-poster">
                    <h3>Lorem</h3>
                    <p>Year: 2022</p>
                    <span>Rating 9/10</span>
                </div>
                
                <div class="movie-element">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg?ts=1637015653" 
                    alt="" height="60" width="30" class="movie-poster">
                    <h3>Lorem</h3>
                    <p>Year: 1997</p>
                    <span>Rating 10/10</span>
                </div>
    
                <div class="movie-element">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg?ts=1637015653" 
                    alt="" height="60" width="30" class="movie-poster">
                    <h3>Lorem</h3>
                    <p>Year: 2010</p>
                    <span>Rating 7.5/10</span>
                </div>
            </div>
        </div>
<a href="Pages/recommendations.php">recommendations</a>


    </main>

    <footer>
        Project By Abderrahmane, Manyl, Yanis &copy; 2023
    </footer>
</body>
</html>
