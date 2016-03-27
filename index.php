<?php

$p = $_GET['page'];
$i = $_GET['item'];

if(empty($p)) { header("Location: /index.php?page=homepage"); }

echo "<!DOCTYPE html>"; echo "\n";
echo '<html lang="de">'; echo "\n"; echo "\n";
echo "<head>"; echo "\n";

if($p == 'homepage') { $cpn = "Startseite"; }
if($p == 'offers') { $cpn = "Angebot"; }
if($p == 'exhibition') { $cpn = "Ausstellung"; }
if($p == 'contact') { $cpn = "Kontakt"; }
if($p == 'imprint') { $cpn = "Impressum"; }

echo "<title>Lamprecht GmbH &#8211; " . $cpn . "</title>";

echo '<meta charset="utf-8">'; echo "\n";
echo '<link rel="stylesheet" href="style.css" type="text/css" />'; echo "\n";
echo '<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">'; echo "\n";
echo '</head>'; echo "\n"; echo "\n";

echo '<body>'; echo "\n"; echo "\n";

echo '<div id="wrapper">'; echo "\n"; echo "\n";

echo '<ul id="navi">'; echo "\n";
echo '<img class="logo" src="img/logo.png" alt="Lamprecht GmbH" />'; echo "\n";
echo '<li'; if($p == 'homepage') { echo ' class="active"'; } echo '><a href="?page=homepage">Startseite</a></li>'; echo "\n";
echo '<li'; if($p == 'offers') { echo ' class="active"'; } echo '><a href="?page=offers">Angebot</a></li>'; echo "\n";
echo '<li'; if($p == 'exhibition') { echo ' class="active"'; } echo '><a href="?page=exhibition">Ausstellung</a></li>'; echo "\n";
echo '<li'; if($p == 'contact') { echo ' class="active"'; } echo '><a href="?page=contact">Kontakt</a></li>'; echo "\n";
echo '</ul>'; echo "\n"; echo "\n";

if($p == 'offers') {
echo '<ul id="subnavi">'; echo "\n";
echo '<li'; if($i == 'stoves') { echo ' class="active"'; } echo '><a href="?page=offers&item=stoves">Kachel&ouml;fen</a></li>'; echo "\n";
echo '<li'; if($i == 'chimney') { echo ' class="active"'; } echo '><a href="?page=offers&item=chimney">Kamin&ouml;fen</a></li>'; echo "\n";
echo '<li'; if($i == 'soapstone') { echo ' class="active"'; } echo '><a href="?page=offers&item=soapstone">Speckstein&ouml;fen</a></li>'; echo "\n";
echo '<li'; if($i == 'cooking') { echo ' class="active"'; } echo '><a href="?page=offers&item=cooking">Kochherde</a></li>'; echo "\n";
echo '<li'; if($i == 'stainless') { echo ' class="active"'; } echo '><a href="?page=offers&item=stainless">Edelstahlkamine</a></li>'; echo "\n";
echo '</ul>'; echo "\n"; echo "\n"; } 

echo '<div class="content">'; echo "\n"; echo "\n"; 

if($p == 'homepage') { include "pages/homepage.php"; }
if($p == 'offers' && $i == '') { include "pages/offers.php"; }
if($p == 'exhibition' && $i == '') { include "pages/exhibition.php"; }
if($p == 'contact' && $i == '') { include "pages/contact.php"; }
if($p == 'imprint' && $i == '') { include "pages/imprint.php"; }

if($p == 'offers' && $i == 'stoves') { include "pages/offers/stoves.php"; }
if($p == 'offers' && $i == 'chimney') { include "pages/offers/chimney.php"; }
if($p == 'offers' && $i == 'soapstone') { include "pages/offers/soapstone.php"; }
if($p == 'offers' && $i == 'cooking') { include "pages/offers/cooking.php"; }
if($p == 'offers' && $i == 'stainless') { include "pages/offers/stainless.php"; }

echo "\n"; echo "\n";
echo "</div>"; echo "\n"; echo "\n"; 

echo '<div class="footer">'; echo "\n"; 
echo '&copy; ' . date(Y) . ' Lamprecht GmbH. Alle Rechte vorbehalten. &#8211; <a href="?page=imprint">Impressum</a>'; echo "\n"; 
echo '</div>'; echo "\n"; echo "\n"; 

echo "</div> \n \n";

echo "</body> \n";
echo "</html>";

?>