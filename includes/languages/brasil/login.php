<?php

if ($HTTP_GET_VARS['origin'] == 'checkout_payment.php') {
  define('NAVBAR_TITLE', 'Realizar Pedido');
  define('TOP_BAR_TITLE', 'Realizar Pedido');
  define('HEADING_TITLE', 'Comprar aqui � muito f�cil.');
  define('TEXT_STEP_BY_STEP', 'Te ajudaremos a efetuar a sua compra passo a passo.');
} else {
  define('NAVBAR_TITLE', 'Entrar');
  define('TOP_BAR_TITLE', 'Entrar na \'' . STORE_NAME . '\'');
  define('HEADING_TITLE', 'Bem-vindo,');
  define('TEXT_STEP_BY_STEP', ''); // should be empty
}
define('TEXT_VISITORS_CART', 'Comprar aqui � muito f�cil');
define('ENTRY_EMAIL_ADDRESS2', 'Escreva seu endere�o de E-mail');

define('HEADING_NEW_CUSTOMER', 'Sou um novo cliente.');
define('TEXT_NEW_CUSTOMER', 'Sou um novo cliente.');

define('HEADING_RETURNING_CUSTOMER', 'J� sou cliente:');
define('TEXT_RETURNING_CUSTOMER', 'Minha senha �:');
define('TEXT_COOKIE', 'Guardar informa��o em um \'cookie\'?');
define('TEXT_PASSWORD_FORGOTTEN', 'Esqueceu a sua senha? Clique aqui para enviarmos uma nova senha para o seu endere�o de e-mail imediatamente.');
define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>ERROR:</b></font> O \'E-Mail\' e/ou \'Senha\' n�o constam em nosso banco de dados.');
define('TEXT_LOGIN_ERROR_EMAIL', '<font color="#ff0000"><b>ERROR:</b></font> Este \'E-Mail\' j� foi cadastrado, use sua \'senha\' para entrar.');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Criando um login na ' . STORE_NAME . ' voc� pode comprar com rapidez em um moderno sistema, e mantem-se a par das compras ja realizadas ou que est�o em seu carrinho esperando sua decis�o.');



define('TEXT_NEW_CUSTOMER', 'Voc� � um novo cliente do '.STORE_NAME.' ?');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Por favor, clique em "Continuar" para criar uma conta. <br /><br /Ao criar uma conta no ' . STORE_NAME . ', voc� poder� comprar mais rapidamente e acompanhar os seus pedidos.');

define('HEADING_RETURNING_CUSTOMER', 'Voc� J� possui uma conta?');
define('TEXT_RETURNING_CUSTOMER', 'Identifique-se para entrar.  ');



define('TEXT_LOGIN_ERROR_IN_LOGIN', 'Erro: Este endere�o de e-mail n�o � registrado em nosso site.');
define('TEXT_LOGIN_ERROR_IN_PASSWORD', 'Erreur : Erro: a senha n�o � v�lida para este endere�o. ');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>NOTA :</b></font> O conte�do dos visitantes do seu cesto ser� mesclado com o seu; Carrinho de Membro conte�do uma vez que voc� tenha feito logon. <a href="javascript:session_win();">[Plus d\'info]</a>');

define('FROM_SPONSORSHIP', 'Para tirar proveito do sistema de patroc�nio, voc� deve autenticar.

Duas boas raz�es para se referir a seus amigos!

1. � f�cil!
Para indicar seus amigos, basta digitar seu e-mail nos campos abaixo. Um e-mail ser� enviado informando-os sobre o seu convite.


2. Trata-se do euro!
'.STORE_NAME.' oferece uma compensa��o excepcional diminuiu em tr�s n�veis que voc� pode ganhar o Euro :

- %s nos primeiros %s ordens de suas refer�ncias diretas
- %s nos primeiros %s ordens de suas refer�ncias de suas refer�ncias
- %s nos primeiros %s ordens de suas refer�ncias de suas refer�ncias de suas refer�ncias

<img src="images/parrain_schema.gif" />');
?>
