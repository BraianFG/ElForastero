<?php 
  $negocio = 'SELECT * FROM estilos' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?>
    <style>
/*
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

body,html {
    line-height: 1;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    background-color: <?php echo $negocio['body'] ?>;
    overflow-x: hidden;
   -webkit-text-size-adjust: none;
    font-size: 16px;
    text-size-adjust:none;
    font-display:swap;
}

ol, ul {
    list-style: none;
}

input, select, textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    display: block;
    margin-top: 0.5em;
    width: 100%;
    height: 3em;
    background: <?php echo $negocio['color3'] ?>;
    border-color: <?php echo $negocio['texto'] ?>;
}

body, input, select, textarea {
    color: <?php echo $negocio['texto'] ?>;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    font-size: 1em;
    font-weight: 400;
    line-height: 1.75;
font-display:swap;
}

a {
    color:<?php echo $negocio ['color2'] ?>;
    text-decoration: none;
     cursor:pointer;
    font-weight:bold; 
}

a:hover {
  text-decoration:none;
  color:transparent;
  color: <?php echo $negocio['color2'] ?>;
  cursor:pointer;
}

.far{
 margin-right:0.2em;
}

p {
    font-size:1em;
    font-weight: normal;
    text-transform: uppercase;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    align-items: center;
    font-display:swap;
}

.uk-open>.uk-modal-dialog {
    opacity: 1;
    transform: translateY(0);
    padding: 1em;
    margin:1em auto;
    background-color:<?php echo $negocio['color3'] ?>;
}

h1, h2, h3, h4, h5, h6 {
    color:<?php echo $negocio['texto'] ?>;
    line-height: 1.50;
    margin: 0em 0 4.5em 0;
    height: 0.01em;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    text-transform: uppercase;
    font-size: 1em;
    font-display:swap;
}

h2 {
    font-size: 1.1em;
    margin-top:1em;
    margin-bottom:1em;
    padding:0 0.5em;
    font-weight:normal;
    font-display:swap;
}

/* Button */
input[type="submit"], input[type="reset"], input[type="button"], button, .button {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    background-color: transparent;
    border: 0;
    border-bottom-color: currentcolor;
    color: <?php echo $negocio['color2'] ?>;
    cursor: pointer;
    font-size: 0.6em;
    font-weight: normal;
    height: 4.8125em;
    letter-spacing: 0.25em;
    line-height: 4.8125em;
    padding: 0 0.3em 0 0.6em;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
    margin-top: 1em;
    display: block;
    border-radius: 0.6em;
    width: 100%;
    box-sizing: border-box;
    margin-bottom:0.8em;
    border:0;
    outline:0;
    cursor:pointer;
}

input[type="submit"].large, input[type="reset"].large, input[type="button"].large, button.large, .button.large {
    font-size: 0.7em;
    display: block;
    margin: auto;
    margin-top: 2em;
    margin-bottom: 1em;
    border:<?php echo $negocio['color2']?> 0.01em solid;
}

input[type="submit"].small, input[type="reset"].small, input[type="button"].small, button.small, .button.small {
    font-size: 0.5em;
}

.button.primary {
    background: <?php echo $negocio['color2']?>;
    color: <?php echo $negocio['color3'] ?>;
    display: block;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    margin: auto;
    margin:0;
    cursor:pointer;
    font-weight:normal;
font-display:swap;
}

.button.primary.CARRITO{
    display:block;
    justify-content:center;
    margin-left:-1em;
}
.button.primary:hover{
    color: <?php echo $negocio['color3'] ?>;
}

.button:hover{
    color: <?php echo $negocio['color2'] ?>;
}

input[type="submit"].disabled, input[type="submit"]:disabled, input[type="reset"].disabled, input[type="reset"]:disabled, input[type="button"].disabled, input[type="button"]:disabled, button.disabled, button:disabled, .button.disabled, .button:disabled {
    pointer-events: none;
}


/* Form */
form {
    margin: 0 0 2em 0;
}

input[type="text"], input[type="password"], input[type="email"], input[type="tel"], select, textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    background: <?php echo $negocio['color3']?>;
    border:<?php echo $negocio['color2']?> 0.01em solid;
    border-radius: 0;
    color: <?php echo $negocio['texto']?>;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
}

input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="tel"]:focus, select:focus, textarea:focus {
    border-color: <?php echo $resultado['texto'] ?>;
}

