<?php

function getPlayers(): array{
   return[ 
    readline('Nome do Jogador ('. PLAYER_ONE_ICON .'): '),
    readline('Nome do Jogador ('. PLAYER_TWO_ICON .'): '),
   ];

}