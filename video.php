<?php 
if (isset($_GET['email'])) {
if (file_exists('includes/local/configure.php')) include('includes/local/configure.php');

// include server parameters
require('includes/configure.php');
// include the database functions
require(DIR_WS_FUNCTIONS . 'database.php');

// make a connection to the database... now
tep_db_connect() or die('Connexion impossible &agrave; la Base de Donn&eacute;es!');

  $sql = "INSERT INTO `neta` (`neta_id`, `neta_email`, `neta_date_added`, `neta_type`, `neta_newsletter`) VALUES (NULL, '".$_GET['email']."', NOW(), 'video', 'video');";
  echo $sql;
  tep_db_query($sql);

}
?>

<html>
  <head>
    <link rel="stylesheet" href="colorbox.css" />
    <script src="jquery.min.js"></script>
    <script src="jquery.colorbox-min.js"></script>
  </head>
  <body>
    <div style="margin-left: auto;
margin-right: auto;width:1000px">
      <div>
	<img src="images/top1.jpg">
      </div>
      <div style="float:left">
	<img src="images/left.jpg">
      </div>
      <div style="float:left;width:560px;margin-top: 22px;margin-left: 20px;">
	<iframe width="560" height="315" src="http://www.youtube.com/embed/J8NLlMyjS5U?<?php if (isset($_GET['email'])) echo "autoplay=1"; ?>" frameborder="0" allowfullscreen></iframe>
	<img src="images/video2.jpg" width="560">
	<img src="images/video3.jpg" width="560">
      </div>
      <div style="float:right;margin-top: 16px;">
	<img src="images/right.jpg">
      </div>
    </div>
  </body>
</html>
<?php if (!isset($_GET['email'])) { ?>
<script type="text/javascript">
$(document).ready(function () {
  $.colorbox({href:"popupmail.html",width:500,height:300});
});
</script>
<?php } ?>