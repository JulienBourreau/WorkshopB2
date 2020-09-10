<?php
function AttribuerScore($distance,$bio,$saison){
    // $produit = [$pays, $bio, $saison];
    $note_origine=0;
    $note_bio=0;
    $note_saison=0;
    $score=0;


    if($distance >= "0"){
        if ($distance <"0") {
            echo 'error';
        }
        elseif ($distance < "51") {
            $note_origine =20;
        }
        elseif ($distance < "351"){
            $note_origine =18;
        }
        elseif($distance < "751"){
            $note_origine =16;
        }
        elseif($distance < "1501"){
            $note_origine =14;
        }
        elseif($distance < "2501"){
            $note_origine =12;
        }
        elseif($distance < "3501"){
            $note_origine =10;
        }
        elseif($distance < "5001"){
            $note_origine =8;
        }
        elseif($distance < "7001"){
            $note_origine =6;
        }
        elseif($distance < "10001"){
            $note_origine =4;
        }
        elseif($distance < "12001"){
            $note_origine =2;
        }
        elseif($distance < "15001"){
            $note_origine = 0;
        }
    };

    if($bio == "0"){
        $note_bio=0;
    }
    elseif ($bio=="1") {
        $note_bio=10;
    };

    if($saison == "Pas_de_saison"){
        $note_saison=0;
    }
    elseif ($saison=="De_saison") {
        $note_saison=10;
    };

    if ($score > 10){
        $score = 10;
        
    }

    $score = (($note_origine + $note_bio + $note_saison)/4);
     return $score;
}



?>