input[type="text"], input[type="password"], input[type="email"], select {
    height: 2.75em;
    margin-bottom: 1.2em;
}

textarea {
    padding: 0.75em 1em;
}

/* Image */
.image {
    border: 0;
    display: inline-block;
    position: relative;
}

img{
    object-fit:cover;
}

/* List */
ul {
    list-style: none;
    margin: 2em 0 1em 0;
    background: transparent;
    padding-right: 1em;
    box-sizing: border-box;
    font-size: 0.8em;
    padding-bottom: 1.3em;
    text-align: left;
}

ul li {
    padding: 0;
}

/* Icons */
.icons {
    display:flex;
    cursor: default;
    list-style: none;
    width: 98%;
    margin-top:1em;
}

.icons a{
    margin-left:0.5em;
}

ul.icons li {
    display: inline-block;
    padding: 0 1em 0 0;
}

#footer .icons{
    line-height:2em;
}

@media screen and (max-width: 480px) {
    .modal__header{
        font-size:0.8em;
        padding-top:0.2em;
    }
    
    .uk-close{
        font-size:0.9em;
    }
}

@media screen and (max-width: 350px) {
   .panel{
        font-size: 0.9em;
       align-items: center;
       padding-top:0.5em;
    }
}

.header p {
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1.5em;
    text-transform: uppercase;
}

#footer{
    margin-top:2em;
    border-top:<?php echo $negocio['color2']?> 0.02em solid;
}

#footer .copyright {
    color: <?php echo $negocio['placeholder']?>;
    font-family: <?php echo $negocio['fontFamily']?>;
    font-size: 0.5em;
    font-weight: 400;
    letter-spacing: 0.25em;
    text-transform: uppercase;
font-display:swap;
}

body.single #footer {
    text-align: center;
}

.button__modal {
    background-color: <?php echo $negocio['color2'] ?>;
    color:  <?php echo $negocio['color3'] ?>;
    font-weight: normal;
    text-transform: uppercase;
    display: flex;
    padding: 0.5em 0.5em 0.5em 0.5em;
    font-size: 0.8em;
    border-radius: 0.3em 0.3em 0.3em 0.3em;
    font-family: <?php echo $negocio['fontFamily']?>;
    align-items:baseline;
font-display:swap;
}

.modal__header {
    background-color: <?php echo $negocio['color2']?>;
    text-transform: uppercase;
    font-weight: bold;
    color: <?php echo $negocio['color3']?>;
    text-align: center;
    letter-spacing: 0.1em;
    height: 2em;
    margin-bottom: 0.1em;
    font-family: <?php echo $negocio['fontFamily2']?>;
    align-items:center;
font-display:swap;
}

/* Header */
#header {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-justify-content: space-between;
    -webkit-justify-content: space-between;
    -ms-justify-content: space-between;
    justify-content: space-between;
    height: 3em;
    box-shadow: -2px -10px 20px 1px <?php echo $negocio['texto'] ?>;
    left: 0;
    line-height: 3em;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10000;
    background-color:<?php echo $negocio['navbar'] ?>;
}


#header a {
    text-decoration: none;
    font-family: <?php echo $negocio['FontFamily'] ?>;
   font-display:swap;
   
}

#header ul {
    list-style: none;
    margin: 0;
    padding-left: 0;
}

#header ul li {
    display: inline-block;
    padding-left: 0;
}


#header .links {
    -moz-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-left: 1.5em;
}

#header .links ul li {
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    line-height: 1;
    margin-left: 1em;
    padding-left: 1em;
}

#header .links ul li a {
    border-bottom: 0;
    font-family: <?php echo $negocio['fontFamily']?>;
    font-size: 0.7em;
    font-weight: 400;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    font-display:swap;
}


@media screen and (max-width: 736px) {
    #header h1 {
        font-size: <?php echo $negocio['fontFamily'] ?>;
       font-display:swap;
    }
    
    .uk-open > .uk-modal-dialog{
        margin-top:3em;
    }
    
    .uk-close{
        height:2.8em;
    }
}

/* Intro */
#intro .logo {
    border-bottom: 0;
    display: block;
    margin: 0;
    position: relative;
    width: 4em;
}

#intro .logo img {
    display: block;
    max-width: 100%;
}

#intro .header h2 {
    font-size: 3em;
    font-weight: 900;
    padding:0 1em;
}

