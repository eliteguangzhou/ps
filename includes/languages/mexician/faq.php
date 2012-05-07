<?php
/*
  $Id: faq.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Preguntas m�s frecuentes');
define('HEADING_TITLE', 'Preguntas m�s frecuentes');

define('TEXT_INFORMATION', '<h3>Coloque una orden</h3>
Esta es su primera compra en <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>?<br />
<br />
Le damos la bienvenida y le invitamos a seguir estos pasos:<br />
1. Seleccione los art�culos que desea comprar<br />
2. Agregar el producto a su carrito haciendo clic en "ADD"<br />
3. Cuando haya agregado todos los elementos a su carro, s�lo tienes que hacer clic en<br />
4. "ORDEN". Si desea agregar m�s elementos, haga clic en "Continuar de compras<br />
5. Identif�quese. Para mayor seguridad, una contrase�a y su correo electr�nico ser� necesario.<br />
6. Elija su direcci�n de facturaci�n y direcci�n de env�o<br />
<br />
Muchas gracias indican claramente el nombre de tu ciudad y c�digo postal.<br />
Aseg�rese de escribir el nombre de la ciudad de entrega: abreviaturas, faltas de ortograf�a y otras conchas a veces puede conducir a errores en este tema. Recuerde tambi�n que incluir la siguiente informaci�n: c�digo de acceso, planta baja, edificio.<br />
<br />
<h3>Pago</h3>
<b>Con tarjeta de cr�dito</b> es f�cil, r�pido y seguro!<br />
Pago con tarjeta de cr�dito es una forma <b>sencilla, r�pida y segura</b> de comprar en l�nea.<br />
Se aceptan tarjetas <b>VISA</b>, <b>MASTER CARD</b>.<br />
Le garantizamos la <b>m�xima seguridad</b>.<br />
La transacci�n se llevar� a cabo de forma segura a trav�s del servicio de pago de PayPal.<br />
Todos los datos capturados bancaria (n�mero de tarjeta, c�digo de seguridad y fecha de vencimiento de su tarjeta) con su pago con tarjeta de cr�dito son inmediatamente cifrada mediante SSL y se almacenan en el servidor de pago de PayPal.<br />
<br />
No se los detalles del pago se almacenan en el sitio <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>, evitando cualquier posibilidad de fraude por hackear el sitio <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>.<br />
<br />
<b>Condici�n de la entrega</b><br>
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> entregar su solicitud a la direcci�n de su elecci�n en el mundo (80 pa�ses).<br />
<br />
<h3>Costo y Entrega</h3>
Los costos de transporte ascienden a 8,00 euros, y ello con independencia del n�mero de paquetes incluidos en su solicitud.<br />
La demora por lo general observada entre el momento del pedido, la cosecha y recepci�n de paquetes es de 8 a 12 d�as laborables excepto fines de semana y d�as festivos.<br />
<br />
<h3>Cancelar o cambiar una orden de</h3>
Antes de enviar un pedido, usted puede comprobar el contenido y la cantidad total de su carrito de compras. Una vez que la orden se tiene en cuenta, no se puede cancelar o modificar su pedido dentro de una hora despu�s de realizar su pedido.Para ello, gracias al contacto con nuestro servicio al cliente a <a href="mailto:'.STORE_OWNER_EMAIL_ADDRESS.'" target="_blank">'.STORE_OWNER_EMAIL_ADDRESS.'</a>.<br />
Imponemos esta reactividad para que pueda recibir sus productos en el menor tiempo.<br />
<br />
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> no es capaz de modificar el contenido de su solicitud o cualquier informaci�n relacionada con la direcci�n de entrega, una vez que su pedido ha sido confirmado por usted durante m�s de una hora.<br />
<br />
<b>Confirmaci�n del pedido</b><br />
Despu�s de la orden en <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> usted recibir� un correo electr�nico que resume los detalles.<br />
<br />
Se muestra el n�mero de pedido (el n�mero que se muestra en el sitio cuando la orden fue aceptada), detalles de los productos solicitados y sus precios correspondientes. En su caso, una buena promoci�n, su direcci�n de env�o y de facturaci�n y el m�todo de env�o seleccionado incluye tambi�n.<br />
<br />
<h3>Rastree su pedido</h3>
Puede hacer un seguimiento de su pedido en nuestra p�gina web con su n�mero de orden en su correo electr�nico de confirmaci�n de env�o.<br />
<br />
<b>Los c�digos promocionales</b>
Para calificar para la promoci�n, s�lo tiene que introducir el c�digo de pago Paso.Estos acuerdos implican a veces un importe m�nimo de compra (excluyendo gastos de env�o). Si esta promoci�n se ha tenido en cuenta, la oferta promocional aparecer� en su carrito de compras<br />
<br />
<h3>Garant�a de Seguridad</h3>
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> ofrece todas las garant�as de seguridad y confidencialidad de su informaci�n, as� como de banca personal.<br />
<br />
<b>CIFRADO</b><br />
Todos sus datos bancarios (n�mero de tarjeta, fecha de caducidad y el c�digo de seguridad) son inmediatamente encriptada y protegida por un sistema seguro.<br />
No hay informaci�n de tarjeta de cr�dito sobre usted se almacenan en el sitio <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>.<br />
<br />
<h3>la confirmaci�n de env�o de correo electr�nico</h3>
Despu�s de procesar y enviar su pedido, recibir� un e-mail. Esto muestra su n�mero de orden (el n�mero que se muestra en el sitio cuando la orden fue aceptada), el n�mero de seguimiento, el n�mero de clientes, detalles de los productos solicitados y sus precios correspondientes.<br />
<br />
<h3>Reembolso</h3>
La restituci�n del producto se realizar� en un plazo m�ximo de 60 a 90 d�as a partir de la fecha de expedici�n se�al�. se reserva el derecho a <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> prepago transacciones por cualquier medio de pago de su elecci�n.');
?>