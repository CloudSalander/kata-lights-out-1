<?php 

class Game {

    const ROWS = 4;
    const COLUMNS = 4;
    const NOT_PUSHED = "X";
    const PUSHED = "O";

    private array $boxes;

    public function __construct(){
        $this->initializeGame();
    }

    public function print(): void {
        for($i = 0; $i < self::ROWS; ++$i) {
            for($j = 0; $j < self::COLUMNS; ++$j) {
                if($this->boxes[$i][$j]) echo self::PUSHED;
                else echo self::NOT_PUSHED;
                echo " ";
            }
            echo PHP_EOL;
        }
    }

    private function initializeGame(): void {
        //TODO: Sure we can do this better or less manually 
        for($i = 0; $i < self::ROWS; ++$i) {
            $this->boxes[$i] = [];
            for($j = 0; $j < self::COLUMNS; ++$j) {
                array_push($this->boxes[$i],false);
            }
        }
    }
}
?>