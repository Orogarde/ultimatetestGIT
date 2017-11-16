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
$tableau= array( 
    "Manuevra"=> array("nbEquipage"=>3,"passager"=>4) ,
    "Sirius"=>array("nbEquipage"=>4,"passager"=>6) ,
    "Surcouf"=>array("nbEquipage"=>8,"passager"=>15)
    );
    foreach ($tableau as $nomBateau => $infoEquipage) {
            echo $nomBateau." a ".$infoEquipage["passager"]." passagers ".'<br>';
          if($infoEquipage["passager"]>10)
          {
              echo "les Bateaux qui peuvent embarquer plus de 10 passagers sont : ".$nomBateau.'<br>';
          }
        //  echo  $nomBateau.'<br>';
        //  echo $infoEquipage["nbEquipage"]." ".$infoEquipage['passager'].'<br>';
    }
    


?>   
</body>
</html>
