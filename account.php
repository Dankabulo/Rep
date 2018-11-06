<!DOCTYPE html>
<html>
    <head>
        <title>ExpliqueSimplement
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Creer un compte</h2>
        <form method="post" action="traitement.php">
            <label>Pseudo :</label>
                <input type="text" name="pseudo" /></br></br>
            <label>Mot de passe :</label>
                <input type="password" name="pwd" class="form-control" placeholder="Mot de passe"></br></br>
            <label>Confirmer mot de passe :</label>
                <input type="password" name="pwds" class="form-control" placeholder="Confirmer le mot de passe"></br></br>
            <label>Email :</label>
                <input type="email" name="mail" /></br></br>
            <label> Genre : </label>
            <select name="genre">
                <option value="Masculin">Massculin</option>
                <option value="Feminin">Feminin</option>
                <option value="Autre">Autre</option>
            </select>
            <br/> <br/>
            <input type="submit" value="Creer" />
        </form>
    </body>
</html>
