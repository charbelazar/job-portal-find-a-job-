$("#btn_submit").click(function(){
    check="true";
   
    var error_category=$('#error_email').html();
    var category=$("#input_category").val();
   
  
    
  
    if(category==""){
      $('#error_category').css("color","red");
      $('#error_category').html("category is required !!!");
      $('#error_category').attr("hidden",false);
      $("#input_category").css("border-color","red");
      check="false";
    }
    else{
      $('#error_category').html("");
      $('#error_category').attr("hidden",true);
      $("#input_category").css("border-color","");
      
    }
  
  
  
  if(check=="false"){
    $("#modal_empty_field").modal('show');
  }
    if(check=="true"){
      $("#form_add_category").submit();
    }
  
    }); 