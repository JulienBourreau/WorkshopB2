<?php
function AttribuerNote($produit){
    $pays;
    $bio;
    $saison;
    $score;
    $produit = [$pays, $bio, $saison];
    $note_origine = 0;
    $score = (($note_origine + $note_bio + $note_saison)/3);

    if($produit => $pays  => $distance >= 0){
        if ($distance <0) {
            echo 'error';
        }
        elseif ($distance < 51) {
            $note_origine += 10;
        }
        elseif ($distance < 351){
            $note_origine +=9;
        }
        elseif($distance < 751){
            $note_origine +=8;
        }
        elseif($distance < 1501){
            $note_origine +=7;
        }
        elseif($distance < 2501){
            $note_origine +=6;
        }
        elseif($distance < 3501){
            $note_origine +=5;
        }
        elseif($distance < 5001){
            $note_origine +=4;
        }
        elseif($distance < 7001){
            $note_origine +=3;
        }
        elseif($distance < 10001){
            $note_origine +=2;
        }
        elseif($distance < 12001){
            $note_origine +=1;
        }
        elseif($distance < 15001){
            $note_origine = $note_origine;
        }
    };

    if($produit => $bio == 0){

    };

    if($produit => $saison == 0){

    };

    if ($score < 10) {
        return 'Le produit' . $produit => $variete . ' a un score de ' . $score
    }
    elseif ($score > 10){
        return 'probleme calcul du score'
    }
}



?>
