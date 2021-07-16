<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// pirma užduotis

    echo "<h3>Pirma užduotis: </h3>";
    $vardas = 'Ema';
    $pavarde = 'Bartasyte';
    $gimimoMetai = 1993;
    $dabartiniaiMetai = 2021;
    $manoMetai = $dabartiniaiMetai - $gimimoMetai;

    echo "<p>Aš esu $vardas $pavarde. Man yra $manoMetai metų(ai).</p>";

    echo "<br>";

// antra užduotis
    echo "<h3>Antra užduotis: </h3>";
    $pirmasRand = rand(0 ,4);
    $antrasRand = rand(0 ,4);

    echo "$pirmasRand";
    echo "<br>";
    echo "$antrasRand";
    echo "<br>";

    if ($pirmasRand != 0 && $antrasRand != 0 && $pirmasRand >= $antrasRand) {
        $dalyba = $pirmasRand/$antrasRand;
        echo "Result: $dalyba";
    } elseif ($pirmasRand != 0 && $antrasRand != 0 && $antrasRand > $pirmasRand) {
        $dalyba = $antrasRand/$pirmasRand;
        echo "Result: $dalyba";
    } elseif ($pirmasRand == 0 || $antrasRand == 0 ) {
        echo "Result: One of variables is zero.";
    };

    echo "<br>";
    echo "<br>";

// trečia užduotis 
    echo "<h3>Trečia užduotis: </h3>";
    $vienasRand = rand(0, 25);
    $duRand = rand(0, 25);
    $trysRand = rand(0, 25);

    echo "$vienasRand";
    echo "<br>";
    echo "$duRand";
    echo "<br>";
    echo "$trysRand";
    echo "<br>";

    echo (($vienasRand > $duRand && $vienasRand < $trysRand) || ($vienasRand < $duRand && $vienasRand > $trysRand)) ? "Result: $vienasRand" : "";
    echo (($duRand > $vienasRand && $duRand < $trysRand) || ($duRand < $vienasRand && $duRand > $trysRand)) ? "Result: $duRand" : "";
    echo (($trysRand > $vienasRand && $trysRand < $duRand) || ($trysRand < $vienasRand && $trysRand > $duRand)) ? "Result: $trysRand" : "";
    echo ($vienasRand == $duRand || $vienasRand == $trysRand || $duRand == $trysRand) ? "Result: There are two equal values." : "";

    echo "<br>";
    echo "<br>";

// ketvirta užduotis 
    echo "<h3>Ketvirta užduotis: </h3>";
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);

    echo "$a";
    echo "<br>";
    echo "$b";
    echo "<br>";
    echo "$c";
    echo "<br>";

    if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
        echo "Result: Triangle can be created by using these values.";
    } else {
        echo "Result: Triangle can NOT be created by using these values.";
    };

// penkta užduotis 
echo "<h3>Penkta užduotis: </h3>";

    $pirmas = rand(0, 2);
    $antras = rand(0, 2);
    $trecias = rand(0, 2);
    $ketvirtas = rand(0, 2);

    echo "$pirmas";
    echo "<br>";
    echo "$antras";
    echo "<br>";
    echo "$trecias";
    echo "<br>";
    echo "$ketvirtas";
    echo "<br>";

    $suma = $pirmas + $antras + $trecias + $ketvirtas;

    if ($suma == 0) {
        echo "Result: value *2* repeats ZERO times, value *1* repeats ZERO times, value *0* repeats FOUR times.";
    } elseif ($suma == 1) {
        echo "Result: value *2* repeats ZERO times, value *1* repeats ONE time, value *0* repeats THREE times.";
    } elseif ($suma == 2) {
        if ($pirmas == 2 || $antras == 2 || $trecias == 2 || $ketvirtas == 2) {
            echo "Result: value *2* repeats ONE time, value *1* repeats ZERO times, value *0* repeats THREE times.";
        } else {
            echo "Result: value *2* repeats ZERO times, value *1* repeats TWO times, value *0* repeats TWO times.";
        };
    } elseif ($suma == 3) {
        if ($pirmas == 2 || $antras == 2 || $trecias == 2 || $ketvirtas == 2) {
            echo "Result: value *2* repeats ONE time, value *1* repeats ONE time, value *0* repeats TWO times.";
        } else {
            echo "Result: value *2* repeats ZERO times, value *1* repeats THREE times, value *0* repeats ONE times.";
        };
    } elseif ($suma == 4) {
        if ($pirmas == 1 && $antras == 1 && $trecias == 1 && $ketvirtas == 1) {
            echo "Result: value *2* repeats ZERO times, value *1* repeats FOUR times, value *0* repeats ZERO times.";
        } elseif ($pirmas == 1 || $antras == 1 || $trecias == 1 || $ketvirtas == 1) {
            echo "Result: value *2* repeats ONE time, value *1* repeats TWO times, value *0* repeats ONE time."; 
        } elseif ($pirmas == 2 || $antras == 2 || $trecias == 2 || $ketvirtas == 2) {
            echo "Result: value *2* repeats TWO times, value *1* repeats ZERO times, value *0* repeats TWO times.";
        };
    } elseif ($suma == 5) {
        if ($pirmas != 0 && $antras != 0 && $trecias != 0 && $ketvirtas != 0) {
            echo "Result: value *2* repeats ONE time, value *1* repeats THREE times, value *0* repeats ZERO times.";
        } else {
            echo "Result: value *2* repeats TWO times, value *1* repeats ONE time, value *0* repeats ONE time.";
        };
    } elseif ($suma == 6) {
        if ($pirmas == 1 || $antras == 1 || $trecias == 1 || $ketvirtas == 1) {
            echo "Result: value *2* repeats TWO times, value *1* repeats TWO times, value *0* repeats ZERO times.";
        } else {
            echo "Result: value *2* repeats THREE times, value *1* repeats ZERO times, value *0* repeats ONE time.";
        };
    } elseif ($suma == 7) {
        echo "Result: value *2* repeats THREE times, value *1* repeats ONE time, value *0* repeats ZERO times.";
    } else {
        echo "Result: value *2* repeats FOUR times, value *1* repeats ZERO times, value *0* repeats ZERO times.";
    };

