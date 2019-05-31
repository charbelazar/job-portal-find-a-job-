$("#btn_submit").click(function(){
  check="true";
 
 
  var email=$("#input_Email").val();
  var password=$("#input_Password").val();
  var Fname=$("#input_fn").val();
  var Lname=$("#input_ln").val();

  

  if(email==""){
    $('#error_email').css("color","red");
    $('#error_email').html("Email is required !!!");
    $('#error_email').attr("hidden",false);
    $("#input_Email").css("border-color","red");
    check="false";
  }
  else{
    $('#error_email').html("");
    $('#error_email').attr("hidden",true);
    $("#input_Email").css("border-color","");
    
  }

  if(password==""){
    $('#error_password').css("color","red");
    $('#error_password').html("Password is required !!!");
    $('#error_password').attr("hidden",false);
    $("#input_Password").css("border-color","red");
    check="false";
  }
  else{
    $('#error_password').attr("hidden",true);
    $("#input_Password").css("border-color","");
    
  }

  if(Fname==""){
    $('#error_fname').css("color","red");
    $('#error_fname').html("Password is required !!!");
    $('#error_fname').attr("hidden",false);
    $("#input_fn").css("border-color","red");
    check="false";
  }
  else{
    $('#error_fname').attr("hidden",true);
    $("#input_fn").css("border-color","");
    
  }


  if(Lname==""){
    $('#error_lname').css("color","red");
    $('#error_lname').html("Password is required !!!");
    $('#error_lname').attr("hidden",false);
    $("#input_ln").css("border-color","red");
    check="false";
  }
  else{
    $('#error_lname').attr("hidden",true);
    $("#input_ln").css("border-color","");
    
  }

if(check=="false"){
  $("#modal_empty_field").modal('show');
}
  if(check=="true"){
    $("#admin_register").submit();
  }

  }); 