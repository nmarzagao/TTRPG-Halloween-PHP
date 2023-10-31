<?php

const WITCH     = 1;
const WAREWOLF  = 2;
const VAMPIRE   = 3;

class Stats {
    public $hitpoints; // based on const
    public $defence; // based on dex
    public $speed; // based on dex

    public $strength;
    public $dexterity;
    public $constitution;
    public $inteligence;

    public function __construct($monsterType) {
        switch ($monsterType) {
            case WITCH:
                $this->strength     = 0;
                $this->constitution = 1;
                $this->dexterity    = 2;
                $this->inteligence  = 3;

                $this->hitpoints = 30;
                $this->defence   = 10;
                $this->speed     = 30;
                
                break;

            case WAREWOLF:
                $this->inteligence  = 0;
                $this->dexterity    = 1;
                $this->constitution = 2;
                $this->strength     = 3;

                $this->hitpoints = 40;
                $this->defence   = 20;
                $this->speed     = 35;
                
                break; 

            case VAMPIRE:
                $this->constitution = 0;
                $this->strength     = 1;
                $this->inteligence  = 2;
                $this->dexterity    = 3;

                $this->hitpoints = 20;
                $this->defence   = 40;
                $this->speed     = 40;
                
                break;

            default:
                echo "Error: Invalid MonsterTypes\n";
                break;
        }
    }
}

?>