<?php
$con=  mysqli_connect("us-mm-auto-dca-06-b.cleardb.net", "b5f045c90404ea",  "61ad1a3f",  "heroku_eac45f3ef65a15a");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();



if( isset($_POST['postoutputtotalitems'])  ) 
{  
	 $outputtotalitems = '';  
	 $totalitem = 0;  
	 if(!empty($_SESSION["infocookiess1"]))  
	 {   
		 foreach($_SESSION["infocookiess1"] as $keys => $values)   
		 {   
		    $totalitem = $totalitem + 1;         		   
		 }  
            $outputtotalitems .=     '       '.$totalitem.'     '; 		 
		 
	 }  
	 else  
	 {   
		$outputtotalitems .= '';  
	 }      
	 echo json_encode(      array(  'outputtotalitems'=> $outputtotalitems      )         );   exit;     
} 

?>


<title>Welcome</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>
html, body{ background-color:transparent;  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none;  }    
.container1 {width:100%; height:auto; padding:0% 0%; margin:0% 0%; }
</style>

<head>
<meta name="facebook-domain-verification" content="w1vup527caeo79ooqsx6j653c23oih" />
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '735674590788652');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=735674590788652&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->
</head>






<form method="post" action="" style="padding:0px; margin:0px;">  
<div class="container1">
 



  
	<style>
	.row0{ display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center; }
	   .row0 .col1{width:100%;}
		  .freeshipping{background-color:black; color:white; font:800 15px 'cairo';  display:flex; align-items:center; justify-content:center; text-align:center; }
	</style>  
	<div class="row0">
		<div class="col1">
			 <div class="freeshipping"> Free Shipping</div>
		</div>
	</div> 



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
			 
		@media only screen and (max-width:1000px) {   .row1 .col1a{display:block; }       .row1 .col2a{display:none; }      }
		@media only screen and (max-width:600px)  {}
        @media only screen and (max-width:360px)  {}
	</style>
 
	<div class="row1">
	    <div class="col1a">  <div class="col1b"> 
			<a class="menumobileopen "> <i class="fas fa-bars"></i>                
			    <div class="menumobilebackground1">  <div class="menumobilebackground2">                   
					 <a class="menumobileclose"><i class="fas fa-times iconeclose"></i>	</a>                                    
					 <ul class="posmenumebile">  
					   <li> <a href="index.php"> Accueil </a> </li>  
					   <li> <a href="legal/about-us.php" > About us</a>  </li>  
					   <li> <a href="legal/contact-us.php"> Contact us</a>  </li>  
					 <ul>						  
				</div> </div>                       
			</a>			   
	    </div> </div>
		<div class="col2a">  <div class="col2b"> 			 
		 </div></div>			   
		<div class="col3a">    <div class="col3b">
				<a href="index.php">  <img src="img/barakachifae1.jpg" class="logo"  />	</a>    
		</div></div> 		  
		<div class="col4a">    <div class="col4b">
				  <a style="display:none" class="search">   <i class="fas fa-search ">  </i> </a> 
				  <a href="addtocart.php"  class="shoppcart"> <i class="fas fa-shopping-cart"></i> <span class="outputtotalitems"></span>	 </a>	     	
				  
		</div></div>
	</div>












	<style> 
    .row2{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
		.row2 .col1a{width:100%;  }   .row2 .col1b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
            .posmenu{background-color: transparent; padding: 0%; margin: 0% 2%; display: flex; align-items: center; justify-content: center; text-align: center; grid-column-gap: 2rem;}
              .posmenu a {color:black; font:800 17px 'Cairo'; position:relative;}  .posmenu a:hover::after{content:""; background-color:black; width:100%; height:10%;      position:absolute; bottom:-8%; left: 50%; transform: translateX(-50%);}
              .megamenudesign {   background-color:#3e505c; width:200px; height:auto;    z-index: 1; visibility:hidden; opacity:0;         color:white;    display:grid;         position:absolute; top:40px; left:50%; transform:translateX(-50%);  transition:all 0.5s ease-in-out 0s ; }        	.megamenudesignshow {       visibility:visible; opacity:1;  transition:all 0.5s ease-in-out 0s ;  }

	@media only screen and (max-width:1000px) 
	{  
	.row2{display:none;}
	}
	</style>


    <div class="row2">	
	    <div class="col1a">  <div class="col1b"> 
				 <div class="posmenu">
					<a href="index.php"> Accueil </a>
					<a href="legal/about-us.php" > About us</a> 
					<a href="legal/contact-us.php"> Contact us</a> 	
			        <a  style="display:none;" class="design"> Design   <div class="megamenudesign"> <span>Mobilier</span>  <span>Decoration</span> <span>Accessoires</span> </div>  </a> 					
				</div>
        </div></div>			
	</div>


















	<style>
	    .row3{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
			.row3 .col1{width:100%;  }   
			   .posimageheader{padding:10px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
 	              .imgheader{max-width:100%; width:1100px; height:auto;}
	</style>

    <div class="row3">	
	    <div class="col1"> 
		   <div class="posimageheader"> 
		       <img class="imgheader" src="img/barakachifae2.jpg">
		   </div>
		</div>			
	</div>














	<style>
	    .row4{padding:0% 0%; margin:2% 0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
			.row4 .col1{width:100%;  }  
               .textbestsales{color:black; font:800 30px 'cairo';}			
			   .lesproduct{padding:10px 50px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center; flex-wrap:wrap; grid-column-gap:2rem; grid-row-gap:1rem;  }                
					.product{ background-color:transparent; width:300px; height:420px; padding:0px 0px 5px 0px;   }
					    .imgproduct{margin:1% 1% 5% 1%; display:flex; align-items:center; justify-content:center; text-align:center;}  .imgproduct img {max-width:100%; width:300px; height:250px;}
						.titleproduct{margin:1%; color:black; font:800 20px 'cairo'; line-height:22px; display:flex; align-items:center; justify-content:center; text-align:center;  }
						.price{margin:1%;  color:black; font:800 20px 'Cairo'; display:flex; align-items:center; justify-content:center; text-align:center;  }  	.price .text2a{margin:0 1%;   }      	.price .text2b{ margin:0 1%; color:#0000007a; text-decoration: line-through;}        
                        .posbtnsubmit{margin:1%; display:flex; align-items:center; justify-content:center; text-align:center;} .btnsubmit{background-color:red; width:100px; height:40px; color:white; font:800 20px 'cairo'; border:solid 1px red;  }
	</style>

    <div class="row4">	
	    <div class="col1">		
				<div class="lesproduct">	
					<?php 			  
					$result = mysqli_query(   $con        ,        " select * from product "      );
					foreach($result as $row)  
					{      	  
						?> 				
						<a href="post.php?id=<?php echo $row['id']?>">  				
						<div class="product"> 					
						   <div class="imgproduct"> <img src="img/product/<?php echo $row["img"] ?>"   />  </div> 
						   <div class="titleproduct">  <?php echo $row["title"] ?> </div>  
						   <div class="price">  <div class="text2a"> <?php echo $row["price1"]; ?>$ </div>   <div class="text2b"> <?php echo $row["price2"]; ?>$ </div>  </div> 
						    <a href="post.php?id=<?php echo $row['id']?>"> <div class="posbtnsubmit"> <div class="btnsubmit">  BUY </div>	 </div>	 </a>				   
						</div>
						</a>
						<?php		
					} 
					?>	
				</div>
		</div>			
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
					<div> <a href="legal/privacy-policy.php">Privacy policy</a> </div>
					<div> <a href="legal/terms-of-service.php">terms of service</a> </div>					 
					<div> <a href="legal/refund-policy.php">Refund policy</a> </div>
					<div> <a href="legal/shipping-policy.php">Shipping policy</a> </div>					
					<div> <a href="legal/faqs.php">FAQs</a> </div>
					<div> <a href="legal/about-us.php">About us</a> </div>										   
					<div> <a href="legal/contact-us.php">Contact us</a> </div>
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

document.querySelectorAll('.design').forEach(function(link) {
		link.addEventListener('mouseover', function(e) 
		{ 
				link.querySelector('.megamenudesign').classList.add('megamenudesignshow');   			
		});

		link.addEventListener('mouseout', function(e) 
		{ 
		        link.querySelector('.megamenudesign').classList.remove('megamenudesignshow');  			
		});	
});


ajaxx(); function ajaxx() {     $.ajax  ({      type: 'post',       data: {postoutputtotalitems:"" },      dataType:"json",   success:  function(data){ $('.outputtotalitems').html(data.outputtotalitems);          }    });    } 

</script>
