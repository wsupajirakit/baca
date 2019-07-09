<?php

include('./env/config.php');
    try
    {
        $id = $_GET['id'];
        
        $Username ='';
        $Password='';
        $credit='';
        $phone_member='';
        $status_approve='';
        $role='';
        $start_date='';
        $end_date='';

        $insql ="UPDATE member SET Username_member = '$Username',Password_member = '$Password',credit ='$credit',phone_member='$phone_member',status_approve ='$status_approve',role ='$role',start_date='$start_date',end_date='$end_date'WHERE id_member = '$id'";
        $query = mysqli_query($objCon,$insql);

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