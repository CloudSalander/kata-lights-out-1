<?php 

class Game {

    const ROWS = 4;
    const COLUMNS = 4;
    const NOT_PUSHED = "X";
    const PUSHED = "O";
    const DIRECTIONS = [
        [0, 0],   
        [-1, 0],  
        [1, 0],  
        [0, 1], 
        [0, -1]   
    ];
    
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

    public function pushBox(int $i, int $j): void {
        foreach(self::DIRECTIONS as [$x,$y]) {
            $currentRow =  $i+$x;
            $currentColumn = $j+$y;
            if(isset($this->boxes[$currentRow][$currentColumn])) $this->switchBox($currentRow,$currentColumn);
        }

        $this->print();
    }

    private function initializeGame(): void {
        for($i = 0; $i < self::ROWS; ++$i) {
            $this->boxes[$i] = array_fill(0,self::COLUMNS,false);
        }
    }

    private function switchBox(int $x, int $y): void {
        $this->boxes[$x][$y] = !$this->boxes[$x][$y];
    }
}
?>