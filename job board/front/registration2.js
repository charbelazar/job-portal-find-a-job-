
 $(document).ready(function(){
    $('#btn_register').click(function(){
       var usertype=2;
       var check="true";
       var email=$("#textbox_email").val();
       var pass=$("#textbox_password").val();
       var gender=$("#select_gender option:selected").text();
       var day=$("#select_day option:selected").text();
       var month=$("#select_month option:selected").text();
       var year=$("#select_year option:selected").text();
       var phone=$("#textbox_phone").val();
       var label_email=$("#error_email").html();

        var fname=$("#textbox_firstname").val();
        var lname=$("#textbox_lastname").val();
        var address=$("#textbox_address").val();
        var nationality=$("#select_nationality option:selected").text();
        var prehour=$("#textbox_prehour").val();
        var workingexp=$("#textbox_workingexp").val();

        var degree=$("#textbox_degree").val();
        var fieldofstudy=$("#textbox_fieldofstudy").val();
        var school=$("#textbox_school").val();
        var skillcheck=$("#select_skill option:selected").text();
      
       
        
      
        
        

        
        
       

        if(email==""){
          check="false";
          $("#textbox_email").css("border-color","red");
          $("#error_email").css("color","red");
          $("#error_email").html("Email is required !!!!");
          }
          else if(label_email !=="Email"){
            check="false";
            $("#textbox_email").css("border-color","red");

          }
          else{
           $("#textbox_email").css("border-color","");
           $("#error_email").css("color"," ");
           $("error_email").html("Email");
           
          }

           if(pass==""){
          check="false";
          $("#textbox_password").css("border-color","red");
          $("#error_password").css("color","red");
          $("#error_password").html("Email is required !!!!");
          }
          else{
           $("#textbox_password").css("border-color","");
           $("#error_password").css("color"," ");
           $("#error_password").html("Password");
          }

          if(gender==""){
            check="false";
            $("#select_gender").css("border-color","red");
            $("#error_select_gender").css("color","red");
            $("#error_select_gender").html("Please select your gender !!!");
          }
          else{
           $("#select_gender").css("border-color","");
           $("#error_select_gender").css("color","");
           $("#error_select_gender").html("Gender");
          }

          if(day=="" || day=="Day"){
            check="false";
            $("#select_day").css("border-color","red");
            $("#error_select_day").css("color","red");
            $("#error_select_day").html("Date of birth required !!!");
          }
          else{
           $("#select_day").css("border-color","");
           $("#error_select_day").css("color","");
           $("#error_select_day").html("Date of Birth ");
          }

           if(month=="" || month=="Month"){
            check="false";
            $("#select_month").css("border-color","red");
            $("#error_select_day").css("color","red");
            $("#error_select_day").html("Date of birth required !!!");
          }
          else{
           $("#select_month").css("border-color","");
           $("#error_select_day").css("color","");
           $("#error_select_day").html("Date of Birth ");
          }

           if(year=="" || year=="Year"){
            check="false";
            $("#select_year").css("border-color","red");
            $("#error_select_day").css("color","red");
            $("#error_select_day").html("Date of birth required !!!");
          }
          else{
           $("#select_year").css("border-color","");
           $("#error_select_day").css("color","");
           $("#error_select_day").html("Date of Birth ");
          }

            if(phone==""){
          check="false";
          $("#textbox_phone").css("border-color","red");
          $("#error_phone").css("color","red");
          $("#error_phone").html("Mobile Phone is required !!!");

          }
          else{
           $("#textbox_phone").css("border-color","");
           $("#error_phone").css("color","");
           $("#error_phone").html("Mobile Phone");
          }

           if(fname==""){
          check="false";
          $("#textbox_firstname").css("border-color","red");
          $("#error_firstname").css("color","red");
          $("#error_firstname").html("First Name is required !!!");

          }
          else{
           $("#textbox_firstname").css("border-color","");
           $("#error_firstname").css("color","");
           $("#error_firstname").html("First Name");
          }

           if(lname==""){
          check="false";
          $("#textbox_lastname").css("border-color","red");
          $("#error_lastname").css("color","red");
          $("#error_lastname").html("Last Name is required !!!");

          }
          else{
           $("#textbox_lastname").css("border-color","");
           $("#error_lastname").css("color","");
           $("#error_lastname").html("Last Name");
          }

           if(address==""){
          check="false";
          $("#textbox_address").css("border-color","red");
          $("#error_address").css("color","red");
          $("#error_address").html("Address is required !!!");
          }
          else{
           $("#textbox_address").css("border-color","");
           $("#error_address").css("color","r");
           $("#error_address").html("Address");
          }

          if(nationality=="" || nationality=="--Select One--"){
            check="false";
            $("#select_nationality").css("border-color","red");
            $("#error_select_nationality").css("color","red");
            $("#error_select_nationality").html("Please select your nationality !!!");

          }
          else{
           $("#select_nationality").css("border-color","");
           $("#error_select_nationality").css("color","");
           $("#error_select_nationality").html("Nationality");
          }

           if(prehour==""){
          check="false";
          $("#textbox_prehour").css("border-color","red");
          $("#error_prehour").css("color","red");
          $("#error_prehour").html("pre hour is required !!!");
          }
          else{
           $("#textbox_prehour").css("border-color","");
           $("#error_prehour").css("color","");
           $("#error_prehour").html("Pre Hour");
          }

          if(workingexp==""){
            check="false";
            $("#textbox_workingexp").css("border-color","red");
            $("#error_workingexp").css("color","red");
            $("#error_workingexp").html("Working experience is required !!!");
            }
            else{
             $("#textbox_workingexp").css("border-color","");
             $("#error_workingexp").css("color","");
             $("#error_workingexp").html("Working experience ");
            }

            if(degree==""){
                check="false";
                $("#textbox_degree").css("border-color","red");
                $("#error_degree").css("color","red");
                $("#error_degree").html("Degree is required ");
                }
                else{
                 $("#textbox_degree").css("border-color","");
                 $("#error_degree").css("color","");
                 $("#error_degree").html("Degree");
                }

                if(fieldofstudy==""){
                    check="false";
                    $("#textbox_fieldofstudy").css("border-color","red");
                    $("#error_fieldofstudy").css("color","red");
                    $("#error_fieldofstudy").html("Field of study is required !!!");
                    }
                    else{
                     $("#textbox_fieldofstudy").css("border-color","");
                     $("#error_fieldofstudy").css("color","");
                     $("#error_fieldofstudy").html("Field Of Study");
                    }

                    if(school==""){
                        check="false";
                        $("#textbox_school").css("border-color","red");
                        $("#error_school").css("color","red");
                        $("#error_school").html("University is required !!!");
                        }
                        else{
                         $("#textbox_school").css("border-color","");
                         $("#error_school").css("color","");
                         $("#error_school").html("University");
                        }

                       if(skillcheck==""){
                         check="false";
                        
                                                     
                            $("#select_skill_chosen").css({"border-style":"solid","border-color":"red","border-width": "thin"});
                            $("#error_skills").css("color","red");
                            $("#error_skills").html("Please Add Skills !!!");
                       }
                       else{
                        $("#select_skill_chosen").css({"border-style":"","border-color":"","border-width": ""});
                        $("#error_skills").css("color","");
                        $("#error_skills").html("Skills");
                           var skillset="";

                           $.each($("#select_skill option:selected"), function(){   
                            skillset +=$(this).val()+"|";         

                
                        });
                          
                         
                       
                      
                       }

                 


                       


                     
         
          if(check=="false"){
            
             $('#emptyField_modal').modal('show');
            
          }
          else{
           $.ajax({
                url:"registration.php",
                method:"POST",
                data:{register:"true",
                      usertype:usertype,
                      email:email,
                      pass:pass,
                      gender:gender,
                      day:day,
                      month:month,
                      year:year,
                      phone:phone,
                      fname:fname,
                      lname:lname,
                      address:address,
                      nationality:nationality,
                      prehour:prehour,
                      workingexp:workingexp,
                      degree:degree,
                      fieldofstudy:fieldofstudy,
                      school:school,
                      skillset:skillset
                      },
                success:function(data)
                {

                
                  if(data=="error_email_is_taken"){
                    alert("Email already exist , Please choose another email!!");
                  }

                  if(data=="error_user_account"){
                    alert("Error on inserting data to user_account table");
                  }

                  if(data=="error_jobseeker_profile"){
                    alert("Error on inserting data to jobseeker_profile table");
                  }

                  if(data=="error_skills_jobseeker"){
                    alert("Error on inserting data to skills_jobseeker table");
                  }

                  if(data=="error_education_jobseeker"){
                    alert("Error on inserting data to education_jobseeker table");
                  }


                  if(data=="success"){
                    alert("Registration Completed");
                    $(location).attr("href","login.php");
                  }

                

                  
                   
                }

            });
          }

          

        



        
    });
});