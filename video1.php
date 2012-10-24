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
//   tep_db_query($sql);

}

if (isset($_GET['name']) && isset($_GET['comments']) && $_GET['name'] != '' && $_GET['comments'] != ''){
$comment = str_replace("'",'`',$_GET['comments']);
$sql = "SELECT * 
FROM  `video_comments` 
WHERE  `comment` LIKE  '".$comment."' AND name LIKE '".$_GET['name']."'";
$res = tep_db_fetch_array(tep_db_query($sql));
  if ($res == ''){
      $sql = "INSERT INTO  `video_comments` (
    `id` ,
    `name` ,
    `comment` ,
    `date`,
    `numero`
    )
    VALUES (
    NULL, '".$_GET['name']."',  '".$comment."',  NOW(),1
    );
    ";
    tep_db_query($sql);
  }
}
?>

<html>
  <head>
  <?php if (!isset($_GET['email'])) { ?>
    <link rel="stylesheet" href="colorbox.css" />
    <script src="jquery.min.js"></script>
    <script src="jquery.colorbox-min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.colorbox({href:"popupmail.php?n=1",width:500,height:300,overlayClose:false});
});
</script>
<?php } ?>
  </head>
  <body style="width: 2000;">
      <div style="float:left">
	<img src="images/left.jpg">
      </div>
    <div style="float:left">
      <div>
	<img src="images/top1.jpg">
      </div>
      <div style="float:left;width:560px;margin-top: 22px;margin-left: 20px;">
	<span style="font-size: 37px;
color: gray;
padding-left: 400px;"> Video 1/3</span>
	<iframe width="640" height="390" src="http://www.youtube.com/embed/J8NLlMyjS5U?<?php if (isset($_GET['email'])) echo "autoplay=1;controls=0"; ?>" frameborder="0" allowfullscreen></iframe>
<!-- 	<img src="images/video2.jpg" width="560"> -->
<!-- 	<img src="images/video3.jpg" width="560"> -->
	<div>
<h1>    Laissez vos commentaires: </h1>
    <br/>
    <form action="video.php" method="get">
	<span style="">Nom et prenom: : </span>
	<input type="text" name="name"><br/>
	<span style="">Commentaire : </span><br/>
	<textarea rows="5" name="comments" cols="50"></textarea><br/>
	<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
	<span style=""><input type="submit" value="Valider"></span>
      </form>
      
      <div>
	<?php
	$sql = "SELECT * 
  FROM  `video_comments` WHERE `numero` = 1 ORDER BY  `video_comments`.`id` DESC 
  LIMIT 0 , 30";
	$comments = tep_db_query($sql);
	while ($c = tep_db_fetch_array($comments)){
	  ?>
	  <div style="margin-bottom: 20px;">
	    <?php echo $c['name']; ?> &agrave; &eacute;crit:
	    <br/>
	    <?php echo $c['comment'] ?>
	  </div>
	  <?php
	}
	?>
      </div>
    </div>
      </div>
      <div style="float:left;margin-top: 16px;padding-left: 200px;">
	<span style="font-size: 45;
text-decoration: underline;padding-left: 50px;">s&eacute;rie vid&eacute;o</span>
	<div>
	   <span style="font-size: 100;
color: gray;">1</span><a href="video1.php?email=<?php echo $_GET['email'];?>"><img src="images/video.png">
	</a>
	</div>
	<div>
	   <span style="font-size: 100;
color: gray;">2</span><a href="video2.php?email=<?php echo $_GET['email'];?>"><img src="images/video.jpg">
 	</a> 
	</div>	
	<div>
	   <span style="font-size: 100;
color: gray;">3</span><!--<a href="video3.php?email=<?php echo $_GET['email'];?>">--><img src="images/videobt.jpg">
	<!--</a>-->
	</div>
      </div>
    </div>
  </body>
</html>
