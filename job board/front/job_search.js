$(document).ready(function(){
    $('#btn_search').click(function(){
        var check="true";
        var job_title =$("#job_search").val(); // get the value of job from textbox
        var date=$("#select_date option:selected").text();
        var type=$("#select_type option:selected").text();
        var category=$("#select_category option:selected").text();
        var location=$("#textbox_joblocation").val();
        var skillcheck=$("#select_skill option:selected").text();
        

       

        if(job_title==""){
            check="false";

        }

        if(date==""||date=="-- select one --"){
            date="";
        }
        else{
            date=$("#select_date option:selected").text();
        }

        if(type==""||type=="-- select one --"){
            type="";
        }
        else{
            type=$("#select_type option:selected").val();
        }

        

        if(category==""||category=="-- select one --"){
            category="";
        }
        else{
            category=$("#select_category option:selected").val();

        }


      

        if(skillcheck==""){
           
            var skillset="";
            
          }
          else{
           
              var skillset="";

              $.each($("#select_skill option:selected"), function(){   
               skillset +=$(this).val()+"|";    
              
   
           });
             
            
          
         
          }

          


              


        if(check=="true"){
            $.ajax({
                url:"job_search.php",
                method:"POST",
                data:{job_title:job_title,
                      date:date,
                      type:type,
                      category:category,
                      location:location,
                      skillset:skillset
                      
                      },
                success:function(data)
                {
                    $('#job_nb').css("display","none");
                    $('#jobs_table').fadeIn();
                    $('#jobs_table').html(data);
                }

            });
        }
        
    });
});