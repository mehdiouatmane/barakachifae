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
        .row2 .col1a{width:100%;}   .row2 .col1b{padding:0px 20px; margin:0% 0%;     display:inline-block; align-items:start; justify-content:center; text-align:center;   }
</style>

        <div class="row2">
	        <div class="col1a"> <div class="col1b">
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> RETURNS</div>
					<div>Please read carefully the refund policy , if you any question please use the contact us </div>
					<div>You have 14 days after you receive your product to make a return at </div>
					<div>your own cost, there will be no restocking fees .Read conditions bellow : </div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; ">  THE PRODUCT NEVER ARRIVED:  </div>
				   <div> Our estimate of the shipping time is between 8-12 days, not counting the preparation and shipping of the products which is between 1 to 3 days, so please if your products have not arrived max 15 days Please give it more time up to 20 days max as there are some situations we cannot control like weather, mail delays and customs. If your products have not arrived after 25 days, we will give you a 100% refund instantly.  </div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> DAMAGED ON ARRIVAL: </div>
				   <div> if your product arrived damaged, please take photos and videos and send them to our customer support at contact@barakachifae.com.  </div> 
				   <div> After verification of the support and confirmation of the case, you will have two options: we will send you a new product or give you a 100% refund.  </div> 
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> DEFECTIVE OR BROKEN MANUFACTURER AFTER USE :</div>
					<div> You have 14 days after the arrival of your product to report any problem with your product, if the product does not work during this period or is defective, you can return it to us at your expense and we will refund  the amount. total per store credit so that you can reorder your new product.  </div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> CHANGE OF OPINION:</div>
					<div> You have 14 days after receipt of your product to return it to us. if you want to process you need to contact us at contact@barakachifae.com we will send you a return address, please keep in mind that we only  accept returns for products that are not used, washed and need to be in their original packaging. </div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> EXCHANGE: </div>
					<div> If you wish to exchange your product, you have 14 days after receiving it to do so. Please keep in mind that to exchange your product must be unused  and in its original packaging you will need to send it to us at your expense. Please contact our support at contact@barakachifae.com to help you with the process. </div>
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> WRONG PRODUCT:   </div>
					<div> If you received the wrong product, you have 14 days to return it to us at your expense and we will give you a 100% refund.  If you need help you can contact us at contact@barakachifae.com - Fri 9 am to 5 pm.</div>			  
				<div style=" margin:5% 0% 1% 0%; color:black; font:600 20px 'cairo'; "> CANCELLATION OF AN ORDER: </div>
					<div> When we try to deliver the goods to our customers as quickly as possible, we will prepare the shipment for shipment from the moment the customer places the order. For this reason, we cannot accept any cancellation request after placing the order. Thanks for your understanding. </div>
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
				   <div class="text"> CopyRight © 2023 - Barakachifae  </div>
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