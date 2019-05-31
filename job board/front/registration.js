
 $(document).ready(function(){
     $('#btn_register').click(function(){
        var usertype=3;
        var check="true";
        var email=$("#textbox_email").val();
        var pass=$("#textbox_password").val();
        var gender=$("#select_gender option:selected").text();
        var day=$("#select_day option:selected").text();
        var month=$("#select_month option:selected").text();
        var year=$("#select_year option:selected").text();
        var phone=$("#textbox_phone").val();
        var label_email=$("#error_email").html();

         var companyname=$("#textbox_companyname").val();
         var address=$("#textbox_address").val();
         var city=$("#textbox_city").val();
         var state=$("#textbox_state").val();
         var website=$("#textbox_website").val();
         
         
        

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

            if(companyname==""){
           check="false";
           $("#textbox_companyname").css("border-color","red");
           $("#error_companyname").css("color","red");
           $("#error_companyname").html("Comapny Name is required !!!");

           }
           else{
            $("#textbox_companyname").css("border-color","");
            $("#error_companyname").css("color","");
            $("#error_companyname").html("Comapny Name");
           }

            if(address==""){
           check="false";
           $("#textbox_address").css("border-color","red");
           $("#error_address").css("color","red");
           $("#error_address").html("Address is required !!!");
           }
           else{
            $("#textbox_address").css("border-color","");
            $("#error_address").css("color","");
            $("#error_address").html("Address");
           }

            if(city==""){
           check="false";
           $("#textbox_city").css("border-color","red");
           $("#error_city").css("color","red");
           $("#error_city").html("City is required !!!");
           }
           else{
            $("#textbox_city").css("border-color","");
            $("#error_city").css("color","");
            $("#error_city").html("City");
           }

            if(state==""){
           check="false";
           $("#textbox_state").css("border-color","red");
           $("#error_state").css("color","red");
           $("#error_state").html("State is required !!!");
           }
           else{
            $("#textbox_state").css("border-color","");
            $("#error_state").css("color","");
            $("#error_state").html("State");
           }
           
           
           if(check=="false"){
            
             $('#emptyField_modal').modal('show');
           }
           else{
            $.ajax({
                 url:"registration.php",
                 method:"POST",
                 data:{register:"true",
                       email:email,
                       pass:pass,
                       gender:gender,
                       day:day,
                       month:month,
                       year:year,
                       phone:phone,
                       companyname:companyname,
                       address:address,
                       city:city,
                       state:state,
                       website:website,
                       usertype:usertype
                       },
                 success:function(data)
                 {
                  if(data=="error_email_is_taken"){
                    alert("Email already exist , Please choose another email!!");
                  }

                  if(data=="error_user_account"){
                    alert("Error on inserting data to user_account table");
                  }

                    if(data=="success"){
                      alert("Registration Completed");
                      $(location).attr("href","login.php");
                    }

                    

                    if(data=="error_registration_company"){
                      alert(" comapny registration error");
                    } 


                  
                 }

             });
           }

           

         



         
     });
 });