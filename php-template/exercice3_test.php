<?php
    include 'exercice3.php';
    $string = "azer";

    $nb_string = mb_substr_count($var, "immeuble-etage.jpeg");
    echo $nb_string;
    if($nb_string == 3){
        echo("TECHIO> message --channel Bravo! Tu as trouvé. \r\n");
    } else {
        echo("<p style='display:none'>" . "TECHIO> success false  \r\n" . "</p>");
		echo("TECHIO> message --channel Perdu! Regarde bien quelle image correspond à un étage. \r\n");
    }
?>