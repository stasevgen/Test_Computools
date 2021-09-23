<?php

class Ioan
{
    public $date_from;
    public $date_to;

    function __construct(DateTime $date_from, DateTime $date_to) {
        $this->date_from = $date_from;
        $this->date_to = $date_to;
    }

    public function createTranche(int $maxSum, int $procent){
        $tranche = new Tranche($maxSum, $procent);
        return $tranche;
    }

    public function checkDate(DateTime $date){
        if($date <= $this->date_to && $date>=$this->date_from){
            return true;
        }
        return false;
    }
}