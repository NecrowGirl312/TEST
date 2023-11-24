<?php

/*
timesInDay(5);
 
    function timesInDay(int $hour): void 
    {
        if ($hour < 1 || $hour > 24) {
            echo "Error";
        } else if ($hour >= 6 && $hour <= 12) {
            echo "Matin";
        } else if ($hour > 12 && $hour <= 18) {
            echo "Aprem";
        } else {
            echo "Soir";
        }
    }  

/*
    6 et 12 -> matin
    12 et 18 -> apresmidi
    entre 18 et 24 ou entre 0 et 6 => soir    
     */
  /* 
     timesInDay(6);
        
     function timesInDay(int $hour): string 
     {
         if ($hour < 1 || $hour > 24) {
             return "Error";
         } else if ($hour >= 6 && $hour <= 12) {
             return "Matin";
         } else if ($hour > 12 && $hour <= 18) {
             return "Aprem";
         } 
             return "Soir";
      }
         $hour = 0;

         while ($hour < 24) {
             echo $hour . " => " . timesInDay($hour) . "<br/>";
         
             $hour++;
     }
*/

/*
    $numbers = [10, 85, 13, 4, 100, 5, 7];
    $newNulbers = [];
        
    $i = 0;
    $size = count($numbers);

    while ($i < count($numbers)) {  //tant que $nombers contient des element sup à 0 il boucle
        $newNumbers[] = $numbers[$i];

        unset($numbers[$i]); 

       $i++; 
    }    

    $i = 0;
    while ($i < count($newNumbers)) {
        echo $newNumbers[$i]. "<br/>";

        $i++; 
    }
  
    */
/*
    $newNumbers = [10, 400, 13, 100, 5, 7, 54];
    $max = $newNumbers[0];
    
    $i = 1;
    
    while ($i < count($newNumbers)) {
        if ($newNumbers[$i] > $max) {
            $max = $newNumbers[$i];
        }
    
        $i++;
    }
    
    echo $max;
*/
/*
    $numbers = [];
    $newNumbers = [10, 40, 13, 100, 5, 7, 54];
    
    for ($i = 0; $i < count($newNumbers); $i++) {
        echo $newNumbers[$i] . "<br/>";
    }
   
$max = $newNumbers[0];
$i = 1;

    for ($i = 1; $i < count($newNumbers); $i++) {
        if ($newNumbers[$i] > $max) {
            $max = $newNumbers[$i];
        }
    }
    */

/*
//Pour afficher les 5e nombre premier:

function isPremier(int $a) {
    if ($a < 2) {
        return false;
    }
    if ($a === 2) return true;
    for ($i = 2; $i < $a; $i++) {
        if($a % $i == 0) {
            return false;
        }
    }
    return true;
}
$i = 0;
$nbPremier = 5;
$nbShowedNumbers = 0;
for ($i = 0; $nbShowedNumbers < $nbPremier;$i++)
    if (isPremier($i)) {
        echo $i . "<br/>";
        $nbShowedNumbers++;
    }

*/
   
/*
    //pour classer les heures par temps (matin , AM, soir)
    for ($hour = 0; $hour < 24; $hour++) {
        echo $hour . " => " . timesInDay($hour);


    }


    $a = 5;
    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $i;$j++) {
            echo $i; 
        }
        echo "<br/>";
    }
/*


//Afficher tous les last name uniquement en ligne
    $customers = [
        [
            "lastName" => "Ghores",
            "firstName" => "Anis",
            "notes" => [5, 20, 10]
        ],
        [
            "lastName" => "Jean",
            "firstName" => "Paul",
            "notes" => [5, 40, 15]
        ],
        [
            "lastName" => "Karim",
            "firstName" => "Paul",
            "notes" => [6, 60, 20]
        ],
    ];
    */
/*
for ($index = 0; $index < count($customers); $index++) {
    echo $customers[$index]["lastName"] . "<br/>";
}
*/

/*
//afficher nom prenom sur une ligne et notes sur ligne suivante (pour faire une boucle imbriqué)

for ($index = 0; $index < count($customers); $index++) {
    echo $customers[$index]["lastName"] . " ". $customers[$index]["firstName"] . "<br/>";

    $notes = $customers[$index]["notes"];

//meme fonction que for mais avec:
    $notes = implode(" | ", $notes);
    echo $notes. "<br/>";

    $newNotes = explode(" | ", $notes);
    echo implode(" ", $newNotes);
    /*for ($i = 0; $i < count($newNotes); $i++) {
        echo $newNotes[$i] . " ";
    }
    

    echo "<br/>";
}
/*
    for ($i = 0; $i < count($notes); $i++) {
        echo $notes [$i] . " ";

    }
    echo "<br/>";
*/
    
/*
{
    $customers =  [
        0 => [
            1, 2, 3
        ]
        1 =>  
        2 =>
        3 =>
        4 =>
    ]
// pour afficher element 1:

echo $customers [0] [0] //$customers correspond au tableau general


}
*/

$books = [
    "Game of thrones" => 1986,
    "Harry Potter" => 1865,
    "One piece" => 1943
];

foreach ($books as $value) {
    echo $value . "<br/>";
}

echo "<br/><br/>";

foreach ($books as $key => $value) {
    echo "Le livre \"$key\" est sorti en $value<br/>";
}

?>
