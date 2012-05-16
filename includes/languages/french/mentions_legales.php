<?php
/*
  $Id: about_us.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Mentions l�gales');
define('HEADING_TITLE', '');

$temp = substr(STORE_NAME, 0, strpos(STORE_NAME, '.'));
define('TEXT_INFORMATION', '<h3>Mentions l�gales</h3>
Vous �tes actuellement connect� au site internet officiel (le "site web") de '.$temp.' propri�t� de la soci�t� Mercury au capital de 15000 euros dont le si�ge social est 12 floor rutonjee house  11 duddell st  central hong kong immatricul�e au Registre du commerce et des soci�t�s sous le num�ro 5069891888223892 Le service Client est joignable au num�ro 0970465068(appel non surtax�) ou par mail.L\'utilisation de ce site web est soumise aux Conditions G�n�rales d\'utilisation ("Conditions") �nonc�es ci-apr�s.
<br /><br />
'.$temp.' se r�serve le droit de revoir p�riodiquement ces conditions. Les Conditions modifi�es prendront effet � la date de leur mise en ligne sur le site web.
<br /><br />
Veuillez lire attentivement ces conditions avant d\'utiliser ce Site Web.
<br /><br />
'.STORE_NAME.' s\'engage � prot�ger la confidentialit� des informations personnelles fournies par les visiteurs de son site web.
<br /><br />
Cependant dans le cadre de l\'animation de son site, '.$temp.' pourra �tre amen�e � demander � des visiteurs du site le droit de mettre en ligne certaines des informations personnelles qu\'ils auront communiqu�es au site. Cette mise en ligne ne se fera qu\'apr�s demande �crite de '.STORE_NAME.'  au visiteur concern� et autorisation expresse �crite de celui-ci sur le principe m�me de la mise en ligne et sur la nature des informations personnelles qui seront communiqu�es sur le site. Les informations ainsi fournies par les visiteurs sous leur responsabilit� seront alors consid�r�es comme non confidentielles, et devront �tre exactes, licites et ne pas nuire aux int�r�ts des tiers. '.$temp.' d�cline toute responsabilit� concernant d\'�ventuels pr�judices que la diffusion de ces informations confidentielles pourrait causer.
<br /><br />
Pour vous offrir des services adapt�s et satisfaire des demandes d�informations, de cartes de fid�lit�s, de participation � des jeux, d�enqu�te d�opinion ou de sollicitations commerciales en tout genre, nous pouvons �tre amen�s � vous demander de nous fournir des donn�es personnelles lesquelles feront l�objet d\'un traitement informatique par '.$temp.'.'.$temp.' se r�serve le droit de communiquer les informations vous concernant � des soci�t�s partenaires dans la limite des autorisations que vous avez donn�.
<br /><br />
Conform�ment � la loi Informatique et Libert�s du 6 Janvier 1978 modifi�e, vous disposez d\'un droit d\'acc�s, de rectification, de modification et de suppression des donn�es personnelles que vous nous avez communiqu�es sur '.$_SERVER['SERVER_NAME'].' Vous pouvez exercer ce droit en envoyant un email a <a href="mailto:'.STORE_OWNER_EMAIL_ADDRESS.'">'.STORE_OWNER_EMAIL_ADDRESS.'</a> Si vous �tes abonn�s � des services d\'information par courrier �lectronique ("newsletter") vous pouvez demander � ne plus recevoir ces courriers soit comme indiqu� ci-dessus, soit en suivant les instructions figurant au bas de chacun de ces courriers.
<br /><br />
Le site '.$_SERVER['SERVER_NAME'].' utilise des cookies. Ces fichiers stock�s sur votre ordinateur nous servent � faciliter votre acc�s aux services que nous proposons. Les cookies du site ne contiennent pas de donn�es permettant de vous identifier personnellement, et ils sont con�us pour �tre utilis�s uniquement par '.$temp.'. Nous vous informons que vous pouvez vous opposer � l\'enregistrement de ces "cookies" en configurant votre ordinateur  Droits d\'auteurs - Copyright
<br />L\'ensemble de ce site web et chacun de ses �l�ments pris s�par�ment rel�vent de la l�gislation internationale sur la propri�t� intellectuelle (droits d\'auteur, marques, bases de donn�es�)
<br /><br />
A ce titre, tous les droits de reproduction, de repr�sentation et de communication publique sont r�serv�s y compris pour les documents t�l�chargeables et les repr�sentations visuelles, iconographiques, photographiques, audiovisuelles ou autres.
<br /><br />
Aucune licence, ni aucun autre droit que celui de consulter le site web n\'est conf�r�e � quiconque au regard des droits de propri�t� intellectuelle. La reproduction de tout ou partie de ce site web sur un support �lectronique quel qu\'il soit est formellement interdite sauf autorisation expresse du chef de publication.
<br /><br />
Cependant la reproduction des documents de ce site web est autoris�e sous r�serve d\'une utilisation strictement personnelle et priv�e et du respect de l\'int�grit� des documents reproduits (pas de modification, ni alt�ration d\'aucune sorte). Les courtes citations sont autoris�es sous r�serve de mentionner clairement et lisiblement la source sous la forme suivante "Ce document provient du site internet de '.$temp.'. Les droits de reproduction sont r�serv�s et strictement limit�s". L\'adresse internet parfumseduction.com doit imp�rativement figurer dans la r�f�rence. Pour toute autre utilisation, un accord expr�s et pr�alable de '.$temp.' doit �tre demand�.
<br /><br />
Sauf mention contraire, les droits de copyright des documents du site de '.$temp.' et chacun des �l�ments cr��s pour ce site web sont la propri�t� exclusive de '.$temp.'. '.$temp.' se r�serve le droit de modifier ou de corriger le contenu du site web � tout moment, et ce, sans pr�avis.
<br /><br />
Les marques cit�es sur ce site web sont d�pos�es par les soci�t�s ou organismes qui en sont propri�taires. Leur reproduction ou utilisation de quelque sorte est interdite.
<br /><br />
Le nom de domaine http://'.$_SERVER['SERVER_NAME'].' est strictement r�serv� par '.STORE_NAME.'
<br />Liens hypertextes : Tout lien en direction du site de '.$temp.' doit faire l\'objet d\'une autorisation pr�alable et �crite � '.$temp.'. '.$temp.' d�cline toute responsabilit� concernant le contenu de sites li�s au site de '.$temp.' et plus g�n�ralement du fait de ces liens.
<br />
<h3>Avertissement</h3>
'.$temp.' s\'est efforc�e d\'assurer l\'exactitude de l\'ensemble des informations fournies sur son site et de tous les sites de ses filiales qui y seraient directement reli�s. Ils peuvent toutefois contenir des erreurs. Si vous en constatez, merci de le signaler afin que nous proc�dions aux rectifications correspondantes.
<br />Il se peut �galement que les documents diffus�s sur ce site web fassent l\'objet de mise � jour entre le moment o� vous les avez t�l�charg�s et le moment o� vous les consultez.
<br /><br />
'.$temp.' d�cline toute responsabilit� concernant les informations disponibles sur son site web. Aucune garantie n\'est donn�e quant � l\'exactitude, la pr�cision ou l\'exhaustivit� des informations mises � disposition sur le site web.
<br /><br />
La responsabilit� de '.$temp.' ne pourra en aucun cas �tre engag�e quant � d\'�ventuelles erreurs ponctuelles et inopin�es pouvant survenir sur le site web.
<br /><br />
'.$temp.' ne pourra �tre tenu responsable de l\'ensemble des hypertextes ou de tout autre �l�ment informatique utilis�, directement ou indirectement, � partir du site web.
<br /><br />
'.$temp.' ne saurait �tre tenue responsable d\'�ventuels dommages directs ou indirects pouvant d�couler de votre acc�s ou utilisation de ce site web, ou d\'un dommage ou virus qui pourrait affecter votre ordinateur ou autre mat�riel informatique.
<br />
<h3>Conditions d\'utilisation</h3>
Afin de profiter pleinement de toutes les fonctionnalit�s du site Internet '.$temp.', l\'utilisation des navigateurs Microsoft Internet Explorer 8.0 (PC) ou google chrome (Mac et PC) est vivement conseill�e (logiciels gratuits).
');
?>
