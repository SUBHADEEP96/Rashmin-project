<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" /><link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>

<title>Rashmin || Order Online</title>
<style>
h4 a{
	
	color:red;
}

body{
	height:;
	background-color:#f6e58d;
	background-image:url("upload/pic7.jpg");
	background-size:cover;
	
	background-repeat:no-repeat;
	
	
	
	
	
	
	
}

</style>
</head>
<body class="container"><br><br>
<h1 class="text-center  mb-5" style="font-family:'Abril Fatface',cursive;color:#c23616">Rashmin Indian Nepalese Restaurant</h1>
<h4 class="text-center  mb-5" style="font-family:'Abril Fatface',cursive;color:#c23616">80 Pacific Hwy, Roseville NSW 2069, Australia</h4>


<h1 class="text-center text-danger mb-5" style="font-family:'Abril Fatface',cursive;">Order Online</h1>
<h4 class="text-center text-danger"><i class="fas fa-envelope-open-text"></i> <a href="mailto:rashminweb@gmail.com">rashminweb@gmail.com</a></h4>

<h4 class="text-center text-success"><i class="fas fa-phone"></i> Call Us Now :<a href="tel:+61405527527"> +61405527527 </a>| <a href="tel:+61415287806">+61415287806</a> |<a href="tel:+61294123737"> +61294123737</a></h4>
<div class="row">






<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'rashmionline');


/*if($con){
	
	echo "succecess";
}
else{
	
	
	echo "not success";
}
*/

$query="SELECT `name`, `image`, `price`, `discount` FROM `cart` order by id ASC";

$queryfire =mysqli_query($con,$query);

$num=mysqli_num_rows($queryfire);

if($num > 0){
	
	while($product=mysqli_fetch_array($queryfire)){
	?>	
	
	<div class="col-lg-3 col-md-3 col-sm-12 mb-5">
	
	<form>
	<div class="card">
	<!--productanme-->
	<h5 class="card-title text-center bg-info text-white"><?php echo "$".$product['price']; ?></h5>
	
	
	<div class="card-body">
	<div>
<!--<img src="upload/pic1.jpg" alt="pic1" class="img-fluid card-img-top">-->
</div>
<!--price--->
<h5 class=" text-center  "><?php echo $product['name']; ?> </h5>
	
	
	<h6 class="badge badge-primary">4.4<i class="fa fa-star"></i></h6>
	
	<input type="number"  name="" class="form-control" placeholder="      Quantity..">
	</div>
	<div class="btn-group d-flex">
	<button class="btn btn-warning">Add to Cart</button>
	<button class="btn btn-danger">Buy Now</button>
	</div>
	
	
	</div>
	
	</form>
	
	</div>
	
	<?php
		
	}
	
}
?>




</div>

</body>
</html>