<?php

define('EMAIL_TEXT_SUBJECT', 'Processar Pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'N�mero do Pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Pedido Detalhado:');
define('EMAIL_TEXT_DATE_ORDERED', 'Data do Pedido:');
define('EMAIL_TEXT_PRODUCTS', 'Produtos');
define('EMAIL_TEXT_SUBTOTAL', 'Subtotal:');
define('EMAIL_TEXT_TAX', 'IVA');
define('EMAIL_TEXT_SHIPPING', 'Gastos de Envio: ');
define('EMAIL_TEXT_TOTAL', 'Total:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Endere�o de Entrega');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Forma de Pagamento');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', '');
define('EMAIL_TEXT_NAME','Nome');
define('EMAIL_TEXT_PRICE','Pre�o');
define('EMAIL_TEXT_QTY','Quantidade');
define('EMAIL_TEXT_ORDER_TOTAL','Ordem Total: ');
define('EMAIL_TEXT_INVOICE_URL', 'Discriminada :');
define('EMAIL_TEXT_DATE_ORDERED', 'Data da Ordem :');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Endere�o de faturamento');

define('EMAIL_TEXT_CONTENT_HIGH','Caro(a %s,
<br><br>
Obrigado pelo seu pedido %s do dia %s
<br><br>
Se o seu pedido n�o cont�m anomalias, o seu produto ser� entregue no prazo de 12 dias.
<br><br>
Voc� pode verificar o status do seu pedido se conectando em 72 horas em sua conta :
<br><br>
<a href=\"http://www.'.strtolower(STORE_NAME).'\">http://www.'.strtolower(STORE_NAME).'</a><br>
e-mail: %s<br>
Password: %s');







define('EMAIL_TEXT_CONTENT', 'Seu pedido foi enviado com sucesso.
<br><br>
Se o seu pedido n�o cont�m falhas, seu produto ser� entregue em 12 dias.');
define('EMAIL_TEXT_CONTENT_LESS',EMAIL_TEXT_CONTENT_HIGH);

define('EMAIL_TEXT_TITRE','<br><b>seu pedido</b><br>');


define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'atrav�s');

define('SPONSORSHIP_EMAIL_SUBJECT', 'Novo c�digo de desconto '.STORE_NAME);

define('SPONSORSHIP_EMAIL_TEXT', 'Ol�

Estamos felizes em lhe enviar o c�digo de desconto seguinte: um valor de %s, %s v�lida meses ap�s ordenar o seu afilhado %s.

Voc� pode acessar sua lista de redu��es de registo no nosso site e usando o seguinte link:

<a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'/sponsorship_discount.php">http://'.$_SERVER['SERVER_NAME'].'/sponsorship_discount.php</a>

Atenciosamente,
Qualquer equipa '.STORE_NAME.'. ');

define('STR_GODCHILD_1', '');
define('STR_GODCHILD_2', 'pequeno ');
define('STR_GODCHILD_3', 'pequeno pequeno ');

define('EMAIL_TEXT_DISCOUNT_SUBJECT', '%s de desconto para os amigos !');


define('EMAIL_FRIEND_DISCOUNT', 'Ol� %s,

Seguindo sua ordem, seus amigos podem benefici�-lo com uma redu��o de %s.

Clique imediatamente link abaixo para enviar o cupom para seus amigos:

<a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'/friend_discount.php?var=%s">http://'.$_SERVER['SERVER_NAME'].'/friend_discount.php?var=%s</a>

Atenciosamente,
Qualquer equipa '.STORE_NAME.'.
');




?>
