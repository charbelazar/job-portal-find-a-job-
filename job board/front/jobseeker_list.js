$(document).ready(function(){
    $('#jobseeker_keyword').keyup(function(){
        
        var jobseeker_keyword =$(this).val(); // get the value of job from textbox
        
        if(jobseeker_keyword !='')
        {
            $.ajax({
                url:"jobseeker_list.php",
                method:"POST",
                data:{jobseeker_keyword:jobseeker_keyword},
                success:function(data)
                {
                    
                    $('#jobseeker_list').fadeIn();
                    $('#jobseeker_list').html(data);
                }

            });
        }
    });
});