@media(max-width:360px){
 #intro .header h2 {
   margin-bottom:2.3em;
}

}
#intro .header p {
    font-size: 1em;
    padding-top:1em;
}

@media screen and (max-width: 1280px) {
    #intro {
        margin: 0 0 4em 0;
        text-align: center;
    }

    #intro .header h2 {
        font-size: 2.4em;
    }

    #intro .header p {
        font-size: 0.7em;
        font-family: <?php $negocio['fontFamily'] ?>
        font-display:swap;
    }
    
    .uk-modal-dialog{
        margin-top:3em;
    }
}

@media screen and (max-width: 736px) {
    #intro {
        margin: 0 0 1.5em 0;
        padding: 1.25em 0;
    }

    #intro > :last-child {
        margin-bottom: 0;
        border: 0em;
    }

    #intro .logo {
    }

    #intro .header h2 {
        font-size: 1.4em;
        font-display:swap;
    }

    #intro .header > :last-child {
        margin-bottom: 0;
        font-family: <?php echo $negocio['fontFamily'] ?> ;
	font-display:swap;
    }
}

    .marron{
       color: <?php echo $negocio['color2'] ?>;
       font-weight:bold;
    }
    
    /* Footer */
    #footer .icons {
        color: <?php echo $negocio['texto'] ?>;
    }
    
    #footer .copyright {
        color: <?php echo $negocio['texto'] ?>;
        font-family: <?php echo $negocio['fontFamily'] ?> ;
        font-size: 0.5em;
        font-weight: 400;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        padding-bottom:1em;
        font-display:swap;
    }
    
    body.single #footer {
        text-align: center;
    }
    
    .main{
     margin-left:2em;  
     text-decoration:none;
     border:0;
    }
    
    #intro {
        padding: 3em 0.3em 1.4em 0;
        display: flex;
        align-items: center;
    }
    
    #intro .header {
        overflow: hidden;
        padding: 1em 0em 1em 0;
    }
    
    .whatsapp {
        position: fixed;
        right: 1em;
        bottom:3.6em;
        z-index: 999;
    }
    
    .whatsapp img {
        width: 2em;
        height: 2em;
        border: 0;
        margin-bottom:0em;
    }
    
    .telegram {
        position: fixed;
        right: 1em;
        bottom:1em;
        z-index: 999;
        outline:none;
    }
    
    .telegram img {
        width: 2em;
        height: 2em;
        border:0;
        outline:none;
        margin-bottom:0em;
    }
    
    .button__modal {
        background-color: <?php echo $negocio['color2'] ?> ;
        color: <?php echo $negocio['color3'] ?> ;
        font-weight: bolder;
        text-transform: uppercase;
        align-items: baseline;
        display: flex;
        padding: 0.5em 0.5em 0.5em 0.5em;
        font-size: 0.8em;
        border-radius: 0.3em 0.3em 0.3em 0.3em;
        font-family:  <?php echo $negocio['fontFamily'] ?> ;
        margin-top: 0.6em;
        cursor:pointer;
         font-display:swap;
    }
    
    .modal__header {
        background-color: <?php echo $negocio['color2'] ?> ;
        text-transform: uppercase;
        font-weight: bold;
        color:  <?php echo $negocio['color3'] ?> ; 
        text-align: center;
        height: 2em;
        margin-bottom: 0.1em;
        font-family: <?php echo $negocio['fontFamily'] ?> ;
	font-display:swap;
    }
    
    .uk-close {
        color: <?php echo $negocio['texto'] ?>;
        background: <?php echo $negocio['color3'] ?>;
        width: 2.5em;
        height: 2.5em;
        cursor:pointer;
    }
    
    .modal__botones {
        display: flex;
        justify-content: center;
        cursor:pointer;
        width: 100%;
        box-sizing: border-box;
        height:3.5em;
        margin:auto;
        margin-bottom:5em;
    }
    
    ul li{
         font-family:  <?php echo $negocio['fontFamily'] ?>;
         background: transparent;
         font-display:swap;
    }
    
    .compradores{
        margin-top:.2em;
        margin-bottom:0.5em;
    }
    
    .compradores_num{
       padding-left:1em;
       outline:none;
       background: <?php echo $negocio['color3']?>;
       border:<?php echo $negocio['color2']?> 0.01em solid;
    }
    
    .perfil{
        justify-content:center;
        align-items:center;
        margin:auto;
        display:block;
        width:18em;
        height:8em;
    }
    
    .compradores:disabled{
        background: <?php echo $negocio['color3']?>;
        font-weight:bold;
    }
 
