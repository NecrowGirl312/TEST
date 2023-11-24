<?php
//Challenge 1 PHP

// Déclaration des variables
$nomLivre = "Voyage avec un âne dans les Cévennes";
$lu = true; // Je n'ai pas lu le livre
$anneeSortie = 1879;
$prixFnac = 12.90; // Prix du livre sur la Fnac

// Affichage des valeurs
echo "Nom du livre : " . $nomLivre . "<br>";
echo "Ai-je lu ce livre ? " . ($lu ? "Oui" : "Non") . "<br>";
echo "Année de sortie : " . $anneeSortie . "<br>";
echo "Prix du livre sur la Fnac : " . $prixFnac . " euros <br>";


//Challenge 2 PHP  Message codé


function dechiffrer($message) {
    // Calcul du chiffre-clé
    $longueur = strlen($message);
    $chiffre_cle = $longueur / 2;

    // Récupération de la sous-chaîne à partir du 6ème caractère
    $sous_chaine = substr($message, 5, $chiffre_cle);

    // Remplacement des chaînes '@#?' par un espace
    $sous_chaine = str_replace('@#?', ' ', $sous_chaine);

    // Inversion de la chaîne de caractères
    $message_dechiffre = strrev($sous_chaine);

    return $message_dechiffre;
}

// Messages à déchiffrer
$message1 = "0@sn9sirppa@#?ia’jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

// Appel de la fonction de déchiffrement pour chaque message
$texte_dechiffre1 = dechiffrer($message1);
$texte_dechiffre2 = dechiffrer($message2);
$texte_dechiffre3 = dechiffrer($message3);

// Affichage des messages déchiffrés
echo "Message 1 déchiffré : " . $texte_dechiffre1 . "\n" . "<br>";
echo "Message 2 déchiffré : " . $texte_dechiffre2 . "\n" . "<br>";
echo "Message 3 déchiffré : " . $texte_dechiffre3 . "\n" . "<br>";


/*
// Crée un Gist avec le code et les textes déchiffrés
$gist = "Code PHP et textes déchiffrés du php-challenge2\n\n";
$gist .= "Code PHP :\n";
$gist .= file_get_contents(__FILE__) . "\n\n";
$gist .= "Message 1 déchiffré : " . $texte_dechiffre1 . "\n";
$gist .= "Message 2 déchiffré : " . $texte_dechiffre2 . "\n";
$gist .= "Message 3 déchiffré : " . $texte_dechiffre3 . "\n";
*/





?>
