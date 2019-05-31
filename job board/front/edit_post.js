
 $(document).ready(function(){
    $('.btn-edit').click(function(){
       var post_id=$(this).data("postid");
       i=$(this).data("i"); //global variable that stores i
       modal_body=$("#modal-body_"+i).html(); //global variable that stores modal data
       if(post_id !==""){
           $.ajax({
                url:"edit_post.php",
                method:"POST",
                data:{update:"true",
                      post_id:post_id
                      },
                success:function(data)
                {   
                    $('.btn-edit').css("display","none");
                    $('.btn-cancel').css("display","inline");
                    $('.save-btn').css("display","inline");
                    $("#modal-body_"+i).html(data);
                 
                }

            });
        }
    });


    $('.btn-cancel').click(function(){
        
        $('.btn-edit').css("display","inline");
        $('.btn-cancel').css("display","none");
        $('.save-btn').css("display","none");
        $("#modal-body_"+i).html(modal_body);
       
        });






});