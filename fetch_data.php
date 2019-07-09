<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
   include('./env/config.php');
try
   {


        if($_SESSION["role"]=='admin'){
                $sql = "SELECT * FROM member";
        }else if($_SESSION["role"]=='agent'){
                $sql = "SELECT * FROM member WHERE role='member'";
        }




        $result = mysqli_query($objCon,$sql);
        $row = array();
        while($row = mysqli_fetch_array($result))
        {
            $rows[] = $row;
        }
        echo json_encode($rows,true);
    }
   catch(Exception $e)
    {
        echo $e->getmessage();
    }
   finally
    {
        if($objCon != null)
        {
            mysqli_close($objCon);
        }
    }

?>
