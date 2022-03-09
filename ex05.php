<?php
    $nota1 = readline("Insira a nota do primeiro semestre: ");
    $nota2 = readline("Insira a nota do segundo semestres: ");
    $nota3 = readline("Insira a nota do terceiro semestre: ");
    $nota4 = readline("Insira a nota do quarto semestre: ");

    $media = ($nota1 + $nota2 + $nota3 + $nota4) /4;

    echo "A média das notas é igual á $media";
?>