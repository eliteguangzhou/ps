<?php

define('NAVBAR_TITLE', 'Criar uma Conta');
define('TOP_BAR_TITLE', 'Criar uma Conta');
define('HEADING_TITLE', 'Informa��o sobre a Minha Conta');
define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>NOTA:</b></font></small> Se j� tem uma conta conosco por favor clique aqui para <a href="' . tep_href_link(FILENAME_LOGIN, 'origin=checkout_address&connection=' . $HTTP_GET_VARS['connection'], 'NONSSL') . '"><u>entrar</u></a>.');
define('FORM_REQUIRED_INFORMATION','Entre com os seus dados para cadastro');


define('EMAIL_SUBJECT', 'Bem-vindo ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Caro Sr. vnom,' . "\n\n");
define('EMAIL_GREET_MS', 'Prezada Sra. vnom,' . "\n\n");
define('EMAIL_GREET_NONE', 'Caro vnom' . "\n\n");

define('EMAIL_WELCOME', '
Parab�ns!A sua conta pessoal foi criada com sucesso.

Agora voc� pode comprar os nossos perfumes, clicando em "adicionar ao carrinho"

As informa��es para acessar sua conta s�o os seguintes:

Usu�rio: vloggin
Senha: vpass'. "\n\n");

define('EMAIL_TEXT', '');
define('EMAIL_CONTACT', 'Se precisar de ajuda, por favor entre em contato conosco por e-mail  <a href="mailto:'.STORE_OWNER_EMAIL_ADDRESS.'" target="_blank">'.STORE_OWNER_EMAIL_ADDRESS.'</a> ou por telefone.

Boa visita,

SAMY

Aten��o ao Cliente
  <a href="http://www.'.strtolower(STORE_NAME).'/" target="_blank">www.'.strtolower(STORE_NAME).'</a>');
  
define('EMAIL_WARNING', '<b><u>REMARQUE IMPORTANTE :</u></b>Voc� est� recebendo este email porque segue a inclus�o de um novo cliente na nossa loja online. Se voc� n�o registrado na '.STORE_NAME.' obrigado a informar o gerente da loja no endere�o: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");

define('ENTRY_EMAIL_ADDRESS_SPONSORSHIP_ERROR', 'O endere�o do patroc�nio � diferente da que voc� entrou.');

define('SPONSORSHIP_GODFATHER', 'Seu patrocinador � a seguinte:');
define('SPONSORSHIP_GODFATHER_UNKNOWN', 'A chave eo e-mail informado n�o corresponde a nenhum patroc�nio.');

define('EMAIL_SUBJECT_NETA', 'R�ductions '.STORE_NAME);
define('EMAIL_TEXT_NETA', 'Suite � votre inscription sur '.STORE_NAME.', profitez des coupons de r�duction suivants (non cumulable) :

%s

Bonne visite,

SAMY
Equipe Service Client
<a href="http://www.'.strtolower(STORE_NAME).'/" target="_blank">www.'.strtolower(STORE_NAME).'</a>');

?>
