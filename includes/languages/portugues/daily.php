<?php
/*
  $Id: specials.php,v 1.7 2002/11/19 01:48:08 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
$tmp = array(
'Mon' => 'Segunda-feira',
'Tue' => 'Ter�a-feira',
'Wed' => 'Quarta-feira',
'Thu' => 'Quinta-feira',
'Fri' => 'Sexta-feira',
'Sat' => 'S�bado',
'Sun' => 'Domingo',
);
$tmp = $tmp[date('D')];
define('NAVBAR_TITLE', 'Promo��o de  '.$tmp);
define('HEADING_TITLE', 'Promo��o de  '.$tmp.' !');
?>                               





