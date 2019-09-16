<?php

include "uinfo.class.php";

$user = new uInfo($_SERVER['HTTP_USER_AGENT'], $_SERVER["REMOTE_ADDR"]);

header("Content-type: image/jpeg");

$img = imagecreatefromjpeg("img/type1.jpg");

imagewritestring($img, 14, $user->host->ip);
imagewritestring($img, 12, $user->host->city);
imagewritestring($img, 12, $user->os->name . " " . $user->os->version);
imagewritestring($img, 12, $user->browser->name . " " . $user->browser->version);
imagewritestring($img, 12, 'Pays: ' . $user->host->country); 
imagejpeg($img, NULL, 100);
imagedestroy($img);

function imagewritestring($img, $font_size, $string)
{
	$color = imagecolorallocate($img, 180, 180, 180);
	static $y = 110;
	$y += $font_size + 12;
	$x = 40;
	imagettftext($img, $font_size, 0, $x, $y, $color, "fonts/consola.ttf", $string);
}
