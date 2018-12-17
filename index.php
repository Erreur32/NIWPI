<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your IP info</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, minimal-ui" />
  <script src="js/jquery.2.1.3.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/spectre.min.css">
  <link rel="stylesheet" href="css/spectre-icons.css">
  <script src="js/copy.js"></script>
  <link rel="stylesheet" type="text/css" href="css/copy.css">
<!--  <link rel="stylesheet" href="style.css"> -->

<!-- 
// Nice IP Web Page Info - NIWPI
// Script by 🅴🆁🆁🅴🆄🆁32
// 2018 
// Version 0.11
-->

<style>
 @import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400); 

body, html {
  height: 100%;
  margin: 0;
  font: 500 16px/1.8 "Lato", sans-serif;
  color: #f1f1f1;
 background-color: #777;
}

a:link, a:visited {
  color: #aaa;
  text-decoration: none;
  text-shadow: 1px 1px 1px #000;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
}
a:hover {
  color: #ff3300;
}
a:active {
  text-shadow: -1px -1px 2px #555;
  top: 2px;
  left: 2px;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.80;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("https://echosystem.fr/i/Wallpaper/sg.png");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("https://echosystem.fr/i/Wallpaper/177.jpg");
  min-height: 100%;
}

.bgimg-3 {
  background-image: url("https://echosystem.fr/user/pages/_img/World_Map_BLACK.jpg");
  min-height: 100%;
}

.caption {
  position: absolute; 
  left: 0; 
  top: 15%;
  width: 100%;
  text-align: center;
  color: #000;
  font-size-adjust: 0.8;
}

.captionIn {
  position: absolute;
  width: 100%;
  top: 20%;
  height:100%;
  text-align: center;
}

.captionMap {
  position: absolute;
  left: 0;
  top: 5%;
  height:100%;
  text-align: center;
  width: 100%;
}

.captionReso {
  position: absolute;
  left: 0;
  top: 30%;
  height:100%;
  text-align: center;
  width: 100%;
}


.captionEnd {
  position: absolute;
  left: 0;
 padding: 14px 28px;
/*  top: 10%;*/
/*  height:100%;*/
  text-align: center;
  width: 100%;
}


.captionMap span.border {
  background-color: #111;
  color: #fff;
  padding: 22px;
  font-size: 25px;
  letter-spacing: 10px;
}


.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 22px;
  font-size: 25px;
  letter-spacing: 10px;
}



h1 {
  font-size: 1.5em;
  margin-bottom: 5px;
  padding-left: 20px;
  color: #797979;
  text-transform: uppercase;
  font-weight: 600;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

h5 {
 font: 40px "Lato", sans-serif;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

/* scroll indicator up */
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 12px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

/* button */ 
.btn {
  border: 2px solid black;
  border-radius: 5px;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 12px;
  cursor: pointer;
}


/* Gray */
.default {
  border-color: #e7e7e7;
  color: black;
}

.default:hover {
  background: #e7e7e7;
}

/* Green */
.success {
  border-color: #4CAF50;
  color: green;
}

.success:hover {
  background-color: #4CAF50;
  color: white;
}

/* Blue */
.info {
  border-color: #2196F3;
  color: dodgerblue
}

.info:hover {
  background: #2196F3;
  color: white;
}

/* Orange */
.warning {
  border-color: #ff9800;
  color: orange;
}

.warning:hover {
  background: #ff9800;
  color: white;
}

/* Red */
.danger {
  border-color: #f44336;
  color: red
}


.danger:hover {
  background: #f44336;
  color: white;
}


/* button scroll page */
#section05 a {
  padding-top: 70px;
}
#section05 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #777;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb05 1.5s infinite;
  animation: sdb05 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb05 {
  0% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb05 {
  0% {
    transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}

.demo a {
/*  position: absolute;*/
  bottom: 20px;
  left: 50%;
  z-index: 2;
  display: inline-block;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
  font : normal 400 20px/1 'Josefin Sans', sans-serif;
  letter-spacing: .1em;
  text-decoration: none;
  transition: opacity .3s;
}
.demo a:hover {
  opacity: .5;
}

.demo22 a {
/*  display: inline-block;*/
display: inline-block;

  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
  text-decoration: none;
  transition: opacity .3s;
}
.demo2 a:hover {
  opacity: .5;
}

#section03 {
/*top: 60%;*/
}


#section03 a {
  padding-top: 60px;
}
#section03 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 46px;
  height: 46px;
  margin-left: -23px;
  border: 1px solid #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section03 a span::after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  width: 16px;
  height: 16px;
  margin: -12px 0 0 -8px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}
#section03 a span::before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  content: '';
  width: 44px;
  height: 44px;
  box-shadow: 0 0 0 0 rgba(255,255,255,.1);
  border-radius: 100%;
  opacity: 0;
  -webkit-animation: sdb03 3s infinite;
  animation: sdb03 3s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

