<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Form Edit Data</title>
</head>

<body>
<table border=1>
  <tr>
    <td align=center>Form Edit Employees Data</td>
  </tr>
  <tr>
    <td>
      <table>
      <?php
	  $id = $_GET["id"];
	  $id1 = $_GET["id1"];
	  $id2 = $_GET["id2"];
	  
	   include 'includes/psl-config.php';
       $Connect = mysql_connect(HOST, USER, PASSWORD);
 	  $db = mysql_select_db(DATABASE,$Connect);
      $order = "SELECT * FROM driver_info where driver_id='$id'";
      $result = mysql_query($order);
      $row = mysql_fetch_array($result);
      ?>
      <form name="Customer" method="post" action="includes/edit_data_line.php">
      <input type="hidden" name="id" value="<? echo "$row[employees_number]"?>">
      <tr>        
        <td>Line Agent ID</td>
        <td>
          <input type="text" name="id" 
      size="20" value="<? echo "$id"?>" readonly>
        </td>
      </tr>
        <tr>        
          <td>Line Agent Name</td>
          <td>
            <input type="text" name="name" 
        size="20" value="<? echo "$row[full_name]"?>">
          </td>
        </tr>
        <tr>
          <td>Phone 1</td>
          <td>
            <input type="text" name="phone_1" size="40" 
          value="<? echo "$row[phone_1]"?>">
          </td>
        </tr>
        <tr>
          <td>Credit Limit</td>
          <td>
            <input type="text" name="credit_limit" size="40" 
          value="<? echo "$row[credit_limit]"?>">
          </td>
		  <?if ($id1 == 1) {?>
	          <td>
	           <P> Enter only numeric value </P>
	          </td>
			  <?}?>
        </tr>
        <tr>
          <td>LCR Limit</td>
          <td>
            <input type="text" name="lcr_limit" size="40" 
          value="<? echo "$row[lcr_limit]"?>">
          </td>
		  <?if ($id2 == '1') {?>
	          <td>
	           <P> Enter only numeric value </P>
	          </td>
			  <?}?>
        </tr>
        <tr>
          <td align="right">
            <input type="submit" 
          name="submit value" value="Edit">
          </td>
        </tr>
      </form>
      </table>
    </td>
  </tr>
</table>
</body>
</html>