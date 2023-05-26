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
        .row2 .col1a{width:100%;}   .row2 .col1b{padding:0px 20px; margin:0% 0%;    display:inline-block; align-items:start; justify-content:center; text-align:center;   }
</style>

	<div class="row2">
	   <div class="col1a"> <div class="col1b">
			<div style=" margin:5% 0% 1% 0%;color:black; font:600 20px 'cairo'; "> PRIVACY POLICY </div>
			<div>This Privacy Policy describes how barakachifae.com collects, uses, and discloses your Personal Information when you visit or make a purchase from the Site. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';"> COLLECTING PERSONAL INFORMATION </div>
				<div> When you visit the Site, we collect certain information about your device, your interaction with the Site, and information necessary to process your purchases.  We may also collect additional information if you contact us for customer support.  In this Privacy Policy, we refer to any information that can uniquely identify an individual (including the  information below) as “Personal Information”.  See the list below for more information about what Personal Information we collect and why. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">Device information  </div>
				<div>Examples of Personal Information collected: version of  web browser, IP address, time zone, cookie information, what sites or products you view, search terms, and how you interact with the Site. </div>
				<div>Purpose of collection: to load the Site accurately for you, and to perform analytics on Site usage to optimize our Site. </div>
				<div>Source of collection: Collected automatically when you access our Site using cookies, log files, web beacons, tags, or pixels </div>
				<div>Disclosure for a business purpose:shared with our processor Shopify  </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">Order information </div>
				<div> Examples of Personal Information collected: name, billing address, shipping address, payment information (including credit card numbers, email address, and phone number.</div>
				<div> Purpose of collection:to provide products or services  to you to fulfill our contract, to process your payment information,  arrange for shipping, and provide you with invoices and/or order  confirmations, communicate with you, screen our orders for potential  risk or fraud, and when in line with the preferences you have shared  with us, provide you with information or advertising relating to our  products or services.</div>
				<div> Source of collection: collected from you.</div>
				<div> Disclosure for a business purpose:shared with our processor Shopify</div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';"> Customer support information </div>
				<div> Examples of Personal Information collected: name, billing address, shipping address, payment information (including credit card numbers), email address and phone number.</div>
				<div> Purpose of collection:to provide customer support.</div>
				<div> Source of collection:collected from you.</div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">  SHARING PERSONAL INFORMATION </div>
				<div> We share your Personal Information with service providers to help us  provide our services and fulfill our contracts with you, as described  above. For example: </div>
				<div> We use Shopify to power our online store. You can read more about how Shopify uses your Personal Information here: https://www.shopify.com/legal/privacy </div>
				<div> We may share your Personal Information to comply with applicable  laws and regulations, to respond to a subpoena, search warrant or other  lawful request for information we receive, or to otherwise protect our  rights. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';"> Google Analytics </div>
				<div> We may use Google Analytics to help us understand how our customers use our website. You can read more about how Google uses your Personal Information here: policies.google.com/privacy. You can also opt-out of Google Analytics here: tools.google.com/dlpage/gaoptout. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';"> 	MINORS </div>
				<div> The Site is not intended for individuals under the age of 16.  We do not intentionally collect Personal Information from children. If  you are the parent or guardian and believe your child has provided us  with Personal Information, please contact us at the address below to  request deletion. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">	Retention </div>
				<div> When you place an order through our website, we will retain your Personal Information for our records unless and until you ask us to delete this information. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">	GDPR  </div>
				<div>If you are a resident of the EEA, you have the right to access the Personal  Information we hold about you, to port it to a new service, and to ask  that your Personal Information be corrected, updated, or erased. If you  would like to exercise these rights, please contact us through the  contact information below contact@barakachifae.com. Your  Personal Information will be initially processed in Ireland and then  will be transferred outside of Europe for storage and further  processing, including to Canada and the United States. For more  information on how data transfers comply with the GDPR, see Shopify’s  GDPR Whitepaper: https://help.shopify.com/en/manual/your-account/privacy/GDPR.  </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">		CCPA  </div>
				<div> If you are a resident of California, you have the right to access the  Personal Information we hold about you (also known as the ‘Right to  Know’), to port it to a new service, and to ask that your Personal  Information be corrected, updated, or erased. If you would like to  exercise these rights, please contact us through the contact information  below contact@barakachifae.com. If  you would like to designate an authorized agent to submit these  requests on your behalf, please contact us at the address below.  </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">		COOKIES </div>
				<div> A cookie is a small amount of information that’s downloaded to your  computer or device when you visit our Site. We use a number of different  cookies, including functional, performance, advertising, and social  media or content cookies. Cookies make your browsing experience better  by allowing the website to remember your actions and preferences (such  as login and region selection). This means you don’t have to re-enter  this information each time you return to the site or browse from one  page to another. Cookies also provide information on how people use the  website, for instance whether it’s their first time visiting or if they  are a frequent visitor. We use the following cookies to optimize your experience on our Site and to provide our services. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">	CHANGES </div>
				<div> We may update this Privacy Policy from time to time in order to reflect, for example, changes to  our practices or for other operational, legal, or regulatory reasons. </div>
			<div style="margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo';">	CONTACT </div>
				<div> For more information about our privacy practices, if you have questions, or  if you would like to make a complaint, please contact us by e-mail at  contact@barakachifae.com   </div>
				<div> Last updated: 18/02/2022  </div>
				<div> If you are not satisfied with our response to your complaint, you have the right to lodge your complaint with the relevant data protection authority. You can contact your local data protection authority here: ico.org.uk/make-a-complaint. </div>
	  </div> </div>
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
				   <div class="text"> CopyRight © 2022 - barakachifae </div>
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