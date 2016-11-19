<?php
$nilai = 85;

switch ($nilai)
{
	case $nilai >= 80 :
		$index ="A";
		echo "nilai : $index";
	break;
	case $nilai >= 70 :
		$index ="B";
		echo "nilai : $index";
	break;
	case $nilai >= 60 :
		$index ="c";
		echo "nilai : $index";
	break;
	case $nilai >= 50 :
		$index ="D";
		echo "nilai : $index";
	break;
	default :
		$index ="E";
		echo "nilai : $index";
	break;
}
?>
