<?php

class Invest
{
    public $invset;
    public $date;
    public $amount;
    public $procent;
    public function __construct($ioan, $wantSum, $investor, $tranche, DateTime $date) {
        if($ioan->checkDate($date)) {
            if($tranche->sum+$wantSum <= $tranche->max_sum) {
                if($investor->getMoney() >= $wantSum) {
                    $this->date = $date;
                    $this->invset = $tranche->Invest($wantSum, $date);
                    $investor->minusMoney($wantSum);
                    echo "OK";
                    $this->amount = $wantSum;
                    $this->procent = $tranche->procent;
                    return $this->invset;
                }else{
                    echo "ERROR : YOU NOT HAVE MONEY";
                    //throw new Exception("exception 1");
                }
            }else{
                echo "ERROR : MAX SUM IS ".($tranche->max_sum-$tranche->sum);
                //throw new Exception("exception 2");
            }
        }else{
            echo "ERROR : DATE NOT VALID";
            //throw new Exception("exception 3");
        }
        return false;
    }

    public function getProcents(DateTime $date_to) {
        $MonthProc = $this->amount * ($this->procent / 100);
        $endDate = strtotime($date_to->format('Y-m-d'));
        $duration = $endDate - strtotime($this->date->format('Y-m-d'));
        $daysInvested = floor($duration/60/60/24) + 1;
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $date_to->format('n'), $date_to->format('Y'));
        $percentMonthInvest = $daysInvested / $daysInMonth;
        $proc = $MonthProc * $percentMonthInvest;
        return round($proc, 2);

    }
}