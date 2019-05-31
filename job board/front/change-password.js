
 $(document).ready(function(){
    $('#btn_submit').click(function(){
       
       var check="true";
       

        var Opassword=$("#textbox_Opassword").val();
        var Npassword=$("#textbox_Npassword").val();
       
       
      
      
      

        
        
       

       

        if(Opassword==""){
          check="false";
          $("#textbox_Opassword").css("border-color","red");
          $("#error_Opassword").css("color","red");
          $("#error_Opassword").html(" Old Password is required !!!");

          }
          else{
           $("#textbox_Opassword").css("border-color","");
           $("#error_Opassword").css("color","");
           $("#error_Opassword").html("Old Password*");
          }

           if(Npassword==""){
          check="false";
          $("#textbox_Npassword").css("border-color","red");
          $("#error_Npassword").css("color","red");
          $("#error_Npassword").html("New Password is required !!!");

          }
          else{
           $("#textbox_Npassword").css("border-color","");
           $("#error_Npassword").css("color","");
           $("#error_Npassword").html("New Password*");
          }
          
          if(check=="false"){
           
            $('#emptyField_modal').modal('show');//show alert please fil empty fields
          }
          else{
           $.ajax({
                url:"change-pass.php",
                method:"POST",
                data:{change:"true",
                      Opassword:Opassword,
                      Npassword:Npassword
                      
                      },
                success:function(data)
                {
                  
                
                  
                  if(data == "fail"){
                      $("#textbox_Npassword").val("");
                      $("#textbox_Opassword").val("");
                      $("#textbox_Opassword").css("border-color","red");
                      $("#error_Opassword").css("color","red");
                      $("#error_Opassword").html("Incorrect Old Password !!!");
                      
                  }

                  if(data == "success"){
                  
                      alert("password changed");
                      location.reload();
                  }
                  
                }

            });
          }

          

        



        
    });
});