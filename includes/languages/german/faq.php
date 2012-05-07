<?php
/*
  $Id: track_order.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'FAQ');
define('HEADING_TITLE', 'FAQ');

define('TEXT_INFORMATION', '
<h3>Legen Sie eine Bestellung</h3>
Dies ist Ihr erster Kauf auf <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>?
<br /><br />
Wir begr��en Sie und laden Sie diese Schritte durchf�hren:<br />
1. W�hlen Sie die Artikel die Sie kaufen m�chten<br />
2. Schreibe einen Artikel in den Warenkorb, indem Sie auf "ADD"<br />
3. Wenn Sie hinzugef�gt haben alle Ihre Artikel in den Einkaufswagen, m�ssen Sie nur Klicken Sie auf<br />
4. "Bestellen". Wenn Sie einen weiteren Artikel hinzuzuf�gen, klicken auf "Weiter einkaufen<br />
5. Identifizieren Sie sich. F�r zus�tzliche Sicherheit wird ein Passwort und Ihre E-Mail erforderlich.<br />
6. W�hlen Sie Ihre Rechnungsadresse und Lieferadresse
<br /><br />
Danke sehr deutlich die Namen Ihrer Stadt und Postleitzahl.
<br />
Achten Sie darauf, den Namen der Stadt Lieferung Zauber: Abk�rzungen, Rechtschreibfehler und andere Shells kann manchmal zu Fehlern in diesem Thema f�hren. Denken Sie bitte auch die folgenden Angaben enthalten: Zugangscode, Boden, Geb�ude.
<br />
<h3>Bezahlung</h3>
<b>Per Kreditkarte</b> ist einfach, schnell und sicher!
<br />
Zahlung per Kreditkarte ist eine <b>einfache, schnelle und sichere</b> online zu kaufen.
<br />
Wir akzeptieren <b>VISA, Master Card</b>.
<br />
Wir garantieren maximale Sicherheit.
<br />
Die Transaktion wird sicher durch den PayPal-Zahlung Service durchgef�hrt werden.
<br />
Alle erfassten Daten Bank (Kartennummer, Sicherheitscode und Ablaufdatum Ihrer Karte) mit Ihrer Zahlung per Kreditkarte werden umgehend mit SSL verschl�sselt und gespeichert auf dem Server von PayPal-Zahlung.
<br /><br />
Keine Zahlung Details sind auf der Website <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> gespeichert und vermeiden Sie jede M�glichkeit des Betrugs durch Hacken der Website <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>.
<b>Lieferzustand</b>
<br />
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> liefern Ihre Bestellung an die Adresse Ihrer Wahl in der Welt (80 L�nder).
<br />
<h3>Kosten und Lieferung</h3>
Die Transportkosten beliefen sich auf 8,00 � und zwar unabh�ngig von der Anzahl der Pakete in Ihrer Bestellung enthalten.
<br />
Die Verz�gerung in der Regel beobachtet zwischen dem Zeitpunkt der Bestellung, Kommissionierung und Empfangen Paket ist von 8 bis 12 Werktagen ohne Wochenenden und Feiertage.
<br />
<h3>Abbrechen eines Auftrags oder �ndern</h3>
Bevor Sie eine Bestellung aufgeben, k�nnen Sie den Inhalt und die Gesamtmenge an Ihrem Warenkorb. Sobald die Bestellung ber�cksichtigt wird, kann man nicht �ndern oder stornieren Ihre Bestellung innerhalb einer Stunde nach Ihrer Bestellung. Um dies zu tun, wir danken Ihnen, unseren Kundendienst unter <a href="mailto:'.STORE_OWNER_EMAIL_ADDRESS.'" target="_blank">'.STORE_OWNER_EMAIL_ADDRESS.'</a> kontaktieren.
<br />
Wir erheben diese Reaktivit�t, damit Sie Ihre Produkte in k�rzester Zeit zu erhalten.
<br /><br />
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> ist nicht in der Lage, den Inhalt Ihrer Bestellung oder anderer Informationen an die Lieferadresse �ndern, sobald Ihr Auftrag wird von Ihnen f�r best�tigt �ber eine Stunde.
<br />
<h3>Auftragsbest�tigung</h3>
Nach der Bestellung auf <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> erhalten Sie eine E-Mail eine Zusammenfassung der Details.
<br /><br />
Es zeigt Ihre Bestellnummer (die Nummer, die auf der Website, wenn der Auftrag angenommen wurde gefunden wurde), bestellte Details der Produkte und ihre entsprechenden Preisen. Gegebenenfalls gute Promotion, ausgew�hlte Ihre Lieferadresse und Rechnungsadresse und die Versandart ebenfalls enthalten.
<br />
<h3>Verfolgen Sie Ihre Bestellung</h3>
Sie k�nnen Ihre Bestellung auf unserer Website mit Ihrer Bestellung per E-Mail-Best�tigung des Versands.
<br /><br />
<b>Promotion-Codes</b>
<br />
Um die Kriterien f�r die F�rderung, geben Sie einfach den Code in Schritt Zahlung.Diese Angebote manchmal an denen mindestens Kaufbetrag (ohne Versandkosten).Wenn diese Aktion hat ber�cksichtigt, wird das Werbeangebot in Ihrem Warenkorb angezeigt
<br />
<h3>Sicherheitsgarantie</h3>
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> bietet alle Garantien f�r die Sicherheit und Vertraulichkeit Ihrer Daten sowie Privatkunden.
<br /><br />
<b>ENCRYPTION</b>
<br />Alle Ihre Bankdaten (Kartennummer, G�ltigkeitsdatum und Sicherheitscode) werden sofort verschl�sselt und gesch�tzt durch ein sicheres System.
<br />Keine Kreditkarte Informationen �ber Sie ist auf der Website <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> gespeichert.
<br />
<h3>E-Mail Best�tigung des Versands</h3>
Nach der Bearbeitung und Versand Ihrer Bestellung erhalten Sie eine E-Mail. Dies zeigt Ihre Bestellnummer (die Nummer, die auf der Website, wenn der Auftrag angenommen wurde gefunden wurde), die Tracking-Nummer, Kundennummer, bestellte Details der Produkte und ihre entsprechenden Preisen.
<br />
<h3>Kostenerstattung</h3>
Die Erstattung der Ware erfolgt innerhalb einer Frist von h�chstens 60 bis 90 Tagen ab dem Datum der Ausstellung werden zur Kenntnis genommen. <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> beh�lt sich das Recht auf Gesch�fte mit allen Mitteln der R�ckzahlung ihrer Wahl Vorauszahlung.
');
?>