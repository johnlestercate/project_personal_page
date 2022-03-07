<?php
include 'includes/namedisplay.php';
$username = $var1;
$db = mysqli_connect("localhost","root","","personalpage");
$sql = "SELECT content,created_at FROM data WHERE user_id = '$username' ORDER BY created_at DESC ";
$result = mysqli_query($db,$sql);

if ($result ->num_rows > 0){
while($row = mysqli_fetch_assoc($result)) 
{

    echo "<div id='post'>
    <div>
    <div id='username_post'>";
    echo "</div> 
    <div id='post_concent'>
    ".$row["content"]."
    </div>
    <br/></br>
    <a href='comment_display.php'>Comment</a>
    <div id='date_post'>
    <a>".$row["created_at"]."</a></div>
    </div>
    </div>
    <hr>
    ";
}
}
?>   