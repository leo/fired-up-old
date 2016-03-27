

<h1 class="pagetitle">Kontaktieren sie uns</h1>
<table class="leftright" cellpadding="0" cellspacing="0">
	<tr>
		<td align="left" valign="top"><?php

echo '<div class="left-now">'; echo "\n";

if($_GET['page'] == 'contact' && $_GET['sent'] == '') { 

echo '<form action="/sendmsg.php" method="post" class="sendmsg">'; echo "\n";
echo '<input required="true" autocomplete="off" id="vorname" type="text" name="name" placeholder="Vor- und Nachname" />'; echo "\n";
echo '<input required="true" autocomplete="off" id="nachname" type="text" name="nummer" placeholder="Telefonnummer" />'; echo "\n";
echo '<input required="true" autocomplete="off" id="email" type="text" name="email" placeholder="E-Mail-Adresse" />'; echo "\n";
echo '<input required="true" autocomplete="off" id="betreff" type="text" name="betreff" placeholder="Betreff der Nachricht"/>'; echo "\n";
echo '<textarea required="true" autocomplete="off" id="nachricht" name="nachricht" placeholder="Ihre Nachricht"></textarea>'; echo "\n";
echo '<input id="submit" type="submit" name="submit" value="Nachricht absenden" />'; echo "\n";
echo '</form>'; } 

if($_GET['page'] == 'contact' && $_GET['sent'] == 'true') { 
echo '<div class="info sucess">Ihre Nachricht wurde erfolgreich versendet und 
wird so schnell wie möglich von uns bearbeitet. Sie erhalten telefonisch oder per E-Mail eine Antwort.</div>'; 
}

if($_GET['page'] == 'contact' && $_GET['sent'] == 'false') { 
echo '<div class="info error">Bitte f&uuml;llen sie alle Felder korrekt aus. Erst dann kann 
die Nachricht erfolgreich abgesendet werden. ( Ihre Daten werden natürlich 
nicht an Dritte weitergegeben )<br/><br/><a href="javascript:history.back();">Zur&uuml;ck zum Formular</a>';
}

echo '</div>';

 ?></td>
		<td align="right" valign="top" class="medbord">
		<table class="contact" cellpadding="0" cellspacing="0">

	<tr>
		<td align="right" valign="top"><b>Anschrift:</b></td>
		<td align="right">Lamprecht GmbH<br/>Am Sportplatz 3<br/>96138 Burgebrach</td>
	</tr>
	
	<tr>
		<td align="right" valign="top"><i>Gesch&auml;ftsf&uuml;hrer:</i></td>
		<td align="right">Rainer Lamprecht<br/><br/><br/></td>
	</tr>
	
	<tr>
		<td align="right" valign="top"><b>Kontakt:</b></td>
		<td align="right">Telefon: 09546 - 8357<br/>Fax: 09546 - 8357<br/>kontakt@angefeuert.de</td>
	</tr>
	
	<tr>
		<td align="right" valign="top"><b>Gemeldet bei:</b></td>
		<td align="right">Handelsregister<br/>Bamberg, HRB: 4031<br/>Ust-IdNr: 207 131 00 154</td>
	</tr>
</table></td>
	</tr>
</table>