.hit-the-floor {
color: #000;
/*background-color: #777;*/
/*opacity: 0.6;*/
/*font-size-adjust: 4;*/
/*font-size: 12em;*/
font-size: 8vw;
font-weight: bold;
font-family: Helvetica;
text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
}

.hit-the-floor {
  text-align: center;
}
.resolution {
                text-align:center;
                width:340px;
                padding:20px;
                border:#FFFFFF solid 10px;
                margin-top:10px;
                font-family:"Trebuchet MS", Arial, Verdana;
                color:#28A000;
                font-size:27px;
                line-height:40px;
                text-shadow: 1px 1px 1px #000;
}
.resolution span{
                color:#33cc00;
                display:block;
                font-size:55px;
                text-transform:lowercase;
}

</style>

<?php
$ipaddress = $_SERVER['REMOTE_ADDR']; //ip address
$host = gethostbyaddr($ipaddress);
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $realip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $realip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $realip=$_SERVER['REMOTE_ADDR'];
    }
?>
<?php
$geoip_country_code = getenv(GEOIP_COUNTRY_CODE);
$geoip_country_name = getenv(GEOIP_COUNTRY_NAME);
$geoip_region = getenv(GEOIP_REGION);
$geoip_city = getenv(GEOIP_CITY);
$geoip_postal_code = getenv(GEOIP_POSTAL_CODE);
$geoip_latitude = getenv(GEOIP_LATITUDE);
$geoip_longitude = getenv(GEOIP_LONGITUDE);
?>
</head>

<body>
<section id="sectionIP"></section>

<div class="bgimg-1">
  <div class="caption">

<div class="main">
<h3>Your IP</h3>
 <span class="list-heading0" style="color: #cc0000;text-shadow: 1px 1px 1px #000;"><?php echo "$ipaddress";?></span> / <span class="list-heading0" style="color: #cc0000;text-shadow: 1px 1px 1px #000;"> <?php  echo gethostname(); ?> </span>
    <br>
<ul>
 <li>
 <div class="copy-content">
 <div class="hit-the-floor"><p><span><?php echo "$ipaddress";?></span></p></div>
</div>
   <button class="copy-btn"></button>
</li>
</ul>
 </div>
 <br/><br/> <br/><br/>
 <section id="section05" class="demo"> <a href="#sectionIn">  <span></span>Scroll<br/><br/>
 <img src="https://echosystem.fr/_img/1skull-50.png" alt="" width="24" height="24"></a></section>

  </div>
</div>

<section id="sectionIn" class="demo">
<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;">

 <h2 class="post-title">  IP locale (lan)   <span style="color: #cc0000;text-shadow: -1px -1px 2px #000;"> <?php echo "$ipaddress"; ?> </span> </h2>
 <h2 style="text-align:center;"> Hostname:   <span style="color: #cc0000;text-shadow: -1px -1px 2px #000;"><?php  echo gethostname(); ?></span> <br>  <?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); echo "$hostname"; ?></h2> 

  </div>
</div>
</section>

<div class="bgimg-2">
 <div class="captionIn">

   <span class="border" style="background-color:#000000;font-size:25px;color: #f7f7f7; text-align: center;"> 
   Cette adresse a été localisée dans la belle ville de <b><?php echo '<span style="color:#cc0000;text-shadow: -1px -1px 2px #000;">'.$geoip_city.'</span><br>'; ?>
<?php
echo 'Country code: <span style="color:#cc0000;text-shadow: -1px -1px 2px #000;"> '.$geoip_country_code.'</span><br>';
echo 'Country name:  <span style="color:#cc0000;text-shadow: -1px -1px 2px #000;">'.$geoip_country_name.'</span><br>';
echo 'City:  <span style="color:#cc0000;text-shadow: -1px -1px 2px #000;">'.$geoip_city.'</span><br>';
echo 'Postal code:  <span style="color:#cc0000;text-shadow: -1px -1px 2px #000;">'.$geoip_postal_code.'</span><br>';
echo 'Latitude:  <span style="color:#cc0000;text-shadow: -1px -1px 2px #000;">'.$geoip_latitude.'</span><br>';
echo 'Longitude:  <span style="color:#cc0000;text-shadow: -1px -1px 2px #000;">'.$geoip_longitude.'</span><br>';
?>
   </span>
	<br/><br/><br/><br/>
<section id="section03" class="demo">
   <a href="#sectionMAP"><span></span>Map<br><i class="icon icon-location" style="color:#7FFF00;"></i></a>
   </section>
  </div>
</div>


<section id="sectionMAP" class="demo">
<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;">
  <h2 class="post-title">  Map Location  IP  <i class="icon icon-location" style="color:#7FFF00;"></i>  <span style="color: #cc0000;text-shadow: -1px -1px 2px #000;"> <?php echo "$ipaddress"; ?> </span> </h2>  
  </div>
</div>
</section>
 
