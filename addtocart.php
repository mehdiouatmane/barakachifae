<?php
$con=  mysqli_connect("us-mm-auto-dca-06-b.cleardb.net", "b5f045c90404ea",  "61ad1a3f",  "heroku_eac45f3ef65a15a");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
ob_start();
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








<meta charset="utf-8">   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>  <meta http-equiv="origin-trial" content=""/>  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>     
<script type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"/>  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>   <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"      ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"  rel="stylesheet"  > <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" ></script>  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" ></script>
<link rel="shortcut icon" type="image/x-icon" media="all" href="" />
<style>html, body{ background-color:#fafafa;  padding:0; border:0; margin:0% 0%;  touch-action: manipulation;    user-select: none;   }   ul li {list-style-type:none; text-decoration:none;  }  a{text-decoration:none; }   a:hover { color: white; }  </style>


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
.container1 {width:100%; height:auto; }

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

	.row2{ padding:0% 0%; margin:5% 0%;    display:flex; align-items:flex-start;  align-content:center; justify-content:center; text-align:center; grid-column-gap:0.4rem; }       	
        .row2 .col1a{width:100%; }   .row2 .col1b{ padding:5px 5px; margin:0% 0%;    display:grid; align-items:flex-start; justify-content:center; text-align:center;   }
            .addtocart{background-color:white;}
			
				.infoshipping{background-color:#f1f1ff;  padding:10px; margin:0% 0% 4% 0%; display:flex; align-items: center;  align-content: center; justify-content: flex-start; grid-column-gap:2rem;   }							
					  .infoshipping .posimg{width:20%;} .img1{width:100px; height:100px; text-align:left;}
					  .infoshipping .postitle{width:30%; color:black; color:black; font:800 20px 'cairo'; text-align:left;} 
					  .infoshipping .posprice{width:20%; color:black; color:black; font:800 20px 'cairo';} 
					  .infoshipping .posquantity{width:20%;}  .infoshipping .posquantity .inputquantity{width:50px;  text-align:center;} 
					  .infoshipping .possubtotal{width:20%; color:black; color:black; font:800 20px 'cairo';}
					  .infoshipping .posbutton  .delete{background-color:black;    padding: 3px 14px;   border:solid 1px black; border-radius:5px;   color:white; font:600 20px 'cair';  cursor:pointer;}
	  
				.totalitemprice{display: grid; align-items: center;  align-content: center; justify-content: flex-end; text-align:left; grid-row-gap:0.3rem;}
				   .texttotalitemprice{color:black; font:800 20px 'cairo';}
				   .clear{background-color:black;    padding: 3px 30px;   border:solid 1px black; border-radius:5px;   color:white; font:600 20px 'cair'; cursor:pointer;}
                   .checkout{background-color:black;    padding: 3px 14px;   border:solid 1px black; border-radius:5px;   color:white; font:600 20px 'cair'; cursor:pointer;}

@media only screen and (max-width:800px) 
{  
.row1 .col1a{display:block; }   
.row1 .col2a{display:none; }   


.infoshipping{display:grid; align-items: center;  align-content:center; justify-content:center;  }
	.infoshipping .posimg{width:100%;}
	.infoshipping .postitle{width:100%; text-align:center;} 
	.infoshipping .posprice{width:100%;} 
	.infoshipping .posquantity{width:100%;} 
	.infoshipping .possubtotal{width:100%;}
  	   
.totalitemprice{display:grid; align-items:center;  align-content:center; justify-content:flex-start; text-align:left; }
             
}	


</style>



<div class="container1">
  
  
  
   
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
				<a href="index.php">  <img src="img/logo.png" class="logo"  />	</a>    
		</div></div> 		  
		<div class="col4a">    <div class="col4b">
				  <a style="display:none" class="search">   <i class="fas fa-search ">  </i> </a> 
				  <a href="addtocart.php"  class="shoppcart"> <i class="fas fa-shopping-cart"></i> <span class="outputtotalitems"></span>	 </a>	     	
				  
		</div></div>
	</div>


  

  
	<div class="row2">
	    <div class="col1a">  <div class="col1b">
                    <div class="addtocart">		
					<?php


                    if(isset($_POST['action']) && $_POST['action'] == "updatephp")    {  if(     mysqli_query( $con  ,  "  update addtocart set quantity='".$_POST['quantity']."'   where id='".$_POST['id']."'    "   )  )    {header("location:addtocart.php");} else { header("location:addtocart.php");}       } 
                    if(isset($_POST['update']))  {	if(     mysqli_query( $con  ,  "  update addtocart set quantity='".$_POST['quantity']."'   where id='".$_GET['ID']."'     "   )  )    {header("location:addtocart.php");} else { header("location:addtocart.php");}       }
					if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from addtocart where id='".$_GET['ID']."'    "   )  )                                        {header("location:addtocart.php");} else { header("location:addtocart.php");}      }	  
					if(isset($_POST['clear']))   {	if(     mysqli_query( $con  ,  "  delete from addtocart "   )  )                                                                      {header("location:addtocart.php");} else { header("location:addtocart.php");}        }	  

                    
	                $result  =  mysqli_query(      $con   ,     "select * from addtocart "           );
                    $row= mysqli_fetch_assoc (  $result  ) ; 
			
	             	$totalitem = 0;				
					$totalpricee = 0;
					if(!empty($row))
	                {
						foreach($result as $row)	
						{
							$id =  $row["id"];
							$img =  $row["img"];
							$title =  $row["title"];
							$price1 = $row["price1"];
							$quantity =  (int)$row["quantity"];
										
							$subtotal = number_format( (int)$row["quantity"] * (int)$row["price1"]  , 2 ) ; 
															
							$subtotall =  (int)$row["quantity"] * (int)$row["price1"]   ; 
							$totalpricee = $totalpricee  + $subtotall   ; 
							$totalprice= number_format( $totalpricee,  2);
										
							$totalitem = $totalitem + 1;
														
							
						?>
							<form method="post"  action="?ID=<?php echo $id ?>"  style="padding:0px; margin:0px;"  >
								<div class="infoshipping" >	
									<div class="posimg" >  <img class="img1" src="<?php echo $img; ?>"  > </div> 
									<div class="postitle "> <?php echo $title?> </div>
									<div class="posprice " > <?php echo $price1 ?>$  </div>
									
									<div class="posquantity" > 
									    <a  class="plusjs1"        id="<?php echo $row["id"] ?>"    >  <span style="font:600 25px 'cairo'">+</span>  </a> 
  									    <input type="text"          value="<?php echo $row["quantity"] ?>"      name="quantity"  id="quantityjs<?php echo $row["id"] ?>"  class="inputquantity"  /> 	       
										<a  class="minusjs1"       id="<?php echo $row["id"] ?>" >  <span style="font:600 25px 'cairo'">-</span>  </a>  <br/>    
									</div>		


					
									
									<div class="possubtotal " > <?php echo $subtotal ?>$ <br/> </div>	
									<div class="posbutton">   <input type="submit" value="delete"  name="delete"  class="delete"  />  </div>	
									<input type="submit" value="update"  name="update"/>	
								</div>
                              </form>								
                        <?php
						} 
						?>
								<div class="totalitemprice" >	
									<div class="texttotalitemprice"> Total item : <?php  if(isset($totalitem)){ echo $totalitem;  }  ?>    </div> 
									<div class="texttotalitemprice"> Total price :<?php  if(isset($totalprice)){ echo $totalprice;  }   ?>$  </div> 
									<form method="post"  action="?ID=<?php echo $id ?>"  style="padding:0px; margin:0px;"  >   <div style="margin:5px 0px;"> <input type="submit" value="clear"  name="clear"  class="clear" /></div>    </form>									
									<div style="margin:5px 0px;"> <a class="checkout" href="checkout.php" >Checkout</a>  </div> 
								</div>
							
						<?php
	                }
	                else
					{	echo " You don't have anything in the basket";}	
                    ?>
			
                    </div> 					
        </div> </div>
    </div>
</div>



<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(".menumobileopen").click(function(){    $(".menumobilebackground1").css({"visibility": "visible" , "opacity": "1" });   $(".menumobilebackground2").css({  "visibility": "visible" , "opacity": "1" , "left": "0"  });               });
$(".menumobileclose").click(function(){     $(".menumobilebackground1").css({"visibility": "hidden" , "opacity": "0" });   $(".menumobilebackground2").css({ "visibility": "hidden" , "opacity": "0" ,  "left": "-250px"  });               });


	
ajaxx(); function ajaxx() {     $.ajax  ({      type: 'post',       data: {postoutputtotalitems:"" },      dataType:"json",   success:  function(data){ $('.outputtotalitems').html(data.outputtotalitems);          }    });    } 




$(document).on('click', '.plusjs1', function(){	
   $(this).parent().find('#quantityjs'+$(this).attr("id")).val(   parseInt($(this).parent().find('#quantityjs'+$(this).attr("id")).val()) + 1  );  
	$.ajax
	({ 
		url: "addtocart.php",
		type: "post",         
		data:{   action:"updatephp",   id:$(this).attr("id"),    quantity: $('#quantityjs'+$(this).attr("id")).val(),   			 },	   
		success:function()  {   window.location.reload(); }
	});			
});
	


$(document).on('click', '.minusjs1', function(){	
   var count = parseInt($(this).parent().find('#quantityjs'+$(this).attr("id")).val()) - 1;	    $(this).parent().find('#quantityjs'+$(this).attr("id")).val(  count < 1 ? 1 : count );		
	$.ajax
	({
		url: "addtocart.php",
		type: "post",  
		data:{  action:"updatephp",   id:$(this).attr("id"),    quantity: $('#quantityjs'+$(this).attr("id")).val(),  			 },	   
		success:function()  {    window.location.reload();   }
	});	
});	
</script>


