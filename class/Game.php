<?php 

class Game {

    const ROWS = 4;
    const COLUMNS = 4;

    private array $boxes;

    public function __construct(){
        $this->initializeGame();
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