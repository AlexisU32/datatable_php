<?php

    $texto = "El país del vecinó sufríó una# grÁn problematica%$$&!| social de administración con muchas más personas";

    function limpiarTexto($text)
    {
        $result = str_replace("á", "a", $text);
        $result = str_replace("Á", "A", $result);
        $result = str_replace("é", "e", $result);
        $result = str_replace("É", "E", $result);
        $result = str_replace("Í", "I", $result);
        $result = str_replace("í", "i", $result);
        $result = str_replace("Ó", "O", $result);
        $result = str_replace("ó", "o", $result);
        $result = str_replace("Ú", "U", $result);
        $result = str_replace("ú", "u", $result);
        $result = str_replace("#", "", $result);
        $result = str_replace("$", "", $result);
        $result = str_replace("<", "", $result);
        $result = str_replace(">", "", $result);
        $result = str_replace("/", "", $result);
        $result = str_replace('{', "", $result);
        $result = str_replace("}", "", $result);
        $result = str_replace("(", "", $result);
        $result = str_replace(")", "", $result);
        $result = str_replace("!", "", $result);
        $result = str_replace("¿", "", $result);
        $result = str_replace("|", "", $result);
        $result = str_replace("?", "", $result);
        $result = str_replace("_", "", $result);
        $result = str_replace("%", "", $result);
        $result = str_replace("&", "", $result);
        return $result;
    }

    $rest = limpiarTexto($texto);
    echo $rest;

    echo "<br>";
    echo "<br>";

    $arrD = explode(" ", $rest);

    if(is_array($arrD)){
        
        echo "La cantidad de palabras en el array en la siguiente ".count($arrD);
        echo "<br>";
        echo "<br>";
        
        foreach ($arrD as $arrd) {
            echo $arrd."<br>";
        }

    }

    echo "<br>";
    echo "<br>";


    // Código para encriptar
    // bocales => números
    // abecedario => Letras

    $letras = str_split($rest);
    //print_r($letras);

    // Bocales
    $res = str_replace("a", "8", $rest);
    $res = str_replace("e", "7", $res);
    $res = str_replace("i", "6", $res);
    $res = str_replace("o", "5", $res);
    $res = str_replace("u", "4", $res);
    $res = str_replace("A", "8", $res);
    $res = str_replace("E", "7", $res);
    $res = str_replace("I", "6", $res);
    $res = str_replace("O", "5", $res);
    $res = str_replace("U", "4", $res);

    // Letras
    $res = str_replace("b", "T-", $res);
    $res = str_replace("B", "T-", $res);
    $res = str_replace("c", "r)", $res);
    $res = str_replace("C", "R)", $res);
    $res = str_replace("D", "f(", $res);
    $res = str_replace("d", "f(", $res);
    $res = str_replace("F", "5", $res);
    $res = str_replace("f", "4", $res);
    $res = str_replace("G", "7", $res);
    $res = str_replace("g", "6", $res);
    $res = str_replace("H", "5", $res);
    $res = str_replace("h", "4", $res);
    $res = str_replace("J", "7", $res);
    $res = str_replace("j", "6", $res);
    $res = str_replace("K", "5", $res);
    $res = str_replace("k", "4", $res);
    $res = str_replace("L", "7", $res);
    $res = str_replace("l", "6", $res);
    $res = str_replace("M", "5", $res);
    $res = str_replace("m", "4", $res);
    $res = str_replace("N", "7", $res);
    $res = str_replace("n", "6", $res);
    $res = str_replace("Ñ", "5", $res);
    $res = str_replace("ñ", "4", $res);
    $res = str_replace("P", "7", $res);
    $res = str_replace("p", "6", $res);
    $res = str_replace("Q", "5", $res);
    $res = str_replace("q", "4", $res);
    $res = str_replace("R", "4", $res);
    $res = str_replace("r", "4", $res);
    $res = str_replace("S", "4", $res);
    $res = str_replace("s", "4", $res);
    $res = str_replace("T", "4", $res);
    $res = str_replace("t", "4", $res);
    $res = str_replace("V", "4", $res);
    $res = str_replace("v", "4", $res);
    $res = str_replace("W", "4", $res);
    $res = str_replace("w", "4", $res);
    $res = str_replace("X", "4", $res);
    $res = str_replace("x", "4", $res);
    $res = str_replace("Y", "4", $res);
    $res = str_replace("y", "4", $res);
    $res = str_replace("Z", "4", $res);
    $res = str_replace("z", "4", $res);





    /*
    $arrDatas = explode(" ", $texto);
    $arrdat = str_split($texto);


    print_r($arrDatas);

    echo "<br>";
    echo "<br>";
    print_r($arrdat);

    echo "<br>";
    echo "<br>";
    echo count($arrdat);

    echo "<br>";
    echo "<br>";

    $dataReplace = str_replace('o', 'a',$arrdat);
    print_r($dataReplace);

    */






?>