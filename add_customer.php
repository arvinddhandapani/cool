<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Customer</title>
        <link rel="stylesheet" href="styles/main.css" />
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
       
       
       

<div class="TTWForm-container">
     
     
     <div id="form-title" class="form-title field">
          <h2>
               Add Customer
          </h2>
     </div>
     
     
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field6-container" class="field f_100" required="required">
               <label for="field6">
                    Customer Name
               </label>
               <input type="text" name="cust_name" id="field6">
          </div>
          
          
          <div id="field7-container" class="field f_100">
               <label for="field7">
                    Phone 1
               </label>
               <input type="text" name="cust_phone1" id="field7">
          </div>
          
          
          <div id="field8-container" class="field f_100">
               <label for="field8">
                    Phone 2
               </label>
               <input type="text" name="cust_phone2" id="field8">
          </div>
          
          
          <div id="field12-container" class="field f_100">
               <label for="field12">
                    Address
               </label>
               <textarea rows="5" cols="20" name="cuts_address" id="field12"></textarea>
          </div>
          
          
          <div id="field10-container" class="field f_100">
               <label for="field10">
                    Credit Limit
               </label>
               <input type="text" name="cust_credit_limit" id="field10">
          </div>
          
          
          <div id="field11-container" class="field f_100">
               <label for="field11">
                    LCR Limit
               </label>
               <input type="text" name="cust_lcr_limit" id="field11">
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input type="submit" value="Submit">
          </div>
     </form>
</div>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>
