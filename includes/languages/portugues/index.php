<?php
/*
  $Id: index.php,v 1.1 2003/06/11 17:38:00 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', 
' 
<br>
TR Digital &amp; Inform�tica<br>
Endere�o:  Rua Pimenta de Padua, 1747<br>
Bairro: Centro<br>
S�o Sebasti�o do Para�so / MG<br>
CEP: 37.950-000<br>
Telefone: 0xx35 3558.7478<br>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
');
define('TABLE_HEADING_NEW_PRODUCTS', 'Novos Produtos em %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produto em alta');
define('TABLE_HEADING_DATE_EXPECTED', 'Data Esperada');





define('TEXT_MAIN', 'Esta � a configura��o padr�o do projecto osCommerce, os produtos s�o indicados para fins de demonstra��o, <b>quaisquer produtos adquiridos n�o ser�o entregues ou facturados ao cliente.</b> Qualquer informa��o visita a esses produtos deve ser tratada como ficcional.<br><br>
<table border="0" summary="" width="100%" cellspacing="5" cellpadding="2">
<tr>
<td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/1.gif') . '</td>
<td class="main" valign="top"><b>Mensagens de erro </b><br><br>Se houver algum erro ou mensagens de aviso mostrado acima, corrija-os antes de continuar. <br><br>Mensagens de erro s�o exibidas na parte superior da p�gina com um <span class="messageStackError">fundo</span> de cor.<br><br> Diversos controles s�o realizados para assegurar uma instala��o saud�vel de sua loja online - estas verifica��es podem ser desativadas editando os par�metros apropriados no arquivo includes/application_top.php. </td>
</tr>
<tr>
<td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/2.gif') . '</td>
<td class="main" valign="top"><b>Conte�do editorial da p�gina </b><br><br>O texto mostrado aqui pode ser modificado no seguinte arquivo, em cada linguagem base:<br><br><span class="messageStackSuccess">[chemin du r�pertoire catalog]/includes/languages/' . $language . '/' . FILENAME_DEFAULT . '</span><br><br>Este arquivo pode ser editado manualmente, ou atrav�s da ferramenta de administra��o com os m�dulos <span class="messageStackSuccess">Languages-&gt;' . ucfirst($language) . '-&gt;Define</span> ou <span class="messageStackSuccess">Tools-&gt;File Manager.<br><br> O texto � o seguinte </span><br><br>define(\'TEXT_MAIN\', \'<span class="messageStackSuccess">Esta � a configura��o padr�o do projeto do osCommerce ...</span>\');<br><br>O texto destacado em verde podem ser modificados - � importante para definir () para definir a palavra-chave TEXT_MAIN. Para remover o texto de TEXT_MAIN completamente, o seguinte exemplo � usado onde somente dois caracteres de aspas simples (aspas) entrou:<br><br>define(\'TEXT_MAIN\', \'\');<br><br>Mais informa��es sobre o PHP define() pode ser lido <a href="http://www.php.net/manual/fr/function.define.php" target="_blank"><u>ici</u></a>.</td>
</tr>
<tr>
<td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/3.gif') . '</td>
<td class="main" valign="top"><b>Assegurar as Ferramentas Administrativas</b><br><br>� importante para garantir a Ferramenta de Administra��o, actualmente n�o existe qualquer implementa��o de seguran�a.</td></tr><tr><td class="main" valign="top">' . tep_image(DIR_WS_IMAGES . 'default/4.gif') . '</td>
<td class="main" valign="top"><b>Documenta��o Online</b><br><br>A documenta��o online pode ser lido no site <a href="http://wiki.oscommerce.com" target="_blank"><u>osCommerce Wiki Documentation Effort</u></a>.
<br><br>O apoio da comunidade f�rum est� dispon�vel no <a href="http://forums.oscommerce.com" target="_blank"><u>osCommerce Community Support Forums</u></a>.
<br><br>F�rum de apoio da comunidade franc�fona est� dispon�vel no <a href="http://www.oscommerce-fr.info/forum/index.php?showtopic=36121" target="_blank"><u>Forum osCommerce-fr</u></a>.
<br>Perguntas mais frequentes da comunidade franc�fona est� dispon�vel em <a href="http://www.oscommerce-fr.info/faq/" target="_blank"><u>FAQ osCommerce-fr</u></a>.
<br>O guia para sua instala��o est� dispon�vel em franc�s <a href="http://www.oscommerce-fr.info/portail/index.php?option=com_content&amp;task=section&amp;id=3&amp;Itemid=157" target="_blank"><u>Guide d\'installation</u></a>.
</td>
</tr>
</table>
<br>Se voc� deseja baixar o software que suporta esta loja, ou se voc� quiser contribuir para o projecto osCommerce, visite o site franc�s <a href="http://www.oscommerce-fr.info" target="_blank"><u>osCommerce-fr</u></a> ou site da comunidade gen�ricos <a href="http://www.oscommerce.com" target="_blank"><u>osCommerce</u></a>. Esta loja est� funcionando na vers�o osCommerce <font color=red><b>' . PROJECT_VERSION . '</b></font>.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Novos Produtos para  %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Pr�ximos Produtos');
define('TABLE_HEADING_DATE_EXPECTED', 'A data prevista');


if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Produtos');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Modelo');
  define('TABLE_HEADING_PRODUCTS', 'Nome do Produto');
  define('TABLE_HEADING_MANUFACTURER', 'Manufacturer');
  define('TABLE_HEADING_QUANTITY', 'Quantidade');
  define('TABLE_HEADING_PRICE', 'Pre�o');
  define('TABLE_HEADING_WEIGHT', 'Peso');
  define('TABLE_HEADING_BUY_NOW', 'Comprar agora');
  define('TEXT_NO_PRODUCTS', 'N�o h� nenhum produto a listar nesta categoria .');
  define('TEXT_NO_PRODUCTS2', 'N�o h� nenhum produto dispon�vel deste fabricante');
  define('TEXT_NUMBER_OF_PRODUCTS', 'N�mero dos produtos: ');
  define('TEXT_SHOW', '<b>Mostrar:</b>');
  define('TEXT_BUY', 'Compra 1 \'');
  define('TEXT_NOW', '\' agora');
  define('TEXT_ALL_CATEGORIES', 'Todas as Categorias');
  define('TEXT_ALL_MANUFACTURERS', 'Todos os fabricantes ');
  define('TEXT_PRICE_FROM', '� partir de');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Descubra ...');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Categorias');
}




define('NEW_INTRO','
Bem-vindo ao Reino dos segredos do perfume, a pre�os baixos!

D� um passeio na fragr�ncia marcas <span class="text_rose">o menos caro em Fran�a!</span>
N�o compre sem comparar !<span class="text_rose"> N�s devolveremos a diferen�a!</span>

� <a class="text_rose" href="'.tep_href_link(FILENAME_ADVANTAGES).'">Descubra os nossos benef�cios</a> �

- <span class="text_rose">20.000 perfumes e cosm�ticos</span>atualmente no site
- 500 marcas era -40%, -50%, -70%
- 3�, 8�, <span class="text_rose">Desconto de 15 �</span>  oferecidos
- <span class="text_rose">Frete 3�</span>  a partir de 2 produtos na cestar
- 1 dom <span class="text_rose">HUGO BOSS oferecidos</span>  a partir de 2 produtos na cesta
- Todos os produtos on-line est�o em <span class="text_rose">estoque</span>
- <span class="text_rose"> Satisfeito ou reembolsado</span> 30 dias
- Pagamento <span class="text_rose">seguro</span>
- Atendimento ao Cliente: <span class="text_rose">0970 465 068</span> (6 dias / 7)');

?>