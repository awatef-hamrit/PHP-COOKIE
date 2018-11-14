<?php
$misteryNumber=10;
$myNumber=1;
$res = ($misteryNumber == $myNumber) ?   "congrats" : (($misteryNumber < $myNumber) ?   "+" : "-");
echo $res;