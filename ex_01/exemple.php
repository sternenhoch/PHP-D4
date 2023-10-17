<?php
include_once("Mars.php");
$rocks = new Mars();
$lite = new Mars();
$snack = new Mars();
echo $rocks->getId() . PHP_EOL;
echo $lite->getId() . PHP_EOL;
echo $snack->getId() . PHP_EOL;