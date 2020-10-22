<?php
    session_start();
    include("include/connection.php");
    $user= $_SESSION['user_email'];
        $image = $_GET['id'];
        $name = $_GET['name'];
        echo "<p>$name</p>";
        echo"<img src='images/".$image."'>";
        $sqla = "SELECT * FROM comments ";
        $resultt = mysqli_query($con, $sqla);
            while($roww = mysqli_fetch_assoc($resultt)){
                $comment = $roww['comment'];
                
                $xx = $roww['comment_status_id'];

                $sqlimgs = "SELECT * FROM users WHERE user_id ='$xx' limit 1";
                $resultimgs = mysqli_query($con, $sqlimgs);
                while($rowimgs = mysqli_fetch_assoc($resultimgs)){
                    
                    $yy = $rowimgs['user_name'];
                    echo "<p>$comment</p>";
                    
                }
            }
                    echo "<p>$yy</p>";
                    echo "<div class='details'>";
                    
                    echo "</div>"
?>