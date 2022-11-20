<?php

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/variables.php';
require_once __DIR__ . '/getPlayers.php';
require_once __DIR__ . '/buildBoard.php';
require_once __DIR__ . '/showBoard.php';
require_once __DIR__ . '/isPositionCorrect.php';
require_once __DIR__ . '/validate.php';
require_once __DIR__ . '/isBoardFull.php';
require_once __DIR__ . '/swapPlayer.php';
require_once __DIR__ . '/showWinner.php';
require_once __DIR__ . '/playAgain.php';

do {
    $players= getPlayers();
    $board = buildBoard();

    $player = PLAYER_ONE_ICON;
    $winner = null;

    while ($winner === null) 
    {
        echo showBoard($board);
        $position = (int) readline("Player {$player}, digite a sua posição: ");

            if(!isPositionCorrect($position, $board)){ //Verifica se a posição existe ou se está ocuopada
                continue;
            }

        $board[$position]= $player;    

            if(validate(PLAYER_ONE_ICON, $board)){   //Verifica se há um ganhador
                $winner= PLAYER_ONE_ICON;
            }elseif(validate(PLAYER_TWO_ICON, $board)){
                $winner= PLAYER_TWO_ICON;
            }else{
                $winner= null;
            }

            if (isBoardFull($board)){//Se 'false' tem espaço e da pra jogar
                break;              //Se true entra no if e reotrna o loop do inicio 
            }

        $player= swapPlayer($player);
    }

    echo showBoard($board);
    echo showWinner($winner, $players);

    $playAgain = playAgain();

    echo "\n";
} while ($playAgain === true);

?>