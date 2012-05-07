<?php
define('NAVBAR_TITLE', 'Contenido de la Cesta');
define('HEADING_TITLE', '');
define('TABLE_HEADING_REMOVE', 'Eliminar');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Producto(s)');
define('TABLE_HEADING_TOTAL', 'Total');
define('TEXT_CART_EMPTY', 'Tu Cesta de la Compra esta vacia!');
define('SUB_TITLE_SUB_TOTAL', 'Subtotal:');
define('SUB_TITLE_TOTAL', 'Total a pagar:');
define('SUB_TITLE_FRAIS_PORT', 'Gastos de env�o :');
define('SUB_TITLE_NB_PRODUCTS_DISCOUNT', 'Descuento :');
define('PROMO_NB', '<ul class="promo_nb promo_nb2" id="promo_nb2">Por la compra de <span class="text_red">2 art�culos</span> :<li><span class="text_red">Canciones de los gastos de env�o</span> !</li><li><span class="text_red">1 gel de ducha</span> Hugo Boss ofrecido</li></ul>');
define('PROMO_NB1', '<ul class="promo_nb promo_nb%s" id="promo_nb%s">Por la compra de <span class="text_red">%s art�culos</span> :<li><span class="text_red">%s</span> de descuento ofrecido,</li><li><span class="text_red">1 gel de ducha</span> Hugo Boss ofrecido,</li><li><span class="text_red">5 euros</span> de descuento en el costo de env�o !</li></ul>');
define('OUT_OF_STOCK_CANT_CHECKOUT', 'Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no estan disponibles en la cantidad que requiere.<br>Modifique la cantidad de productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ', Gracias');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Los productos marcados con ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' no estan disponibles en cantidad que requiere.<br>De todas formas, puede comprar los que hay disponibles y el resto se lo enviamos mas tarde o esperar a que la cantidad requerida este disponible.');
define('STR_GIFT', 'Tu regalo');
define('STR_GIFT_CHOOSE', '<script type="text/javascript">document.write(\'<br /><br />Usted prefiere un regalo diferente?<br /><a href="'.tep_href_link(FILENAME_SHOPPING_CART).'#" onclick="document.getElementById(\\\'popup\\\').style.display = \\\'block\\\'">Haga clic aqu�!</a>');
define('CART_MAX_AMOUNT_REACHED', 'Por seguridad, la cantidad m�xima de una orden se limita a 300 �');
define('FREE_SHIPPING_COST', 'Ofrece');
define('PROMO_SHIPPING_COST', '<ul class="promo_nb promo_nb2" id="promo_nb1">
Para la compra de dos art�culos: <br />
<span class="text_red">
<li>Un gel de ducha Hugo Boss ofrece !</li>
</span>
</ul>');
define('PROMO_GIFT_FOR_3', '<ul class="promo_nb promo_nb3" id="promo_nb1">Elige tu regalo haciendo clic aqu�!</ul>');
define('PROMO_GET_YOUR_GIFT', '<a href="'.FILENAME_PROMO.'" class="promo_nb promo_nb4" id="promo_nb1">
Choisissez votre cadeau en cliquant ici !
</a>');
define('MIN_PRODUCTS', '<span class="min_products">Por favor, a�ada un producto en su cesta de la compra a fin de completar su solicitud.</span>');
define('SPECIAL_PROMO', '<br /><b>Tabla de ofertas actuales:</b><br />
<table cellpadding="2" cellspacing="0" class="special_promo" style="text-align:center;margin:5px 0;" align="center" border="1">
<tr class="header" style="font-weight:bold;">
  <td>N�mero productos<br />comprados</td><td>Gastos de env�o</td><td>Reducci�n<br />inmediata</td>
</tr>%s</table>
');
define('SPECIAL_PROMO1', 'Compre 2 art�culos y paga s�lo 7EUR gastos de env�o.');
define('SPECIAL_PROMO2', 'Para 3 art�culos comprados, gastos de env�o incluidos!');
define('CHOOSE_YOUR_GIFT', 'Elige tu regalo');
define('CHOOSE_YOUR_GIFTS', 'Elige tus regalos');
define('GIFTS_LEFT', 'restantes');
define('CHOOSEN_GIFTS', 'Regalos seleccionados :');
define('CHOOSEN_GIFT', 'Elegido regalo :');
define('CART_MAX_AMOUNT_BY_PRODUCT_REACHED', 'S�lo se puede comprar hasta '.MAX_SAME_PRODUCTS.' productos.');
?>