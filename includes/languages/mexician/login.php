<?php
/*
  $Id: login.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Entrar');
define('HEADING_TITLE', 'Dejame Entrar!');

define('HEADING_NEW_CUSTOMER', 'Nuevo Cliente');
define('TEXT_NEW_CUSTOMER', '�Es usted un cliente nuevo de '.STORE_NAME.' ?');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Con su nueva cuenta de '.STORE_NAME.', podr� efectuar sus compras m�s r�pidamente y realizar el seguimiento de sus pedidos.');

define('HEADING_RETURNING_CUSTOMER', '�Ya dispone de una cuenta?');
define('TEXT_RETURNING_CUSTOMER', 'Identif�quese para acceder a ella. ');

define('TEXT_PASSWORD_FORGOTTEN', '&iquest;Ha olvidado su contrase&ntilde;a? Siga este enlace y se la enviamos.');

define('TEXT_LOGIN_ERROR_IN_LOGIN', 'Esta direcci�n de correo electr�nico no est� registrada en nuestro sistema.');
define('TEXT_LOGIN_ERROR_IN_PASSWORD', 'La contrase�a no es v�lida para esta direcci�n de correo electr�nico.');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>Nota:</b></font> El contenido de su &quot;Cesta de Visitante&quot; ser&aacute; a&ntilde;adido a su &quot;Cesta de Asociado&quot; una vez que haya entrado. <a href="javascript:session_win();">[M&aacute;s Informaci&oacute;n]</a>');

define('FROM_SPONSORSHIP', 'Para aprovechar las ventajas del sistema de patrocinio, debe autenticarse.

2 buenas razones para patrocinar a tus amigos !

1. Simple !
Para patrocinar a sus amigos, simplemente introduzca su correo electr�nico en los campos de abajo. Un correo electr�nico ser� enviado para informarles de la invitaci�n.

2. Se relaciona con el euro !
'.STORE_NAME.' ofrece una remuneraci�n excepcional disminuido en 3 niveles que se puede ganar Euro:

- %s en los primeros %s pedidos de sus referencias directas
- %s en los primeros %s pedidos de sus referencias de sus referencias de
- %s en los primeros %s pedidos de sus referencias de sus referencias de sus referencias de

<img src="images/parrain_schema.gif" />');
?>
