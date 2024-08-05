<?php
/**
 * param string $winnner
 * param array<string> $player
 * return string
 */

 function showWinner(string $winner, array $player) : string 
 {
    if ($winner === PLAYER_ONE_ICON) {
        return "VENCEDOR: {$player [0]}.\n";
    } elseif ($winner === PLAYER_TWO_ICON) {
        return "VENCEDOR: {$player[1]}.\n";
    } else {
        return "EMPATE.\n";
    }
 }