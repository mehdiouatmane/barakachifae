<?php
$con=  mysqli_connect("us-mm-auto-dca-06-b.cleardb.net", "b5f045c90404ea",  "61ad1a3f",  "heroku_eac45f3ef65a15a");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();



if(isset($_POST['submit']))  
{
		    date_default_timezone_set('Africa/Casablanca');  $datetime = date('m/d/Y h:i:s', time());  
	        function get_ip(){   if( isset($_SERVER['HTTP_CLIENT_IP']) )   {  return $_SERVER['HTTP_CLIENT_IP'];}  elseif  ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )     { return $_SERVER['HTTP_X_FORWARDED_FOR'];}   else  { return (  isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''   ); }     }      	$ip = get_ip();            $iplocation = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));       $iplocationcity= isset($iplocation['city']) ?  $iplocation['city'] : '';       $iplocationcountry= isset($iplocation['country']) ?  $iplocation['country'] : '';   $BROWSER  =  $_SERVER['HTTP_USER_AGENT'];	
            $img = $_FILES["img"]["name"] ;    	if(move_uploaded_file($_FILES["img"]["tmp_name"]  ,  "img/product/".$img )) ;
            $gallery= implode( "," , $_FILES['gallery']['name'] );     	foreach($_FILES['gallery']['name'] as $key => $val)  	{		move_uploaded_file(  $_FILES['gallery']['tmp_name'][$key]   ,  "img/product/" . $val );  	}
			$title = $_POST['title'];
			$price1 = $_POST['price1'];
			$price2 = $_POST['price2'];
			$quantity = $_POST['quantity'];
			$color= implode( ","  ,  $_FILES['color']['name'] );     	foreach($_FILES['color']['name'] as $key => $val)  	{		move_uploaded_file(  $_FILES['color']['tmp_name'][$key]   ,  "img/product/" . $val );  	}
			$sizee = $_POST['sizee'];
			$shipping = $_POST['shipping'];
			$description = $_POST['description'];
			                                                                                                                                                                                                                                                    
            $query = "INSERT INTO product (datetime, ip , img , gallery , title , price1 , price2 , quantity , color ,  sizee ,  shipping ,  description  ) VALUES ('$datetime' , '$ip' , '$img' , '$gallery' , '$title' , '$price1' ,  '$price2' , '$quantity' ,  '$color' ,  '$sizee' ,  '$shipping' ,'$description'  )";	
            if( mysqli_query($con,$query) ) 	  {	header("location:insertproduct.php"); 	  } 	  else	  {		  echo'Please Check Your Query';	  }	
}	



?>






<html lang="en" >
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>test</title>
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800">  <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/stingray">     <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/font">  
<style> html , body {}   *{ padding:0; border:0; margin:0; outline: none !important;  list-style: none; box-sizing:border-box; text-decoration:none;}   ::after ,::before { box-sizing: border-box;}    </style>





<form action="" method="post" enctype="multipart/form-data"> 
<input type="file" name="img"    />
<input type="file" name="gallery[]" multiple  />
<input type="text" placeholder="title"  name="title"  />
<input type="text" placeholder="price1"  name="price1"  />
<input type="text" placeholder="price2"  name="price2"  />
<input type="text" placeholder="quantity"  name="quantity"  />
<input type="file" name="color[]" multiple  />
<input type="text" placeholder="size"  name="sizee"  />
<input type="text" placeholder="shipping"  name="shipping"  />
<input type="text" placeholder="description"  name="description"  />
<input type="submit" value="INSERT"  name="submit"   />
</form>


