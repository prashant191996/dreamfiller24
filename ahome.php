<?php
session_start();
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin Home</title>
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

<div class="container mt-4">

<hr>


  <!-- navigation menu ends here -->
  <!-- creating headin of dashboard -->

    <div class=" py-3 text-white" style="background-color: darkslategray">
        <h1>&nbsp;&nbsp;<i class="fas fa-chart-bar"></i>  <span id="result"></span> Dashboard  </h1>
    </div>
    <div class="bg-light p-3">

    <div class="row">
       <div class="col-md-12" >
         <a href="booked.php" class="btn btn-primary d-block font-weight-bold" >
          <i class="fas fa-plus"></i> &nbsp;Booked</a>
       </div>
       

    </div>
  </div>
  <!-- dashboard heading ends -->
  <!-- dashboaRd contet start -->
  <div class="container-fluid" >

    <div class="row" >
      <div class="col-8" >
        <h2 style="background-color: blanchedalmond;" class="text-black p-2 ">Success Achievements</h2>
        <div class="container">
        <!-- creating table -->
        <table class="table mt-3">
          <thead class="table-dark">
            <tr>
              <th>EVENT</th>           
              <th>PRICE</th>
              
            </tr>
          </thead>
          <tbody> 
         
        <tr>
            <td>Birthday</td>
            <td>10000</td>
            
        </tr>
        <tr>
            <td>Weeding</td>
            <td>60000</td>
            
        </tr>
        <tr>
            <td>Kitty Party</td>
            <td>8000</td>
            
        </tr>
        <tr>
            <td>Exibition</td>
            <td>20000</td>
            
        </tr>
        <tr>
            <td>Concert</td>
            <td>30000</td>
            
        </tr>
        <tr>
            <td>Conference</td>
            <td>15000</td>
            
        </tr>
        

          </tbody>
        </table>  
       
        <table class="table mt-3">
          <thead class="table-dark">
            <tr>
              <th>Decoration</th>           
              <th>PRICE</th>
              
            </tr>
          </thead>
          <tbody> 
         
        <tr>
            <td>Medium</td>
            <td>10000</td>
            
        </tr>
        <tr>
            <td>High</td>
            <td>15000</td>
            
        </tr>
        
        

          </tbody>
        </table>  
        
        <table class="table mt-3">
          <thead class="table-dark">
            <tr>
              <th>Catering</th>           
              <th>PRICE</th>
              
            </tr>
          </thead>
          <tbody> 
         
        <tr>
            <td>Medium</td>
            <td>15000</td>
            
        </tr>
        <tr>
            <td>High</td>
            <td>25000</td>
            
        </tr>
        
        

          </tbody>
        </table>     
      </div>
    </div>
      <div class="col-md-4 mt-4">
          <div class="card" style="background-color: #2b542c">
            <div class=" bg-primary text-white p-4">
              <i class="fas fa-list-ul fa-6x"></i>
              <h2 class="float-right font-weight-bold" style="font-size: 50px; text-align: center;" >06 <span class="d-block" >Events</span></h2>
            </div>
            <div class="card-footer text-primary">
              <h6 class="text-center"><a href=""> View Details
                  <i class="fas fa-arrow-alt-circle-right"></i></a></h6>
            </div>
          </div>
          <div class="card mt-5">
            <div class=" bg-success text-white p-4 ">
              <i class="fas fa-list-ul fa-6x"></i>
              <h2 class="float-right font-weight-bold" style="font-size: 40px; text-align: center;">08 <span class="d-block">City</span></h2>
            </div>
            <div class="card-footer text-primary">
              <h6 class="text-center"><a href=""> View Details
                  <i class="fas fa-arrow-alt-circle-right"></i></a></h6>
            </div>
          </div>
          <div class="card mt-5">
            <div class=" bg-warning text-white p-4 ">
              <i class="fas fa-list-ul fa-6x"></i>
              <h2 class="float-right font-weight-bold" style="font-size: 30px; text-align: center;">10 <span class="d-block">Special Features</span></h2>
            </div>
            <div class="card-footer text-warning">
              <h6 class="text-center"><a href=""> View Details
                  <i class="fas fa-arrow-alt-circle-right"></i></a></h6>
            </div>
          </div>
      </div>
    </div>

  <!-- dashboard content ends -->
  <!-- footer start -->
        <footer class="bg-light text-dark p-5 mt-2">
          <h1 class="text-center">OUR PRODUCT IS BEST DREAM FILLER.
            <i class="fab fa-twitter"></i></h1>
        </footer>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
