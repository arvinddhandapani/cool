<!--
 Created with Webformgenerator by easyclick.ch
 www.easyclick.ch
 -->

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
</head>
<body>

<div class="TTWForm-container">
     
     
     <div id="form-title" class="form-title field">
          <h2>
               Add Customer
          </h2>
     </div>
     
     
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field6-container" class="field f_100">
               <label for="field6">
                    Line Agent
               </label>
               <input type="text" name="agent_name" id="field6" required="required">
          </div>
          
          
          <div id="field7-container" class="field f_100">
               <label for="field7">
                    Phone Number
               </label>
               <input type="text" name="agent_phone" id="field7">
          </div>
          
          
          <div id="field8-container" class="field f_100">
               <label for="field8">
                    Credit Limit
               </label>
               <input type="text" name="agent_credit_limit" id="field8">
          </div>
          
          
          <div id="field10-container" class="field f_100">
               <label for="field10">
                    LCR Limit
               </label>
               <input type="text" name="agent_lcr_limit" id="field10" pattern="">
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Submit">
          </div>
     </form>
</div>

</body>
</html>