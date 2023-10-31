<?php
require_once('Stats.php');
require_once('Ability.php');

// MONSTERS: 1 => WITCH, 2 => WAREWOLF, 3 => VAMPIRE

class Charecter {
    public $name;
    public $monsterType;
    public $stats;
    public $abilities;

    public function __construct($name, $monsterType, $abilities) {
        $this->name        = $name;
        $this->monsterType = $monsterType;
        $this->stats       = new Stats($monsterType);
        $this->abilities   = $abilities;
    }

    public function getMonsterType() {
        switch ($this->monsterType) {
            case WITCH:
                return "Witch";
            case WAREWOLF:
                return "Warewolf";
            case VAMPIRE:
                return "Vampire";
            default:
                return "Invalid";
        }
    }
}

?>