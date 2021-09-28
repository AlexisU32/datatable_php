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