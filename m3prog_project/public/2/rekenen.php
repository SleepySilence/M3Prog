<?php
$getal = 11214.48923;
$afgerond = ceil($getal);
echo "Als je $getal afrond dan krijg je: $afgerond";
$getal2 = 11214.48923;
$afgerond = floor($getal2);
echo "Als je $getal2 afrond dan krijg je: $afgerond";

$nummer1 = rand(1, 10);
$nummer2 = rand(1, 10);
$nummer3 = rand(1, 10);
$nummer4 = ($nummer1 + $nummer2);
$nummer5 = ($nummer4 / $nummer3);
echo "$nummer1 + $nummer2 is $nummer4";
echo "$nummer4 gedeeld  door $nummer3 is $nummer5";
