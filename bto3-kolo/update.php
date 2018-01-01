<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-3.2.1.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>

</head>

<?php
session_start();
$_SESSION["id"]=$_GET["id"];
echo "
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <form  action=\"update_ok.php\" method=\"get\">
	  <div class=\"input-group\">
			  <input type=\"text\" style=\"height:auto; width=\"100%\"\"class=\"form-control\" name=\" post\" placeholder=\"Your new post\" aria-describedby=\"basic-addon1\">
			  
			</div>
	  <input type=\"submit\" value=\"update\" class=\"btn btn-primary\" >
	  </form>
    </div>
  </div>
";

?>
</html>