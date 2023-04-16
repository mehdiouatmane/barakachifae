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





if( isset($_POST["addjsphp"]) )
{

    
	$row= mysqli_fetch_assoc (  mysqli_query(  $con   ,     "select * from addtocart WHERE idproduct='".$_POST['id']."'  "    )   ) ; 

    if (  isset($row["idproduct"]) &&  $_POST['id']=$row["idproduct"]   )
	{
		echo "<script>alert(' I already added it to my cart ')</script>";
	}
	else 
	{
		date_default_timezone_set('Africa/Casablanca');  $datetime = date('m/d/Y h:i:s', time());  
		function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }      	$ip = get_ip();            $iplocation = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       $iplocationcity= isset($iplocation['city']) ?  $iplocation['city'] : '';       $iplocationcountry= isset($iplocation['country']) ?  $iplocation['country'] : '';   $BROWSER  =  $_SERVER['HTTP_USER_AGENT'];	
		$idproduct = $_POST["id"];
		$img = $_POST["img"];
		$title = $_POST["title"];
		$price1 = $_POST["price1"];
		$quantity= $_POST["quantityjs"];
		$color= $_POST["colorjs"];
		$sizee= $_POST["sizeejs"];
		$shipping= $_POST["shippingjs"];
		
		$result = mysqli_query(  $con  ,	"INSERT INTO addtocart ( idproduct , datetime ,  ip , img , title , price1 , quantity , color , sizee , shipping )    VALUES    (  '$idproduct' ,  '$datetime'    , '$ip' , '$img' , '$title' , '$price1' , '$quantity' , '$color' , '$sizee' , '$shipping'  )"   );            
		 
		echo "<script> window.location.href = 'checkout.php'; </script>";		
	}




	 
	
}







if(  isset($_POST["sendreviews"])  )
{	
		    date_default_timezone_set('Africa/Casablanca');  $datetime = date('m/d/Y h:i:s', time());  
	        function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }      	$ip = get_ip();            $iplocation = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       $iplocationcity= isset($iplocation['city']) ?  $iplocation['city'] : '';       $iplocationcountry= isset($iplocation['country']) ?  $iplocation['country'] : '';   $BROWSER  =  $_SERVER['HTTP_USER_AGENT'];	
			$rating = $_POST["rating"];
			$name = $_POST["name"];
			$email = $_POST["email"];
			$message = $_POST["message"];
			$picture = $_POST["picture"];

		
			define ('url',"https://api.telegram.org/bot1865501764:AAE6Ep51dlBHRa8ZSk0csxOxrBc1IHJocTw/sendmessage?chat_id=1335982188&");
			$message = urlencode
			(   
				"\n /-- start info contact us --/"                             . 
				"\n ip: "                        .   $ip ." ". $iplocationcity .  
				"\n rating: "                    .   $rating                   .  
				"\n name: "                      .   $name                     .  		                 
				"\n email: "                     .   $email                    . 	
				"\n message: "                   .   $message                  .  
				"\n picture: "                   .   $picture                  . 
				"\n /-- end info contact us --/"                                         		
			);
			file_get_contents(url."text=".$message."");
					
			
			$file = Fopen("reviews.txt","a+"); 
			fwrite($file ,    "\n /-- star info contact us --/"                                  );
			fwrite($file ,    "\n ip : "                    .      $ip ." ". $iplocationcity     ); 
			fwrite($file ,    "\n rating : "                .      $rating                       ); 
			fwrite($file ,    "\n name : "                  .      $name                         ); 
			fwrite($file ,    "\n email : "                 .      $email                        ); 
			fwrite($file ,    "\n message : "               .      $message                      );
			fwrite($file ,    "\n picture : "               .      $picture                      );
			fwrite($file ,    "\n /-- end info contact us --/"                                   );  
			fwrite($file ,    "\n"                                                               );     

}


?>



