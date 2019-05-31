$(document).ready(function(){
    $('#job_search').keyup(function(){
        var job_title =$(this).val(); // get the value of job from textbox
        if(job_title !='')
        {
            $.ajax({
                url:"job_list.php",
                method:"POST",
                data:{job_title:job_title},
                success:function(data)
                {
                    $('#jobs_list').fadeIn();
                    $('#jobs_list').html(data);
                }

            });
        }
    });
});