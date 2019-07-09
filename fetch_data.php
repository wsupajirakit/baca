<?php
   include('./env/config.php');
try
   {
        $sql = "SELECT * FROM member";
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