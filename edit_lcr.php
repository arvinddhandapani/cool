<html>
<head>
<title>Siva Ventures</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table>
  <tr>
    <td align="center">Edit Line Agent Info</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?
	   include 'includes/psl-config.php';
       $Connect = mysql_connect(HOST, USER, PASSWORD);
 	  $db = mysql_select_db(DATABASE,$Connect);
      $order = "SELECT * FROM driver_info";
      $result = mysql_query($order);
      while ($row=mysql_fetch_array($result)){
        echo ("<tr><td>$row[full_name]</td>");
        echo ("<td>$row[phone_1]</td>");
		echo ("<td>$row[phone_2]</td>");
		echo ("<td>$row[credit_limit]</td>");
		echo ("<td>$row[lcr_limit]</td>");
        echo ("<td><a href=\"edit_form_line.php?id=$row[driver_id]\">Edit</a></td></tr>");
      }
      ?>
      </table>
    </td>
   </tr>
</table>
</body>
</html>