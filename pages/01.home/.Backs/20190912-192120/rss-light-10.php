<?php header('Content-Type: text/html; charset=utf-8'); ?>

<html lang="en">
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<head>

	<title>Flux RSS Echosystem</title> 
<!-- <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" /> <meta charset="UTF-8"> --> 

</head>

<style> 
a { font-size:26px;
font-weight:bold;
margin-bottom:-20px;
 text-decoration: none ;
}
div[style] { 
                text-align:center; 
                color:green; 
                font-size:30px; 
                font-weight:bold; 
                margin-bottom:-20px; 
   } 
p { 
               text-align:center; 
                font-size:17px; 
            } 
</style> 

<?php

$url = "https://rss.echosystem.fr/i/?a=rss&get=c_6"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
echo '<ul>';
$rss10 = 0;

foreach ($rss->channel->item as $item){
 $rss10++;
 if($rss10 == 10) break;
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
// echo '<li><a href="'.$item->link.'" style = "color:green">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
echo '<li><a href="'.$item->link.'" style = "color:green">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

// https://tonyarchambeau.com/blog/115-php-afficher-articles-flux-rss/
?>


