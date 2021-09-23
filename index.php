<?php
include 'Ioan.php';
include 'Tranche.php';
include 'Investor.php';
include 'Invest.php';

$ioan = new Ioan(new DateTime("10.01.2015"), new DateTime("15.11.2015"));

$trancheA = $ioan->createTranche(1000, 3);
$trancheB = $ioan->createTranche(1000, 6);


/* 1 */
$investor1 = new Investor();
$wantSum = 1000;
$invset1 = new Invest($ioan, $wantSum, $investor1, $trancheA, new DateTime("2015-10-03"));

/* 1 */

/* 2 */
$investor2 = new Investor();
$wantSum = 1;
$invset2 = new Invest($ioan, $wantSum, $investor2, $trancheA, new DateTime("2015-10-04"));
/* 2 */

/* 3 */
$investor3 = new Investor();
$wantSum = 500;
$invset3 = new Invest($ioan, $wantSum, $investor3, $trancheB, new DateTime("2015-10-10"));
/* 3 */

/* 4 */
$investor4 = new Investor();
$wantSum = 1100;
$invset4 = new Invest($ioan, $wantSum, $investor4, $trancheB, new DateTime("2015-10-25"));
/* 4 */

/* RUN CALCULATE */
echo $invset1->getProcents(new DateTime("2015-10-31"));
echo $invset3->getProcents(new DateTime("2015-10-31"));



