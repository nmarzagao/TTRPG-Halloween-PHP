<?php
require_once(__DIR__ . '/CharecterCreation/Charecter.php');


$ability1 = new Ability("Bite", "Bite a enemy", 0, "1d10 + 5", -1);
$ability2 = new Ability("Super Suck", "Suck a enemy till it dies", 5, "1d20 + 5", 3);

$player = new Charecter("Nick", VAMPIRE, [$ability1, $ability2]);



echo $player->getMonsterType() . "\n";

echo "health " . $player->stats->hitpoints . "\n";

foreach ($player->abilities as $ab) {
    echo $ab->name . "\n";
}

$player->stats->hitpoints -= 10;

echo "health " . $player->stats->hitpoints . "\n";

echo $player->abilities[0]->castTimes . "\n";
echo $player->abilities[0]->cast() . " | " . $player->abilities[1]->castTimes . "\n";
echo $player->abilities[0]->cast() . " | " . $player->abilities[1]->castTimes . "\n";
echo $player->abilities[0]->cast() . " | " . $player->abilities[1]->castTimes . "\n";
echo $player->abilities[0]->cast() . " | " . $player->abilities[1]->castTimes . "\n";
echo $player->abilities[0]->cast() . " | " . $player->abilities[1]->castTimes . "\n";
?>