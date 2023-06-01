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
        <a href="./../">Back to home</a>
        <h1>Ajouter un film</h1>
    </header>
    <form action="server.php">

        <fieldset>
            <legend>Les information du film</legend>
            <label for="name">Nom du film</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="date">Date</label>
            <input type="text" name="date" id="date">
            <br>
            <label for="emotion">emotion</label>
            <select name="emotion" id="emo">
                    <option value="melancolie">Mélancolie</option>
                    <option value="Bonheur">Bonheur</option>
                    <option value="Peur">Peur</option>
                    <option value="Amour">Amour</option>
                    <option value="Rire">Rire</option>
                    <option value="Suspens">Suspens</option>
                    <option value="Stupeur">Stupeur</option>
                    <option value="Motivation">Motivation</option>
                    <option value="Voyage">Voyage</option>

                </select>
            
            <br>
            
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
            <br>
            <label for="affiche">affiche</label>
            <input type="url" name="affiche" id="affiche">
            <br>

            <label for="realisateur">realisateur</label>
            <input type="text" name="realisateur" id="realisateur">
            <br>

            <button type="submit">Ajouter</button>
        </fieldset>

    </form>
</body>
</html>