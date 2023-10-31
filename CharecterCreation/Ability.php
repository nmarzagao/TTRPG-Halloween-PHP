<?php

class Ability {
    public $name;
    public $description;
    public $toHit;
    public $damage;
    public $castTimes;

    public function __construct($name, $description, $toHit, $damage, $castTimes) {
        $this->name         = $name;
        $this->description  = $description;
        $this->toHit        = $toHit;
        $this->damage       = $damage;
        $this->castTimes    = $castTimes;
    }

    public function cast() {
        if ($this->castTimes == -1) {
            return true;
        }
        elseif ($this->castTimes > 0) {
            $this->castTimes -= 1;
            return true;
        }
        else return false;
    }
}

?>