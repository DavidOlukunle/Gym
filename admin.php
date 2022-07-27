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
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">

</head>
<body style="background-color:">
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
		<div class="container pt-5" style="padding-top:100px !important;">
<?php
$query="SELECT * FROM membership_details";
$result=mysqli_query($connection,$query);
$count=mysqli_num_rows($result);
echo "<b>you have $count people registered at your gym presently<b>";
?>
</div>
<div class="container pt-5">
	<table class="table table-condensed   table-hover table-bordered">
		<tbody>
			<tr>
				<th>id</th>
				<th>Fullname</th>
				<th>streetadress</th>
				<th>city</th>
				<th>state</th>
				<th>Phonenumber</th>
				<th>email</th>
				<th>gender</th>
			</tr>

			<tbody>
			<?php
			$query="SELECT * FROM membership_details";
			$result=mysqli_query($connection,$query);
			while($row=mysqli_fetch_assoc($result)){
				$id=$row['id'];
$fullname=$row['Fullname'];
$street_Adress=$row['streetadress'];
$city=$row['city'];
$state=$row['state'];
$Phonenumber=$row['phonenumber'];
$email=$row['email'];
$gender=$row['gender'];

			
			echo "<tr>";
			echo "<td>{$id}</td>";
			echo "<td>{$fullname}</td>";
			echo "<td>{$street_Adress}</td>";
		    echo "<td>{$city}</td>";
		    echo "<td>{$state}</td>";
		    echo "<td>{$Phonenumber}</td>";
		    echo "<td>{$email}</td>";
		    echo "<td>{$gender}</td>";





		}
		?>
	</tbody>