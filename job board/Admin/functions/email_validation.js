$(document).ready(function(){
    $('#input_Email').bind(" change keyup input",function(){
        
        var email =$(this).val(); // get the value from textbox
        if(email !='')
        {
            $.ajax({
                url:"emailvalidation.php",
                method:"POST",
                data:{email:email},
                success:function(data)
                {
                   if(data=="error"){
                       $('#error_email').css("color","red");
                       $('#error_email').html("This email is already exist , please choose another one !!!");
                       $('#error_email').attr("hidden",false);
                       $("#input_Email").css("border-color","red");
                       $("#btn_submit").attr("disabled",true);
                   }
                   else{
                    $("#btn_submit").attr("disabled",false);
                    $("#input_Email").css("border-color","");
                    $('#error_email').html("");
                    $('#error_email').attr("hidden",true);
                   
                    
                   }
                    
                }

            });
        }
    });
});