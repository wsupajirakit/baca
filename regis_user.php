<?php
include('./env/config.php');
    try
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['Cmpass'];
        
        $check_user_db ="SELECT * From member WHERE Username_member = '$user'";
        $query = mysqli_query($objCon,$Ch_user_db);
        $num_rows = mysqli_num_rows($query);
        
        if($num_rows == 0)
        {
            if($pass == $confirm_pass)
            {
                $insql ="INSERT INTO member (Username_member,Password_member,) VALUES ('$user','$pass')";
                $query = mysqli_query($objCon,$insql);
            }
        }
               
    }
    catch(Exception $e)
    {
        echo $e->getmessage();
    }
    finally
    {
        if($con != null)
        {
            mysqli_close($objCon);
        }
    }


?>