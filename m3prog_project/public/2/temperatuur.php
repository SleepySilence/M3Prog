<?php
    $leeftijd = 18;
    $dagen_per_jaar = 365;
    $leeftijd_in_dagen = $leeftijd * $dagen_per_jaar;
    echo "Ik ben " . $leeftijd . " jaar " . " en dus al " . $leeftijd_in_dagen . " dagen oud!"; 

    //fahrenheit naar celsius
    $fahrenheit = 74;
    $celsius = ($fahrenheit - 32) / 1.8;
    echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

    //Celsius naar Fahrenheit
    $celsius = 32;
    $fahrenheit = ($celsius * 1.8) + 32;
    echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";


