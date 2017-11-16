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