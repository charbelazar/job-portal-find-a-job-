
 $(document).ready(function(){
    $('#btn_save').click(function(){
       
       var check="true";
       

        var company_name=$("#textbox_companyname").val();
        var address=$("#textbox_address").val();
        var city=$("#textbox_city").val();
        var state=$("#textbox_state").val();
        var website=$("#textbox_website").val();
        var phone=$("#textbox_phone").val();

        if(company_name==""){
          check="false";
          $("#textbox_companyname").css("border-color","red");
          $("#error_companyname").css("color","red");
          $("#error_companyname").html("Company Name is required !!!");

          }
          else{
           $("#textbox_companyname").css("border-color","");
           $("#error_companyname").css("color","");
           $("#error_companyname").html("Company Name");
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

          
           if(city==""){
          check="false";
          $("#textbox_city").css("border-color","red");
          $("#error_city").css("color","red");
          $("#error_city").html("CIty is required !!!");
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
             $("#error_state").html("State ");
            }
            
            if(phone==""){
              check="false";
              $("#textbox_phone").css("border-color","red");
              $("#error_phone").css("color","red");
              $("#error_phone").html("Phone Number is required ");
              }
              else{
               $("#textbox_phone").css("border-color","");
               $("#error_phone").css("color","");
               $("#error_phone").html("Tel");
              }
            

            if(website==""){
                
              website=" ";
                }
                else{
                website=$("#textbox_website").val();
                }

                
            
          if(check=="false"){
            alert("please fill empty field !!!")
          }
          else{
           $.ajax({
                url:"update_company-info.php",
                method:"POST",
                data:{update:"true",
                      company_name:company_name,
                      address:address,
                      city:city,
                      state:state,
                      phone:phone,
                      website:website
                      },
                success:function(data)
                {
                  
                  alert(data) ; 
                   //if(data=="success"){
                  $(location).attr("href","company-info.php");
                   /*}
                   else{
                       alert(data);
                   }*/
                  
                  
                }

            });
          }

          

        



        
    });
});