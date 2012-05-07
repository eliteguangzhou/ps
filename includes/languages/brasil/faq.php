<?php
/*
  $Id: faq.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'FAQ');
define('HEADING_TITLE', 'FAQ');

define('TEXT_INFORMATION', '<h3>Coloque um fim</h3>
Esta � sua primeira compra em <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>?
<br /><br />
Convidamo-lo e convid�-lo para seguir estes passos:<br />
1. Selecione os itens que deseja comprar<br />
2. Adicione os produtos ao seu carrinho clicando em "Adicionar"<br />
3. Quando voc� tiver adicionado todos os itens ao seu carrinho, voc� s� precisa clicar em<br />
4. "ORDEM". Se voc� quiser adicionar mais artigos, clique em "Continuar comprando<br />
5. Identifique-se. Para maior seguran�a, uma senha e seu e-mail ser� necess�ria.<br />
6. Escolha o seu endere�o de cobran�a e endere�o de entrega<br />
<br />
Thank you very indicar claramente o nome da sua cidade e CEP.
<br /><br />
Certifique-se de escrever o nome da cidade de entrega: abreviaturas, erros ortogr�ficos e outros shells �s vezes pode levar a erros neste t�pico. Lembre-se tamb�m para incluir as seguintes informa��es: c�digo de acesso, piso do edif�cio.
<br />
<h3>Pagamento</h3>
<b>Por cart�o de cr�dito</b> � f�cil, r�pido e seguro!<br />
Pagamento por cart�o de cr�dito � uma maneira <b>simples, r�pida e segura</b> de comprar online.<br />
Aceitamos <b>Visa, Master Card</b>.<br />
N�s garantimos a seguran�a m�xima.<br />
A opera��o ser� conduzida com seguran�a atrav�s do servi�o de pagamento PayPal.<br />
Todos os dados capturados banc�rios (n�mero do cart�o, c�digo de seguran�a e data de vencimento do cart�o) com o pagamento por cart�o de cr�dito s�o imediatamente criptografada usando SSL e armazenadas no servidor de pagamento paypal.
<br /><br />
N�o h� detalhes sobre o pagamento est�o armazenados no site <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>, evitando qualquer possibilidade de fraude por invadir o site <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>.
<br /><br />
<b>Condi��o da entrega</b>
<br />
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> entregar a encomenda para o endere�o de sua escolha no mundo (80 pa�ses).
<br />
<h3>Custo e Entrega</h3>
Os custos de transporte foi de 8,00 � e isso independentemente do n�mero de pacotes inclu�dos na sua ordem.
<br />
O atraso geralmente observado entre o momento da ordena��o, separa��o e de recep��o de encomendas � de 8 a 12 dias �teis, excluindo s�bados, domingos e feriados.
<br />
<h3>Cancelar ou alterar um pedido</h3>
Antes de enviar um pedido, voc� pode verificar o conte�do eo valor total do seu carrinho de compras. Uma vez que a ordem � levado em conta, voc� n�o pode cancelar ou modificar sua ordem dentro de uma hora ap�s a sua encomenda. Para fazer isso, obrigado a contactar o nosso servi�o ao cliente <a href="mailto:'.STORE_OWNER_EMAIL_ADDRESS.'" target="_blank">'.STORE_OWNER_EMAIL_ADDRESS.'</a>.
<br />
N�s impomos essa reatividade para que voc� possa receber seus produtos no menor tempo.
<br /><br />
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> � incapaz de modificar o conte�do de seu pedido ou qualquer informa��o relacionada com o endere�o de entrega, uma vez que seu pedido foi confirmado por voc� para mais de uma hora.
<br />
<h3>Confirma��o da ordem</h3>
Ap�s o pedido de <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> voc� receber� um e-mail o resumo das informa��es.
<br /><br />
Ela mostra o seu n�mero de ordem (o n�mero que foi exibido no site quando o pedido foi aceito), detalhes dos produtos encomendados e os pre�os correspondentes. Se for caso disso, boa promo��o, o seu endere�o de entrega e de factura��o eo m�todo de envio selecionados tamb�m inclu�das.
<br />
<h3>Acompanhe seu pedido</h3>
Voc� pode acompanhar sua encomenda no nosso site com seu n�mero de ordem em seu e-mail de confirma��o de envio.
<br /><br />
<b>Os c�digos promocionais</b>
<br />
Para se qualificar para a promo��o, basta inserir o c�digo de pagamento Step.Estas ofertas, por vezes, implicam um montante m�nimo de compra (excluindo transporte). Se essa promo��o foi tida em conta, a oferta promocional ser� exibido no carrinho de compras
<br />
<h3>Garantia de seguran�a</h3>
<a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> oferece todas as garantias de seguran�a e confidencialidade de suas informa��es, bem como servi�os banc�rios pessoais.
<br /><br />
<b>CRIPTOGRAFIA</b>
<br />
Todos os seus dados banc�rios (n�mero do cart�o, data de validade eo c�digo de seguran�a) s�o encriptados e protegidos por um sistema seguro.
<br />N�o h� informa��es de cart�o de cr�dito com voc� � armazenado no site <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>.
<br />
<h3>E-mail de confirma��o de envio</h3>
Ap�s o processamento e envio da encomenda voc� receber� um e-mail. Isso mostra o seu n�mero de ordem (o n�mero que foi exibido no site quando o pedido foi aceito), o n�mero de rastreamento, o n�mero de clientes, informa��es sobre os produtos solicitados e seus respectivos pre�os.
<br />
<h3>Reembolso</h3>
A restitui��o do produto ser� feito dentro de um per�odo m�ximo de 60 a 90 dias a contar da data de emiss�o observou. reservas <a href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a> o direito de pr�-pagamento transa��es por qualquer meio de reembolso de sua escolha.');
?>








