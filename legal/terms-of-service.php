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
						<a href="../index.php">  <img src="../img/product/siro/barakachifae1.jpg" class="logo"  />	</a>      
				</div></div> 		  
				<div class="col4a">    <div class="col4b">
						  <a style="display:none" class="search">   <i class="fas fa-search ">  </i> </a> 
						  <a href="../addtocart.php"  class="shoppcart"> <i class="fas fa-shopping-cart"></i> <span class="outputtotalitems"></span>	 </a>	     	
						  
				</div></div>
			</div>












<style>
	.row2{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
        .row2 .col1a{width:100%;}   .row2 .col1b{padding:0px 20px; margin:0% 0%;     display:inline-block; align-items:start; justify-content:center; text-align:center;   }
</style>

        <div class="row2">
	        <div class="col1a"> <div class="col1b">
				    <div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> TERMS OF SERVICE </div>
					<div style=" color:black; font:600 20px 'cairo'; "> OVERVIEW </div>
						<div> This website is operated by driposhop.  offers this website, including all information,  tools and services available from this site to you, the user,  conditioned upon your acceptance of all terms, conditions, policies and notices stated here. By visiting our site and/ or purchasing  something from us, you engage in our “Service” and agree to be bound by  the following terms and conditions </div>
						<div>Please read these Terms of Service carefully before  accessing or using our website. By accessing or using any part of the  site, you agree to be bound by these Terms of Service. </div>
						<div>If you do not  agree to all the terms and conditions of this agreement, then you may  not access the website or use any services. If these Terms of Service  are considered an offer, acceptance is expressly limited to these Terms  of Service. </div>
						<div>Any new features or tools which are added to the  current store shall also be subject to the Terms of Service. </div>
						<div>You can  review the most current version of the Terms of Service at any time on  this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our  website. </div>
						<div>It is your responsibility to check this page periodically for  changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes. </div>
						<div>Our store is hosted on Shopify Inc. </div>
						<div>They provide us with the online e-commerce platform that allows us to sell our products and services to you.</div>
					<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> SECTION 1 - ONLINE STORE TERMS</div>
						<div>By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you  have given us your consent to allow any of your minor dependents to use  this site. </div>
						<div>You may not use our products for any illegal or  unauthorized purpose nor may you, in the use of the Service, violate any  laws in your jurisdiction (including but not limited to copyright  laws).</div>
						<div>You must not transmit any worms or viruses or any code of a destructive nature.</div>
						<div>A breach or violation of any of the Terms will result in an immediate termination of your Services. </div>
					<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> SECTION 2 - GENERAL CONDITIONS </div>
						<div>We reserve the right to refuse service to anyone for any reason at any time.  </div>
						<div>You understand that your content (not including credit card  information), may be transferred unencrypted and involve (a)  transmissions over various networks; and (b) changes to conform and  adapt to technical requirements of connecting networks or devices.  </div>
						<div>Credit card information is always encrypted during transfer over  networks. </div>
						<div>You agree not to reproduce, duplicate, copy, sell, resell  or exploit any portion of the Service, use of the Service, or access to  the Service or any contact on the website through which the service is  provided, without express written permission by us.</div>
						<div>The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms. </div>
					<div style=" margin:5% 0% 1% 0%;color:black; font:600 20px 'cairo'; "> SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION </div>
						<div>We are not responsible if information made available on this site is  not accurate, complete or current.  </div>
						<div>The material on this site is provided  for general information only and should not be relied upon or used as  the sole basis for making decisions without consulting primary, more  accurate, more complete or more timely sources of information. </div>
						<div>Any  reliance on the material on this site is at your own risk. </div>
						<div>This site  may contain certain historical information. </div>
						<div>Historical information,  necessarily, is not current and is provided for your reference only. </div>
						<div>We  reserve the right to modify the contents of this site at any time, but  we have no obligation to update any information on our site.</div>
						<div>You agree  that it is your responsibility to monitor changes to our site. </div>
					<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES</div>
					  <div>Prices for our products are subject to change without notice.  We reserve the right at any time to modify or discontinue the Service  (or any part or content thereof) without notice at any time. </div>
					  <div>We shall not be liable to you or to any third-party for any modification,  price change, suspension or discontinuance of the Service.</div>
					<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> SECTION 5 - PRODUCTS OR SERVICES (if applicable)</div>
					  <div>Certain products or services may be available exclusively </div>
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