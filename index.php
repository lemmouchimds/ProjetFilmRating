<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="maymovie est un site web qui vous permet de trouver des films en fonction de votre humeur et le genre d'émotion que vous voulez vivres.">
   <title>Film Rating</title>
   
</head>
<body>
   
    <main>

    

<div class="entete">  
      <img src="Pages\02_06_2023 7_27_51 PM.png" alt="logo maymovie" width=30% >
</div>

          

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "maymovie";

    $link = mysqli_connect($servername, $username, $password, $dbname);

    $query = $link->prepare("select * from films");
    mysqli_close($link);
    ?>
   

    
        


    

      
       <div class="ajouter">

       <form action="Pages\AddMovie.php">
        <button type="submit">AJOUTER UN FILM</button>
       </form>

       </div>
       
       <br>
       <br>
       <br>
       <br> 
       <br>
       <h1>
               <center> QUEL GENRE D'EMOTION VOULEZ-VOUS RESSENTIR ?</center>
            </h1>

       <div class="choice">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>




         
         <div class= "select-style">
 

           <form action="./Pages/recommendations.php" method=GET>
                 
                  <select name="emotion" id="emo">
                  
                   <option value="Bonheur">Bonheur</option>
                    <option value="melancolie" >Mélancolie</option>
                    <option value="Peur">Peur</option>
                    <option value="Amour">Amour</option>
                    <option value="Rire">Rire</option>
                    <option value="Suspens">Suspens</option>
                    <option value="Stupeur">Stupeur</option>
                    <option value="Motivation">Motivation</option>
                    <option value="Voyage">Voyage</option>

                   </select>


                   <br><br><br>
                   <div class="choose">
                <button type="submit"  >Choisir</button>
                </div>
         </div>

               
               
               

            </form>
            
        </div> 



<br>
<br>
<br><br>
<br><br><br><br><br>
<br><br><br><br><br>

<div class="box">
 
</div>

<br>
<div class="box">
 
</div>


<div class="trs">
<h1>SUGGESTIONS PAR GENRE/CATEGORIE :</h1>
</div>
        <div class="bottom-main">
            <div class="sorties recentes">

            <br>
            <br>
            <h2>SORTIES RECENTES :</h2>

                <br>
                
                
                <?php
                    $poster1 = "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg";
                    $title1 = "Lorem";
                    $year1 = "2013";
                    $rating1 = "5/10";
                ?>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                    <div class="movie-info">
                        <h3><?php echo $title1; ?></h3>
                        <p>Year: <?php echo $year1; ?></p>
                        <span>Rating <?php echo $rating1; ?></span>
                    </div>
                </div>
    
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                  </a>
                  <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
            </div>


            <div class="plus appreciés">

<br>
<br>
<h2>PLUS APPRECIES :</h2>

    <br>
    
    
    <?php
        $poster1 = "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg";
        $title1 = "Lorem";
        $year1 = "2013";
        $rating1 = "5/10";
    ?>
    
    <div class="movie-element float-left">
    <a href="Pages/MoviePage.php">
        <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
     </a>
        <div class="movie-info">
            <h3><?php echo $title1; ?></h3>
            <p>Year: <?php echo $year1; ?></p>
            <span>Rating <?php echo $rating1; ?></span>
        </div>
    </div>

    <div class="movie-element float-left">
    <a href="Pages/MoviePage.php">
        <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
      </a>
      <div class="movie-info">
            <h3>Lorem</h3>
            <p>Year: 2017</p>
            <span>Rating 7/10</span>
        </div>
    </div>
    
    <div class="movie-element float-left">
    <a href="Pages/MoviePage.php">
        <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
     </a>
     <div class="movie-info">
            <h3>Lorem</h3>
            <p>Year: 2017</p>
            <span>Rating 7/10</span>
        </div>
    </div>
    
</div>

        

            <div class="animation">
                <br>
                
                <h2>ANIMATION :</h2>
                <br>
                
                <?php
                    $poster1 = "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg";
                    $title1 = "Lorem";
                    $year1 = "2013";
                    $rating1 = "5/10";
                ?>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3><?php echo $title1; ?></h3>
                        <p>Year: <?php echo $year1; ?></p>
                        <span>Rating <?php echo $rating1; ?></span>
                    </div>
                </div>
    
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
            </div>




            <div class="action">
                <br>
                
                <h2>ACTION :</h2>

                <br>
                
                <?php
                    $poster1 = "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg";
                    $title1 = "Lorem";
                    $year1 = "2013";
                    $rating1 = "5/10";
                ?>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3><?php echo $title1; ?></h3>
                        <p>Year: <?php echo $year1; ?></p>
                        <span>Rating <?php echo $rating1; ?></span>
                    </div>
                </div>
    
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
            </div>

            <div class="sf">
                <br>
                
                <h2>SCIENCE FICTION :</h2>

                <br>
                
                <?php
                    $poster1 = "https://d1csarkz8obe9u.cloudfront.net/posterpreviews/iron-man-poster-design-template-4f96ce479d1d35073cde5fa174b74f4d_screen.jpg";
                    $title1 = "Lorem";
                    $year1 = "2013";
                    $rating1 = "5/10";
                ?>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3><?php echo $title1; ?></h3>
                        <p>Year: <?php echo $year1; ?></p>
                        <span>Rating <?php echo $rating1; ?></span>
                    </div>
                </div>
    
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
                </div>
                
                <div class="movie-element float-left">
                <a href="Pages/MoviePage.php">
                    <img src="<?php echo $poster1; ?>" alt="" height="300" width="200" class="movie-poster">
                 </a>
                 <div class="movie-info">
                        <h3>Lorem</h3>
                        <p>Year: 2017</p>
                        <span>Rating 7/10</span>
                    </div>
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
