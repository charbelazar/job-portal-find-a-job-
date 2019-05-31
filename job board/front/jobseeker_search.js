$(document).ready(function(){
    $('#btn_search_jobseeker').click(function(){
        var check="true";
        var keyword =$("#jobseeker_keyword").val(); // get the value of jobseeker from textbox
        var gender=$("#select_gender option:selected").text();
        var nationality=$("#select_nationality option:selected").text();
       // var category=$("#select_category option:selected").text();
        //var location=$("#textbox_joblocation").val();
        //var skillcheck=$("#select_skill option:selected").text();
      
        

       

        if(keyword==""){
            check="false";

        }

        if(gender == "-- select one --"){
            gender="";
        }
        

        if(nationality == "-- select one --"){
            nationality="";
        }

     //   if(skillcheck==""){
           
      //      var skillset="";
            
        //  }
         // else{
           
           //   var skillset="";

             // $.each($("#select_skill option:selected"), function(){   
              // skillset +=$(this).val()+"|";    
              
   
          // });
             
            
          
         
         // }

          


              


        if(check=="true"){
            $.ajax({
                url:"jobseeker_search.php",
                method:"POST",
                data:{keyword:keyword,
                      gender:gender,
                      nationality:nationality
                      
                      
                      },
                success:function(data)
                {
                    $('#jobseeker_nb').css("display","none");
                    $('#jobseeker_table').fadeIn();
                    $('#jobseeker_table').html(data);
                }

            });
        }
        
    });
});