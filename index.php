<?php
declare(strict_types = 1);
include 'class/Game.php';

$game = new Game();
$game->print();

echo PHP_EOL;
$row = $column = 0;

while($row != -1 || $column != -1) {
    $row = intval(readline("Please, insert row(1 to 4) or -1 to finish"));
    $column = intval(readline("Please, insert column(1 to 4 or -1 to finish"));
    if(checkPosition($row,$column)) $game->pushBox($row -1 ,$column -1);   
}


function checkPosition(int $row, int $column): bool {
    return  ($row > 0 && $row < 5)
            &&
            ($column > 0 && $column < 5);
}

?>