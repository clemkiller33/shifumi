<?php

function playGamme(int $shifumi) {
    $jeux = [
        'Pierre' => 0,
        'Feuille' => 1,
        'Ciseaux' => 2,
    ];

    // Choix aléatoire du joueur 2
    $player2 = $jeux[array_rand($jeux)];

    // Détermination du gagnant
    if ($shifumi === $player2) {
        $winner = "Match nul";
    } elseif (($shifumi - $player2 + 3) % 3 == 1) {
        $winner = "Joueur 1 gagne";
    } else {
        $winner = "Joueur 2 gagne";
    }

    // Retourner le gagnant et le choix du joueur 2
    return [
        'winner' => $winner,
        'player2' => array_search($player2, $jeux)
    ];
}





?>


