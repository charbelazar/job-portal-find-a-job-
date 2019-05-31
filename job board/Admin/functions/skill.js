$(document).ready(function(){
    $('#input_skill').keyup(function(){
        
        var skill =$(this).val(); // get the value from textbox
        if(skill !='')
        {
            $.ajax({
                url:"skill_validation.php",
                method:"POST",
                data:{skill:skill},
                success:function(data)
                {
                   if(data=="error"){
                       $('#error_skill').css("color","red");
                       $('#error_skill').html("This category is already exist , please choose another one !!!");
                       $('#error_skill').attr("hidden",false);
                       $("#input_skill").css("border-color","red");
                       $("#btn_submit").attr("disabled",true);
                       
                   }
                   else{
                       
                    $("#input_skill").css("border-color","");
                    $('#error_skill').html("");
                    $('#error_skill').attr("hidden",true);
                    $("#btn_submit").attr("disabled",false);
                   
                    
                   }
                    
                }

            });
        }
    });
});