<div class="bgimg-3">
  <div class="captionMap">

  <i class="icon icon-location" style="color:#777;"></i>
  <h2><span style="text-shadow: -1px -1px 1px #000;"><?php echo "$geoip_city"; ?></span></h2> 
  <iframe  style="height: 35%; width: 60%" scrolling="no" frameborder="0" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCRTD-ARSWquI_i1P0AlZrRPxnzmtIntd4&q=<?php echo "$geoip_latitude"?>,<?php echo "$geoip_longitude"?>&zoom=12" allowfullscreen></iframe>
  <br /><br /><br /><br />


  <span class="label label-rounded label-error"> NEW </span>

   <a href="Info">   <h2>Your IP image.</h2> </a>
   <br>
 <a href="Info/image.jpg"><img src="Info/image.jpg"></a>

   <br /><br /><br />
 <a href="https://git.echosystem.fr/Erreur32/NIWPI">NIWPI Page</a> by <a href="https://erreur32.echosystem.fr">   erreur32 </a>

<!--
<br /><br /><br>
<section  class="demo">
  <a href="#sectionIP"><span><i class="icon icon-arrow-up" style="color:#ddd;"></i></span> TOP</a>
</section>

<section id="sectionb" class="demo">
  <a href="#sectionbas"><span><i class="icon icon-arrow-down" style="color:#ddd;"></i></span> end</a>
</section>
-->
</div>
</div>


<!--
<section id="sectionReso" class="demo">
<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;">
  <h2 class="post-title">  Votre Résolution:  <span style="color: #cc0000;text-shadow: -1px -1px 2px #000;" id="resolutionNumber"></span></h2>
  </div>
</div>
</section>


<div class="bgimg-1">
  <div class="captionReso">
<center> <div class="hit-the-floor">
 <span id="resolutionNumber"></span>
</div>
</div></center>
</div>
-->

<div  class="captionEnd" style="color:#ddd;background-color:#282E34;text-align:center;text-decoration: none; transition: opacity .3s;">
 <section id="sectionbas" class="demo2" style="color:#ddd;background-color:#282E34;text-align:center;text-decoration: none; transition: opacity .3s;"> </section>
 <a href="https://git.echosystem.fr/"  style="font-size: 19px;"><i class="fa fa-code"></i></a> with <a href="#"><i class="fa fa-heart-o"></i></a> by <a href="https://erreur32.echosystem.fr">Erreur32</a>.
 <br><a href="https://echosystem.fr"><img src="https://echosystem.fr/_img/1skull-50.png" alt="skull" style="align-center;" width="24" height="24">
 <br>Echo'system'</a>
 <br>
<i> <a href="resolution.html" style="font-size: 10px;">Your Screen (<span style="font-size: 10px;color:#cc0000;text-shadow: -1px -1px 1px #000;" id="resolutionNumber"></span>)</a> - <span  style="font-size: 9px;"> <?php setlocale(LC_ALL,'french'); echo "Dernière modification de la page:   ".date("m/d/y H:i", getlastmod()); ?> </span></i>
</div>

</body>

<SCRIPT type="text/javascript">
<!--
height = screen.height;
width = screen.width;
res = document.getElementById ('resolutionNumber');
res.innerHTML = width + " X " + height;
if (res == null)
{
        alert ("hello");
}
//-->
</SCRIPT>


<!-- copy clipboard -->
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("Copy");
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}
function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>

<!-- scroll up/down -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<script>
/* scroll button icon*/
$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
</script>


<!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.ip.echosystem.fr"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://echosystem.fr/PiwM/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '8']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="https://echosystem.fr/PiwM/piwik.php?idsite=8&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->




</html>
<?php
 define("_BBC_PAGE_NAME", "..:: IP ::..");
 define("_BBCLONE_DIR", "../stateu/");
 define("COUNTER", _BBCLONE_DIR."mark_page.php");
 if (is_readable(COUNTER)) include_once(COUNTER);
 ?>

<!--
// Source : https://codepen.io/ThatGuySam/pen/CytDA
//            
//  Powered by 🅴🆁🆁🅴🆄🆁32 
            _                        


 - /!\ Your ip is registered! 
  <?php  echo $_SERVER['REMOTE_ADDR'];   ?> 
  scan info: <?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); echo "$hostname"; ?> 
 - Bye - - 






        oooooooooooo           oooo                                                    .
        `888'     `8           `888                                                  .o8
         888          .ooooo.   888 .oo.    .ooooo.   .oooo.o oooo    ooo  .oooo.o .o888oo  .ooooo.  ooo. .oo.  .oo.
         888oooo8    d88' `"Y8  888P"Y88b  d88' `88b d88(  "8  `88.  .8'  d88(  "8   888   d88' `88b `888P"Y88bP"Y88b
         888    "    888        888   888  888   888 `"Y88b.    `88..8'   `"Y88b.    888   888ooo888  888   888   888
         888       o 888   .o8  888   888  888   888 o.  )88b    `888'    o.  )88b   888 . 888    .o  888   888   888
        o888ooooood8 `Y8bod8P' o888o o888o `Y8bod8P' 8""888P'     .8'     8""888P'   "888" `Y8bod8P' o888o o888o o888o
                                                      .o..P'
                                                      `Y8P'


-->

