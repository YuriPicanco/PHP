<?php

function playAgain(): string
{
    $result = readline("Deseja jogar novamente?");
    return $result === 's'? true : false;
}