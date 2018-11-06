<!DOCTYPE html>
<html>
    <head>
        <meta charset="uutf-8" />
        <title>ExpliqueSimplement</title>
    </head>
    <body>
        <h1>ExpliqueSimplement</h1>
        <p>Si vous comprenez bien un compte , un sujet ou un domaine, explique le
        simplement.</p>
        <h1>Nouveau concept ou sujet</h2>
        <form method="post" action="traitement_cs.php">
            <label>Debut :</label>
            <select name="debut">
                <option value="1">C'est quoi</option>
                <option value="2">Pourquoi</option>
            </select>
            </br>
            <label>Concept ou sujet:</label>
            <input type="text" name="concept_sujet" />
            </br>
            <em>Le concept ou sujet doit avoir auu max 54 caracteres</em>
            <br/>
            <input type="submit" value="Publier" />
        </form>
    </body>
</html>