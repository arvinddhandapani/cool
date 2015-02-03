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
	window.onload = function() {
	document.getElementById('field6-1').onchange = disablefield;
	document.getElementById('field6-2').onchange = disablefield;
	}
	function disablefield()
	{
	if ( document.getElementById('field6-1').checked == true ){
	document.getElementById('field8').value = '';
	document.getElementById('field10').value = '';
	document.getElementById('field8').style.visibility='hidden';
	document.getElementById('field10').style.visibility='hidden';
	document.getElementById('field8-container').style.visibility='hidden';
	document.getElementById('field10-container').style.visibility='hidden'}
	else if (document.getElementById('field6-2').checked == true ){
		document.getElementById('field8').visible = false;
		document.getElementById('field10').visible = false;
		document.getElementById('field8').style.visibility='visible';
		document.getElementById('field10').style.visibility='visible';
		document.getElementById('field8-container').style.visibility='visible';
		document.getElementById('field10-container').style.visibility='visible'}
	}
	
	 $(document).ready(function(){
	  $("#field2").autocomplete("includes/autocomplete_customer.php", {
	        selectFirst: true
	  });
	 });
	</script>
	<script>
	 $(document).ready(function(){
	  $("#field1").autocomplete("includes/autocomplete_line.php", {
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
               Collection Entry (Credit)
          </h2>
     </div>
	 
     <form action="includes/credit_collection_process.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    Date
               </label>
               <input class="ttw-date date" id="field3" maxlength="524288" name="today_date"
               required="" size="20" tabindex="0" title="">
          </div>
          
          
          <div id="field2-container" class="field f_100">
               <label for="field2">
                    Customer Name
               </label>
               <input type="text" name="cust_name" id="field2" required="required">
          </div>
          
          
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Line Agent Name
               </label>
               <input type="text" name="line_agent_name" id="field1" required="required">
          </div>
          
          
          <div id="field5-container" class="field f_100">
               <label for="field5">
                    Amount Collected
               </label>
               <input type="text" name="credit_collected" id="field5" required="required">
          </div>
          
          
          <div id="field6-container" class="field f_100 radio-group required">
               <label for="field6-1">
                    Mode of Payment
               </label>
               
               
               <div class="option clearfix">
                    <input type="radio" name="mode" id="field6-2" value="Cheque" checked="checked">
                    <span class="option-title">
                         Cheque
                    </span>
               </div>
               
               <div class="option clearfix">
                    <input type="radio" name="mode" id="field6-1" value="Cash" >
                    <span class="option-title">
                         Cash
                    </span>
               </div>
               
             
          </div>
          
          
          <div id="field8-container" class="field f_100">
               <label for="field8">
                    Cheque Number
               </label>
               <input type="text" name="cheque_number" id="field8" required="">
          </div>
          
          
          <div id="field10-container" class="field f_100">
               <label for="field10">
                    Cheque Date
               </label>
               <input class="ttw-date date" id="field10" maxlength="524288" name="chq_date"
               required="" size="20" tabindex="0" title="">
          </div>
          
          
          <div id="field11-container" class="field f_100 checkbox-group required">
               <label for="field11-1">
                    Bill Number
               </label>
               
               
               <div class="option clearfix">
                    <input type="checkbox" name="bill_number[]" id="field11-1" value="Option 1">
                    <span class="option-title">
                         Option 1
                    </span>
                    <br>
               </div>
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Submit">
          </div>
     </form>
</div>

</body>
</html>