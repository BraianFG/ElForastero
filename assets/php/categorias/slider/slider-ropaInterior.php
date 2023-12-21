<div class="uk-flex">
      <select class="select" onChange=nav(this.value) class="form-select form-select-md" aria-label=".form-select-md example">
                    <option></option>
         <?php
                
              $productos = "SELECT * FROM `productos` WHERE `categoria` = 'ropaInterior';";
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
                   
         ?>   
           <option value="#<?php echo $productosp1['id']?>"><?php echo $productosp1['id'] , '. ' ?><?php echo $productosp1['nombre']?></option>
               
                   <script>
                     function nav(value) {
                        if (value != "") { location.href = value; }
                      }
                   </script>
           <?php
             }
            ?>    
        </select>

      <select  class="select2" onChange=nav(this.value) class="form-select form-select-md" aria-label=".form-select-md example">
                              <option></option>
         <?php
                
              $productos = "SELECT * FROM `categorias` ORDER BY `id` ASC";
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
                   
         ?>   
           <option value="<?php echo $productosp1['nombre']?>"><?php echo $productosp1['nombre']?></option>
                   <script>
                     function nav(value) {
                        if (value != "") { location.href = value; }
                      }
                   </script>
           <?php
             }
            ?>    
        </select>
</div>        
