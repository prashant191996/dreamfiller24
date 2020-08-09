<?php
include("connection.php");
$sql="Select * from f1";
$result= $a-> query($sql)
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Booking Detail</title>
    <style>
        #menu ul li a:hover{
	background-color: white;
	color:black;
	font-weight: bold;
	border-radius: 5px;
}

@media only screen and (max-width: 768px){
	[class*="col-"]{
		width: 100%;
	}
}

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dream Filler</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="booked.php">Booking Detail</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  


  </div>
</nav>


  <!-- navigation menu ends here -->
  <!-- creating headin of dashboard -->
    <div class=" py-3 text-white" style="background-color: pink">
      <h1>&nbsp;&nbsp;<i class="fas fa-chart-bar"></i> Dashboard</h1>
    </div>
    <div class="bg-light p-3">

    <div class="row">
    
       <div class="col-md-12">
         <a href="booked.php" class="btn btn-primary d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp; BOOKED</a>
       </div>
       

    </div>
  </div>
  <!-- dashboard heading ends -->
  <!-- dashboaRd contet start -->
  <div class="container-fluid">

    <div class="row">
      <div class="col-8">
        <h2 style="background-color: purple;" class="text-white p-2 ">Booking Status</h2>
        <div class="container">
        <!-- creating table -->
        <table class="table mt-3">
          <thead class="table-dark">
            <tr>
              <th>Id</th>           
              <th>Name</th>
              <th>Contact</th>
              <th>Email</th>
              <th>Address</th>
              <th>DOE</th>
              <th>Event</th>
              <th>Decoration</th>
              <th>Catering </th>
              <th>RATE </th>
              <th>TIME</th>


              <th></th>
            </tr>
          </thead>
          <tbody> 
          <?php
              while ($row= $result-> fetch_assoc())
              {
          ?>        

           
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Fname']; ?></td>
            <td><?php echo $row['contact']; ?></td>
           <td><?php echo $row['email']; ?></td>
           <td><?php echo $row['address']; ?></td>
           <td><?php echo $row['Date_of_Event']; ?></td>
           <td><?php echo $row['Event']; ?></td>
           <td><?php echo $row['Decoration']; ?></td>
           <td><?php echo $row['Catering']; ?></td>
           <td><?php echo $row['display']; ?></td>
           <td><?php echo $row['dt']; ?></td>

        </tr>
        <?php

             }

         ?>

          </tbody>
        </table>
        <button onclick="myfun()">Print</button>

        <script>
            function myfun() {
                window.print();
            }
        </script>
      </div>
    </div>
     

  <!-- dashboard content ends -->
  <!-- footer start -->
        <footer class="bg-light text-dark p-5 mt-2">
          <h1 class="text-center">OUR PRODUCT IS BEST DREAM FILLER.
            </h1>
        </footer>
  <!-- footer ends here -->
  <!-- /Start your project here-->
  <!-- SCRIPTS -->
  <!-- JQuery -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
  </div>
</body>

</html>