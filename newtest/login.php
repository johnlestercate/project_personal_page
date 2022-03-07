<?php
session_start();
error_reporting(0);
require_once('config/config.php');
if (!empty($_SESSION['login'])) {
    header("location: index_copy.php");
}
else{
if(isset($_POST['login'])){
    $username   =   $_POST['username'];
    $password   =   $_POST['password'];

      $sql =  "SELECT username,password from users where username =:username and password =:password";
      $query = $dbh->prepare($sql);
      $query->bindParam(':username', $username, PDO::PARAM_STR);
      $query->bindParam(':password', $password, PDO::PARAM_STR);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);
   
    if($query->rowCount() > 0){
     
        $_SESSION['login'] = $_POST['username'];
        $currentpage = $_SESSION['redirectURL'];
        echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
    }
    else{
        echo "<script>alert('Invalid Details');</script>";
    }

}
}
    ?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
<body>

    <div>
    <form action="login.php " method="post">
        <div class="container">
        <div class="row">
            <div class="col-sm-3 mt-5 container-fluid  justify-content-center">
            <h1>Login</h1>
                <hr class="mb-3">
            <label for="username"><b>User Name</b></label>
            <input class="form-control" type="text" name="username" required>

            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password" name="password" required>
            <hr class="mb-3">
            <input class="btn btn-primary container-fluid justify-content-center" type="submit" name="login" value="Login">
            <a class="btn btn-primary mt-2 container-fluid  justify-content-center" href="signup.php">Register</a>
</div>
</div>
</div>
</form>     
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
   

</body>
</html>