@media(max-width:560px){
    .botones{
       margin: -1.3em 0em;
       display:block;
    }
    
    .button .primary .alianeado{
        display:block;
        margin:auto;
    }
}

    i{
        margin-right:0.3em;
        color:transparent;
    }
    
    .edit{
      padding:0 0.5em;
    }

    .borrar{
        display: flex;
        padding: 1em 0;
        margin-top: 4em;
        height: 1.8em;
        justify-content: center;
        width: 35%;
        text-align: center;
        align-items: center;
        font-weight: normal;
        background-color:<?php echo $negocio['color3'] ?>;
        color:<?php echo $negocio['color2'] ?>;
        border:0.1em solid <?php echo $negocio['color2'] ?>;
        margin-right:0.3em;
       font-size: 0.7em;
        margin-top: 8em;
    }
    
    .agregar{
       display: flex;
        padding: 1em;
        height: 2em;
        width: 100%;
        margin-left:1em;
        margin-top: 4em;
        text-align: center;
        align-items: center;
        font-weight: bolder;
        background-color:<?php echo $negocio['color2'] ?>;
        color:<?php echo $negocio['color3'] ?>;
        cursor:pointer;
       font-size: 0.7em;
        margin-top: 8em;
    }
    
    .uk-alert{
        background-color:<?php echo $negocio['color2'] ?>;
        color:<?php echo $negocio['color3'] ?>; 
        border-radius:0.4em;
        align-items:center;
    }
    
    #carrito{
      padding-left:1em;
    }
    
    svg{
        margin-right:0.4em;
        align-items:center;
        margin-top:0em;
        margin-bottom:0em;
        margin-left:0.4em;
    }

    .datos{
        padding:0em;
        font-size: 0.7em;
        font-weight: bolder;
        text-transform: uppercase;
        display: block;
        justify-content: flex-start;
        margin-bottom: -0.3em;
    }

