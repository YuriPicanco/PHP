<?php
function validate(string $player, array $board): bool
{

    ($board[0] === 'X' && $board[1] === 'X' && $board[2] === 'X') ||
            ($board[3] === $player && $board[4] === 'X' && $board[5] === 'X') ||
            ($board[6] === $player && $board[7] === $player && $board[8] === 'X') ||
            ($board[0] === $player && $board[3] === $player && $board[6] === 'X') ||
            ($board[1] === $player && $board[4] === $player && $board[7] === 'X') ||
            ($board[2] === $player && $board[5] === $player && $board[8] === 'X') ||
            ($board[0] === $player && $board[4] === $player && $board[8] === 'X') ||
            ($board[2] === $player && $board[4] === $player && $board[6] === 'X')
}