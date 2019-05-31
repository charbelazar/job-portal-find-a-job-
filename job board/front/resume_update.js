
 $(document).ready(function(){
    $('#btn_save').click(function(){
       
       var check="true";
       

        var fname=$("#textbox_firstname").val();
        var lname=$("#textbox_lastname").val();
        var address=$("#textbox_address").val();
        var nationality=$("#select_nationality option:selected").text();
        var prehour=$("#textbox_prehour").val();
        var workingexp=$("#textbox_workingexp").val();
        var tel=$("#textbox_phone").val();

        var degree=$("#textbox_degree").val();
        var fieldofstudy=$("#textbox_fieldofstudy").val();
        var school=$("#textbox_school").val();
        var skillcheck=$("#select_skill option:selected").text();
      
       
      
      
      

        
        
       

       

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

          if(nationality==" " || nationality=="--Select One--"){
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
            
            if(tel==""){
              check="false";
              $("#textbox_phone").css("border-color","red");
              $("#error_phone").css("color","red");
              $("#error_phone").html("Phone Number is required ");
              }
              else{
               $("#textbox_phone").css("border-color","");
               $("#error_phone").css("color","");
               $("#error_phone").html("Mobile Phone");
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
                          var skillset="";
                       }
                       else{
                        
                           var skillset="";

                           $.each($("#select_skill option:selected"), function(){   
                            skillset +=$(this).val()+"|";         

                
                        });
                          
                         
                       
                      
                       }
                     

                 


                       



                     
          
          
          if(check == "false"){
            $('#emptyField_modal').modal('show');//show alert please fil empty fields
          }
          else{
           $.ajax({
                url:"update-resume.php",
                method:"POST",
                data:{update:"true",
                      fname:fname,
                      lname:lname,
                      address:address,
                      nationality:nationality,
                      prehour:prehour,
                      workingexp:workingexp,
                      tel:tel,
                      degree:degree,
                      fieldofstudy:fieldofstudy,
                      school:school,
                      skillset:skillset
                      },
                success:function(data)
                {
                  
                  if(data = "success"){

                    
                    $(location).attr("href","jobseeker-resume.php");
                  
                  }
                  else{
                      alert(data);
                  } 
                  
                }

            });
          }

          

        



        
    });
});