<?php
/*
  $Id: shipping_details.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'D&eacute;tails d\'exp&eacute;dition');
define('HEADING_TITLE', 'D&eacute;tails d\'exp&eacute;dition');

define('TEXT_INFORMATION', '<b>Nous livrons dans le monde entier ! </b></p>
<p><b>Co&ucirc;t du transport : </b>
'.$currencies->currencies[$currency]['symbol_left'].round(FLAT_SHIPPING / $currencies->currencies["EUR"]['value'] * $currencies->currencies[$currency]['value']).$currencies->currencies[$currency]['symbol_right'].'</p>
<p><b>D&eacute;lais de livraison :</b>
5 � 12 jours.</p>');
?>