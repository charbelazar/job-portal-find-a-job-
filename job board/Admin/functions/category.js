$(document).ready(function(){
    $('#input_category').keyup(function(){
        
        var category =$(this).val(); // get the value from textbox
        if(category !='')
        {
            $.ajax({
                url:"category_validation.php",
                method:"POST",
                data:{category:category},
                success:function(data)
                {
                   if(data=="error"){
                       $('#error_category').css("color","red");
                       $('#error_category').html("This category is already exist , please choose another one !!!");
                       $('#error_category').attr("hidden",false);
                       $("#input_category").css("border-color","red");
                       $("#btn_submit").attr("disabled",true);
                       
                   }
                   else{
                       
                    $("#input_category").css("border-color","");
                    $('#error_category').html("");
                    $('#error_category').attr("hidden",true);
                    $("#btn_submit").attr("disabled",false);
                   
                    
                   }
                    
                }

            });
        }
    });
});