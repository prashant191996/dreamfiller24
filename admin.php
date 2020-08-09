<?php
include("connection.php");
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


    <title>Admin Panel</title>
  </head>
  <style>
  .main  {
	  margin-top:120px;
  }
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">DREAM FILLER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">ADMIN PANEL </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">logout </a>
      </li>
    
      

      
     
    </ul>
  </div>
</nav>
			<center>
			<div style="background:rgba(255,255,255,.5); width: 80%;" class="main" >
	       <form action="" method="post">


	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       		<tr>
	       		<td width="50%" height="50px">Password</td>
	       		<td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
	       	</tr>
	       	<tr>
	       		<td colspan="2"><input type="submit" name="sub" value="Login" style="width: 150px;height: 50px;border-radius: 30px;opacity: 0.8"></td>
	       	</tr>
	       </table>
	       </form>
<?php
if(isset($_POST['sub']))
{
$un=$_POST['un'];
$ps=$_POST['ps'];
$q1="select * from admin";
$run=mysqli_query($a,$q1);
$row=mysqli_fetch_array($run);
$u=$row['un'];
$p=$row['ps'];
if($un==$u && $ps==$p)
{
$_SESSION['un'] = $un;
header("Location:ahome.php");
}
else
{
header("Location:admin.php?Wrong User");
}
}
?>	
	</div></center>
		</div>
	
	</div>
  </div>
</body>

</html>