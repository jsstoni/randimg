<?php
$im = imagecreatefrompng("identicon.png");
$ec = 12.5;
$i = 0;
$x_ec = 12.5;
$y_ec = 12.5;
$existen = array();
for ($c = 0; $c < 4; $c++) {
	for ($f=0; $f < 4; $f++) {
		$rgb = imagecolorat($im, $x_ec, $y_ec);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
		if ($r != 0 && $g != 0 && $b != 0) {
			$existen[] = $i;
		}
		$y_ec += 25;
		if ($y_ec > 87.5) {
			$y_ec = 12.5;
		}
		$i++;
	}
	$x_ec += 25;
}

echo implode(",", $existen);
?>