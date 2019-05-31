
 $(document).ready(function(){
     $('#btn_login').click(function(){
        
        var check="true";
        var email=$("#textbox_email").val();
        var pass=$("#textbox_password").val();
        
         
        

         if(email==""){
           check="false";
           $("#textbox_email").css("border-color","red");
           $("#error_email").attr("hidden",false);
           }
           else{
            $("#textbox_email").css("border-color","");
            $("#error_email").attr("hidden",true);
           }

            if(pass==""){
           check="false";
           $("#textbox_password").css("border-color","red");
           $("#error_password").attr("hidden",false);
           }
           else{
            $("#textbox_password").css("border-color","");
            $("#error_password").attr("hidden",true);
           }

         
           
           if(check=="false"){
            $('#emptyField_modal').modal('show');
           }
           else{
            $.ajax({
                 url:"loginvalidation.php",
                 method:"POST",
                 data:{login:"true",
                       email:email,
                       pass:pass
                       },
                 success:function(data)
                 {
                   if(data=="jobseekerlogin"){
                       $(location).attr("href","jobseeker-index.php");
                   }

                   if(data=="companylogin"){
                       $(location).attr("href","company-index.php");
                   }

                   if(data=="admin"){
                    $(location).attr("href","../../Finalproject/Admin/index.php");
                }

                   if(data=="Error"){
                     $('#login_fail_modal').modal('show');
                     var email=$("#textbox_email").val("");
                     var pass=$("#textbox_password").val("");

                      
                   }
                 }

             });
           }

           

         



         
     });
 });