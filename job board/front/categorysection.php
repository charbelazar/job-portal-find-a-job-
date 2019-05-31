<section class="category section">
    <div class="container">
        <h2 class="section-title">Browse Categories</h2>
        <div class="row">
            <div class="col-md-12">
              <?php 
              include 'connection.php';
              $sql="select category_name from category order by ID_category DESC limit 8 ";
              $result=mysqli_query($con,$sql);
              $nbrows=mysqli_num_rows($result);
              if($nbrows > 0){
                  $i=1;
                  while($row=mysqli_fetch_row($result)){
                        $category[$i]=$row[0];
                        $i++;
                  }

              }
              else{
                  $category[1]="no data found";
                  $category[2]="no data found";
                  $category[3]="no data found";
                  $category[4]="no data found";
                  $category[5]="no data found";
                  $category[6]="no data found";
                  $category[7]="no data found";
                  $category[8]="no data found";
              }
              ?>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                  
                        <div class="icon">
                            <i class="ti-home"></i>
                        </div>
                        <h3><?php echo $category[8];?></h3>
                        
                    
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                   
                        <div class="icon">
                            <i class="ti-world"></i>
                        </div>
                        <h3><?php echo $category[7];?></h3>
                        
                   
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                   
                        <div class="icon">
                            <i class="ti-book"></i>
                        </div>
                        <h3><?php echo $category[1];?></h3>
                        
                   
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                    
                        <div class="icon">
                            <i class="ti-desktop"></i>
                        </div>
                        <h3><?php echo $category[5];?></h3>
                      
                  
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                    
                        <div class="icon">
                            <i class="ti-brush"></i>
                        </div>
                        <h3><?php echo $category[6];?></h3>
                       
                   
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                   
                        <div class="icon">
                            <i class="ti-heart"></i>
                        </div>
                        <h3><?php echo $category[3];?></h3>
                        
                   
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                   
                        <div class="icon">
                            <i class="ti-filter"></i>
                        </div>
                        <h3><?php echo $category[2];?></h3>
                        
                   
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 f-category">
                    
                        <div class="icon">
                            <i class="ti-cup"></i>
                        </div>
                        <h3><?php echo $category[4];?></h3>
                    
                </div>
            </div>
        </div>
    </div>
</section>