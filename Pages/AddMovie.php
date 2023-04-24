<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un film</title>
</head>
<body>
    <header>
        <h1>Ajouter un film</h1>
    </header>
    <form action="MoviePage.php">

        <fieldset>
            <legend>Les information du film</legend>
            <label for="name">Nom du film</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="date">Date</label>
            <input type="date" name="date" id="date">
            <br>
            <label for="genre">Genre</label>
            <select name="genre" id="genre">
                <option value="Comedie">Comedie</option>
                <option value="Action">Action</option>
                <option value="Romance">Romance</option>
            </select>
            
            <br>
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating" min="0" max="5">
            <br>
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
            <br>
            <label for="img">Image</label>
            <input type="url" name="img" id="img">
            <br>

            <button type="submit">Ajouter</button>
        </fieldset>

    </form>
</body>
</html>