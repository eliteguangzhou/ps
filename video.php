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