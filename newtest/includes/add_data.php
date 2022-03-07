<?php 
include 'includes/namedisplay.php';
if(isset($_POST['post_button'])){
    $id = $var1;
    $content   =   $_POST['content'];
    $sql = "INSERT INTO data (content,user_id) VALUES (?,?)";
    $stmtinsert = $dbh->prepare($sql);
    $result = $stmtinsert->execute([$content,$id]);

    if($result){
            
        header("Location:index_copy.php");
    }
    else{
        echo 'There Was a Error';
    }

}
    ?>