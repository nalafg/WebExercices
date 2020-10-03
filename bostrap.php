<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wakamole_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, nombre, apellido, correo, estado FROM usuarios";
$result = $conn->query($sql);
 ?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div class="jumbotron text-center">
  <h1>Ejercicio Bootstrap</h1>
  <p>Responsive page</p> 
</div>

<div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel" >
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.laylita.com/recetas/wp-content/uploads/Mayonesa-de-aguacate-y-cilantro.jpg" class="d-block w-90" height="550px" style="margin-left: auto; margin-right: auto;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.laylita.com/recetas/wp-content/uploads/Aderezo-de-mayonesa-con-aguacate-y-cilantro.jpg" class="d-block w-90" height="550px" style="margin-left: auto; margin-right: auto;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.laylita.com/recetas/wp-content/uploads/Mayonesa-picante-de-aguacate-y-cilantro.jpg" class="d-block w-90" height="550px" style="margin-left: auto; margin-right: auto;" alt="...">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







<div class="container" style="margin-top: 50px">
  <div class="row">

      <div class="card col-sm-4" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSXQTjvmOmq2yZQbsrOfVJI6y5sydDnjLAHlw&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>


      <div class="card col-sm-4" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSXQTjvmOmq2yZQbsrOfVJI6y5sydDnjLAHlw&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>


      <div class="card col-sm-4" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSXQTjvmOmq2yZQbsrOfVJI6y5sydDnjLAHlw&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

 </div>
</div>


  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Sing up
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sing UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <form>
              <div class="form-group">
                <label for="exampleInputPassword1">First</label>
                <input type="name" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Last</label>
                <input type="name" class="form-control" id="exampleInputPassword1" placeholder="Apellido">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="form-group form-check">
              </div>
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<! –– formulario ––>



	<div class="super_div">
		
		<center>
			<form id="formulario">
				<fieldset style="width: 40%;">
					<legend>
						Datos del usuario
					</legend>
					<label> email: </label>
					<input type="text" style="width: 100%;height: 40px;" name="email" id="email" value="" placeholder="">

					<label>contraseña</label>

					<input type="text" style="width: 100%;height: 40px;" name="password" id="password" value="" placeholder="">

					<label>año de nacimiento</label>

					<input type="text" style="width: 100%;height: 40px;" name="year" id="year" value="" placeholder="">

					<button type="button" id="guardar_info"> Guardar regisro</button>
				</fieldset>
			</form>



			<form id="formulario">
				<section style="width: 80%; margin-top: 20px">
					<legend>
						Registro de Usuarios
					</legend>

					<table class="egt" style="border: 1px;width: 100%;" border="5px">
						<tr>
							<td>ID</td>
						    <td>Email</td>
						    <th>Pasword</th>
						    <th>Year</th>
						</tr>



						<?php 
						if ($result->num_rows > 0) {
						  // output data of each row
						  while($row = $result->fetch_assoc()) {
						 ?>

						<tr>
							<td><?php echo $row['ID'] ?></td>
							<td><?php echo $row['nombre'] ?></td>
							<td><?php echo $row['apellido'] ?></td>
							<td><?php echo $row['correo'] ?></td>
							<td><?php echo $row['estado'] ?></td>
						</tr>

						<?php 
						  }
						} else {
						  echo "0 results";
						}
						$conn->close();
						?>


					</table>

				</section>
			</form>
		
			
		</center>
		<h1 id="edad_h1">  </h1>
	</div>




			
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	
	  
	$("#guardar_info").click(function(){
	  	console.log("presionaste el boton de guardar");
	  	var email = $("#email").val();
	  	var pass = $("#password").val();
	  	var year = $("#year").val();
	  	var num = 0;
	  	$.ajax({
	  		url:'file.php',
	  		data: {email,pass,year},
	  		type:'POST',
	  		dataType:'text',
	  		success:function(r){
	  			//console.log(r);
	  			//$("read_h1").text(r);


	  		}
	  	})
		    
	  	location.reload();
  	});
	 






</body>
</html>
