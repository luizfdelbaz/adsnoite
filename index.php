<?php
// Comentarios em PHP - Linha
/*

*/
//echo"Hello World - Meu Nome é Luiz Fernando";
$idade = 27;
$nome = "Luiz";
$Altura = 1.70;
$solteiro = true;
//$solteiro =1;
//echo $solteiro =1;
//echo 10 < 12;
CONST IDADE = 10;
echo IDADE;
if(10 > 12)
{
    echo "Mentira";
}
else
{
    echo "10 não é maior que 12";
}
/*
$nota1 = 6;
if($nota >= 6)
{
    echo "aprovado";

}
else if ($nota1 < 6 && $nota2 >=2)
{
    echo "Ainda tem chance";
}
*/

$nota1 = 8;
$nota2 = 10;
$media = $nota1+$nota2;
$media = $media/2;

if ($media >= 6) {
    echo "Aprovado";
}else{
    echo "Reprovado";
}

// >maior
// <menor
// <= menor igual que
// >= maior igual que
// == mesmo valor
// === mesmo tipo e valor

// && AND
// || OR
// ! negação 

// if(!10>12) {} ! inverte o resultado do teste logico
// % resto da divisão

$nome ="teste";
echo "<br> <br> Luiz" .$nome. "Fernando". "<br>";

//Loop em PHP

do{
   // Código a ser repetido
   $contadora ++;
}while ($contadora < 10);

$cont = 0;
while ($contadora < 10){
//executa os codigos
$cont++; }

for ($i = 0; $i < 10; $i++){
    //Executa os codigos
    if($i % 2 ==0){
        echo "<p>". $i."é par </p>";
    }else {
        echo "<p>". $i."é impar </p>";
    }
}




?>
