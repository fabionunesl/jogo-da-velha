<?php

function getPlayuersName() : array 
{
    return [
        readline('Player 1 ('.PLAYER_ONE_ICON.') - Digite seu nome: '),
        readline('Player 2 ('.PLAYER_TWO_ICON.') - Digite seu nome: '),
    ];

}

