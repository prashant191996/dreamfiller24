<!DOCTYPE html>
<html>
<head>
     
	<title>Feedback Page</title>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<style type="text/css">
h3{
	color: #ffffff;
	padding-bottom: 70px;
	font-family: "Times New Roman", Times, serif;
}
h1{
   padding-bottom:150px;
   font-weight: bold;
  color: #ffbb00;
  font-family: "Times New Roman", Times, serif;
  font-size: 50px;
}

.btn-success{
	transition: 0.5s ease;
	letter-spacing: 2px;
	font-weight: bold;
	font-size: 18px;
}


</style>

<div class="container">


<div class="col-md-6">
<div>

<img src='pics/romant7.jpeg' width="100%" height="650px">
<div class="carousel-caption">
	<h1>The Providers</h1>
	<h3>We are providing our best servies to our Customer's. We are treated our Customer as God</h3>

</div>

</div>
</div>


<div class="col-md-6">


	<img src='pics/images1997.png' width="260px">
<div class="row">
<form>
		<div class="col-md-6">

<input type="text" name="fname" placeholder="First Name*" class="form-control form-group" required="" >
</div>
<div class="col-md-6">
<input type="text" name="lname"placeholder="Last Name*"   class=" form-control form-group" required=""      >
</div>
<br><br>
<label>Our Environment*</label>
<br><br>
<select class="form-control" required="" >
	<option  selected disabled> Select Enviorment</option>
<option >Excellent</option>
<option >Good</option>
<option >No deficiency</option>
<option >No cafeteria</option>
<option >Cleanliness issue</option>
<option >Other</option>


</select>

<br><br><br>
<label>How would you rate achievement of your Event Planner (out of 5)?*</label>
<br><br>
<select class="form-control" >
	<option  selected disabled>Rate</option>
<option >5</option>
    <option >4</option>
<option >3</option>
<option >2</option>
<option >1</option>


</select>
<br><br>

<label >How would you rate achievement of your Event Planner (Description)?</label>
<br><br>
<input type="text" name="decr" class="form-control" placeholder="Description" style="height: 60px;" required="" >
<br>
<br>

<button class="btn btn-success btn-block">Submit</button>


</form>
</div>



</div>





</div>
</body>
</html>