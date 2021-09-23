<?php

class Tranche
{
    public $sum;
    public $max_sum;
    public $procent;
    public $date;

    function __construct(int $max_sum, int $procent) {
        $this->max_sum = $max_sum;
        $this->procent = $procent;
    }

    public function Invest(int $sum, DateTime $date) {
        $this->sum += $sum;
        $this->date = $date;
        return $this;
    }

}