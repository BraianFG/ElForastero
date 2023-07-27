
      <select style="justify-content: space-around;
    display: block;margin:2em 1em;"class=" select" onChange=nav(this.value) class="form-select form-select-md" aria-label=".form-select-md example">
           <option value="#usuarios">Usuarios</option>
           <option value="#usuarios_eliminados">Usuarios eliminados</option>
           <option value="#invitados">Invitados</option>
           <option value="#mensajes">Mensajes</option>
           <option value="#carrito">Carritos</option>
           <option value="#pedidos">Pedidos</option>
           <option value="#producto">Productos</option>
           <option value="#categorias">Categorías</option>
           <option value="#subir_imagenes">Subír imagenes</option>
           <option value="#ver_imagenes">Ver imagenes</option>
           <option value="#gestionar_imagenes">Gestionar imagenes</option>
           <option value="#sitio">Datos del sitio</option>
           <option value="#estilos">Estilos del sitio</option>
           <option value="#negocio">Datos del negocio</option>
           <option value="#transferencia">Datos para la transferencia</option>
           <option value="#mp">Datos de Mercado Pago</option>
           <option value="#localidad">Localidad por defecto</option>
           <option value="vistas">Visitas</a></option>
                   <script async>
                     function nav(value) {
                        if (value != "") { location.href = value; }
                      }
                   </script>
        </select>