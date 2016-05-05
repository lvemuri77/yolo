<?php
include("header.php");
include("config.php");
    $query="SELECT * FROM pets";
    $result=mysql_query($query);
     mysql_close();
?>
    
    <h3 class="text text-center">Adopted Pets</h3>
        
           
                
                <?php
                while($row=mysql_fetch_array($result)){
               
                ?>
                <div class="col-md-6 col-xs-12">
                <div class="details">
                <div class="col-md-3 col-xs-3">
                <img  class="img-responsive" src="<?php echo $row['image']; ?> "/>
                </div>
                <div class="col-md-9 col-xs-9">
                <p >Name:<?php echo $row['p_name']; ?>   </p>
                
                <p >Age:<?php echo $row['p_age']; ?>   </p>
                
                <p >Fee:<?php echo $row['p_fee']; ?>   </p>
                
                <p >Description:<?php echo $row['p_description']; ?>   </p>
                </div>
                </div>
                </div>    
                <?php
                    }
               
                ?>
                
           
