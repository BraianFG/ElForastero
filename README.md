# El FORASTERO TIENDA ONLINE Y CMS 🐎
Tienda Online desarrollada en Chivilcoy,Buenos Aires,Argentina por Braian Emanuel Frediani Guellffi **(https://braianfg.com.ar)** con ayuda de conocidos e internautas y con mucha dedicación de tiempo comenzó en agosoto de 2021 como parte de un proyecto de las prácticas profesionalizantes la cual me había proyectado esto para terminar el secundario y finalizar la técnicatura en Técnico Personal y Profesional en informática,en el 2022 continua con mejoras haciendo al uso por parte del usuario más cómodo,fácil y rápido.
El 28 de mayo del 2022 esté código fue liberado bajo **la Licencia Apache 2.0**.

# INSTALACIÓN Y CONFIGURACÍON ⚙️
* Descargar el archivo .zip y subirlo al servidor

* Descomprimirlo en el servidor 

* Crear una base de datos y conectarla desde el archivo **database.php** ,las tablas o archivo de configuración se encuentra en la carpeta **Base de Datos**

* Una vez realizada la conexión ir a **http://tudominio.com/admin** e ingresar **email : admin@admin** y **Contraseña:12345678**

* Una vez adentro del aréa administrativa ir **http://tudominio.com/admin/registro** o ir a la tabla de invitados y ahí hacer una cuenta nueva a gusto del usuario

* Una vez hecho esto eliminar esta cuenta **email : admin@admin** y **Contraseña:12345678** que aparece en el **id : 1 , tabla: admin** de la Base de Datos

* Una vez eliminada la cuenta inicial modifícarle **id : 1** a la cuenta nueva y comprobar si se puede ingresar con la cuenta nueva

* Descomprimir el Archivo **vendor.zip** y **vendorR.zip**

* Configurar el link de pago de Mercado Pago **Solo le falta añadír el Access Token y el Public Key** para esto se debe ingresar a **https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/integrate-checkout-pro** e iniciar sesión para anadir eso que falta,una vez encontrado ir a **comprar.php** donde se tiene que agregar esos dos datos faltante.

* Cambiarle la ruta a las imagenes

* Cargar una vez la página antes de comenzar a usarla,esto permite que se cargue la tabla de reacciones y muestre los productos
  
**AL SUBÍR LAS IMAGENES NO SE COMPRIME DESDE EL SERIVIDOR COMPRIRLAS ANTES DE USARLA O USAR SERVICIOS COMO ImageOptim ( https://imageoptim.com/api )o ImageKit.io ( https://imagekit.io/)**
  
# COMPONENTES EXTERNOS 🔗

* Plantilla de base de **HTML5UP Future Inperfect (https://html5up.net/future-imperfect)**

* Framework CSS **UIkit (https://getuikit.com/)** y  **Bootstrap (https://getbootstrap.com/)** 

* Framework JS **Alertify (https://alertifyjs.com/)**
  
*  **Ajax(https://api.jquery.com/jquery.ajax/)**

* Librería JS **Jquery (https://jquery.com/)**

* Iconos de **Fonts Awesome (https://fontawesome.com/)** y con imagenes usadas de **Pixabay (https://pixabay.com/)**

* Fuentes tipográficas de **Google Fonts(https://fonts.google.com/)**

* Pasarela de pago **SDK de Cheeckout Pro de Mercado Pago** **(https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/landing)**

* Uso **PhpDotEnv(https://github.com/vlucas/phpdotenv)**

* Lazyises **para carga diferida de imagenes** **(https://afarkas.github.io/lazysizes/index.html)**

* ImageOptim **para redimensionar imagenes** **(https://imageoptim.com/)**

* Para gráficos estádisticos **ChartJS(https://chartjs.org)**

* Genero pdf con **FPDF (https://fpdf.org)**

# IMAGENES DE LA TIENDA 📷

#### Administración
![image](https://github.com/BraianFG/ElForastero/assets/55467665/ba82d49c-b684-4b28-8316-d2ddbde37981)

#### Administracíon (Estadística)
![image](https://github.com/BraianFG/ElForastero/assets/55467665/13b62836-8515-4118-ad16-40ce9a3b24e8)

#### Tienda
![image](https://github.com/BraianFG/ElForastero/assets/55467665/0b2587d5-faf8-4b55-8aaf-093dbe90789b)

![image](https://github.com/BraianFG/ElForastero/assets/55467665/864109c3-9cad-4560-b59a-091b6c5dd6e7)

# MEJORAS 💻
**20/8/2021**

* Agegué más arículo,en general todo los que me interesan 

* Corregí errores en los link de pagos de los productos

* Inserté fuentes de Google como Manrope para darle más estilo

* Agregué visor de imagen con una ventana modal con un Framework UiKit

* Opción de compra con pack de 3,6,9 y hasta 12 unidades con descuento

* Hice un logo para el carrito de Whatsapp

* Agregué artículos al carrito de Whatsapp

* Hice publicidad en dos post de la página de Facebook El Forastero


 **9/9/2021**

* Trabajé en las pantallas de registro e ingreso 

* Mejora del front-end

* Creación de la tabla de base de datos con el campo de email unico para evitar repeticiones

* Validaciones para campo vacios desde el php

* Conexión y funcionamiento de la base de datos

**1/9/2021**

* Más artículos 

* Fragemente todo un archivo HTML de más de 1000 lineas en varios archivos php,utilizando el include

* Panel con los datos del comprador con parte del JS en funcionamiento

* Diseños de panfletos con Inkscape

**23/10/2021**

* Creación de la base de datos USUARIOS,PRODUCTOS,MISITIO,MINEGOCIO,ADMIN,PEDIDOS

* Conexión con la base de datos 

* Los productos se pueden eliminar,editar y agregar dianamicamente desde php y una base de datos

* Se creó el subdominio https://admin.tiendaelforastero.com.ar en donde se va a permitir al usuario editar,eliminar y agregar dinamicamente contenido sin tocar código y de forma amigable.

* Se hizo un pequeño gestor de archivos en donde se puede subir desde el subdominio archivos al servidor en el directorio /public_html/images/ ,esto mismo se puede visualizar en una lista con un enlace a las mismas,se pueden editar los nombres y eliminar las imagenes desde la interfaz.

* El login está funcionando con cookies del lado principal

* Panel de administrador 100% terminado

* Eliminación de más de 30 archivos que generaban redundancia

* Mejora de la visualización de la página principal

* Pruebas de ensayos y error y en el funcionamiento

* Me falta reforzar la seguridad en el login con las opciones de recuperación 

* Poner en funcionamiento la API de la pasarella de pago Mercado Pago con Checkout Pro

**1/11/2021**

* CSS dinamico,los colores se pueden cambiar a gusto del usuario desde el aréa del administrador

* Las contraseñas en las bases de datos se encriptan con SHA1

* Mejoras en el  CSS 

* Se optimizó código CSS quitando unas 10.000 lineas sin algún uso

* Se solucionó problemas de compatibilidad con Chrome en iconos de Font-Awesome

* Panel de usuario con las variables de $_SESSION

* Panel con los datos del usuario

* Redirecciones funcionando al 100% en funcióń si el usuario está logueado o no.

* Se limitó caracteres desde el front en los imput type number en los ID mayor a uno ,y los password como minimo 8 caracteres y máximo 15 caracteres

**7/11/2021**

* Panel de usuario en completo funcionamiento

* Mejoras de detalles estéticos vinculados con la funcionalidad del area de administador

* Control de invitiados

* Solución al error loguerse en el aréa administrativa

* Encriptado definitivo Con Password_hash salt 8

* Redireciones funcionando a pleno 

* Protección contra inyeccion SQL

* Control de usuarios invitados en el aréa de administrador NUEVA RUTA tiendaelforastero.com.ar/admin

* Reconstrucciones de código CSS dañado

FALTA TRABAJAR EL CARRITO Y OPCIONES DE RECUPERAR CONTRASEÑA

* Modificaciones en el htaccess para no mostrar ERROR 404 y que no liste directorios


**14/11/2021**

*Guardar en una tabla de base de datos los Carritos de los usuarios a tráves de una petición POST con AJAX

* Eliminar carrito desde la base de datos a tráves de una petición con AJAX

* Generación de Link de pago con la API de MercadoPago con monto total a pagar cargado y recargado previamente con peticiones $_POST de AJAX

* Posibilidad de enviar y reenviar mensaje al vendedor y ver estado del pedido con la respuesta del vendedor

* Volví a acomodar la tabla de usuarios 

* Creación de tablas para ver los carritos con posibilidad de eliminarlos y ver que usuarios pertenecen 

* Creación de tabla venta para dar respuesta al mensaje del comprador y actualizar estado de compra o posible compra,con posibilidad de ver a quien se responde

* Acomodé algunos detalles estéticos

* NO PUDE HACER QUE SE ACTUALIZEN LOS CANTIDAD DE ARTÍCULOS DE UN DETERMINADO PRODUCTO

**17/11/2021**

* Correcciones en CSS

* Correcciones de errores

* Posibilidad de incluír código postal

**14/12/2021**

* Botones slider con enlaces tipo anclas a diferentes secciones de la página 

* Botón ancla para subir para arriba 

* label a cada input para mejor compresión de la información

* Ventanas Modal que abren por id para editar y eliminar

* Creación de las $_SESSION nombre y apellido para guardar los datos de la sessión de ese usuario

* Más información como nombre,apellido,fecha,hora y precio de cada producto en la tabla Carrito

* Posibilidad de comprimir imagenes en la misma página

* Mejoras de estilos en detalles

* Creación de lista de desplegable de categoría para cargar productos

* Incorporación de Lazzy loading para optimizar imagenes

**27/12/2021**

* Posibilidad de subir multiples imagenes

* Creación de la tabla pedidos confirmando el resumen de compra

* Posibilidad de ver las miniaturas de imagenes en la tabla de productos en el CRUD

* Mejoras visual en el chat con el venddor y en una página distinta

* Mejoras en organizacíón del menu en el modal

* Total de carrito y total de pedido se calculan en tablas separadas de mensajes

* Mayor información en la tabla pedidos y productos

* Incorporación de la tabla pedidos en el CRUD con el total de compra

* Incorporacíón de la tabla del todal de carrito

* Reorganización de las columnas de base de datos en la tabla mensajes y en la vista del CRUD


**11/2/2022**

* Incorporación de Bootstrap al proyecto
 
* Mejora del repositive en la página

* Correción de errores


**22/4/2022**

* Animaciones con CSS

* Optimización en la carga de imagenes 

* Corrección de errores con expresiones regulares y validaciones desde el Back-end y desde el panel de usuario

* Inicio de sesión con AJAX evitando las recargas en caso de dar error

* Incorporación de ajax en el panel de usuario,registro,editar nombre de imagenes,eliminar las imagenesy editar productos así evitar la recarga de la página cada vez que se realize un cambio.

* Funcionamiento del selector del producto en el inicio de la página 

* Incorporación de Alertify para mensajes de error o afirmaciones

* Carga de proyectos externos como Framework CSS o Google Fonts desde los mismos archivos ya descargados

* Mejoras en el rendmiento en general

* Página propia para errores 403 y 404

**28/5/2022**

* Sustitución de las 5 ventanas modal donde se mostraban productos por una sola con tres imagenes que se despliegan en Carrousel

* Ordenamiento de la tablas donde se mostraba el carrito y del pedido donde se mostraba varias veces el mismo producto sin agruparlo por cantidad

* Correcciones de malas prácticas CSS

**LIBERACIÓN DEL CÓDIGO BAJO LA LICENCIA APACHE 2.0**

**1/6/2022**

* Mejoras de seguridad con la conexión de la Base de Datos con PhpDotEnv

**2/6/2022**
* Cargar productos,subír las imagenes y llamarla en la base de datos desde un mismo formulario

* editar productos,subír las imagenes y llamarla en la base de datos desde un mismo formulario

**7/6/2022**

* Cargar productos,subír las imagenes y llamarla en la base de datos desde un mismo formulario en todos los formularios con imagenes

* Función de borrar imagen parcialmente realizada,no borra imagen del servidor,solo la limpia de la Base de Datos

* Posibilidad de subir y actualizar imagen las veces que sea necesario

**11/7/2022**

* Posibilidad de configurar los datos de MercadoPago sin ir al código

* Funcionalidad de borrar imagen completa

* Mensajes más personalizados en las ventanas modal

* Formas de pagos diversas

* Posibilidad de pagar con transferencia

* Creación de tabla localidad que va a aparecer en el registro,dejando por defecto completo,la localidad,el cóidgo postal y de aréa de celular

* Agrupar productos por categorías (Todavía no está dinámico)

* Validaciones de registros e ingreso mejorada

* Errores más específicos al registrarse y al ingresar

* Posibilidad de eliminar cuenta 

* Depuración de código CSS

* Cambio de la tabla de ventas a mensajes

* Creación de la página formas de pagos

* No hay que configurar para que se abra la ventana modal del producto

* Icono del usuario remplazado por el nombre del usuario al estar el mismo registrado

* Visor de imagen con posibilidad de ver y descargar imagen en el mismo lugar

* Mejeros al registrar invitados o moderadores en la administración

**17/1/2023**

* Posibilidad de bloquear usuarios sin eliminarlos antes

* Incoroporación de sistema de cache

* Incorporación de layload

* Se eliminarón animaciones 

* Se eliminó la tabla de total carrito y total pedido

* Se puede quitar y modifícar los medios de pagos y el fisco a tráves del crud

* Mejoras menores para calificar mejor en el PageSpeed 

* Mejoras de errores

* Posibilidad de ver contraseña en los ingresos de sesión 

**10/3/2023**

**Con el fin de mejorar la agilidad del sitio web**,se quitaron ...

* Fuentes de Google Fonts

* Los iconos de Font-Awesome se quitaron,dejando los básicos

* Google Analitycs no está presente

**Además**

* Se hizo la página de instalación de la PWA

**11/3/2023**

* Recopila datos de usuarios de manera nativa (ip,fecha y hora de visita,navegador y página visitada)


**12/3/2023**

* Mejora en el login

* Función de bloquear completa

**14/6/2023**

* Mejora en la recopilación de datos,utilizé como fuente para detectar sistema operativo **(https://ejemplocodigo.com/ejemplo-php-detectar-plataforma-o-sistema-operativo/)**

* Para detectar celulares **(https://ejemplocodigo.com/ejemplo-php-detectar-plataforma-o-sistema-operativo/)**

**19/6/2023**

* Posibilidad de descargar visitas del sitio en archivo txt

* Posibilidad de descargar lista de productos en archivo txt

**22/6/2023**

* Seguimiento de visitas el sitio web,desde la página de administración
 
* Posibilidad de reaccionar productos a futuro


**30/6/2023**

* Posibilidad de reaccionar a los artículos

**27/06/2023**

* Corrección de errores y mejoras menores

**12/10/2023**

* Intento de recuperar contraseña

* Agregar producto a favoritos

* Posibilidad de reaccionar a productos

* Estádisticas con gráficos gracias a ChartJS

**15/10/2023**

* Rediseño de card de productos

* Rediseño en página de ingreso y registro

* Rediseño en gráficos

**19/12/2023**

* Posibilidad de generar lista de productos con sus precios en pdf con FPDF (**https://fpdf.org**)

**6/01/2024**

* Posibilidad de buscar productos

* Mejoras muy minímas

**7/01/2024**

* Mejoras minímas

* Posibilidad de ver pdf a presonas registradas

**9/01/2024**

* Filtrar por categoría sin crear varias páginas
  
* Mejoras en el buscador

**16/01/2024**

* Eliminación de archivos con la finalidad de optimizar código y espacio

* Mejoras en la páginación en la página principal

* Incorporación de páginación en la página del buscador

* Incorporación de páginación en la tabla de usuarios en la administración
  
* Correciones menores

**17/01/2024**

* Posibilidad de ver productos que se busco desde Open Graph sin desde fuera de la página

* Quita de la vista de ID y usuarioID en la administración
  
* **Cambio de ID autoincremental en la tabla productos de la base de datos**

**19/01/2024***

* Posibilidad de generar remitos
  
* Agregue un <div> faltante en ingresar.php

# APORTE ECONOMICAMENTE AL PROYECTO 🤖

### ARGENTINA (TRANSFERENCIA BANCARIA) 

* ##### CBU : 1430001713019856090015
  
* ##### CUIT : 20437996165
  
* ##### BANCO : BRUBANK S.A.U
  
* ##### ALIAS : braian.fg.287

### ARGENTINA LINK DE PAGO CON MERCADO PAGO

* **Aporte de $200** https://mpago.la/12zGmhD

* **Aporte de $500** https://mpago.la/1rZNfkw 

* **Aporte de $1000** https://mpago.la/1hPNuPv

* **Aporte de $5000** https://mpago.la/2ZBdrF3

### PAYPAL

* https://www.paypal.com/donate/?hosted_button_id=KPYPY3QYQ5XHL

### CRIPTOS

* **Bitcoin (Red Bitcoin)** 3N5sN9trRrB2LNFKBt9o4uQDmz9E5cJaPb

* **ETHERIUM (Red ERC20)** 0x752c4313433c654fd6d76579ead6f0a5f65ab27e

* **USDT (Red ERC20)** 0x752c4313433c654fd6d76579ead6f0a5f65ab27e

*  **USDT (TRON)** TAjCfDW1zGzcYydc1DaWVjQtdDZjDF3VRC

*  **USDC (TRON)** TAjCfDW1zGzcYydc1DaWVjQtdDZjDF3VRC



<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Braian FG</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" media="all">
            <link rel="icon" href="favicon.ico" type="ico" />
            
            <!-- Google Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com"  media="all">
           <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin  media="all">
           <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"  media="all">
           <link rel="preconnect" href="https://fonts.googleapis.com" media="all">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
            <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Pacifico&display=swap" rel="stylesheet"  media="all">
        
          <!-- Bootstrap -->      
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous" defer></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous" defer></script>
          <link rel="stylesheet" href="style.css" />
          
         <!-- Font Awesome --> 
         <script src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous" defer></script>
        
          <meta charset="utf-8">
         
         <meta name="description" content="Página de presentación"/>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="theme-color" content="#00000">
         <meta property="og:title" content="Braian Frediani Guelffi">
         <meta property="og:image" content="https://tiendaelforastero.com.ar/Braian/images/braian.webp" />
      </head>
    <body>
     <nav>
            <a class="navbar-brand" href="#">Braian FG</a>
    </nav>

        
<div class="container">
   <header class="container">Acerca de Braian Frediani</header>
 
    <div class=" container color card mb-3" >
      <div class="row g-0">
        <div class="col-md-4">
          <img src="images/braian.webp" width="400" height="400" class="img-fluid rounded-start" alt="foto de presentacíon">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <p class="card-text">Mi nombre completo es Braian Emanuel Frediani Guelffi de 22 años de edad nacido en la ciudad de Chivilcoy , provincia de Buenos Aires,Argentina.
</p>
                 
     <div class="container">
                 <div class="row">
    <div class="col">
        <h4 class="card-title"> <i class="fas fa-user"></i> Datos personales</h4>
      <ul>   
            <li class="datos"><i class="fas fa-envelope"></i> <a class="texto3" href="mailto:braianfrediani23@gmail.com">braianfrediani23@gmail.com</a></li>
            <li class="datos"><i class="fas fa-phone"></i>  <a class="texto3" href="tel:+542346338767"> 2346338767</a></li>
            <li class="datos"><i class="fas fa-building"></i> La Plata,Buenos Aires</li>
             <li class="datos"><i class="fas fa-baby-carriage"></i> 11 de noviembre del 2001 </li>
             <li class="datos"><i class="fas fa-venus-mars"></i> Masculino</li>
      </ul>       
    </div>
   
    <div class="col">
      
    </div>
  </div>
      </div>
      
            <div class="row">
    <div class="col">
        <h4 class="card-title"> <i class="fas fa-graduation-cap"></i> Formación academica</h4>
      <ul>   
        <li>Primario completo,en escuela de educación primaria N°7.</li>
         <li>Secundario completo , en Escuela de Educacíón Secundaria técnica N°1,titulo de Técnico en Informática Personal y Profesional.</li>
         <li>Diplomado en Desarrollador Web Frontend.</li>
         <li>Diplomatura en Desarrollo web Backend</li>
         <li>Licenciado en Ciencias de la atmósfera en curso.</li>
         <li>Curso de Introducción a la cartografía con Google Earth <a class="texto2" href="images/CERTIFICADO.INTRO.A.LA.CARTOGRAFÍA-04.jpg">Ver</a></li>
         
      </ul>       
    </div>
    <div class="col">
       <h4 class="card-title"><i class="fas fa-book-open"></i> Conocimientos</h4>
       <ul>
           <li>Maquetado de páginas y sitios web.</li>
           <li>GNU/Linux Debian y derivados.</li>
           <li>programacíon básica de Js y php.</li>
           <li>Manejo de framework como Bootstrap,Uikit,Sweet Alert,Ajax.</li>
           <li>Uso de aplicaciones ofimáticas.</li>
           <li>Inglés pre-intermedio.</li>
           <li>Hardware de computadoras de escritorio y portatiles.</li>
       </ul>
    </div>
  </div>
  <div class="row">
    <div class="col">
        <h4 class="card-title"> <i class="fas fa-briefcase"></i> Experiencia Laboral</h4>
      <ul>   
        <li>Implementación de Radio Cut en el programa de radio La Noticia Urbana.</li>
        <li>Tres meses de trabajo como desarrollador web frontend.</li>
        <li>Emprendedor en tienda de ropa y más El Forastero.</li>
        <li>Trabajos en huerta urbanas.</li>
        <li>Creación y mantenimiento de software de tienda online (CMS) para mi propio emprendimiento
        (Es replicable a otros negocios).</li>
      </ul>       
    </div>
    <div class="col">
       <h4 class="card-title"> <i class="fas fa-briefcase"></i> Ocupación</h4>
       <ul>
          <li>Emprendedor y estudiante universitario.</li>
       </ul>
    </div>
  </div>
      </div>
    </div>
</div>    
</div>
</div>
      <div class="container contenedor">   
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://tiendaelforastero.com.ar/images/logo.svg" height="200" width="200" class="card-img-top" alt="tienda online">
      <div class="card-body color">
        <h5 class="card-title texto">Tienda el Forastero</h5>
        <p class="card-text">Tienda de ropa online y mucho más desde internet , lo pedís y lo tenés.</p>
                <button type="button" class="btn btn-primary"><a href="https://tiendaelforastero.com.ar" author="tiendaelforastero" >Ir a la tienda <i class="fas fa-arrow-circle-right"></i> </a></button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://merlotlinux.sourceforge.io/MerllotLinux.svg" height="200" width="200" class="card-img-top" alt="...">
      <div class="card-body color">
        <h5 class="card-title texto">Merlot Linux</h5>
        <p class="card-text">Distribución de GNU/Linux orientada a equipos de bajos recursos</p>
        <button type="button" class="btn btn-primary"><a href="https://merlotlinux.sourceforge.io" autor="SourceForge">Ir a la página <i class="fas fa-arrow-circle-right"></i> </a></button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/map.webp" class="card-img-top" alt="..." height="200" width="200">
      <div class="card-body color">
        <h5 class="card-title texto">En Google Maps</h5>
        <p class="card-text">Encuentre todas las fotos tomadas y aportadas a la comunidad </p>
                <button type="button" class="btn btn-primary"><a href="https://www.google.com/maps/contrib/105898404214819741874/reviews/@-34.8220424,-59.3902224,9z/data=!3m1!4b1!4m3!8m2!3m1!1e1" author="Google Maps">Ir a Google Maps <i class="fas fa-arrow-circle-right"></i> </a></button>
      </div>
    </div>
  </div>
</div>
</div>
 <footer>
  <a href="https://wa.me/5492346338767?text=Hola te contacto desde tu pagina web para " author="ir a Whatsapp" class="whatsapp" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
 </footer>   
    </body>
</html>
