function confirm_box(i){//show confirm box modal
    var id_post=i;
    $("#confirmbox").modal({show: true});
    $("#btn_yes").attr("onclick","delete_post("+id_post+")");
}
  

 function delete_post(i){// delete post
    var id_post=i;
    window.location.href="Delete_post.php?id_post="+id_post;
 }
  
