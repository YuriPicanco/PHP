<?php

function isBoardFull(array $board): bool
{

    //verifica se existe espaço no tabuleiro
    //se tiver espaço retorna falso(falso que o tabuleiro está cheio)
    if(in_array(BLANK_ICON, $board)){
        return false;
    } else{ 
        return true;
    }

}