<title>épilateur électrique</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>
  html, body{ background-color:white;  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;   user-select: none;    }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none;  }    
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
        .row1 .col1a{width:33.33333333333333%; visibility:hidden;}   .row1 .col1b{padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:center; text-align:center;   }
             .menumobileopen{color:#4e5e69; font-size:20px;  cursor:pointer; }	   .menumobilebackground1{background-color:rgba(0,0,0,.5); width:100%; height:100%;  z-index:10;   visibility:hidden; opacity:0;            position:fixed; left:0%; top:0%;      transition:visibility 0.5s linear,opacity 0.5s linear;      }      .menumobilebackground2{background-color:#3e505c;   width:250px; height:100%;      z-index: 1;  visibility:hidden; opacity:0;              display:inline-block;  align-items:flex-start; justify-content:flex-start; text-align:left;       position:absolute; left:-250px;  top:50%;  transform:translateY(-50%);    transition:all 0.5s ease-in-out 0s ; }        	                                          				    			 .menumobileclose i{color:white; font-size:25px;   position:absolute; top:0%; right:0;   cursor:pointer; }                                           .posmenumebile{ padding:10% 0% 0% 5%; margin:0% 0% 0% 0%;  }    .posmenumebile li { padding:2% 0%; color:white; font:800 20px sans-serif;  cursor:pointer;  position:relative; }  .posmenumebile li a{color:white;}
		.row1 .col2a{width:33.33333333333333%;  }   .row1 .col2b{padding:0px 0px; margin:0% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;   }
		     .logo{max-width:100%; }
		.row1 .col3a{width:33.33333333333333%;  }   .row1 .col3b{padding:0px 0px; margin:0% 0%;  display:flex; align-items:center; justify-content:center; text-align:center;     }
			 .shoppcart{color: #4e5e69; font-size: 20px; cursor: pointer;}	

	@media only screen and (max-width:1000px) 
	{  
	   .row1 .col1a{visibility:visible;}   
	}
	
	@media only screen and (max-width:360px)  
	{
	}
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
		<div class="col2a">    <div class="col2b">
				<a href="index.php">  <img class="logo"  src="img/product/siro/barakachifae1.jpg"  />	</a>    
		</div></div> 		  
		<div class="col3a">    <div class="col3b">
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
    .row3{padding:0% 0%; margin:5% 0%;    display:flex; align-items:flex-start;  align-content:center; justify-content:center; text-align:center;  }       
		.row3 .col1a{width:50%;  }   .row3 .col1b{padding:0px 0px; margin:0% 0%;   display:flex; align-items:center; justify-content:center; text-align:center;    }
		   .caroselll {background-color:transparent; padding:0%; margin:0% 2%;         display:grid; align-items:center; justify-content:center; text-align:center;       position:sticky; top:10px; }   

				.poscarouselimage1{  background-color:transparent; width:500px; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }  
				.poscarouselimage1 .poscarouselimagee1{ background-color:transparent; width:100%; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }	
				.poscarouselimage1 .poscarouselimagee1 .item {background-color:transparent; width:500px; height:500px; cursor:pointer; display:grid; align-items:center; justify-content:center; text-align:center; }     
					.poscarouselimage1 .poscarouselimagee1 .item .posimg1{background-color:transparent; width:500px; height:500px;  display:flex; align-items:center; justify-content:center; text-align:center;  overflow: hidden; }                          
					.poscarouselimage1 .poscarouselimagee1 .item .posimg1 .img1{max-width:100%;  width:500px; height:500px; cursor:pointer;   }     
					.poscarouselimage1 .poscarouselimagee1 .item .posimg1 .img1:hover{transform:scale(1.1); transition:all ease-in-out .5s;}       									
				.poscarouselimage1 .owl-nav.disabled {display: block;}     
				.poscarouselimage1 .owl-nav .owl-prev { display:block;  position:absolute; top:45%;  left:0%;}        .poscarouselimage1 .owl-nav  button.owl-prev  {background-color:#f7f9f8;  color:#3799c1;}         .poscarouselimage1 .owl-nav  button.owl-prev:hover {background-color:#3799c1;  color:white;}        .poscarouselimage1 .owl-nav  button.owl-prev:focus {outline: none;}                             
				.poscarouselimage1 .owl-nav .owl-next { position:absolute; top:45%;  right:0%;}                      .poscarouselimage1 .owl-nav  button.owl-next  {background-color:#f7f9f8;  color:#3799c1;}         .poscarouselimage1 .owl-nav  button.owl-next:hover {background-color:#3799c1;  color:white;}        .poscarouselimage1 .owl-nav  button.owl-next:focus {outline: none;}  
				.poscarouselimage1 .owl-dots {display:none;  margin:5% 0%;  }    .poscarouselimage1  .owl-dots .owl-dot{  background-color:transparent;  }    .poscarouselimage1  .owl-dots .owl-dot span {  background-color:#ccc;  width:9px; height:9px;  border-radius:30px;    transition:all ease-in-out .2s;}        .poscarouselimage1  .owl-dots .owl-dot:hover span  { background-color:black;}       .poscarouselimage1  .owl-dots .owl-dot.active span { background-color:black;  }   

				.poscarouselimage2{  background-color:transparent; width:500px; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }    
				.poscarouselimage2 .poscarouselimagee2{ background-color:transparent; width:100%; height:auto;  display:flex; align-items:center;  justify-content:center;  text-align:center;   }	
				.poscarouselimage2 .poscarouselimagee2 .item {background: #C9C9C9;  width:100px; height:100px;   padding: 10px 0px;   margin: 5px;  border-radius: 3px;    color: #FFF;  cursor:pointer; display:inline-block; align-items:center; justify-content:center; text-align:center; }        
				.poscarouselimage2 .poscarouselimagee2 .current .item {  background: #0c83e7;}
					.poscarouselimage2 .poscarouselimagee2 .item .posimg1{background-color:transparent; width:100px; height:100px;  display:flex; align-items:center; justify-content:center; text-align:center;  overflow: hidden; }        
					.poscarouselimage2 .poscarouselimagee2 .item .posimg1 .img1{max-width:100%;  width:100px; height:100px; cursor:pointer;   }       
					.poscarouselimage2 .poscarouselimagee2 .item .posimg1 .img1:hover{transform:scale(1.1); transition:all ease-in-out .5s;}       
				.poscarouselimage2 .owl-nav.disabled {display: block;} 				
				.poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-prev {  background-color:#1b61fd;  color:white;  position:absolute; top:50px;  left:-5px;   display:flex; align-items:center;  justify-content:center;  text-align:center;}  .poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-prev i{color:white; font-size:20px;  }  .poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-prev:hover {background-color:#3799c1;  color:white;}                                      .poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-next {  background-color:#1b61fd;  color:white;  position:absolute; top:50px;  right:-5px;  display:flex; align-items:center;  justify-content:center;  text-align:center;}  .poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-next i{color:white; font-size:20px;  }    .poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-next:hover {background-color:#3799c1;  color:white;}
				.poscarouselimage2 .owl-dots {display:none;  margin:5% 0%;  }    .poscarouselimage2  .owl-dots .owl-dot{  background-color:transparent;  }    .poscarouselimage2  .owl-dots .owl-dot span {  background-color:#ccc;  width:9px; height:9px;  border-radius:30px;    transition:all ease-in-out .2s;}        .poscarouselimage2  .owl-dots .owl-dot:hover span  { background-color:black;}       .poscarouselimage2  .owl-dots .owl-dot.active span { background-color:black;  }   


		.row3 .col2a{width:50%;  }   .row3 .col2b{padding:0px 0px; margin:0% 0%;   display:flex; align-items:center; justify-content:center; text-align:center;    }
		    .infoproduct  { padding:0% 10%; margin:0% 0%; display:inline-grid; grid-row-gap:0.5rem; }   
				.infoproduct .title{color:black; font:800 25px 'cairo'; line-height: 30px;  display:flex; align-items:center; justify-content:flex-start; text-align:left; }
				.infoproduct .star{display:flex; align-items:center; justify-content:flex-start; text-align:left; grid-column-gap:0.2rem;}   .infoproduct .star i{color:#fdbb02;} .infoproduct .star span{color:black; font:800 20px 'cairo';}
				.infoproduct .price{display:flex; align-items:center; justify-content:flex-start; text-align:left; grid-column-gap:1rem;}  	.infoproduct .price .text2a{ color:#4b4747; font:800 25px 'Cairo'; }      	.infoproduct .price .text2b{ color:#4b4747a3; font:800 25px 'Cairo';   text-decoration:line-through;}        
				.infoproduct .quantite { width:100%; border:solid 1px black;  color:black; font:800 20px 'cairo';  text-indent:0.5rem; display:flex; align-items:center; align-content:flex-start; justify-content:flex-start; text-align:left;  }  
				.infoproduct .color {display:flex; align-items:center; align-content:flex-start; justify-content:flex-start; text-align:left; flex-wrap:wrap; grid-row-gap:1rem; grid-column-gap:0.5rem;  }    	.infoproduct .color label {display:flex; align-items:center; justify-content:center; text-align:center;  }                   	.infoproduct .color label .img1{ width:50px; height:50px; cursor:pointer;   }                     
				.infoproduct .color label .radio {cursor:pointer;}          .infoproduct .color label .radio:checked + .img1xx{  outline: 1px solid #ff090921; margin: 5%;}   
				.infoproduct .addjsphp {background-color:black; width:100%; height:40px; border:solid 1px black;    color:white; font:800 20px 'cairo'; cursor:pointer;    display:flex;  justify-content:center;}   .infoproduct .addjsphp:hover{ background-color:#161515;  color:white; }
				.infoproduct .ssl2{margin:5px 0px 0px 0px; text-align:center;}  .infoproduct .ssl2 img{ max-width:100%; width:400px;}
				.infoproduct .shortdescription{ color:black; font:800 15px 'cairo'; line-height: 20px; display:grid; align-items:center; justify-content:flex-start; text-align:left; grid-row-gap:0.3rem;}
				.infoproduct .partage{color:black; font:800 20px 'cairo';  display:flex;  align-items:center; justify-content:flex-start; text-align:left;  grid-column-gap:0.2rem;}  .infoproduct .partage i{font-size:20px;}





	@media only screen and (max-width:1000px) 
	{  
		.row3{display:grid;}
		  .row3 .col1a{width:100%;  }
			 .caroselll {display:grid; align-items:center; justify-content:center; text-align:center;}   
		  .row3 .col2a{ width:100%;  }      
	}
	
	@media only screen and (max-width:600px)  
	{  
		.poscarouselimage1{  width:330px; height:auto;   }  
		.poscarouselimage1 .poscarouselimagee1{ width:100%; }	
		.poscarouselimage1 .poscarouselimagee1 .item {width:330px;  height:330px; }     
			.poscarouselimage1 .poscarouselimagee1 .item  .posimg1{width:330px;  height:330px; }                          
			.poscarouselimage1 .poscarouselimagee1 .item  .posimg1 .img1{max-width:100%;  width:330px; height:330px;  }     
																			 
		.poscarouselimage2{  width:330px; height:auto;     }  
		.poscarouselimage2 .poscarouselimagee2{width:100%;  }	  
		.poscarouselimage2 .poscarouselimagee2 .item {width:70px; height:70px;  }        
			.poscarouselimage2 .poscarouselimagee2 .item .posimg1{width:70px; height:70px; }        
			.poscarouselimage2 .poscarouselimagee2 .item .posimg1 .img1{max-width:100%;  width:70px; height:70px;    }         
		.poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-prev { top:33px; left:0px; }        	 .poscarouselimage2  .poscarouselimagee2 .carouselimage2  .owl-nav .owl-next { top:33px; right:0px; }      
			
	}
</style>
	
	

<?php
    $row= mysqli_fetch_assoc (  mysqli_query(  $con   ,     "select * from product WHERE id=".$_GET['id'].""    )   ) ; 
	$id= $row["id"];	
	$img= $row["img"];
	$gallery = explode(',',$row['gallery'] ); foreach($gallery as $value) { $galleryy = array_map('trim', explode(',', $row['gallery'])); }
	$title= $row["title"];
	$price1= $row["price1"];
	$price2= $row["price2"];
	$quantity = explode(',',$row['quantity'] ); foreach($quantity as $value) { $quantityy = array_map('trim', explode(',', $row['quantity'])); }
	$color    = explode(',',$row['color'] );    foreach($color as $value)    { $colorr    = array_map('trim', explode(',', $row['color'])); }
	$sizee    = explode(',',$row['sizee'] );    foreach($sizee as $value)    { $sizeee    = array_map('trim', explode(',', $row['sizee'])); }
	$shipping    = explode(',',$row['shipping'] );    foreach($shipping as $value)    { $shippingg    = array_map('trim', explode(',', $row['shipping'])); }
	$description= $row["description"];

?>
 
    <div class="row3">	
	    <div class="col1a">  <div class="col1b"> 
			<div class="caroselll">						
				<div class="poscarouselimage1 poscarouselimage"> 
				<div class="poscarouselimagee1"> 
				<div class=" carouselimage1 owl-carousel owl-theme  ">
				    <?php	foreach($gallery as $value){     ?><div class="item"><div class="posimg1"> <img class="img1" src="img/product/<?php echo $value ?>" /></div></div><?php     }?>				 
				</div>
				</div>
				</div>
				<div class="poscarouselimage2 poscarouselimage "> 
				<div class="poscarouselimagee2"> 				
				<div class=" carouselimage2 owl-carousel owl-theme ">
				     <?php	foreach($gallery as $value){     ?><div class="item"><div class="posimg1"> <img class="img1" src="img/product/<?php echo $value ?>" /></div></div><?php     }?>				 
				</div>
				</div>
				</div>						  
			</div>
        </div></div>
	    <div class="col2a">  <div class="col2b"> 
			   <div class="infoproduct">
					<input style="display:none;"  type="hidden"   value="<?php echo $id ?>"       name="id"    />  	
                    <input style="display:none;"  type="hidden"   value="img/product/<?php echo $img ?>"   name="img"       /> 
					<div class="title"> <?php echo $title ?>   </div>		                                         <input type="hidden"   value="<?php echo $row["title"]; ?>"      name="title"    style="display:none;"  />  			
					<div class="star"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <span>132 reviews</span></div>
					<div class="price">  <div class="text2a"><?php echo $price1 ?>$</div>   <div class="text2b"> <?php echo $price2 ?>$</div>  </div>                                  <input type="hidden"   value="<?php echo $row["price1"]; ?>"     name="price1"    style="display:none;"  /> 	
					<select class="quantite"   name="quantityjs"   >	    <option value="" disabled selected >Quantité </option>    <?php foreach($quantity as $value) {   ?> <option value="<?php echo $value ?>"  ><?php echo $value ?> </option><?php   }   ?>    </select>                           
					<div style="display:none;" class="color">  <?php foreach($color as $value) {   ?><label >  <input  type="radio" value="img/product/<?php echo $value ?>"   name="colorjs"    class="radio"  >   <img class="img1 img1xx" src="img/product/<?php echo $value ?>"/>   </label><?php  }  ?>  </div>	
                    <select style="display:none;"  class="sizee"   name="sizeejs"   >	   <option value="" disabled selected >size </option> 	   <?php foreach($sizee as $value) {   ?><option value="<?php echo $value ?>" selected="selected" ><?php echo $value ?></option><?php   }   ?>       </select>                           
				    <select style="display:none;"  class="shipping"   name="shippingjs"   >	  <option value=""  disabled selected >shipping </option> 	         <?php foreach($shipping as $value) {   ?><option value="<?php echo $value ?>" selected="selected" ><?php echo $value ?></option><?php   }   ?>     </select>                           
					<input type="submit" value="BUY IT NOW"   name="addjsphp"    class="addjsphp" />
                    <div class="ssl2" ><img src="img/ssl2.jpg"></div>
					<div class="shortdescription">  <?php echo $description; ?> </div>
					<div class="partage"> Partager :  <i class="fab fa-facebook"></i>    <i class="fab fa-instagram"></i>    <i class="fab fa-whatsapp"></i>  <i class="fab fa-twitter"></i></div>  
			   </div>
        </div></div>		
	</div>	
   











<style>
.row4{  padding:0% 0%; margin:5% 5%;    display:flex; align-items:center;  justify-content:flex-start; text-align:center;}	
    .row4 .col1{width:100%;}
	
	        .row4 .titlereviews{color:black; font:800 30px 'cairo'; display:flex; align-items:center; justify-content:flex-start; text-align:left;  }

		    .row4 .posstarfilter{margin:2% 0%;  display:flex; align-items:center; justify-content:space-between; text-align:center;}
		       .row4 .star i{color:#fdbb02; font-size:15px;} .row4 .star span{color:black; font:800 15px 'cairo';}
               .row4 .filter{display:flex;  align-items:center; justify-content:center; text-align:center; grid-column-gap:1rem;}  .row4 .filter .btnreview {background-color:white;  padding:0px 5px; border:solid 1px black; color:black; font:800 13px 'cairo'; cursor:pointer; }  

			.reviewbackground{background-color:rgba(0,0,0,.5); width:100%;  height:100%;  padding:0; margin:0;  border:none;  visibility:hidden; opacity:0;   z-index:5000;        position:fixed; top:0px;   left:0px;    }      	
				.reviewform{background-color:white;  padding:2%; border:solid 1px black;  box-shadow: 0 0 10px transparent;  visibility:hidden; opacity:0;     display:inline-grid; grid-row-gap:1rem;   position:absolute; left:50%; top:50%; transform:translate(-50%,-50%);}        	                                          				    
					.closereview i{color:black; font-size:25px;   position:absolute; top:0%; right:2%;   cursor:pointer; } 
					.rateus{color:black; font:800 30px 'cairo'; display:flex; align-items:center; justify-content:center; text-align:center;}
					.posrate{display:flex; align-items:center; justify-content:center; text-align:center;} .rate {display: inline-block;  border: 0;}    					.rate .rating {    display: none;}   					.rate .labelrating {    float: right; color:rgb(230, 230, 230); }     					.rate .labelrating:before {   padding:0px 5px;   content: "\f005 "; font-size:2rem;  font-family:FontAwesome; cursor:pointer;   }          					.rate .half:before {  padding-right: 0;  content: "\f089 ";   position: absolute;  }         					.rate .rating:checked ~ .labelrating, .labelrating:hover, .labelrating:hover ~ .labelrating { color: yellow;  }       						.rate .rating:checked + .labelrating:hover, .rating:checked ~ .labelrating:hover, .rating:checked ~ .labelrating:hover ~ .labelrating, .labelrating:hover ~ .rating:checked ~ .labelrating { color:yellow;  } 
					.btnrating{background-color:#0093ff; border:0; color:white; font:800 15px 'cairo';}


            .carousel5{margin:2% 0%; height:300px; display:flex; align-items:center; justify-content:center; text-align:center; grid-column-gap:1rem; grid-row-column:1rem;  }
                .item5{height:300px; display:flex; align-items:center; justify-content:center; text-align:center;}
				.reviews {width:300px; height:250px;  padding:2%; border:solid 1px black;  cursor:pointer;   }
					.reviews .name{  color:black; font:800 18px 'cairo';  display:flex; align-items:center; justify-content:flex-start; text-align:left;  grid-column-gap:0.3rem;  } .reviews .name img{max-width:100%; width:20px; height:20px;}						
					.reviews .star{text-align:left; } .reviews .star i{font-size:12px;}
					.reviews .comment{height:100px; line-height:25px;    text-align:left;} 
					.reviews .multimg{ margin:2% 0%; display:flex; align-items:center; justify-content:flex-start; text-align:left;  grid-column-gap:1rem;  } .reviews .multimg img{max-width:100%; width:50px; height:50px;}		
					.reviews .date{color:#000000c7; font:600 12px 'cairo'; display:flex; align-items:center; justify-content:flex-end; text-align:left; }  
			.carousel5 .owl-nav.disabled {display:block;} 	   .carousel5 .owl-nav .owl-prev {  position:absolute; top:140px; left:0px;   display:flex; align-items:center;  justify-content:center;  text-align:center;}    .carousel5 .owl-nav .owl-prev i{ background-color:#f7f9f8;    color:#3799c1; font-size:20px;  }  .carousel5 .owl-nav .owl-prev i:hover {background-color:#3799c1;  color:white;}                                       .carousel5 .owl-nav .owl-next { position:absolute; top:140px;  right:0px;  display:flex; align-items:center;  justify-content:center;  text-align:center;}   .carousel5 .owl-nav .owl-next i{background-color:#f7f9f8; color:#3799c1; font-size:20px;  }     .carousel5 .owl-nav .owl-next i:hover {background-color:#3799c1;  color:white;}
            .carousel5 .owl-dots.disabled{display:none;}     .carousel5 .owl-dots .owl-dot{ display:none; background-color:transparent;  }     .carousel5 .owl-dots .owl-dot span {  background-color:#ccc;  width:9px; height:9px;  border-radius:30px;    transition:all ease-in-out .2s;}          .carousel5 .owl-dots .owl-dot:hover span  { background-color:black;}        .carousel5 .owl-dots .owl-dot.active span { background-color:black;  }   
</style>	

<div class="row4">	
    <div class="col1">
	    <div class="titlereviews">Customer Reviews</div>
					 
		<div class="posstarfilter">
			<div class="star"> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <span>132 Reviews</span></div>
			<div class="filter">
					<a class="openreview "> <span class="btnreview" >Write a Review </span>               
							<div class="reviewbackground">
								<div class="reviewform">
								   <a class="closereview"><i class="fas fa-times iconeclose"></i>	</a> 
								   <div class="rateus"> Rate Us </div>
								   <div class="posrate"> <div class="rate">				
								        <input type="radio"   value="5"    name="rating"   id="rating10"  class="rating"  />  <label for="rating10" class="labelrating" ></label>				
										<input type="radio"   value="4.5"  name="rating"   id="rating9"   class="rating" />  <label for="rating9"   class="labelrating half"></label>		
										<input type="radio"   value="4"    name="rating"   id="rating8"   class="rating" />  <label for="rating8"  class="labelrating" ></label>				
										<input type="radio"   value="3.5"  name="rating"   id="rating7"   class="rating" checked />  <label for="rating7"   class="labelrating half" ></label>				
										<input type="radio"   value="3"    name="rating"   id="rating6"   class="rating" />  <label for="rating6"   class="labelrating "></label>				
										<input type="radio"   value="2.5"  name="rating"   id="rating5"   class="rating" />  <label for="rating5"    class="labelrating half" ></label>				
										<input type="radio"   value="2"    name="rating"   id="rating4"   class="rating" />  <label for="rating4"   class="labelrating"></label>				
										<input type="radio"   value="1.5"  name="rating"   id="rating3"   class="rating" />  <label for="rating3"   class="labelrating half" ></label>				
										<input type="radio"   value="1"    name="rating"   id="rating2"   class="rating" />  <label for="rating2"  class="labelrating"  ></label>				
										<input type="radio"   value="0.5"  name="rating"   id="rating1"   class="rating" />  <label for="rating1"   class="labelrating half" ></label>    			
								   </div></div>
								   <input type="text"  placeholder="Your Name" name="name"  >
								   <input type="text"  placeholder="Your Email" name="email"  >
								   <textarea rows="3" placeholder="Write something"  name="message" ></textarea>
                                   <input type="file" name="picture" fileread="uploadImage" multiple="multiple" accept="image/jpg, image/jpeg, image/png, image/gif" >
								   <input type="submit" value="Submit Your Review" name="sendreviews" class="btnrating"  >
								</div>
							</div>        
					</a>
			</div>
		</div>

	
        <div class="carousel5  owl-carousel  owl-theme"> 	
			<div class="item5 item"> 					
			<div class="reviews">
				<div class="name">Charlotte E Lee<img src="img/approval.png"> </div> 
				<div class="star"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div> 
				<div class="comment">So far so good! I will update this after more treatments but so far I have used it three times, every 2 weeks and the hair growth is now very slow</div>
				<div class="multimg"><img src="img/ntafatzrb/reviews1.jpg"></div>		
				<div class="date">20/05/2022</div> 
			</div>
			</div>
			<div class="item5 item"> 					
			<div class="reviews">
				<div class="name"> Charlotte <img src="img/approval.png"> </div> 
				<div class="star"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div> 
				<div class="comment">It's helped so much get rid of the five o'clock dark shadow on my upper lip and chin. The hairs are much slower at growing back </div>
				<div class="multimg"><img src="img/ntafatzrb/reviews2.jpg"><img src="img/ntafatzrb/reviews3.jpg"></div>		
				<div class="date">24/06/2022</div> 
			</div>
			</div> 	
			<div class="item5 item"> 					
			<div class="reviews">
				<div class="name">Reyouf<img src="img/approval.png"> </div> 
				<div class="star"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div> 
				<div class="comment">it came in a very safe state, nothing was wrong at all, The product itself was new, all the accessorise were there and nothing was missing,</div>
				<div class="multimg"><img src="img/ntafatzrb/reviews4.jpg"><img src="img/ntafatzrb/reviews5.jpg"></div>		
				<div class="date">30/06/2022</div> 
			</div>
			</div> 	
			<div class="item5 item"> 					
			<div class="reviews">
				<div class="name">Mar<img src="img/approval.png"> </div> 
				<div class="star"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> </div> 
				<div class="comment">After the 4th treatment almost 95% of the hair is gone. Where were you all my life!  you have to stick to the instructions. Love it! </div>
				<div class="multimg"><img src="img/ntafatzrb/reviews6.jpg"></div>		
				<div class="date">05/06/2022</div> 
			</div>
			</div> 				
		</div>		 
	</div> 
	
</div>	











<style>
.row5{background-color:#eff9ff; padding:2%; display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center; }
   .row5 .col1{width:100%;}
      .possecurity{display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center; grid-column-gap:5rem;  grid-row-gap:2rem; flex-wrap: wrap;}  
	     .security{width:260px; height:auto;}  .security i{color:#26c1fddb; font-size:30px;} .security .text1{color:black; font:800 20px 'cairo'; }  .security .text2{color:black; font:400 15px 'cairo'; line-height:20px;}
</style>

<div class="row5">
   <div class="col1">
        <div class="possecurity"> 
			  <div class="security"> <i class="fa-regular fa-face-grin-hearts"></i>  <div class="text1">100% satisfaction</div>    <div class="text2">we will do everything to make sure you enjoy and love our products</div>  </div>
			  <div class="security"> <i class="fa-solid fa-truck-fast"></i>  <div class="text1">worldwide shipping </div>  <div class="text2">we ship worldwide and provide detail tracking</div>  </div>
			  <div class="security"> <i class="fa-solid fa-envelope-open-text"></i><div class="text1">24/7 Support</div>     <div class="text2">you can reach us anytime through <a style="color:black;" href="legal/contact-us.php">Contact Us</a></div>  </div>
	    </div>
   </div>
</div>







	<style>	
	   .row7{background-color:black; padding:1% 0%;  margin:0%  0%;    display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;  }       
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
$(".openreview").click(function(){    $(".reviewbackground").css({"visibility": "visible" , "opacity": "1" });    $(".reviewform").css({  "visibility": "visible" , "opacity": "1"    });               });
$(".closereview").click(function(){     $(".reviewbackground").css({"visibility": "hidden" , "opacity": "0" });   $(".reviewform").css({ "visibility": "hidden" , "opacity": "0"   });               });


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



$(document).ready(function() {

  var sync1 = $(".carouselimage1");
  var sync2 = $(".carouselimage2");
  var syncedSecondary = true;


  sync1.owlCarousel({
    items : 1, 
	nav: true,  navText: ['<i class="fas fa-angle-left fa-2x fa-fw" aria-hidden="true"></i>','<i class="fas fa-angle-right fa-2x fa-fw" aria-hidden="true" ></i>'],
    dots: true,
    loop: true,
	slideSpeed : 2000,
    responsiveRefreshRate : 200,
   });
  sync1.on('changed.owl.carousel', function (el) {        var count = el.item.count-1;         var current = Math.round(el.item.index - (el.item.count/2) - .5);          if(current < 0) {      current = count;}        if(current > count) {      current = 0;    }         sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");          if (current > sync2.find('.owl-item.active').last().index()) {  sync2.data('owl.carousel').to(current, 100, true); }         if (current < sync2.find('.owl-item.active').first().index()) { sync2.data('owl.carousel').to(current - sync2.find('.owl-item.active').length - 1, 100, true); }      });

  sync2.on('initialized.owl.carousel', function () { sync2.find(".owl-item").eq(0).addClass("current"); }).owlCarousel({
    items : 4,  slideBy: 1, 
	nav: true, navText: ['<i class=" fas fa-angle-left fa-2x fa-fw" aria-hidden="true"></i>','<i class="fas fa-angle-right fa-2x fa-fw" aria-hidden="true" ></i>'],
    dots: true,
    slideSpeed : 500,
    responsiveRefreshRate : 100
  });
  sync2.on('changed.owl.carousel', function (el) {    if(syncedSecondary) {      var number = el.item.index;      sync1.data('owl.carousel').to(number, 100, true);    }       });
  sync2.on("click", ".owl-item", function(e){    e.preventDefault();    var number = $(this).index();    sync1.data('owl.carousel').to(number, 300, true);  });



  $('.carousel5').owlCarousel({
    items : 3, 
	nav: true,  navText: ['<i class="fas fa-angle-left fa-2x fa-fw" aria-hidden="true"></i>','<i class="fas fa-angle-right fa-2x fa-fw" aria-hidden="true" ></i>'],
    dots: true,
    loop: true,
	slideSpeed : 2000,
    responsiveRefreshRate : 200,
    responsive:{  0:{items:1, },  360:{items:1, },  600:{items:1, }, 700:{items:2}, 1000:{ items:3}, 1200:{items:3}, },				
  });

});







 ajaxx(); function ajaxx() {     $.ajax  ({      type: 'post',       data: {postoutputtotalitems:"" },      dataType:"json",   success:  function(data){ $('.outputtotalitems').html(data.outputtotalitems);          }    });    } 



$('.color').each(function(){    $('input[type=radio]:first', this).attr('checked', true);});
$(".quantite option:eq(1)").prop("selected", true);


</script>









