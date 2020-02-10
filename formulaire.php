<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .conteneur {
            width: 1000px;
            margin: 0 auto;
        }

        form {
            width: 50%;
            padding: 20px;
            border: 1px solid #333;
            margin: 0 auto;
        }

        input,
        select,
        textarea {
            width: 100%;
            border: 1px solid #333;
            min-height: 30px;
            resize: vertical;
        }

        #confirm {
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>


<div class="conteneur">
    <?php


    //    echo '<pre>';
    //    var_dump($_POST);
    //    echo '</pre>';

    for ($i = 0; $i <= 100; $i++) {

    }

    ?>
    <form method="post" action="affichage_exercice2.php" enctype="multipart/form-data">

        <h1>Formulaire </h1>

        <label for="nom">Nom*</label>
        <input type="text" name="nom" id="nom" required>

        <label for="prenom">Prenom*</label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="phone">Telephone*</label>
        <input type="text" name="phone" id="phone" required>

        <label for="job">Profession</label>
        <input type="text" name="job" id="job">

        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville">

        <label for="cp">Code postal</label>
        <input type="text" name="cp" id="cp">

        <label for="adresse">Adresse</label>
        <textarea name="adresse" id="adresse"></textarea>

        <label for="bd">Date de naissance</label>
        <input type="date" name="bd" id="bd">

        <p>Sexe</p>
        <div style="display: flex;">
            <label for="male">homme:</label>
            <input type="radio" id="male" name="sexe" value="m">
            <label for="female">femme:</label>
            <input type="radio" id="female" name="sexe" value="f">
        </div>

        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="10"></textarea>

        <input type="submit" id="confirm" value="Confirmer">
    </form>
</div>
</body>
</html>
