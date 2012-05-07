<?php
/*
  $Id: create_account.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Crear una Cuenta');
define('NAVBAR_TITLE_2', 'Proceso');
define('HEADING_TITLE', 'Datos de Mi Cuenta');

define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>NOTA:</b></font></small> Si ya ha pasado por este proceso y tiene una cuenta, por favor <a href="%s"><u>entre</u></a> en ella.');

define('EMAIL_SUBJECT', 'Bienvenido a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Estimado vnom,' . "\n\n");
define('EMAIL_GREET_MS', 'Estimado vnom,' . "\n\n");
define('EMAIL_GREET_NONE', 'Estimado vnom,' . "\n\n");

define('EMAIL_WELCOME', '
�Enhorabuena! Ha sido creada su cuenta personal.

Ahora podr� comprar nuestros perfumes pulsando: "a�adir a la cesta"

Los datos necesarios para acceder a su cuenta son los siguientes:

Usuario: vloggin
Contrase�a: vpass'. "\n\n");

define('EMAIL_TEXT', '');
define('EMAIL_CONTACT', 'Si necesita ayuda, p�ngase en contacto con nosotros por correo electr�nico a: <a href="mailto:'.STORE_OWNER_EMAIL_ADDRESS.'" target="_blank">'.STORE_OWNER_EMAIL_ADDRESS.'</a>.

  Felices compras,

  SAMY
  Equipo de Atenci�n al Cliente
  <a href="http://www.'.strtolower(STORE_NAME).'/" target="_blank">www.'.strtolower(STORE_NAME).'</a>');
  
define('EMAIL_WELCOME', 'Le damos la bienvenida a <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_WARNING', '<b>Nota:</b> Esta direccion fue suministrada por uno de nuestros clientes. Si usted no se ha suscrito como socio, por favor comuniquelo a ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");

define('SPONSORSHIP_GODFATHER', 'Su patrocinador es : ');
define('SPONSORSHIP_GODFATHER_UNKNOWN', 'La clave y el correo electr�nico introducido no coincide con ning�n patrocinio.');

define('EMAIL_SUBJECT_NETA', 'R�ductions '.STORE_NAME);
define('EMAIL_TEXT_NETA', 'Suite � votre inscription sur '.STORE_NAME.', profitez des coupons de r�duction suivants (non cumulable) :

%s

Bonne visite,

SAMY
Equipe Service Client
<a href="http://www.'.strtolower(STORE_NAME).'/" target="_blank">www.'.strtolower(STORE_NAME).'</a>');
?>
