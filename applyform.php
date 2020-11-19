<?php
require("dbconnect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<h1>Application Form</h1>
<form method="post" action="applyControl.php">

      Name: <input name="name" type="text" id="name" value="你的名字" /> <br>

      Student ID: <input name="sid" type="text" id="sid" value="你的學浩" /> <br>

	  Father Name: <input name="fname" type="text" id="fname" value="你父親的名字" /> <br>

	  Mother Name: <input name="mname" type="text" id="mname" value="你母親的名字" /> <br>

	  Family Background: <select  name="kind" type="select" id="kind" > 
				
					<option value='1'>低收入戶</option>
					<option value='2'>中低收入戶</option>
					<option value='3'>家庭突發因素</option>
					</select>
	  <br>

      <input type="submit" name="Submit" value="送出" />
	</form>
  </tr>
</table>
</body>
</html>
