<?php

function isPositionCorrect(int $position, array $board): bool
{

    if (!in_array($position, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
        echo "\nPosição inexistente, digite novamente.\n";
        false;
    }

    if ($board[$position] !== '.') {
        echo "\nPosição ocupada, digite novamente.\n";
        false;
        }
        
    return true;
}

?>