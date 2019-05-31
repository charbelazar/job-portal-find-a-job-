$("#btn_submit").click(function(){
    check="true";
   

    var skill=$("#input_skill").val();
   
  
    
  
    if(skill==""){
      $('#error_skill').css("color","red");
      $('#error_skill').html("category is required !!!");
      $('#error_skill').attr("hidden",false);
      $("#input_skill").css("border-color","red");
      check="false";
    }
    else{
      $('#error_skill').html("");
      $('#error_skill').attr("hidden",true);
      $("#input_skill").css("border-color","");
      
    }
  
  
  
  if(check=="false"){
    $("#modal_empty_field").modal('show');
  }
    if(check=="true"){
      $("#form_add_skill").submit();
    }
  
    }); 