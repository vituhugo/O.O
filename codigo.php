<?php

$obj = new Atendente();

$obj->nome = "Gustavo Carlos II";
$obj->idade = 30;
$obj->conhecimento = true;
$obj->setSalario(160, 10);



// Da erro, a variável é privada;
//$obj->cargo = "";