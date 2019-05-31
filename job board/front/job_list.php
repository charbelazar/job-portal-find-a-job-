<?php 
if(isset($_POST["job_title"])){
    include 'connection.php';
    $title=$_POST["job_title"];
    $sql="select  DISTINCT title from jobpost where title like '%$title%' ";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    if($nbrows>0){
        while($row=mysqli_fetch_array($result)){
            echo "<option >".$row[0]."</option>";
        }
    }
    else{
        echo "<option > </option>";
    }
    
}
else{
    header('Location: index.php');
}





?>