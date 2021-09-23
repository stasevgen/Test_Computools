<?php

class Investor
{
    private $money = 1000;

    public function getMoney(){
        return $this->money;
    }

    public function addMoney($amount){
        $this->money+=$amount;
    }
    public function minusMoney($amount){
        $this->money-=$amount;
    }

}