<?php
$afstand = 928.79;
$prijs = 1.89;
$ticket = 60;
$tankinhoud = 50;
$verbruik = 15;
$liter = ceil($afstand / $verbruik);
$tank = ceil($liter / $tankinhoud);
$kost = ceil($liter * $prijs);
echo "Je gebruikt $liter liter per $afstand km <br/> ";
echo "je moet $tank keer tanken";
echo "Je betaalt $kost euro";
if ($ticket > $kost){
    echo "Ik ga met de trein";
} else if ($ticket < $kosten){
    echo "Ik ga met de auto";
}

