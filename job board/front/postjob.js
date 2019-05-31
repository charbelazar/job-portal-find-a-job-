
 $(document).ready(function(){
    $('#btn_submit').click(function(){
        
       
       var check="true";
       var jobtitle=$("#textbox_jobtitle").val();
       var joblocation=$("#textbox_joblocation").val();
       var category=$("#select_category option:selected").text();
       var jobtype=$("#select_jobtype option:selected").text();
       var jobdescription=$("#textbox_jobdescription").val();
       var skillcheck=$("#select_skill option:selected").text();
      
       
       

        if(jobtitle==""){
          check="false";
          $("#textbox_jobtitle").css("border-color","red");
          $("#error_jobtitle").css("color","red");
          $("#error_jobtitle").html("Job title is required !!!!");

         
          }
          else{
           $("#textbox_jobtitle").css("border-color","");
           $("#error_jobtitle").css("color","");
           $("#error_jobtitle").html("Job title");
        
          }

          if(joblocation==""){
          check="false";
          $("#textbox_joblocation").css("border-color","red");
          $("#error_joblocation").css("color","red");
          $("#error_joblocation").html("Location is required !!!");
          }
          else{
           $("#textbox_joblocation").css("border-color","");
           $("#error_joblocation").css("color","");
           $("#error_joblocation").html("Location");
          }
          


          if(category=="" || category=="-- select one --"){
            check="false";
            $("#select_category").css("border-color","red");
            $("#error_category").css("color","red");
            $("#error_category").html("Please Select Category !!!");

          }
          else{
           $("#select_category").css("border-color","");
           $("#error_category").css("color","");
           $("#error_category").html("Category");
           category=$("#select_category option:selected").val();
          }


          if(jobtype=="" || jobtype=="-- select one --"){
            check="false";
            $("#select_jobtype").css("border-color","red");
            $("#error_jobtype").css("color","red");
            $("#error_jobtype").html("Please Select Job Type !!!");

          }
          else{
           $("#select_jobtype").css("border-color","");
           $("#error_jobtype").css("color","");
            $("#error_jobtype").html("Job Type");
           jobtype=$("#select_jobtype option:selected").val();
          }



          if(jobdescription==""){
            check="false";
            $("#textbox_jobdescription").css("border-color","red");
            $("#error_jobdescription").css("color","red");
            $("#error_jobdescription").html("Job Description is required !!!");
            }
            else{
             $("#textbox_jobdescription").css("border-color","");
             $("#error_jobdescription").css("color","");
             $("#error_jobdescription").html("Job Description");
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
                url:"postjob.php",
                method:"POST",
                data:{
                      postjob:"true",
                      jobtitle:jobtitle,
                      joblocation:joblocation,
                      jobcategory:category,
                      jobtype:jobtype,
                      jobdescription:jobdescription,
                      skillset:skillset
                  
                      },
                success:function(data)
                {
                  if(data=="error_jobpost"){
                    alert("error in inserting data into jobpost table");
                  }

                  if(data=="success"){
                    alert("Post Added");
                    $(location).attr("href","company-index.php");
                  }

                  
                }

            });
          }

          

        



        
    });
});