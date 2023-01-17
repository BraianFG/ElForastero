# El FORASTERO TIENDA ONLINE Y CMS
Tienda Online desarrollada en Chivilcoy,Buenos Aires,Argentina por Braian Emanuel Frediani Guellffi con ayuda de conocidos e internautas y con mucha dedicación de tiempo comenzó en agosoto de 2021 como parte de un proyecto de las prácticas profesionalizantes la cual me había proyectado esto para terminar el secundario y finalizar la técnicatura en Técnico Personal y Profesional en informática,en el 2022 continua con mejoras haciendo el uso del usuario más cómodo,fácil y rápido,el 28 de mayo del 2022 esté códgo fue liberado bajo **la Licencia Apache 2.0**.

**Visite http://braianfg287.tk/**

**Tienda Online demo https://tiendaelforastero.com.ar/tienda**

**Tienda Online en en funcionamiento https://tiendaelforastero.com.ar**

# INSTALACIÓN Y CONFIGURACÍON
* Descargar el archivo .zip y subirlo al servidor

* Descomprimirlo en el servidor 

* Crear una base de datos y conectarla desde el archivo **database.php** ,las tablas o archivo de configuración se encuentra en la carpeta **Base de Datos**

* Una vez realizada la conexión ir a **httṕ://tudominio.com/admin** e ingresar **email : admin@admin** y **Contraseña:12345678**

* Una vez adentro del aréa administrativa ir **httṕ://tudominio.com/admin/registro** y ahí hacer una cuenta nueva a gusto del usuario

* Una vez hecho esto eliminar esta cuenta **email : admin@admin** y **Contraseña:12345678** que aparece en el **id : 1 , tabla: admin** de la Base de Datos

* Una vez eliminada la cuenta inicial modifícarle **id : 1** a la cuenta nueva y comprobar si se puede ingresar con la cuenta nueva

* Descomprimir el Archivo **vendor.zip** y **vendorR.zip**

* Configurar el link de pago de Mercado Pago **Solo le falta añadír el Access Token y el Public Key** para esto se debe ingresar a **https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/integrate-checkout-pro** e iniciar sesión para anadir eso que falta,una vez encontrado ir a **comprar.php** donde se tiene que agregar esos dos datos faltante.

**AL SUBÍR LAS IMAGENES NO SE COMPRIME DESDE EL SERIVIDOR COMPRIRLAS ANTES DE USARLA O USAR SERVICIOS COMO ImageOptim ( https://imageoptim.com/api )o ImageKit.io ( https://imagekit.io/)**


# COMPONENTES EXTERNOS

* Plantilla de base de **HTML5UP Future Inperfect (https://html5up.net/future-imperfect)**

* Framework CSS **UIkit (https://getuikit.com/)** y  **Bootstrap (https://getbootstrap.com/)** 

* Framework JS **Alertify (https://alertifyjs.com/)** y **Ajax(https://api.jquery.com/jquery.ajax/)**

* Librería JS **Jquery (https://jquery.com/)**

* Iconos de **Fonts Awesome (https://fontawesome.com/)** y con imagenes usadas de **Pixabay (https://pixabay.com/)**

* Fuentes tipográficas de **Google Fonts(https://fonts.google.com/)**

* Pasarela de pago **SDK de Cheeckout Pro de Mercado Pago** **(https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/landing)**

* Uso **PhpDotEnv(https://github.com/vlucas/phpdotenv)**

* Google Analytics **para toma de datos** **(https://analytics.google.com/)**

* Lazysises **para carga diferida de imagenes** **(https://afarkas.github.io/lazysizes/index.html)**

* ImageOptim **para redimensionar imagenes** **(https://imageoptim.com/)**

# MEJORAS
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

*Correcciones en CSS

*Correcciones de errores

*Posibilidad de incluír código postal

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

** 17/1/2023**

* Posibilidad de bloquear usuarios sin eliminarlos antes

* Incoroporación de sistema de cache

* Incorporación de layload

* Se eliminarón animaciones 

* Se eliminó la tabla de total carrito y total pedido

* Se puede quitar y modifícar los medios de pagos y el fisco a tráves del crud

* Mejoras menores para calificar mejor en el PageSpeed 

* Mejoras de errores

* Posibilidad de ver contraseña en los ingresos de sesión 