// šešta užduotis 
echo "<h3>Šešta užduotis: </h3>";

    $skaicius = rand(1, 6);

    echo "<h3>$skaicius</h3>";
    echo "<br>";    

// septinta užduotis 
echo "<h3>Septinta užduotis: </h3>";

    $skaicius1 = rand(-10, 10);
    $skaicius2 = rand(-10, 10);
    $skaicius3 = rand(-10, 10);

    function colorText($number) {
        if ($number == 0 ) {
           echo "<h3 style='color:green';>$number</h3>";
        } elseif ($number < 0 ) {
            echo "<h3 style='color:red';>$number</h3>";
        } elseif ($number > 0 ) {
            echo "<h3 style='color:blue';>$number</h3>";
        };
      };
      
colorText($skaicius1);
colorText($skaicius2);
colorText($skaicius3);

// aštunta užduotis 
echo "<h3>Aštunta užduotis: </h3>";

    $kiekis = rand(5, 3000);

    echo "$kiekis";
    echo "<br>";

    function whatPrice($quantity) {
        if ($quantity >= 2000 ) {
           $naujakaina = $quantity * 0.97;
           echo "$naujakaina";
        } elseif ($quantity >= 1000) {
           $naujakaina = $quantity * 0.96;
           echo "$naujakaina";
        } else {
            echo "$quantity";
        }
      };
      
whatPrice($kiekis);

// devinta užduotis 
echo "<h3>Devinta užduotis: </h3>";

    $arit1 = rand(0, 100);
    $arit2 = rand(0, 100);
    $arit3 = rand(0, 100);

    echo "$arit1";
    echo "<br>";
    echo "$arit2";
    echo "<br>";
    echo "$arit3";
    echo "<br>";

    $avg = round(($arit1 + $arit2 + $arit3)/3 , 0);

    echo "Simple avg: $avg";
    echo "<br>";

    if (($arit1 < 10 || $arit1 > 90) && ($arit2 < 10 || $arit2 > 90) && ($arit3 < 10 || $arit3 > 90)) {
        echo "All three values are smaller than 10 or bigger than 90.";
    } elseif (($arit1 < 10 || $arit1 > 90) && ($arit2 < 10 || $arit2 > 90)) {
        echo "Result: $arit3";
    } elseif (($arit1 < 10 || $arit1 > 90) && ($arit3 < 10 || $arit3 > 90)) {
        echo "Result: $arit2";
    } elseif (($arit2 < 10 || $arit2 > 90) && ($arit3 < 10 || $arit3 > 90)) {
        echo "Result: $arit1";
    } elseif ($arit1 < 10 || $arit1 > 90) {
        $newavg = round(($arit2 + $arit3)/2 , 0);
        echo "Result: $newavg";
    } elseif ($arit2 < 10 || $arit2 > 90) {
        $newavg = round(($arit1 + $arit3)/2 , 0);
        echo "Result: $newavg";
    } elseif ($arit3 < 10 || $arit3 > 90) {
        $newavg = round(($arit1 + $arit2)/2 , 0);
        echo "Result: $newavg";
    } else {
        echo "Result: $avg";
    };

// dešimta užduotis 
echo "<h3>Dešimta užduotis: </h3>";

    $sekundes = rand(0, 60);
    $minutes = rand(0, 60);
    $valandos = rand(0, 12);

    ?>
</body>
</html>