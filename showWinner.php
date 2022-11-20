<?php

function showWinner(string $winner, array $players): void
{
if ($winner === PLAYER_ONE_ICON) 
{
    echo "VENCEDOR: {$players[0]}\n";
} elseif ($winner === PLAYER_TWO_ICON) {
    echo "VENCEDOR: {$players[1]}\n";
  } else {
    echo "EMPATE.\n";
  }
}

?>