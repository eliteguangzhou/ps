<html>
  <body>
    <div class="popupmail" style="width:490px;">
      <br/><br/>
      <span style="text-align: center;"><h1>Merci de confirmer votre email.</h1></span>
      <br/>
      <form action="video<?php echo $_GET['n']; ?>.php" method="get">
	<span style="margin-left: 60px;">Email : </span>
	<input type="text" name="email"><br>
	<span style="margin-left: 57px;"><input type="submit" value="Valider"></span>
      </form>
    </div>
  </body>
</html>