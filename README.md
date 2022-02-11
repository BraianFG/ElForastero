# ElForastero
Tienda online
9/9

*Trabajé en las pantallas de registro e ingreso 

*Mejora del front-end

*Creación de la tabla de base de datos con el campo de email unico para evitar repeticiones

*Validaciones para campo vacios desde el php

*Conexión y funcionamiento de la base de datos

1/9

*Más artículos 

*Fragemente todo un archivo HTML de más de 1000 lineas en varios archivos php,utilizando el include

*Panel con los datos del comprador con parte del JS en funcionamiento

*Diseños de panfletos con Inkscape


20/8 cambios

*Agegué más arículo,en general todo los que me interesan 

*Corregí errores en los link de pagos de los productos

*Inserté fuentes de Google como Manrope para darle más estilo

*Agregué visor de imagen con una ventana modal con un Framework UiKit

*Opción de compra con pack de 3,6,9 y hasta 12 unidades con descuento

*Hice un logo para el carrito de Whatsapp

*Agregué artículos al carrito de Whatsapp

*Hice publicidad en dos post de la página de Facebook El Forastero


23/10

*Creación de la base de datos USUARIOS,PRODUCTOS,MISITIO,MINEGOCIO,ADMIN,PEDIDOS

*Conexión con la base de datos 

*Los productos se pueden eliminar,editar y agregar dianamicamente desde php y una base de datos

*Se creó el subdominio https://admin.tiendaelforastero.com.ar en donde se va a permitir al usuario editar,eliminar y agregar dinamicamente contenido sin tocar código y de forma amigable.

*Se hizo un pequeño gestor de archivos en donde se puede subir desde el subdominio archivos al servidor en el directorio /public_html/images/ ,esto mismo se puede visualizar en una lista con un enlace a las mismas,se pueden editar los nombres y eliminar las imagenes desde la interfaz.

*El login está funcionando con cookies del lado principal

*Panel de administrador 100% terminado

*Eliminación de más de 30 archivos que generaban redundancia

*Mejora de la visualización de la página principal

*Pruebas de ensayos y error y en el funcionamiento

*Me falta reforzar la seguridad en el login con las opciones de recuperación 

*Poner en funcionamiento la API de la pasarella de pago Mercado Pago con Checkout Pro

1/11

*CSS dinamico,los colores se pueden cambiar a gusto del usuario desde el aréa del administrador

*Las contraseñas en las bases de datos se encriptan con SHA1

*Mejoras en el  CSS 

*Se optimizó código CSS quitando unas 10.000 lineas sin algún uso

*Se solucionó problemas de compatibilidad con Chrome en iconos de Font-Awesome

*Panel de usuario con las variables de $_SESSION

*Panel con los datos del usuario

*Redirecciones funcionando al 100% en funcióń si el usuario está logueado o no.

*Se limitó caracteres desde el front en los imput type number en los ID mayor a uno ,y los password como minimo 8 caracteres y máximo 15 caracteres

7/11

*Panel de usuario en completo funcionamiento

*Mejoras de detalles estéticos vinculados con la funcionalidad del area de administador

*Control de invitiados

*Solución al error loguerse en el aréa administrativa

*Encriptado definitivo Con Password_hash salt 8

*Redireciones funcionando a pleno 

*Protección contra inyeccion SQL

*Control de usuarios invitados en el aréa de administrador NUEVA RUTA tiendaelforastero.com.ar/admin

*Reconstrucciones de código CSS dañado

FALTA TRABAJAR EL CARRITO Y OPCIONES DE RECUPERAR CONTRASEÑA

*Modificaciones en el htaccess para no mostrar ERROR 404 y que no liste directorios


14/11

*Guardar en una tabla de base de datos los Carritos de los usuarios a tráves de una petición POST con AJAX

*Eliminar carrito desde la base de datos a tráves de una petición con AJAX

*Generación de Link de pago con la API de MercadoPago con monto total a pagar cargado y recargado previamente con peticiones $_POST de AJAX

*Posibilidad de enviar y reenviar mensaje al vendedor y ver estado del pedido con la respuesta del vendedor

*Volví a acomodar la tabla de usuarios 

*Creación de tablas para ver los carritos con posibilidad de eliminarlos y ver que usuarios pertenecen 

*Creación de tabla venta para dar respuesta al mensaje del comprador y actualizar estado de compra o posible compra,con posibilidad de ver a quien se responde

*Acomodé algunos detalles estéticos

*NO PUDE HACER QUE SE ACTUALIZEN LOS CANTIDAD DE ARTÍCULOS DE UN DETERMINADO PRODUCTO

17/11

*Correcciones en CSS

*Correcciones de errores

*Posibilidad de incluír código postal

14/12

*Botones slider con enlaces tipo anclas a diferentes secciones de la página 

*Botón ancla para subir para arriba 

*label a cada input para mejor compresión de la información

*Ventanas Modal que abren por id para editar y eliminar

*Creación de las $_SESSION nombre y apellido para guardar los datos de la sessión de ese usuario

*Más información como nombre,apellido,fecha,hora y precio de cada producto en la tabla Carrito

*Posibilidad de comprimir imagenes en la misma página

*Mejoras de estilos en detalles

*Creación de lista de desplegable de categoría para cargar productos

*Incorporación de Lazzy loading para optimizar imagenes

27/12

*Posibilidad de subir multiples imagenes

*Creación de la tabla pedidos confirmando el resumen de compra

*Posibilidad de ver las miniaturas de imagenes en la tabla de productos en el CRUD

*Mejoras visual en el chat con el venddor y en una página distinta

*Mejoras en organizacíón del menu en el modal

*Total de carrito y total de pedido se calculan en tablas separadas de mensajes

*Mayor información en la tabla pedidos y productos

*Incorporación de la tabla pedidos en el CRUD con el total de compra

*Incorporacíón de la tabla del todal de carrito

*Reorganización de las columnas de base de datos en la tabla mensajes y en la vista del CRUD


11/2

*Incorporación de Bootstrap al proyecto
 
*Mejora del repositive en la página

*Correción de errores
