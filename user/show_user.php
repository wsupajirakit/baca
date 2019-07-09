<?php
include('./env/config.php');
    try
    {
        $id = $_GET['id'];

        $query = "SELECT * from member where id_member = '$id'";
        $resul = mysqli_query($con,$query);
        while($rs = mysqli_fetch_array($resul))
        {
            $row['Username_member'];
            $row['Password_member'];
            $row['credit'];
            $row['phone_member'];
            $row['status_approve'];
            $row['role'];
            $row['start_date'];
            $row['end_date'];
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