<div class="uk-flex">
      <select class="select" onChange=nav(this.value) aria-label=".form-select-md example">
           <option value="categorias" id="seleccionar">Ver todas la categorias</option>
         <?php
                
              $productos = "SELECT * FROM `categorias` ORDER BY `id` ASC";
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
                   
         ?>   
           <option value="<?php echo $productosp1['nombre']?>"><?php echo $productosp1['nombre']?></option>
                   <script defer>
                     function nav(value) {
                        if (value != "") { location.href = value; }
                      }
                   </script>
           <?php
             }
            ?>    
              
        </select>
      <select class="select2" onChange=nav(this.value) aria-label=".form-select-md example">
         <option value="categorias" id="seleccionar"></option>
         <?php
                
              $productos = "SELECT * FROM productos";
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
                   
         ?>   
           <option value="#<?php echo $productosp1['id']?>"><?php echo $productosp1['id'] , '. ' ?><?php echo $productosp1['nombre']?></option>
           <?php
             }
            ?>    
        </select>
    <form action="busqueda.php" method="GET" >
      <label class="datos">Buscador</label>
      <div class="uk-flex busqueda">
        <input class="uk-input uk-form-width-medium uk-form-small" placeholder="BUSCAR" type="search" name="buscar" ></input>
        <button type="submit" class="uk-search-icon-flip" uk-search-icon></button>
      </div>
    </form>    
            <script defer>
                document.querySelector("#seleccionar").addEventListener("click", () => {
                    if(value == categorias){
                      location.href = "categorias";
                    }
                });
            </script>
            
            <script>
                     function nav(value) {
                        if (value != "") { location.href = value; }
                      }
         </script>
</div>     
