<?php

define('NAVBAR_TITLE_1', 'Pedido');
define('NAVBAR_TITLE_2', 'Realizado com Exito');
define('TOP_BAR_TITLE', 'Pedido Completo!');
define('HEADING_TITLE', 'Seu Pedido foi Processado!');
define('TEXT_SUCCESS', 'Seu pedido foi realizado com exito! Seus produtos chegar�o a seu destino de 2 a 7 dias �teis ap�s a confirma��o do pagamento.<br><br>Voc� poder� acompanhar o hist�rico de seus pedidos na <a href="' . tep_href_link(FILENAME_ACCOUNT, '', 'NONSSL') . '">\'p�gina de sua conta\'</a> clicando no link <a href="' . tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'NONSSL') . '">\'Hist�rico\'</a>.<br><br>Qualquer d�vida ou pergunta que tiver sobre o seu pedido poder� ser enviada por E-mail para <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . '</a>.<br><br><font size="3">Muito obrigado por adquirir os nossos produtos. Volte Sempre!</font>');


define('HEADING_TITLE', '<p><b>Parab�ns !</b></p>
  <p>
 Seu pedido foi enviado com sucesso. </ P>
  <p> Se o seu pedido n�o cont�m nenhuma anomalia, o seu produto ser� entregue no prazo de 12 dias. </ p>

  <p>
  Uma confirma��o do pedido foi enviado para sua caixa de e-mail. Se voc� n�o recebeu nada em 10 minutos voc� pode acessar sua confirma��o de pedido com este link:<br />
  <a href="http://'.$_SERVER['SERVER_NAME'].'/account_history_info.php?order_id=%s">http://'.$_SERVER['SERVER_NAME'].'/account_history_info.php?order_id=%s</a>
  </p>
<br />');

define('HEADING_TITLE2', '<br />
  <p><b>
 Sabe tamb�m desfrutar de um desconto de %s valor digitando seu e-mail no campo abaixo :</b><br />
  <form action="'.$_SERVER['PHP_SELF'].'" method="POST">
  <table cellpadding="0" cellspacing="5" style="width:220px;">
  <tr><td>Adresse email 1 : <input type="text" name="email[]" value="%s" /></td></tr>
  <tr><td>Adresse email 2 : <input type="text" name="email[]" value="%s" /></td></tr>
  <tr><td>Adresse email 3 : <input type="text" name="email[]" value="%s" /></td></tr>
  <tr><td align="center">'.tep_image_submit('button_continue.gif', IMAGE_BUTTON_CONTINUE).'</td></tr>
  </table>
  </form>
  </p>');

define('TEXT_NOTIFY_PRODUCTS', 'Favor informar-me de atualiza��es para os produtos que eu optar abaixo:');
define('TEXT_SEE_ORDERS', 'Voc� pode ver o hist�rico do seu pedido a partir da p�gina <a href="' . tep_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">\'Minha conta \'</a> e clicando em <a href="' . tep_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL') . '">\'Hist�rico\'</a>.');
define('TEXT_CONTACT_STORE_OWNER', 'Por favor, fa�a perguntas diretamente ao <a href="' . tep_href_link(FILENAME_CONTACT_US) . '">Propriet�rio de loja</a>.');

define('TABLE_HEADING_COMMENTS', 'Escreva um coment�rio para a encomenda;');

define('TABLE_HEADING_DOWNLOAD_DATE', 'data de validade : ');
define('TABLE_HEADING_DOWNLOAD_COUNT', ' downloads restantes');
define('HEADING_DOWNLOAD', 'Baixe o seu produto aqui:');
define('FOOTER_DOWNLOAD', 'Voc� tamb�m pode baixar o seu produto antes de \'%s\'');

define('BAD_FRIEND_EMAIL', 'Email inv�lido');

define('MAIL_SENT', 'Um email foi enviado a seus contatos com o c�digo de desconto!');

define('FRIEND_DISCOUNT_EMAIL_SUBJECT', '%s oferece um desconto'.STORE_NAME);

define('FRIEND_DISCOUNT_EMAIL_TEXT', 'Ol�

Seu amigo (e) %s est� esperando para oferecer desconto de %s a ser definido contra um dos seus pedidos <a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'">'.STORE_NAME.'</a>. Aproveite esta com desconto, v�lido por 48 horas ap�s digitar o c�digo "%s", quando ordena.

Se voc� ainda n�o � parte no c�rculo privilegiado dos membros '.STORE_NAME.' agora voc� pode se registrar clicando no link abaixo:

<a target="blank" href="http://'.$_SERVER['SERVER_NAME'].'/create_account.php">http://'.$_SERVER['SERVER_NAME'].'/create_account.php</a>

At� logo.
Equipe '.STORE_NAME.'.
T�l : 0970 465 068');
define('ERROR_DISCOUNT_ALREADY_GIVEN', 'Voc� j� enviou um cupom para que o amigo antes');


?>