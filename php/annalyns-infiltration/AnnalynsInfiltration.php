<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return !$is_knight_awake;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return !$is_archer_awake && $is_prisoner_awake;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
      return ($is_dog_present && !$is_archer_awake) || (!$is_dog_present && $is_prisoner_awake && !$is_knight_awake && !$is_archer_awake);
    }
}

$is_knight_awake=true;
$infiltration=new AnnalynsInfiltration();
$infiltration->canFastAttack($is_knight_is_awake);
$is_knight_awake=false;
$is_archer_awake=true;
$is_prisoner_awake=false;
$infiltration->canspy($is_knight_awake,$is_archer_awake,$is_prisoner_awake);
$is_archer_awake=false;
$is_prisoner_awake=true;
$infiltration->cansignal($is_archer_awake,$is_prisoner_awake);
$is_knight_awake = false;
$is_archer_awake = true;
$is_prisoner_awake = false;
$is_dog_present = false;
$infiltration->canLiberate(
    $is_knight_awake,
    $is_archer_awake,
    $is_prisoner_awake,
    $is_dog_present
);
?> 
