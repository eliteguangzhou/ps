<?php
define('FRIEND_DISCOUNT_TITLE', 'cupons de desconto para tr�s de seus amigos!');
define('FRIEND_DISCOUNT_INTRO', 'Por favor, aproveite o seu conhecimento de um cupom para um valor de entrada% s seus e-mails nos seguintes dom�nios:<br />');
define('ERROR_BAD_ORDER', 'Comando inv�lido ou j� processado');
define('ERROR_BAD_FRIEND_EMAIL', 'e-mail inv�lido');
define('ERROR_ALREADY_FRIEND_EMAIL', 'Esse amigo j� tenha beneficiado de uma redu��o para este fim');
define('ERROR_MAX_FRIENDS', 'Voc� atingiu o n�mero m�ximo de cortes permitidos para este comando');
define('ERROR_DISCOUNT_ALREADY_GIVEN', 'Voc� j� enviou um cupom para que voc� amigo(a) antes de');
define('ERROR_MAX_FRIENDS_REACHED', 'Voc� excedeu o n�mero m�ximo de cortes permitidos para este comando (%s restante(s))');
define('MAIL_SENT', 'Um email foi enviado a seus contatos com o c�digo de desconto!');


define('FRIEND_DISCOUNT_EMAIL_SUBJECT', '%s oferece um desconto '.STORE_NAME);

define('FRIEND_DISCOUNT_EMAIL_TEXT', 'Ol� ,

Seu amigo (a) %s quer oferecer um desconto de %s  na conta de um dos seus pedidos <a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>. Aproveite esta com desconto, v�lido por 48 horas ap�s digitar o c�digo "%s" ao encomendar.

Se voc� ainda n�o � parte no c�rculo privilegiado dos membros'.STORE_NAME.'Agora voc� pode se registrar clicando no link abaixo:

<a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'/create_account.php">http://'.$_SERVER['SERVER_NAME'].'/create_account.php</a>

At� logo espero.
Qualquer equipa '.STORE_NAME.'. ');
?>









