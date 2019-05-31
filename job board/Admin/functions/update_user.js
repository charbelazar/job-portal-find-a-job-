function update_user(admin_id,ID_user,i){
    var check="true";
    

    var password=$("#input_password_"+i).val();
    var Fname=$("#input_Fname_"+i).val();
    var Lname=$("#input_Lname_"+i).val();
    

    if(Fname==""){
       
        $("#input_Fname_"+i).css("border-color","red");
        check="false";
      }
      else{
        
        $("#input_Fname_"+i).css("border-color","");
        
      }
    
    
      if(Lname==""){
       
        $("#input_Lname_"+i).css("border-color","red");
        check="false";
      }
      else{
        
        $("#input_Lname_"+i).css("border-color","");
        
      }

      if(password==""){
       
        $("#input_password_"+i).css("border-color","red");
        check="false";
      }
      else{
        
        $("#input_password_"+i).css("border-color","");
        
      }

      if(check=="false"){
          $("#modal_empty_field").modal('show');
      }

      if(check=="true"){
        window.location.href="update_user.php?admin_id="+admin_id+"&ID_user="+ID_user+"&Fname="+Fname+"&Lname="+Lname+"&password="+password;
      }

}