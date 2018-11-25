<?php
ini_set('gd.jpeg_ignore_warning', 1);
$data = "iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAACEElEQVR4Xu2asW3DUBDFpKHSZxoPlWnSZ6gE3uCzEPEQ0PWD34n0nRrfV58pAvfUNA1zJWTsR5CQhIwRGBunDUnIGIGxcdqQhIwRGBunDUnIGIGxcdqQhIwRGBunDUnIGIGxcdqQhIwRGBunDUnIGIGxcdqQhIwRGBunDUnIGIGxcdqQhIwRGBvn/n59/D490+fXz+ObaDzH05ze358QgzLoSAiAZUQTYlAGHQkBsIxoQgzKoCMhAJYRTYhBGXQkBMAyogkxKIOOhABYRjQhBmXQkRAAy4gmxKAMOhICYBnRhBiUQUdCACwjmhCDMuhICIBlRBNiUAYdCQGwjGhCDMqgIyEAlhFNiEEZdCQEwDKiCQGUjT/8JSQhgACIGn8lbUMSAgiAqPHLakMSAgicR3upn7O6jE1PSEIAARDtHQJgGauekIQAAufR3iHnrHqpA1ZXJwvQ6h1yDquTdc6qkwVYdbIIrE7WOa1O1jmrThZg1ckisDpZ57Q6WeesOlmAVSeLwOpkndPqZJ2z6mQBVp0sAsvIGmfReA7lZBkPkhCDMuhICIBlRBNiUAYdCQGwjGhCDMqgIyEAlhFNiEEZdCQEwDKiCTEog46EAFhGNCEGZdCREADLiCbEoAw6EgJgGdGEGJRBR0IALCOaEIMy6EgIgGVEE2JQBh0JAbCMaEIMyqAjIQCWEU2IQRl0/Bchfxb9yz7iwBaFAAAAAElFTkSuQmCC";

$data = base64_decode($data);
$im = imagecreatefromstring($data);  //convertir a imagen
if ($im !== false) {
	imagealphablending($im, true);
	imagesavealpha($im, true);
    imagepng($im, 'identicon.png'); //guardar a disco
    imagedestroy($im); //liberar memoria
}
else {
    echo 'Un error ocurrio al convertir la imagen.';
}
?>