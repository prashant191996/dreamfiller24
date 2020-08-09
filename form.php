<?php
if(isset($_POST['Fname'])){
include('connection.php');

$Fname=$_POST['Fname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$Date_of_Event=$_POST['Date_of_Event'];
$Event=$_POST['Event'];
$Decoration=$_POST['Decoration'];
$Catering=$_POST['Catering'];
$display=$_POST['display'];


$sql= "INSERT INTO `hd`.`f1` (`Fname`, `contact`, `email`, `address`, `Date_of_Event`, `Event`, `Decoration`, `Catering`, `display`, `dt`) VALUES ('$Fname', '$contact', '$email', '$address', '$Date_of_Event', '$Event', '$Decoration', '$Catering', '$display', CURRENT_TIMESTAMP)";

if($a->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $a->error";
}
  // Close the database connection
  $a->close();
}
?>
<!DOCTYPE html>

<html>
<head>
    
	<title>FORM</title>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<style >
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
h2{
   padding-bottom: 40px;
   font-weight: bold;
  color: Black;
  font-family: "Times New Roman", Times, serif;
  font-size: 60px;
}


</style>

<script>
   var add_1 = 0;
   var add_2 = 0;
   var add_3= 0;

function displayValues() {
	add_1 = parseInt($('.Event').val());
    add_2 = parseInt($('.Decoration').val());
    add_3 = parseInt($('.Catering').val());

  $(".addition").text(add_3+add_2 + add_1 );
}

$(document).ready(function(){
    $(".Event").change(displayValues);
    $(".Decoration").change(displayValues);
  	$(".Catering").change(displayValues);
});



</script>

<body>

<div class="container">


<div class="col-md-6">
<div>

<img src='pics/romant2.jpeg' width="100%" height="980px">
<div class="carousel-caption">
	<h1>BOOKING YOUR CHOICE</h1>
	<h3>This is the First Step taken by you to get your dream Successfull. You Choice your option And We make that Option Great  </h3>

</div>

</div>
</div>
<div>


<div class="col-md-6">


    <h2>MAKE YOUR BOOKING</h2>

<div class="row">
<form method="POST" action="">
     
<div class="col-md-6">
  <label>Name :</label>
<input type="text" name="Fname"  placeholder=" Enter your Name" class="form-control form-group" required/>
</div>
<div class="col-md-6">
    <label>Contact No :</label>
<input type="number"  name="contact" placeholder="Enter your Contact No." class=" form-control form-group" required/>
</div>

    <label >Email</label>

<input type="email"  name="email" class="form-control from-group" placeholder="Enter your Email"  required/>

<br>
    <label >Address</label>

<input type="textarea" name="address" class="form-control form-group" placeholder="Enter your Address" style="height: 60px;" required/>


    <label >Date of Event</label>

<input type="date" name="Date_of_Event" class="form-control form-group" required/>

<label>Event :</label>
   <select   class="Event  form-control"   name="Event" required/>
            <option value="" selected disabled> Select Quality</option>
            <option value="10000" >Birthday</option>
            <option value="40000">Weeding</option>
            <option value="5000">Kitty Party</option>
            <option value="20000">Exibition</option>
            <option value="25000">Concert</option>
            <option value="8000">Conference</option>
        </select>
<br>


    <label>Decoration</label>

        <select   class="Decoration  form-control"   name="Decoration" required/>
            <option  value="" selected disabled> Select Quality</option>
            <option  value="10000">Medium</option>
            <option  value="15000">High</option>
        </select>



    <br>
    <label>Catering</label>

         <select  class="Catering form-control"   name="Catering" required/>
	         <option value="" selected disabled> Select Quality</option>
             <option value="10000" >Medium</option>
             <option value="15000">High</option>
         </select>

<br>

<label >Total Budget</label>
    <br>
    <textarea class="form-control form-group addition" name="display" value="addition" required/></textarea>
<br>
    <br>

    <button onclick="popUp()" id="pop" type="submit" name="submit">SUBMIT</button>
<br>
<script>
   function popUp() {
    swal({
      title: "Good job!",
      text: "Your Booking Sucessfully",
      icon: "success",
      button: "Aww yiss!",
     });
      
   }
</script>
 

</form>

</div>
</div>

</div>
</div>

</body>

</html>
