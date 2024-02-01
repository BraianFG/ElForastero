<div class="uk-flex">
<form action="filtrar.php" method="GET">    
      <select class="select" name="categoria" aria-label=".form-select-md example" onchange=" this.form.submit()" >
         <?php
              $productos = "SELECT categoria,COUNT(*) AS cantidad,id FROM productos GROUP BY categoria ORDER BY categoria;";
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
               $categorias = $productosp1['categoria']       
                   
         ?>   
           <option value="<?php echo $categorias ?>"><?php echo $categorias ?> (<?php echo $productosp1['cantidad']?>)</option>
           
           <?php
             }
            ?>    
        </select>
</form>        

    <form action="busqueda.php" method="GET" >
      <label class="datos">Buscador</label>
      <div class="uk-flex busqueda">
        <input class="uk-input uk-form-width-small uk-form-small" placeholder="BUSCAR" type="search" name="buscar" ></input>
        <button type="submit" class="uk-search-icon-flip" aria-label="buscar" uk-search-icon></button>
      </div>
    </form> 

</div>     

<div id="resultado" style="font-sise:1em">

    </ul>
</div>
