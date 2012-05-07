<?php

define('NAVBAR_TITLE_1', 'Criar uma Conta');
define('NAVBAR_TITLE_2', 'Processo');
define('TOP_BAR_TITLE', 'Criar una Conta');
define('HEADING_TITLE', 'Informa��o sobre a Minha Conta');
define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>NOTA:</b></font></small> Se j� tem uma conta conosco clique aqui para <a href="' . tep_href_link(FILENAME_LOGIN, 'origin=checkout_address', 'NONSSL') . '"><u>entrar</u></a>.');

define('EMAIL_SUBJECT', 'Bem Vindo a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Prezado %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Prezado %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Prezado %s,' . "\n\n");
define('EMAIL_WELCOME', 'Damos as boas vindas a <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', '<p align=\"justify\">Agora voc� pode desfrutar de todos os <b>servi�os</b> que lhe oferecemos. Alguns destes servi�os s�o:' . "\n\n" . '<li><p align=\"justify\"><b>Carrinho de Compras Permanente</b> - Qualquer produto colocado em seu carrinho permanecer� nele at� que o elimine ou realize a compra.' . "\n" . '<li><p align=\"justify\"><b>Livro de Endere�os</b> - Podemos enviar os produtos comprados por voc� para um outro endere�o cadastrado previamente por voc�. � uma �tima oportunidade para voc� presentear algu�m especial em uma data especial. Voc� faz as compras em nossa loja e n�s entregamos o produto embalado para presente em qualquer parte do Brasil.' . "\n" . '<li><p align=\"justify\"><b>Hist�rico dos Pedidos</b> - Voc� pode acompanhar o andamento dos pedidos realizados conosco, bastando para isso acessar a sua conta em nossa loja.' . "\n" . '<li><p align=\"justify\"><b>Coment�rios</b> - Voc� pode avaliar e fazer coment�rios sobre os nossos produtos. Todos os coment�rios ser�o exibidos em nossa loja.' . "\n\n");
define('EMAIL_CONTACT', '<p align=\"justify\">Qualquer d�vida sobre os nossos servi�os por favor escreva para: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b><p align=\"justify\">Nota:</b> Este endere�o de e-mail foi utilizado por um de nossos novos associados para se cadastrar em nosso site. Caso n�o seja voc� que tenha se cadastrado, por favor comunique-nos pelo e-mail ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
?>
