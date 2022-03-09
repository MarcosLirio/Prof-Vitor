<?php
    $nome = readline("Insira seu nome: ");
    $idade = readline("Insira a sua idade: ");

    if($idade > 18) {
        echo "$nome é maior de idade e sua idade é de $idade anos";
    } else {
        echo "$nome é menor de idade e sua idade é de $idade anos";
    }
?>