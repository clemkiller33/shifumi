<?php
    require('gamme.php');

    $result = "";
    $choix_joueur2 = "";
    if (isset($_POST['choix'])) {
        $choix_joueur = (int)$_POST['choix'];
        $game_result = playGamme($choix_joueur);

        // Stocker le résultat du jeu et le choix du joueur 2
        $result = $game_result['winner'];
        $choix_joueur2 = $game_result['player2'];
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShiFuMi</title>
    <style>
        #allplayers {
            display: flex;
            justify-content: space-between;
        }
        #player1, #player2, #result {
            padding: 20px;
            border: 1px solid #ccc;
            width: 30%;
        }
        #result {
            background-color: #f8f8f8;
        }
        button {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>ShiFuMi</h1>
    <div id="allplayers">
        <div id="player1">
            <h2>Joueur 1</h2>
            <form method="post" action="">
                <button type="submit" name="choix" value="0" class="choix_joueur">Pierre</button>
                <button type="submit" name="choix" value="1" class="choix_joueur">Feuille</button>
                <button type="submit" name="choix" value="2" class="choix_joueur">Ciseaux</button>
            </form>
        </div>

        <div id="player2">
            <h2>Joueur 2</h2>
            <p>Choix du joueur 2 : <?php echo $choix_joueur2; ?></p>
        </div>

        <div id="result">
            <h2>Résultat</h2>
            <p><?php echo $result; ?></p>
        </div>
    </div>
</body>
</html>
