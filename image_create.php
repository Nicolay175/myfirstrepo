<?php
    header("Content-type: image/png");
    putenv('GDFONTPATH=' . realpath('.'));
    $img = imageCreateTrueColor(500,300);
	imageAntiAlias($img,true);
		// Определение цвета
	$color = imageColorAllocate($img, 255, 0, 0);
	$white = imageColorAllocate($img, 255, 255, 255);


	$font = 'arial';
	imagettftext($img, 30,10, 0, 0, $color, $font, 'GHbdtn');
//	//imageTtfText($img, 30, 10, 50, 50, $white, $font, 'Hello!');
//
//
	imagepng($img);
 ?>