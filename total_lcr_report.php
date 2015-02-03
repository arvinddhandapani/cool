<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8" />
<title>Siva Ventures</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/style1.css" type="text/css" id="" media="print, projection, screen" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/base.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/skeleton.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/layout.css" />
<link media="screen" charset="utf-8" rel="stylesheet" href="css/child.css" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/jquery.onebyone.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery-latest.js"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
		<script type="text/javascript">
		$(function() {
			$("table").tablesorter({debug: true});
		});
		</script>
<!--<script type="text/javascript" language="javascript" src="js/jquery-1-8-2.js"></script>  -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.carousel.js"></script>
<script type="text/javascript" src="js/jquery.color.animation.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/jquery.onebyone.min.js"></script>
<script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>

<!-- color pickers -->
<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
<script type="text/javascript" src="js/colorpicker.js"></script>
<!-- end of color pickers -->

</head>

<body>
	
    <div class="page-wrapper">
        <div class="slug-pattern slider-expand">
            <div class="background-image" id="1"></div>
            <div class="overlay"><div class="slug-cut"></div>
        </div></div>
        <div class="header slider-expand">
            <div class="nav">
	        <?php if (login_check($mysqli) == true) : ?>
	            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
                
                <div class="container">
                
                    <!-- Standard Nav (x >= 768px) -->
                    <div class="standard">
                    
                        <div class="five column alpha">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" /></a><!-- Large Logo -->
                            </div>
                        </div>
                    
                        <div class="eleven column omega tabwrapper">
                            <div class="menu-wrapper">
                                <ul class="tabs menu">
                                    <li>
                                       <a href="index.html" class="active"><span>Home</span></a>
                                    
                                    </li>
                                    <li><a href="#">Add/Edit</a>
                                        <ul class="child">
                                            <li><a href="index.html">Customers</a>
                                                <ul>
                                            <li><a href="index-nivo.html">Add</a></li>
                                            <li><a href="index-async.html">Edit</a></li>
										</ul>
                                            </li>
                                       
                                            <li><a href="blog.html">Line Managers</a>
                                                <ul>
                                                    <li><a href="agent_add.php">Add</a></li>
                                                    <li><a href="blog-style-2.html">Edit</a></li>
                                                </ul>
                                            </li>
										</ul>
									</li>
                                  
                                            <li>
												<a href="blog.html">Daily Entry</a>
											<ul class="child">
												<li><a href="blog.html">Dispatch</a>
												<ul>
                                           		 	<li><a href="blog-style-2.html">Credit</a></li>
                                           	  		<li><a href="blog-style-3.html">LCR</a></li>
                                        		</ul>
											</li>
											<li><a href="blog.html">Returns</a>
												<ul>
                                           		 	<li><a href="blog-style-2.html">Credit</a></li>
                                            		<li><a href="blog-style-3.html">LCR</a></li>
                                       		 	</ul>
                                    </li>
								</ul>
							</li>
							
							<!--Reports--> 
							
                                  
                                            <li>
												<a href="blog.html">Reports</a>
											<ul class="child">
												<li><a href="blog.html">Outstanding Amount</a>
												<ul>
                                           		 	<li><a href="blog-style-2.html">Total Outstanding Credits</a></li>
                                           	  		<li><a href="blog-style-3.html">Customer Wise</a></li>
													<li><a href="blog-style-3.html">Line Agent Wise</a></li>
                                        		</ul>
											</li>
											<li><a href="blog.html">Outstanding LCR</a>
												<ul>
                                           		 	<li><a href="blog-style-2.html">Total Outstanding LCR</a></li>
                                            		<li><a href="blog-style-3.html">Customer Wise</a></li>
													<li><a href="blog-style-3.html">Line Agent Wise</a></li>
                                       		 	</ul>
                                    		</li>
											<li><a href="blog.html">Transaction Details</a>	
                                    		</li>
											<li><a href="blog.html">Bill Reports</a>	
                                    		</li>
								</ul>
							</li>
                          </div>
                        </div>
                    </div>
                    <!-- Standard Nav Ends, Start of Mini -->
                    
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            <div class="logo">
                                <a href="index.html"><img src="images/logoMINI.png" /></a><!-- Small Logo -->
                            </div>
                        </div>
                        
                        <div class="twelve column alpha omega navagation-wrapper">
                            <select class="navagation">
                                <option value="" selected="selected">Site Navagation</option>
                            </select>
                        </div>
                    </div>
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
            
           
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container callout">
                        
                    <div class="twelve columns">
											        
       

											<div class="TTWForm-container">
     <?php
	 //I will get the values here from DB
	 
	 $get_sum_lcr_outstanding = "Select sum(total_case_out) - sum(total_case_in) AS result from outwards_LCR";
	 $sum_query = mysqli_query($con, $get_sum_lcr_outstanding);
	 $error = mysqli_error($con);
	 $get_sum_lcr_outstanding1 = mysqli_fetch_row($sum_query);
	 $get_sum_lcr_outstanding = $get_sum_lcr_outstanding1[0];
	 
	 $get_user_details = "Select t1.custi_id_fk, t2.full_name, t2.phone_1, t2.phone_2, sum(t1.total_case_out) - sum(t1.total_case_in) from outwards_LCR As t1 INNER JOIN cust_info As t2 ON t1.custi_id_fk = t2.cust_id group by t1.custi_id_fk";
	 echo $get_user_details;
	 //$get_user_details = "Select custi_id_fk, sum(amount) from outwards_credit where bill_state = 0 group by custi_id_fk";
	 $credit_query = mysqli_query($con, $get_user_details);
	 $error1 = mysqli_error($con);
     ?>
	 
	 <H1> Your total outstanding amount as of date is Rs. <?php echo "$get_sum_lcr_outstanding";?>
	 
     <!--Body Starts here actually -->
 	<table id="rowspan" cellspacing="0" class="tablesorter">
 	<thead>
 		<tr>
			
 			<!--<th>Customer ID</th>-->
			<th>Name</th>
			<th>Phone 1</th>
			<th>Phone 2</th>
 			<th>Pending LCR</th>
 		</tr>
 	</thead>
 	<tbody>
		<?php
		while ($row = mysqli_fetch_row($credit_query)) {
			echo "<tr>";
			//echo "<td>". $row[0]. "</td>";
			echo "<td><a href= 'lcr_report_customer.php?msg=". $row[1]. "'>". $row[1]. "</a></td>'";
			echo "<td>". $row[2]. "</td>";
			echo "<td>". $row[3]. "</td>";
			echo "<td>". $row[4]. "</td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>
	 
	 <!--Ends Here-->
											
											</div>
											     <?php else : ?>
											         <p>
											             <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
											         </p>
											     <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
								
                        <div class="sixteen columns alpha omega">
                        	<div class="foot-nav-bg"></div>
                            <div class="foot-nav">
                                <div class="copy">
                                    Coptyright © 
                                </div>
                                <!--<div class="nav">
                                    <a href="#">Home</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Contact Us</a>
                                    <a href="#">Terms of Use</a>
                                    <a href="#">Privacy</a>
                               	</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        
    <script type="text/javascript">
    <!--
        $(window).load(function(){
            // Setup Slider
            $(".onebyone.hide").fadeIn(1000);
            $('.onebyone').oneByOne({
                className: 'oneByOne1',	             
                easeType: 'random',
                autoHideButton: false,
                width: 960,
                height: 840,
                minWidth: 680,
                slideShow: true
            });
             $("a[class^='prettyPhoto']").prettyPhoto({social_tools: '' });
        });
        $(document).ready(function() {
            $('.slidewrap, .slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev', 
                addPagination: false,
                addNav : false
            });
			$('.slide.testimonials').contentSlide();
			$('.bbss').contentSlide();
        });
    // -->
    </script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>
	</div>
</body>

</html>