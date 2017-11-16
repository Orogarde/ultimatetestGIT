<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> TP GIT 2 AVANCE </h1>
<h2> Une société qui loue des bateaux de plaisance veut connaitre les bateaux
 qui peuvent embarquer plus de 10 passagers </h2>
 <?php
$total0=0;
$tableau= array( // création du tableau associatif #1
    "Manuevra"=> array("nbEquipage"=>3,"passager"=>4) ,  //sous-tableau associatif
    "Sirius"=>array("nbEquipage"=>4,"passager"=>6) ,    //sous-tableau associatif
    "Surcouf"=>array("nbEquipage"=>8,"passager"=>15),    //sous-tableau associatif
    "Nautilus"=> array("nbEquipage"=>5,"passager"=>5), 
    );
    foreach ($tableau as $nomBateau => $infoEquipage) { //parcours du tableau principal
            echo $nomBateau." a ".$infoEquipage["passager"]." passagers ".'<br>';
          if($infoEquipage["passager"]>10) // si le nombre de passager est supérieur à 10 ...
          {
            
            echo "les Bateaux qui peuvent embarquer plus de 10 passagers sont : ".$nomBateau.'<br>'; // ... affichage du bateau en question
          }
        }

        //  echo  $nomBateau.'<br>';
        //  echo $infoEquipage["nbEquipage"]." ".$infoEquipage['passager'].'<br>';
    foreach ($tableau as $nomBateau => $infoEquipage) 
    {
       $total0 += $infoEquipage["nbEquipage"];
    }
    $total=0;
    foreach ($tableau as $nomBateau => $infoEquipage) {
        $total += $infoEquipage["passager"];
    }  
    echo $total;  
    echo "nombre totals d'equipages: ".$total0;
    


?>   
</body>
</html>
