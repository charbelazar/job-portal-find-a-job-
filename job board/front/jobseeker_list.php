<?php 
if(isset($_POST["jobseeker_keyword"])){
    include 'connection.php';
    $keyword=$_POST["jobseeker_keyword"];
    $sql="select DISTINCT  field_of_study from education_jobseeker where field_of_study like '%$keyword%' ";
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