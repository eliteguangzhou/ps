<?php

define('SPONSORSHIP_TITLE', 'Meus afilhados');
define('SPONSORSHIP_FIRSTNAME', 'Nome');
define('SPONSORSHIP_LASTNAME', 'NoNomem');
define('SPONSORSHIP_EMAIL', 'Email');
define('SPONSORSHIP_SUBSCRIBED', 'Registrado');
define('SPONSORSHIP_RETRY', 'Reviver');
define('SPONSORSHIP_NO_GODCHILD', 'Nenhum afilhado');
define('SPONSORSHIP_YES', '<span style="color:green">Sim</span>');
define('SPONSORSHIP_NO', '<span style="color:red">N�o</span>');

define('SPONSORSHIP_RETRY_LATER', 'A trickle-dia no m�ximo');

define('SPONSORSHIP_EMAIL_ERROR', 'Emails para reiniciar n�o s�o v�lidas.');

define('SPONSORSHIP_EMAIL_SUBJECT', '%s quer que voc� descobrir'.STORE_NAME);

define('SPONSORSHIP_EMAIL_TEXT', 'Ol� ,

Seu amigo (e) %s queria apresent�-lo ao nosso site <a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> e estamos muito felizes.

 Estamos muito satisfeitos por oferecer-lhe uma redu��o na conta de um de seus comandos para obter uma vantagem sobre as suas compras <a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>. Aproveite esta com desconto v�lido para um m�s depois de introduzir o c�digo "% s" ao encomendar.

Para chegar a sua vez no c�rculo de. Membros privilegiado '.STORE_NAME.' Voc� apenas tem que aceitar o convite de Max, clicando no link a seguir:

<a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'/create_account.php?key=%s&email=%s">http://'.$_SERVER['SERVER_NAME'].'/create_account.php?key=%s&email=%s</a>

 At� logo espero.
Qualquer equipa '.STORE_NAME.'. ');

define('SPONSORSHIP_EMAIL_SENT', 'Seu amigo (s) ter sido revivido (s) por e-mail.');
?>