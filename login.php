<?php
    $server= "localhost:3306";
    $username="root";
    $password="Root@root123";
    $database="server_management";
    $conn = mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die("Error" .mysqli_connect_error());
    }

?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql="Select * from signup where EmailID='$email'";
        $result=mysqli_query($conn,$sql);
        $result = mysqli_fetch_row($result);
        if(is_null($result)) {
            // Give Waring Wrong username or password
        }
        else {
            if ($result[1] == $password) {
                header("Location: /phpmicroproject/welcome.php");
            }
            else {
                // Give Waring Wrong username or password
            }
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>SRM Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


</head>
<style>
  .bob{
dispaly:block;
margin-top:120px;
margin-left:auto;
margin-right:auto;
  width:50%;
}

</style>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="admin.php">PLUSgetWAY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact US</a>
          </li>
          <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-fill"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="signup.php">Sign UP</a></li>
            
</li>
        </ul>


      </div>
    </div>
  </nav>

  <div class="bob shadow">
  <div class="container my-3">
    <h3 class="text-center">Log in </h3>
  <form action="/phpmicroproject/login.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="email" class="form-control" id="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  
  <button type="submit" class="btn btn-success mb-5">Log in</button>
</form>
  </div>
  </div>


   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>