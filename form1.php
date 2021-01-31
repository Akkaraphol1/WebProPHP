<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?
$rdoSex = $_POST['rdoSex'];
?>
<form action="" method="post" name="form1">
Please select sex.<br>
  <input name="rdoSex" type="radio" value="Man" <? if($rdoSex == "Man") echo "checked";?>>Man<br>
  <input name="rdoSex" type="radio" value="Woman" <? if($rdoSex == "Woman") echo "checked";?>>Woman<br>
<input name="btnSubmit" type="submit" value="Submit">
</form>
</body>
</html>