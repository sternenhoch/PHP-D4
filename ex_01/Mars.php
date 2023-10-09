<?php
class Mars{
    private static $idCounter = 0;
    private $id;   

    public function __construct() {

        $this->id = self::$idCounter;
        self::$idCounter++;
    
    }
    public function getId() {
             return $this->id; 
    }
}
/*$id1 = new Mars();
$id2 = new Mars();
$id3 = new Mars();

echo $idCounter();

echo Mars::$id . PHP_EOL;
echo $id1->real_id . PHP_EOL;
echo $id2->real_id . PHP_EOL;
$id1->getId();
echo Mars::getId() . PHP_EOL;*/