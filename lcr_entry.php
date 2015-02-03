<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
	<script>
	 $(document).ready(function(){
	  $("#field1").autocomplete("includes/autocomplete_customer.php", {
	        selectFirst: true
	  });
	 });
	</script>
	<script>
	 $(document).ready(function(){
	  $("#field2").autocomplete("includes/autocomplete_line.php", {
	        selectFirst: true
	  });
	 });
	</script>
</head>
<body>

<div class="TTWForm-container">
     <div id="form-title" class="form-title field">
          <h1>
 		      <?php
			  
 			  if(isset($_GET['msg'])){ 
 				  echo "<script type='text/javascript'>\n"; 
 				  echo "alert('". $_GET['msg']. "');\n"; 
 				  echo "</script>"; 
 			      //echo $_GET['msg'];
 			  }
 		      ?>
          </h1>
     </div>
     
     
     <div id="form-title" class="form-title field">
          <h2>
               Daily Entry (LCR)
          </h2>
     </div>
     
     
     <form action="includes/lcr_entry_process.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Customer Name
               </label>
               <input type="text" name="cust_name" id="field1" required="required">
          </div>
          
          
          <div id="field2-container" class="field f_100">
               <label for="field2">
                    Line Agent Name
               </label>
               <input type="text" name="line_agent_name" id="field2" required="required">
          </div>
          
          
          <div id="field4-container" class="field f_100">
               <label for="field4">
                    Date
               </label>
               <input class="ttw-date date" id="field4" maxlength="524288" name="today_date"
               required="" size="20" tabindex="0" title="">
          </div>
          
          
          <div id="field6-container" class="field f_100">
               <label for="field6">
                    Number of Case delivered
               </label>
               <input type="text" name="case_entry_amount" id="field6" required="required">
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Add">
          </div>
     </form>
</div>

</body>
</html>