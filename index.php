<?php

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/variables.php';
require_once __DIR__ . '/getPlayersName.php';
require_once __DIR__ . '/buildBoard.php';
require_once __DIR__ . '/showBoard.php';
require_once __DIR__ . '/isPositionCorrect.php';
require_once __DIR__ . '/validate.php';
require_once __DIR__ . '/isBoardFull.php';
require_once __DIR__ . '/swapPlayer.php';



do {
    $players = getPlayuersName();
    $player = PLAYER_ONE_ICON;
    $board = buildBoard();

    $winner = null;

    while ($winner === null) {
        echo showBoard($board);
        $position = (int) readline("Player {$player}, digite a sua posição: ");

        if (!isPositionCorrect($position, $board)){
            continue;
        }
        
        $board[$position] = $player;

        if (validate($board, PLAYER_ONE_ICON)) {
            $winner = PLAYER_ONE_ICON;
        } elseif (validate($board, PLAYER_TWO_ICON)) {
            $winner = PLAYER_TWO_ICON;
        } else {
            $winner = null;
        }

        if (isBoardFull($board)) {
            break;
        }

        $player = swapPlayer($player);
    }

    echo showBoard($board);

    if ($winner === 'X') {
        echo "VENCEDOR: {$playerOne}.\n";
    } elseif ($winner === 'O') {
        echo "VENCEDOR: {$playerTwo}.\n";
    } else {
        echo "EMPATE.\n";
    }

    $playAgain = filter_var(
        readline("\nDeseja jogar novamente? (true/false): "),
        FILTER_VALIDATE_BOOLEAN
    );

    echo "\n";

} while ($playAgain === true);