$(document).ready(function(){
    $('#textbox_email').keyup(function(){
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
                       $("#textbox_email").css("border-color","red");
                       
                   }
                   else{
                    $('#error_email').css("color","");
                    $('#error_email').html("Email");
                   
                    
                   }
                    
                }

            });
        }
    });
});