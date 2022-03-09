<?php
    $saldoAnterior = 500;
    $cheque = 200;
    $saldoAtual;

    echo "Olá, tudo bem? o seu saldo no momento é de $saldoAnterior".PHP_EOL;

    $saldoAtual = $saldoAnterior + $cheque;

    echo "Entrou um cheque no valor de $$200 na sua conta, agora o seu saldo atual é de R$ $saldoAtual.";
?>