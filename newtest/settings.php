<?php
require_once('config/config.php');
session_start();
?>


<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=12">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="stylesettings.css" rel="stylesheet" type="text/css">
    <title>Profile</title>
  </head>
<body>

<?php 
include 'includes/namedisplay.php';
if(isset($_POST['btn_fname'])){
  $newfname   =   $_POST['alterfname'];
  $sql = "UPDATE  users SET firstname=? WHERE id = $var1 ";
  $stmtinsert = $dbh->prepare($sql);
  $result = $stmtinsert->execute([$newfname]);}

  if(isset($_POST['btn_lname'])){
    $newlname   =   $_POST['alterlname'];
    $sql = "UPDATE  users SET lastname=? WHERE id =$var1 ";
    $stmtinsert = $dbh->prepare($sql);
    $result = $stmtinsert->execute([$newlname]);}

    if(isset($_POST['btn_email'])){
      $newemail   =   $_POST['alteremail'];
      $sql = "UPDATE  users SET email=? WHERE id =$var1 ";
      $stmtinsert = $dbh->prepare($sql);
      $result = $stmtinsert->execute([$newemail]);}

    if(isset($_POST['btn_user'])){
      $newpass   =   $_POST['alteruser'];
      $sql = "UPDATE  users SET username=? WHERE id =$var1 ";
      $stmtinsert = $dbh->prepare($sql);
      $result = $stmtinsert->execute([$newpass]);
      echo ("<script LANGUAGE='JavaScript'>
        window.alert('Redirecting to LOGIN PAGE');
        window.location.href='logout.php';
        </script>");
    }

      if(isset($_POST['btn_pass'])){
        $newpass   =   $_POST['alterpass'];
        $sql = "UPDATE  users SET password=? WHERE id =$var1 ";
        $stmtinsert = $dbh->prepare($sql);
        $result = $stmtinsert->execute([$newpass]);}

?>

<?php 
 $db = mysqli_connect("localhost", "root", "", "personalpage");
  $msg = "";
  if (isset($_POST['upload'])){
  	$image = $_FILES['image']['name'];
  	$target = "image/".basename($image);
  	$sql = "UPDATE users SET image ='$image' where id= $var1";
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo ("<script LANGUAGE='JavaScript'>
      window.alert(Image Uploaded Redirecting to Profile');
      window.location.href='index_copy.php';
      </script>");

  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>



            <br>
                <!--top bar-->
                <?php include 'includes/topbar.php' ?>
                <!--end of top bar -->



                <div id="container">
                  <div id="container_setting">
                     <div id="settings_bar">Settings             
                       <div id="items">Personal Info
                        </div>
                         </div>

                        <div id="setting_right">
                           <form method="POST">
                             <br> CHANGE NAME </br>
                               First Name
                               <br>
                                <input name="alterfname" type="text" placeholder="First name">
                                  <input name="btn_fname" type="submit" Value="Change Name"> 
                                    <br>

                                      Last Name
                                        <br>
                                          <input name="alterlname" type="text" placeholder="Last Name">
                                             <input name="btn_lname" type="submit" Value="Change Name"> 
                                               <br>

                                                  <br>
                                                     User Name
                                                      <br>
                                                         <input name="alteruser" type="text" placeholder="Change Username">
                                                            <input name="btn_user" type="submit" Value="Change User Name"> 
                                                               <br>

                                                                  Password
                                                                    <br>
                                                                       <input name="alterpass" type="password" placeholder="Change Password">
                                                                          <input name="btn_pass" type="submit" value="Change Password"> 
                                                                            <br>
                      
                                                                               Email Address
                                                                                <br>
                                                                                   <input name="alteremail" type="text" placeholder="Change Email">
                                                                                      <input name="btn_email" type="submit" Value="Change Email Address"> 
                                                                                        <br>
                                                                                            </form>


                          <form method="POST" action="settings.php" enctype="multipart/form-data">
  	                        <input type="hidden" name="size" value="1000000">
  	                           <div>
  	                              <input type="file" name="image"> 
  		                              <button type="submit" name="upload">UPLOAD</button>
                                        </form>
</div>
</div>
</div>
</div>


























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
   

</body>
</html>