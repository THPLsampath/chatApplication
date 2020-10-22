<?php 
    $con = mysqli_connect("localhost","root","","mychat") or die("connection was not extablished");

    function getimage(){
        global $con;
        if(isset($_POST['submit'])){
            $sqli = "SELECT * FROM users WHERE user_email = '$user' LIMIT 1";
            $resultr = mysqli_query($con, $sqli);
            if(mysqli_num_rows($resultr) > 0){
                while($rowr = mysqli_fetch_assoc($resultr)){
                    $p = $row['user_id'];

                        $sqlimgs = "SELECT * FROM status WHERE user_status_id ='$x'";
                        $resultimgr = mysqli_query($con, $sqlimgs);
                        while($rowimgr = mysqli_fetch_assoc($resultimgr)){
                            echo "<img src='images/".$rowimgr['imgs']."'>";
                        }
                }
            }
        }
        

    }
?>