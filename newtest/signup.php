<?php
require_once('config/config.php');
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration</title>
  </head>
<body>

<div>

<?php 
if(isset($_POST['create'])){
    
    $firstname  =   $_POST['firstname'];
    $lastname   =   $_POST['lastname'];
    $email      =   $_POST['email'];
    $username   =   $_POST['username'];
    $password   =   $_POST['password'];

    $db = mysqli_connect("localhost","root","","personalpage");
    $duplicate = mysqli_query($db,"select * from users where username ='$username'");

    if(mysqli_num_rows($duplicate)>0){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('username already exists back to login');
        window.location.href='login.php';
        </script>");
    }

    else{
        try{
            $sql = "INSERT INTO users (firstname,lastname,email,username,password ) VALUES (?,?,?,?,?)";
            $stmtinsert = $dbh->prepare($sql);
            $result = $stmtinsert->execute([$firstname,$lastname,$email,$username,$password]);

            if($result)
            {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Succesfully Added');
                window.location.href='login.php';
                </script>");
        
            }
           
    
        }catch(Exception $e)
        {

        }
    }
}

    ?>
    </div>

    <div>
    <form actio="registration.php" method="post">
        <div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-3">
            <h1>Registration</h1>
            <p>Fill up the form with correct details</p>
                <hr class="mb-3">
            <label for="firstname"><b>First Name</b></label>
            <input class="form-control" type="text" name="firstname" required>

            <label for="lastname"><b>Last Name</b></label>
            <input class="form-control" type="text" name="lastname" required>

            <label for="email"><b>Email Address</b></label>
            <input class="form-control" type="text" name="email" required>

            <label for="username"><b>User Name</b></label>
            <input class="form-control" type="text" name="username" required>

            <label for="password"><b>Password</b></label>
            <input class="form-control" type="password" name="password" required>
            <hr class="mb-3">
            <input class="btn btn-primary " type="submit" name="create" value="Sign Up">
 
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