.agregar{
    display:flex;
    justify-content:center;
} 
    .resumen{
        background-color:<?php echo $negocio['color3'] ?>;
        color:<?php echo $negocio['color2'] ?>;
        border-bottom:0.2em solid <?php echo $negocio['color2'] ?>;
        padding:0em;
        margin-top:3em;
        margin-bottom: -2.5em;
        display:block;
    }
    
    .wrapp{
         display: block;
         margin-top: 3em;
         margin-bottom: 1.5em;
         padding-top: 2em;
         padding-bottom: 1em;
      }
    
      textarea {
       padding: 0.75em 1em;
       margin-bottom: 1em;
       height: 8em;
       margin-top: -1em;
     }
     
   .text{
       margin:-6em 0;
       height:4em;
       padding-top:1em;
   }

   .borrar__carrito{
      justify-content:center;
      width:100%;
      cursor:pointer;
   }
   
    .modal{
        width: 100%;
        margin-left: 0.3em;
        cursor:pointer;
        height:5em;
        justify-content: center;
    }
    
    .agregar:hover{
        color:<?php echo $negocio['color3'] ?> ;
    }
    
    .modal:hover{
        color:<?php echo $negocio['color3'] ?> ;
    }
    
    .borrar:hover{
         color:<?php echo $negocio['color2'] ?> ;    
    }
    
    .marron:hover{
         color:<?php echo $negocio['color2'] ?> ;
    }
    
    .uk-modal-footer{
       border-top:0; 
       margin-top:-1em;
       margin-bottom:-1em;
       padding: 0 1em 2em;
       background-color:transparent;
    }
    
    .volver{
        display: flex;
        height: 4em;
        justify-content: center;
        width: 100%;
        text-align: center;
        align-items: center;
        font-weight: bolder;
        background-color:<?php echo $negocio['color3'] ?>;
        color:<?php echo $negocio['color2'] ?>;
        border:0.1em solid <?php echo $negocio['color2'] ?>;
        margin-right:0.3em;
    }   
    
    .Confirmar{
        display: flex;
        height: 4em;
        justify-content: center;
        width: 100%;
        text-align: center;
        align-items: center;
        font-weight: bolder;
        background-color:<?php echo $negocio['color2'] ?>;
        color:<?php echo $negocio['color3'] ?>;
        border:0.1em solid <?php echo $negocio['color3'] ?>;
        margin-right:0.3em;
    }   
    
    .Confirmar:hover{
       color:<?php echo $negocio['color3'] ?>;
    }   
    
    .volver:hover{
       color:<?php echo $negocio['color2'] ?>;
    }
    
    .pedidos__lista{
     display:block;
     width:100%;
     margin:auto;
    }
    
    .uk-table th {
        padding: 1em;
        text-align:center;
        vertical-align: bottom;
        font-size: .700rem;
        font-weight: 400;
        color: <?php echo $negocio['color2']?>;
        background-color: <?php echo $negocio['color3']?>;
        font-weight:bold;
        text-transform: uppercase;
        border-bottom:<?php echo $negocio['color2']?> 0.1em solid;
    }
    
    .uk-table td {
         padding: 1em 0.5em;
         vertical-align: middle;
         font-size:.800rem;
         text-align:center;
         background-color: <?php echo $negocio['color3']?>;
    }
    
    *+.uk-table {
        margin-top:0em;
    }
    
    .uk-table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    
    .eliminar{
        display:flex;
        justify-content:space-around;
        margin:auto;
        padding-left:1em;
        padding-right:1em;
    }
    
    .total{
        background-color:<?php echo $negocio['color3']?>;
        color:<?php echo $negocio['color2']?>;
        height:0em;
        font-weight: bold;
        margin-top: 0em;
        padding: 1em 1em 3em;
        margin-bottom:0em;
        border-top:<?php echo $negocio['color2']?> 0.1em solid;
        border-bottom:<?php echo $negocio['color2']?> 0.2em solid;
    }
    
    .fondo{
         background-color:<?php echo $negocio['color3']?>;
         border-bottom:<?php echo $negocio['color2']?> 0.2em solid;
         height:25em;
         overflow:scroll;
    }
    
    #comprador{
         background-color:<?php echo $negocio['color3']?>;
         color:<?php echo $negocio['color2']?>;
         border-bottom:<?php echo $negocio['color2']?> 0.1em solid;
         width:90%;
         border-radius:0.5em;
         margin-top:0.1em;
         margin-top:0.65em;
    }
    
    .enviar__mensaje{
        display:flex;
        flex:1;
        width:100%;
        justify-content:center;
        margin:auto;
    }
    
    .enviar__mensaje-boton{
        background-color:<?php echo $negocio['color2']?>;
        color:<?php echo $negocio['color3']?>;
        width: 40%;
        margin-left:2em;
    }

  .mensaje__emisor{
     display:flex;
     justify-content:flex-end;
     background-color:<?php echo $negocio['color2']?>;
     color:<?php echo $negocio['color3']?>;
     width:40%;
     border-radius: 0.5em;
     padding: 1em 2em;
     position:relative;
   }     
   
  .mensaje__respuesta{
    display:flex;
    position:relative;
    justify-content:flex-start;
    margin:auto; 
  }

  .mensaje__receptor{
     display:flex;
     position:relative;
     right:0;
     color:<?php echo $negocio['color2']?>;
     width:40%;
     margin-left: 1em;
     border-radius: 0.5em;
     padding: 1em 2em;
     text-align:left;
     font-size:1em;
   }

    .mensaje{
        display:flex;
        position:relative;
        justify-content:flex-end;
        box-sizing:border-box;
        margin-right:1em;
    }

     .uk-text-small{
       font-size:0.5em; 
       margin-bottom:0;
       font-weight:500;
       padding-left:1.2em;
       margin-top:0;
       font-size:0.7em;
    }

    .card-img-top {
        width:42.857em;
        height: 15em;
        background-image:url("../../images/blanco.webp");
        image-rendering: pixelated;
        max-height:10em;
    }
    
    .productos{
        display:flex;
        flex-wrap:wrap;
        justify-content: space-evenly;
        margin-top:1.7em;
    }
    
    .popup{
        margin-top:-5em;
    }
    
    .info__titulo{
       	font-family:<?php echo $negocio['fontFamily2'] ?>; 
       	margin-top: 0em;
        padding: 0;
        	font-display:swap;
    }
    
    .info__subtitulo{
        font-weight:300;
        font-size: 0.6em;
    }
    
    .info__logo{
        width:2em;
        margin-bottom:0.5em;
    }
    
    .info__descripcion{
        font-weight:500;
        margin-top:1.5em;
    }
    
    .modal__imagen{
        display:block;
        justify-content:center;
        margin:auto;
        width:100%;
    }

   .select{
       width:2em;
       height:2em;
       background-image:url("../../admin/images/align-justify-solid.svg");
       background-color:transparent;
       border:0;
       color:transparent;
       outline:none;
       margin-right:1em;
   }
   
    .select2{
       margin-top:0.7em;
       width:2em;
       height:1.85em;
       background-image:url("../../admin/images/arrow-down-short-wide-solid.svg");
       background-color:transparent;
       border:0;
       color:transparent;
       outline:none;
       margin-right:1em;
   }
         
    option{
      color:<?php echo $negocio['color2']?>;
      font-size:0.7em;
    }
    
    #error{
      margin-top:3em;
      text-align:center;
      color:<?php echo $negocio['color2']?>;
      font-weight:bold;
    }
    
    .items{
        display:block;
        font-weight:normal;
        text-transform:uppercase;
        font-size:0.8em;
    }
    
     .uk-table {
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 0;
    }

    .uk-card-default{
        background-color:<?php echo $negocio['color3']?>;
    }
    
    .image__modal{
        width: 40.000em;
        height: 26.688em;
	    height: auto; 
	    
    }
    
    .navTitulo{
        text-transform:uppercase;
        font-size:0.7em;
        margin-left:0.7em;
        font-weight:bold;
    }
    

