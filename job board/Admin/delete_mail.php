<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_type"]!=1){
    header('Location: ../../../../Finalproject/front/index.php');
  
}

include 'connection.php';
if(isset($_POST["checkbox"]))
{
    $checked=$_POST["checkbox"];
    $nbchecked=count($checked);
    for($i=0;$i<$nbchecked;$i++){
        $del_id=$checked[$i];
        $sql="delete from message where ID_msg=$del_id";
        $req=mysqli_query($con,$sql);
    }

    if($req){
        header('Location: mailbox.php');
    }
    else{
        echo "error deleting mail";
    }
}
?>