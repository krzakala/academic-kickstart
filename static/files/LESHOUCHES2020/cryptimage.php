<?php
/* Démarage d'une session nécéssaire pour récupérer la valeur générée d'une page a l'autre */
session_start();
/* on définie la liste qui va servir a récupérer les lettres qui formeront la valeur a saisir : on exclue le 0 (zéro) pour eviter la confusion avec le O */
$liste = "abcdefghijkmnopqrstuvwxyz23456789ABCDEFGHJKMNPRSTUVWXYZ";
/* On créer une valeur qui sera notre code secret a saisir */
$code = '';
/* On crée une boucle pour créer une chaine de 5 caractères pris au hasard au sein de la variable $liste */
while(strlen($code) != 5) {
$code .= $liste[rand(0,57)];
}
/* on définit une variable de session nomée $_SESSION['code'] que l'on réutilisera plus tard */
$_SESSION['code']=$code;
/* on crée une image de 50 pixels par 20 pixels */
$larg = 50;
$haut =20;
$img = imageCreate($larg, $haut);
$rouge = imageColorAllocate($img,255,0,0);
$noir = imageColorAllocate($img,0,0,0);
$code_police=5;
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Cache-Control: no-store, no-cache, must-revalidate'); 
header('Cache-Control: post-check=0, pre-check=0', false); 
header("Content-type: image/jpeg");
/* incorporation de la variable variable $code dans l'image */
$font = 'arial.ttf';
imageString($img, 100,($larg-imageFontWidth($code_police)*strlen("".$code.""))/2,0, $code,$noir);
/* on crée une image de relative mauvaise qualité (ici 23% d'une image normale pour eviter la reconnaissance visuelle de certains robots */
imagejpeg($img,'',43);
imageDestroy($img);
?>