.contrasenia{
    display:flex;
}

#ver{
    font-size:0.6em;
    margin-left:0.5em;
}

.fa-arrow-down{
    background-image:url("../../icons/arrow-down-solid.svg");
    background-repeat:no-repeat;
    font-size:1em;
}

.icon-heart{
    margin-right:1em;
    width:0.7em;
    height:0.7em;
    margin-top:1.2em;
    background-color:<?php echo $negocio['color3']?>;
}

.icon-star{
    object-fit:unset;
    height:1.2em;
    width:1.2em;
    margin-bottom:1em;
    position:bottom;
    
}

.uk-card{
    margin:0.3em;
    font-size:1em;
     max-width:20em;
}

@media screen and (max-width: 718px){
   .uk-card{
    margin:0.3em;
    font-size:1.2em;
     max-width:40em;
   } 
}

.uk-card-header{
   background-color:<?php echo $negocio['color2']?>;
   color:<?php echo $negocio['color3']?>;
   height:2.5em;
   font-size:1em;
}

.uk-card-body {
    display: flow-root;
    padding: 1em 1.875em;
    margin-bottom:3em;
    font-size:1em;
    box-sizing:border-box;
}

.uk-card-footer{
    padding: 1.5em;
    height:1em;
    display:flex;
    flex:1;
    justify-content:space-between;
    align-items:center;
    margin:0;
    border-bottom:0.2em solid <?php echo $negocio['color2']?>;
}

.uk-text-meta{
    padding-top:1.2em;
    color:<?php echo $negocio['color2']?>;
    font-size:1em;
}

.uk-flex-between{
       justify-content:space-between; 
       display:flex;
}

.uk-overlay-default{
    background:none;
}

.uk-overlay{
    padding: 2.813em 1.875em; 
}

.uk-flex-inline{
    align-items:baseline;
}

.uk-flex-inline-nolog{
    align-items:center;
}

.pagination__item{
         background-color:<?php echo $negocio['color2']?>;
         color:<?php echo $negocio['color3']?>;
         justify-content:center;
         border-radius:0.1em;
         text-align:center;
         margin:1em 0.5em;
         padding:1em;
}

.uk-pagination:hover{
    color:<?php echo $negocio['color3']?>; 
}
.uk-pagination{
    justify-content:center;
    margin:auto;
    text-align:center;
}

#ver2,#ver3,#ver4{
    margin-top:-2em;
}

.margen__abajo{
    margin-bottom:1.5em;
}

.busqueda{
    align-items:center;
    margin-top:-1.6em;
}    

.uk-container .uk-container {
    padding-left: 0;
    padding-right: 0;
    font-size: 1em;
}

.paginacion{
    display:flex;
    text-align: center;
    justify-content: center;
}

.pagination__item:hover{
      color:<?php echo $negocio['color3']?>; 
}

.pagos{
   justify-content:center;   
   display:flex;
   flex:1;
   flex-wrap:wrap;
}

.pagar{
    margin-top:5em
}

.uk-grid-item-match, .uk-grid-match>*{
    justify-content:center;
}
</style>
<?php
  }
?>