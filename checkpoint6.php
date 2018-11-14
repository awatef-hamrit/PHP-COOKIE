<?php
$math=15;
$geo=20;
$algo=19;
$moy=($math+$geo+$algo)/3;
	if($moy<10)
	   echo" refusé";
	   elseif($moy>10 && $moy<12)
		echo"admis avec mention passable";
	elseif($moy>=12 && $moy<14)
	echo "admis avec mention assez bien";
	 else
	echo"admis avec mention bien";