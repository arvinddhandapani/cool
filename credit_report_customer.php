<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
	<script>
	 $(document).ready(function(){
	  $("#field3").autocomplete("includes/autocomplete_customer.php", {
	        selectFirst: true
	  });
	 });
	</script>
	
</head>
<body>

<div class="TTWForm-container">
     <div id="form-title" class="form-title field">
          <h1>
 		   
          </h1>
     </div>
   
      
      <div id="form-title" class="form-title field">
           <h2>
                Customer Credit Report
           </h2>
      </div>
	  

     
     <form action="includes/customer_credit_report_process.php" id="my" target="_blank" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    Customer Name
               </label>
			   <?php
			   if(isset($_GET['msg'])){ 
			 	  $cust_name = $_GET['msg'];
				  ?>
				  <input type="text" name="cust_name" id="field3" value="<?php echo $cust_name?>">
				  <script type="text/javascript">
				  document.getElementById("my").submit();
				  window.setTimeout(function(){
				          window.location.href = "total_report.php";
				      }, 2000);
				   
				  </script>
			 <?php  
		 } else {
				 echo "bye";
			   ?>
               <input type="text" name="cust_name" id="field3">
			    <?php  } ?>
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Fetch Details">
          </div>
     </form>
	
</div>

</body>
</html>