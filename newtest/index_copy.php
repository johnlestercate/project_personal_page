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
    <link href="styleindex.css" rel="stylesheet" type="text/css">
    <title>My Page</title>
  </head>
<body>

<?php include 'includes/add_data.php'; ?>
            <br>
                <!--top bar-->
                <?php include 'includes/topbar.php' ?>
          
                <!--end of top bar -->


                            <div id="cover">
                            
                                        <!--Below cover Area-->
                                     <div id="display">
                                            <div id="left_display">
                                                <div id="profile_bar">
                                                <img src="image/<?php echo $varimage ?>" id ="profile_pic"><br>
                                                
                                                <?php  include 'includes/namedisplay.php';
                                                echo "<p>".$f_name." ".$l_name."</p>";?>
                                              
                                                <ul>
                                                   <li>About me</li>
                                                   <li>Friends</li>
                                                   <li><a href="settings.php">Settings</a></li>
                                                    <li><a href="logout.php">Logout</a></li>
                                                    </ul>
                                                </div>
                                                </div>

                                                <div id="right_display">
                                                    <div id="post_area">
                                                        <form method="post">
                                                        <textarea name="content" placeholder="your text here!"></textarea>
                                                        <input name="post_button" type="submit" value="Post">
                                                        </form>                                        
                                                        <br>
                                                        <br>
                                                        </div>                                          
                                                                            
                                        <div id="post_display">
                                        <?php include 'includes/post_display.php'?>
                                   

                            
                                            


                                    
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