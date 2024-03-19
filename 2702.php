<?php

$n= $_POST['nome'];
$nota1 = $_POST['n1'];
$nota2 = $_POST['n2'];
$nota3 = $_POST['n3'];
$faltas=$_POST ['faltas'];

$media = ($nota1 + $nota2 + $nota3)/ 3;

echo"O aluno $n foi:";

if($faltas >5){
        echo "retido por faltas";
}else if($media >=9){
        echo "super aprovado";
}   else if($media >=7){
        echo "aprovado";
}   else if($media >=5){
        echo "conselho";
}   else if($media >5){
        echo "retido";
}

