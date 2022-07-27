<?php

$connection=mysqli_connect("localhost","root","","gym");
if($connection){
	echo "connected";
}
else{
	echo "not connected";
}
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=-1">
	<title></title><link rel="stylesheet" type="text/css" href="../vendor/bootstrap.min.css">
	<script type="text/javascript" src="../vendor/jquery.min.js"></script>
	<script type="text/javascript" src="../vendor/popper.min.js"></script>
	<script type="text/javascript" src="../vendor/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="mdb/css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="mdb/js/mdb.js">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">

</head>
<body style="background-color:grey">
		<!---the navbar---><nav class="navbar navbar-expand-md  navbar-dark fixed-top  " style="background-color:black ">
		<!---navbar header-->
			<a class="navbar-brand" href="#"><img src="gym logo.png"style="width:50px"></a>
			<button class="navbar-toggler" type="button"data-toggle="collapse"data-target="#drop" aria-control="drop" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="drop">

					<ul class="navbar-nav"> 	
					
						<li class="nav-item"><a href="index.php"style="color:white" class="nav-link">Home</a></li>
						
						<li class="nav-item"><a href="about.php"style="color:white" class="nav-link">About</a></li>
						<li class="nav-item"><a href="contact.php"style="color:white" class="nav-link">Contact us</a></li>
						<li class="nav-item"><a href="admin.php"style="color:white" class="nav-link">Admin</a></li>

					</ul>
				</div>
			
		</nav>

	<div class="container-fluid">
		<div class="row">
<?php 
function make_query($connection){
$query="SELECT * FROM carousel_image ORDER BY id ASC";
$result=mysqli_query($connection,$query);
return $result;
}
function make_slide_indicators($connection){
	$output= '';
	$count= 0;
	$result= make_query($connection);

while($row=mysqli_fetch_array($result)){
	if($count == 0){
		$output .='<li data-target="#dynamic_slide_show" data-slide-to=" '.$count.'" class="active"></li>';
	}
	else{
		$output .='<li data-target="#dynamic_slide_show" data-slide-to="' .$count.' "></li>';
	}
	$count =$count + 1;
}
return $output;

}
function make_slides($connection){
	$output ='';
	$count= 0;
	$result=make_query($connection);
	while($row=mysqli_fetch_assoc($result)){
		if($count ==0){
$output .='<div class="carousel-item active">  ';
		}
		else{
$output .='<div class="carousel-item"> ';
		}

		$output .='<img class="rounded-borders" style="width:100%;height:700px;opacity:;background-color:grey;" src="carousel_images/'.$row["image"].'" alt="'.$row["text"].'"/>
		<div class="carousel-caption">
		<h3>'.$row["text"].'</h3>
		</div>
		</div>';

		$count =$count + 1; 
	}
	return $output;

}

?>




	<div class="container-fluid" style="width:1500px;height:background-color:;">
		<div class="card-body "style="background-color:">
<div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php echo make_slide_indicators($connection); ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php echo make_slides($connection);  ?>
    


     
    </div>



    <!--div class="carousel-item">
      <img src="" style="width:500px" alt="New York">
    </div-->
  

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#dynamic_slide_show"  data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#dynamic_slide_show"  data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="card">
<p class=""><h3 style="text-align:center"><b>Our gym fee structure</b></h3></p>
<hr>
<div class="container">
	<p class="" style="font-family:monospace;font-size:20px">You can assemble your own home guy for the same cost as the average on year gym membership</p>
	<table class="table table-hover table-dark">
		
			<thead>
				<tr>
			<th>Activity</th>
			<th>Item</th>
			<th>Cost/th>
		</tr>
	</thead>

			<tbody>
				<tr>
					<th>Burpess</th>
					<th>None</th>
					<th>Free</th>

				</tr>
				<tr>
				<th>Running/Walking</th>
					<th>Running shoes</th>
					<th>50rs</th>

				</tr>
				<tr>
				<th>Jumps</th>
					<th>jump ropes</th>
					<th>20rs</th>

				</tr>
				<tr>
				<th>Push-ups</th>
					<th>None</th>
					<th>Free</th>

				</tr>
				<tr>
				<th>Weight lifting</th>
					<th>Dumbbell set</th>
					<th>150rs</th>

				</tr>
				<tr>
				<th>weight lifting</th>
					<th>Adjustable bench</th>
					<th>100rs</th>

				</tr>
				<tr>
				<th>Yoga+stretching</th>
					<th>Yoga mat</th>
					<th>20rs</th>

				</tr>
				<tr>
				<th>Squat + lunges</th>
					<th>None</th>
					<th>Free</th>

				</tr>
				<tr>
				<th>weight lifting</th>
					<th>Olympic bar +weight</th>
					<th>250rs</th>

				</tr>
				<tr>
				<th>Resistance training</th>
					<th>Resistance bands</th>
					<th>25rs</th>

				</tr>
				<tr>
				<th>Pull-ups</th>
					<th>Pull-up-bar</th>
					<th>20rs</th>

				</tr>
					
				</tbody>
			
</table>
</div>
</div>
<div class= "card ">
	<div class="container">
	<div class="row justify-content-center ">
		
		<h3 style="text-align:center"><b>Gym Membership</b></h3>
	</div>
	<div class="row pt-5">
		<p style="font-size:20px"><b>Enrollment Fess<b><br>
		Adults:There is an initial one-time enrollment fees of 100rs and an annual subscription fees of 80rs<br> 
		Children over 10 and under 18:there is an initial one time enrollment fee of 50rs and an annual subscription of 40rs.<br>Please fill in your details to get your membership ID</p>
	</div>
</div>



<?php
if(ISSET($_POST['submit'])){
 $fullname=$_POST['fullname'];
$street_Adress=$_POST['streetadress'];
$city=$_POST['City'];
$state=$_POST['State'];
$Phonenumber=$_POST['Phonenumber'];
$email=$_POST['email'];
$gender=$_POST['gender'];


$query="INSERT INTO membership_details (Fullname,streetadress,city,state,phonenumber,email,gender)";
$query.="VALUES('{$fullname}','{$street_Adress}','{$city}','{$state}','{$Phonenumber}','{$email}','{$gender}')";
$result=mysqli_query($connection,$query);
if(!$result){
	die("QUERY FAILED".mysqli_error($connection));
}else{
	
}



}


	?>
	

	<div class="container card" style="padding:5px;width:500px;border-radius:30px; ">
	<div class="row justify-content-center">
		<form action="" method="POST">
			<div class="md-form form-group">
				<label for=""></label>
				<input type="text" class="form-control" name="fullname"placeholder="firstname">
			</div>
			<div class="form-group">
				<label for="">Street Adress:</label>
				<input type="text" class="form-control" name="streetadress">
			</div>
			<div class="form-group">
				<label for="">City:</label>
				<input type="text" class="form-control" name="City">
			</div>
			<div class="form-group">
				<label for="">State:</label>
				<input type="text" class="form-control" name="State">
			</div>
			<div class="form-group">
				<label for="">Phone number:</label>
				<input type="text" class="form-control" name="Phonenumber">
			</div>
			<div class="form-group">
				<label for="">Email Adress:</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label for="">gender:</label>
				<input type="text" class="form-control" name="gender">
				
				
			</div>
			<input type="submit" class="form-control btn btn-success" name="submit">
		</form>
	</div>
</div>

</body>

</html>