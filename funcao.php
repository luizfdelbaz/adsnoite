<?php
function ImprimirQuebra()
{
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
function ImprimirTexto($texto)
{
    echo $texto;
}

$meutexto = "Aqui vai uma string de qualquer tipo de dados". "32";
ImprimirTexto ("Luiz Fernando");
ImprimirQuebra();
ImprimirTexto ($meutexto);
#ImprimirQuebra();
ImprimirQuebra();

function Adicao($numero1, $numero2)
{
    return  $numero1+$numero2;
    
}
function Subtracao($numero1, $numero2)
{
    return Subtracao($numero1 - $numero2);
}
function Multiplicacao($numero1, $numero2)
{
    return Multiplicacao($numero1 * $numero2);
}
function Divisao($numero1, $numero2)
{
    return Divisao($numero1 / $numero2);
}
function Media($numero1, $numero2,)
{
    return Adicao($numero1,$numero2)/2;
}


//dicao(12,8);
//ImprimirQuebra();
//Subtracao(12,8);
//Multiplicacao(12,8);
//Divisao(12,8);
$media = Media(8,9);
ImprimirTexto(Adicao(5432,4567));



?>