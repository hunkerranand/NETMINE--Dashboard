<?php
  include "connection.php";
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(!isset($_GET['id'])){
      header("location:SIMP/customer.php");
     

      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from customer where id=$id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    
    while(!$row){
      header("Location: customer.php");
    exit();
    }
    
    $F_name=$row["F_name"];
    $L_name=$row["L_name"];
    $Mobile=$row["Mobile"];
    $Email=$row["Email"];
    $Ship_addr=$row["Ship_addr"];
    $street_addr=$row["street_addr"];
    $city=$row["city"];
    $zip=$row["Zip"];
    
    $Country =$row["Country"];
    
  

  }
  else{
    $F_name= $_POST['F_name'];
    $L_name=$_POST['L_name'];
    $Mobile=$_POST['Mobile'];
    $Email=$_POST['Email'];
    $Ship_addr=$_POST['Ship_addr'];
    $street_addr=$_POST['street_addr'];
    $city=$_POST['city'];
    $Zip=$_POST['Zip'];
    $Country=$_POST['Country'];
   
    
    
    

    $sql = "update customer set Fullname='$fullname',Username='$username', Email='$email',Password='$password' where id='$id'";
    
   
    $result = $con->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="customer.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> FullName: </label>
 <input type="text" name="Fullname" value="<?php echo $fullname; ?>" class="form-control"> <br>

 <label> Username: </label>
 <input type="text" name="Username" value="<?php echo $username; ?>" class="form-control"> <br>

 <label>Email</label>
 <input type="email" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label>Password</label>
 <input type="Password" name="Password" value="<?php echo $password; ?>" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="customer.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>