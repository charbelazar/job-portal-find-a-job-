<?php
include 'connection.php';
if(isset($_POST["register"])){
    $usertype=$_POST["usertype"];
    $mail=$_POST["email"];
    $pass=$_POST["pass"];
    $gender=$_POST["gender"];
    $day=$_POST["day"];
    $month=$_POST["month"];
    $year=$_POST["year"];
    $phone=$_POST["phone"];
    $date_of_birth=$year."-".$month."-".$day;
    $registration_date=date("Y/m/d");
   
    //user account  registration//
    $sql="select * from user_account where email='$mail' ";
    $result=mysqli_query($con,$sql);
    $nbrows=mysqli_num_rows($result);
    //check if email exist
    if($nbrows > 0){
        echo "error_email_is_taken";
    }
    else{
    // inset data in user_account table//
    $sql="insert into user_account (user_type_ID,email,password,date_of_birth,gender,phone_number,registration_date) values($usertype,'$mail','$pass','$date_of_birth','$gender','$phone','$registration_date')";
    $req=mysqli_query($con,$sql);
    if($req){
        //get the last user_account id//
        $sql="select max(ID_user) from user_account";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $id=$row[0];
        
        //user type registarion//
        if($usertype=="3"){// if user type=company ,get data of company from register form//
            $companyname=$_POST["companyname"];
            $address=$_POST["address"];
            $state=$_POST["state"];
            $city=$_POST["city"];
            $website=$_POST["website"];
            
            //insert data into company_profile table//
            $sql="insert into company_profile (ID_user,company_name,address,city,state,website) values ($id,'$companyname','$address','$city','$state','$website')";
            $req=mysqli_query($con,$sql);
            if($req){
                echo "success";
            }
            else{
                echo "error_registration_company";
            }

        }

        
        if($usertype=="2"){
       
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $address=$_POST["address"];
            $nationality=$_POST["nationality"];
            $prehour=$_POST["prehour"];
            $workingexp=$_POST["workingexp"];
            $degree=$_POST["degree"];
            $fieldofstudy=$_POST["fieldofstudy"];
            $school=$_POST["school"];
            
           
            
            $sql=" insert into jobseeker_profile (ID_user, first_Name, last_name, address,nationality,salary, experience) VALUES ($id, '$fname', '$lname', '$address', '$nationality', '$prehour', '$workingexp')";
            $req=mysqli_query($con,$sql);
            if($req){
               
               
                //get the last jobseeker id from jobseeker profile table///
                $sql="select max(ID_jobseeker) from jobseeker_profile";
                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($result);
                $id_jobseeker=$row[0];//the last id of last jobseeker registered//
                

                
                ///insert skills into skills_jobseeker table ///
                 //get the id of skills //
            $skillset=$_POST["skillset"];
            $skill = explode("|",$skillset);
            $nbskill=count($skill)-1;//get the number of skills//
            /////////////////////////
                 $skills_jobseeker="";
                for($i=0;$i<$nbskill;$i++){
                    $sql="insert into skills_jobseeker (ID_jobseeker,ID_skill) values($id_jobseeker,$skill[$i])";
                    $req=mysqli_query($con,$sql);
                    if($req){
                        $skills_jobseeker="success"; //data added to skills_jobseeker
                    }
                    else{
                        $skills_jobseeker="fail";//data not added to skills_jobseeker
                    }

                    

                 }

                 if($skills_jobseeker=="success"){ //if data are added to skills_jobseeker table ,then go to add data to education_jobsseker table
                        
                         // insert data in education_jobseeker table//
                $sql="insert into education_jobseeker (degree,field_of_study,university,ID_jobseeker) values ('$degree','$fieldofstudy','$school',$id_jobseeker)";
                $req=mysqli_query($con,$sql);
                if($req){ // if data are added to education_jobseeker table ,then registarion completed
                    echo "success";
                }
                else{
                
                    echo "error_education_jobseeker";//data are not added to education_jobseeker table , registration failed
                }
                //-------------------------------------------//
                      
            }
            else{
                echo "error_skills_jobseeker";//data not added to skills_jobseeker table
            }

                }

               



            
            else{
                echo "  error_jobseeker_profile";//data not added to jobsseker_profile table
            }

        
        }

    

    }
    else{
        echo "error_user_account";//data not added to user_account table
    }
    }

    
    

   

    
}


?>