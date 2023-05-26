<?php
session_start();
if( isset($_POST['postoutputtotalitems'])  ) {  $outputtotalitems = '';  $totalitem = 0;  if(!empty($_SESSION["infocookiess1"]))  {   foreach($_SESSION["infocookiess1"] as $keys => $values)   {    $totalitem = $totalitem + 1;         $outputtotalitems .=     '       '.$totalitem.'     ';   }        }  else  {   $outputtotalitems .= '';  }      echo json_encode(      array(  'outputtotalitems'=> $outputtotalitems      )         );   exit;     } 
?>

<title>Welcome</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>
html, body{ background-color:#ecf0f1;  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none;  }    
.container1 {width:100%; height:auto; padding:0% 0%; margin:0% 0%; }

</style>





<form method="post" action="" style="padding:0px; margin:0px;">  
<div class="container1">






<style>
	.row1{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
        .row1 .col1a{width:33.33333333333333%; display:none; }   .row1 .col1b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
             .menumobileopen{color:#4e5e69; font-size:20px;  cursor:pointer; }	   .menumobilebackground1{background-color:rgba(0,0,0,.5); width:100%; height:100%;  z-index:10;   visibility:hidden; opacity:0;            position:fixed; left:0%; top:0%;      transition:visibility 0.5s linear,opacity 0.5s linear;      }      .menumobilebackground2{background-color:#3e505c;   width:250px; height:100%;      z-index: 1;  visibility:hidden; opacity:0;              display:inline-block;  align-items:flex-start; justify-content:flex-start; text-align:left;       position:absolute; left:-250px;  top:50%;  transform:translateY(-50%);    transition:all 0.5s ease-in-out 0s ; }        	                                          				    .menumobileclose i{color:white; font-size:25px;   position:absolute; top:0%; right:0;   cursor:pointer; }                                           .posmenumebile{ padding:10% 0% 0% 5%; margin:0% 0% 0% 0%;  }    .posmenumebile li { padding:2% 0%; color:white; font:800 20px sans-serif;  cursor:pointer;  position:relative; }  .posmenumebile li a{color:white;}
		.row1 .col2a{width:33.33333333333333%;  }   .row1 .col2b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
             .numberphone{color: #4e5e69; font-size: 20px; cursor: pointer;}  .numberphone span{color:black; font:300 15px 'cairo'; opacity: 0.6;}
		.row1 .col3a{width:33.33333333333333%;  }   .row1 .col3b{padding:0px 0px; margin:0% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;   }
		     .logo{max-width:100%; width:300px;}
		.row1 .col4a{width:33.33333333333333%;  }   .row1 .col4b{padding:0px 0px; margin:0% 0%;  display:flex; align-items:center; justify-content:center; text-align:center; grid-column-gap:1rem;    }
             .search{color: #4e5e69; font-size: 20px; cursor: pointer;}
			 .shoppcart{color: #4e5e69; font-size: 20px; cursor: pointer;}

@media only screen and (max-width:1000px) 
{  
.row1 .col1a{display:block; }   
.row1 .col2a{display:none; }   

}
</style>
   
			<div class="row1">
				<div class="col1a">  <div class="col1b"> 
					<a class="menumobileopen "> <i class="fas fa-bars"></i>                
						<div class="menumobilebackground1">  <div class="menumobilebackground2">                   
							 <a class="menumobileclose"><i class="fas fa-times iconeclose"></i>	</a>                                    
							 <ul class="posmenumebile">  
							   <li> <a href="../index.php"> Accueil </a> </li>  
							   <li> <a href="../legal/about-us.php" > About us</a>  </li>  
							   <li> <a href="../legal/contact-us.php"> Contact us</a>  </li>  
							 <ul>						  
						</div> </div>                       
					</a>			   
				</div> </div>
				<div class="col2a">  <div class="col2b"> 			 
				 </div></div>			   
				<div class="col3a">    <div class="col3b">
						<a href="../index.php">  <img src="../img/barakachifae1.jpg" class="logo"  />	</a>    
				</div></div> 		  
				<div class="col4a">    <div class="col4b">
						  <a style="display:none" class="search">   <i class="fas fa-search ">  </i> </a> 
						  <a href="../addtocart.php"  class="shoppcart"> <i class="fas fa-shopping-cart"></i> <span class="outputtotalitems"></span>	 </a>	     	
						  
				</div></div>
			</div>















<style>
	.row2{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
        .row2 .col1a{width:100%;}   .row2 .col1b{padding:0px 20px; margin:0% 0%;      display:inline-block; align-items:start; justify-content:center; text-align:center;   }
</style>

		<div class="row2">
			   <div class="col1a"> <div class="col1b">
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">   FAQS </div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  HOW DO I PLACE MY ORDER? </div>
					<div>Choose the item(s) you want to buy on the product page, then click the “Add To Cart/Buy Now” button and proceed to the checkout page to complete your order(s).  We’ll handle your order and let you know the shipping time!</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  HOW MUCH DOES SHIPPING COST?</div>
					<div>The shipping fee varies depending on the shipping destination and the number of items you purchase. You can check the estimated shipping fee by adding items to your cart, proceeding to checkout, entering your email address and shipping address. The exact shipping fee will be automatically updated and displayed on the checkout page.</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  HOW LONG WILL IT TAKE TO SHIP MY ORDER?</div>
					<div>The actual shipping time and delivery date may vary depending on the local postal service in your area. You can refer to the standard shipping time below:</div>
						<div>On average, orders usually ship after 7-10 business days from the day order is placed.</div>
						<div>US orders may arrive approximately 8-14 business days after being shipped.</div>
						<div>International orders may arrive approximately 14-20 business days after being shipped. </div>
					<div>Please note:</div>
						<div>We use different shipping partners, but the final carrier is usually your local postal service (In the US, it may be UPS/USPS)     Due to the COVID-19 pandemic impact and the peak season, carrier services might need additional 5-10 business days to ship packages anywhere.</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  MY TRACKING NUMBER ISN’T WORKING.</div>
				   <div>Tracking numbers can take 3-5 business days to show up in the shipping carrier's system. If the tracking number is still not working within a few days, please contact us.</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  I NEED HELP WITH A LATE ORDER.</div>
				  <div>If your order has not arrived after 30 business days (US domestic) and 45 business days (international), please contact our customer service.</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  WHAT SHOULD I DO IF I MADE A MISTAKE WITH MY ORDERS?</div>
					<div>First off, please try not to!  However, you can still update your order information (including changing size, color, quantity, or shipping address) if your request is submitted within 6 hours after the order is placed. Please immediately contact us and our team will gladly resolve all of your concerns!</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  CAN I CANCEL AN ORDER?</div>
					<div>You can cancel an order within 06 hours from the moment you finish your checkout process. After this time, your order will be immediately sent into production.</div>
					<div>Please contact us with your order details. We will cancel your order and provide a full refund.</div>
					<div>We cannot cancel orders once the printing process has begun.</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  PAYMENT</div>
					<div>What type of payments do you accept?  We accept Visa, Mastercard, and Paypal.</div>
					<div>When will my card be charged?  Right after you have successfully placed your order.</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  HOW IS THE QUALITY ASSURANCE PROCESS?</div>
					<div>We work with top manufacturers who can guarantee the high quality of each package by considering everything and do a last-minute check before sending the complete order to you.</div>
					<div>Based on the known issues and properties of each product, our QA specialists have listed detailed criteria we want to test for the product:</div>
						<div>Product type (shoes, bags, ...)</div>
						<div>Origin - workshop, testing date, ...</div>
						<div>Variant</div>
						<div>Colors</div>
						<div>Material - use the trial product and describe it</div>
						<div>Size</div>
						<div>Use - use the trial product and describe it</div>
						<div>Smell - use the trial product and score it</div>
					<div>After that, we put these criteria into the testing form, each element will be scaled on a level from 1 to 5 (low-quality to excellent quality) and take note.</div>
					<div>Every single product will have to go through this whole testing process and each one needs to reach the minimum score of 80 before being packed and shipped to you.</div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  HOW SECURE IS MY PERSONAL INFORMATION?</div>
					<div>We adhere to the highest security standards to protect your personal information when you enter the checkout page and purchase from our online store.</div>
					<div>When purchasing online using your credit card, all of your information is entered into an SSL secure web page. Your information is then SSL-encrypted and sent directly to our credit card provider's network, where your card and transaction are authorized and approved. Your credit card information is not stored on our servers.</div>
	        </div></div>
		</div>









<style>	
	   .row7{background-color:black; padding:1% 0%;  margin:0% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
		.row7 .col1a{width:100%;  }   .row7 .col1b{padding:0px 0px; margin:0% 0%;    display:inline-block; align-items:center; justify-content:center; text-align:center;    }
            .Legal{ margin:1% 0%; display:flex; align-items:center; justify-content:center; text-align:center;   grid-column-gap:1rem; grid-row-gap:1rem;  flex-wrap:wrap;   }
			   .Legal a { color:white; font:800 17px "cairo",sans-serif; }
			.footer{margin:1% 0%; display:flex; align-items:center; justify-content:center; text-align:center;       }
				.footer .text{color:white; font:800 20px "cairo",sans-serif;}

	@media only screen and (max-width:800px)  
	{ 
	   .Legal{ display:grid; align-items:center; justify-content:center; text-align:center;    }
	}

</style>
	<div class="row7">	
			<div class="col1a">  <div class="col1b"> 
				<div class="legal">
					<div> <a href="privacy-policy.php">Privacy policy</a> </div>
					<div> <a href="terms-of-service.php">terms of service</a> </div>					 
					<div> <a href="refund-policy.php">Refund policy</a> </div>
					<div> <a href="shipping-policy.php">Shipping policy</a> </div>					
					<div> <a href="faqs.php">FAQs</a> </div>
					<div> <a href="about-us.php">About us</a> </div>										   
					<div> <a href="contact-us.php">Contact us</a> </div>
				</div>				
			    <div class="footer">
				   <div class="text"> CopyRight © 2022 - Bestfashop </div>
				</div>
			</div></div>			
	</div>



</div>
</form>		


<script>
$(".menumobileopen").click(function(){    $(".menumobilebackground1").css({"visibility": "visible" , "opacity": "1" });   $(".menumobilebackground2").css({  "visibility": "visible" , "opacity": "1" , "left": "0"  });               });
$(".menumobileclose").click(function(){     $(".menumobilebackground1").css({"visibility": "hidden" , "opacity": "0" });   $(".menumobilebackground2").css({ "visibility": "hidden" , "opacity": "0" ,  "left": "-250px"  });               });

ajaxx(); function ajaxx() {     $.ajax  ({      type: 'post',       data: {postoutputtotalitems:"" },      dataType:"json",   success:  function(data){ $('.outputtotalitems').html(data.outputtotalitems);          }    });    } 
</script>