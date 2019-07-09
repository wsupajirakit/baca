<?php
include('./env/config.php');
    try
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $confirm_pass = $_POST['Cmpass'];
        
        $check_user_db ="SELECT Username_member From member WHERE Username_member = $user";
        $query = mysqli_query($objCon,$Ch_user_db);

        $ch_username = '';
        
        if( $ch_username == $user)
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
            mysqli_close($con);
        }
    }


?>