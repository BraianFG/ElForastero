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
html, body, object, iframe, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    font-family: <?php echo $negocio['fontFamily'] ?> ;
     background-color:transparent; 
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
}

body {
    line-height: 1;
    background-color:<?php echo $negocio['body'] ?> ;
    font-family: <?php echo $negocio['fontFamily'] ?> ;
    height:100%;
}

ol, ul {
    list-style: none;
}

body {
    -webkit-text-size-adjust: none;
    font-size: 16px;
}

input::-moz-focus-inner {
    border: 0;
    padding: 0;
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
    background:  <?php echo $negocio['color3'] ?> ;
    border-color: <?php echo $negocio['texto'] ?> ;
}

html {
    box-sizing: border-box;
     background: <?php echo $negocio['body'] ?>;
}

*, *:before, *:after {
    box-sizing: inherit;
}

body {
    background: <?php echo $negocio['body'] ?>;
}

body.is-preload *, body.is-preload *:before, body.is-preload *:after {
    -moz-animation: none !important;
    -webkit-animation: none !important;
    -ms-animation: none !important;
    animation: none !important;
    -moz-transition: none !important;
    -webkit-transition: none !important;
    -ms-transition: none !important;
    transition: none !important;
}

/* Type */
body, input, select, textarea {
    color:<?php echo $negocio['texto'] ?>;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    font-size: 12pt;
    font-weight: 400;
    line-height: 1.75;
}

@media screen and (max-width: 1680px) {
    body, input, select, textarea {
        font-size: 12pt;
    }
}

@media screen and (max-width: 1280px) {
    body, input, select, textarea {
        font-size: 12pt;
    }
}

@media screen and (max-width: 980px) {
    body, input, select, textarea {
        font-size: 12pt;
    }
}

@media screen and (max-width: 736px) {
    body, input, select, textarea {
        font-size: 12pt;
    }
}

@media screen and (max-width: 480px) {
    body, input, select, textarea {
        font-size: 12pt;
    }
    
    .titulo__texto{
        font-size: 1.5em;
        letter-spacing: 0.2em;
    }
}

a:hover {
    border-bottom-color: transparent;
}

a:hover:before {
    color:  <?php echo $negocio['texto'] ?>;
}

strong, b {
    color: <?php echo $negocio['texto'] ?> ;
    font-family: <?php echo $negocio['fontFamily'] ?> ;
    font-weight: bold;
}

em, i {
    font-style: italic;
    outline:none;
}

p {
    font-size: 0.8em;
    font-weight: bolder;
    text-transform: uppercase;
    font-family: <?php echo $negocio['fontFamily'] ?> ;
    align-items: center;
}

h1, h2, h3, h4, h5, h6 {
    color:  <?php echo $negocio['texto'] ?> ;
    font-weight: bold;
    line-height: 1.50;
    margin: 0em 0 3.8em 0;
    height: 0.01em;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    text-transform: uppercase;
    font-size: 1em;
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    font-family:  <?php echo $negocio['fontFamily'] ?> ;
    color: inherit;
    border-bottom: 0;
}

h2 {
    font-size: 1.1em;
}

h3 {
    font-size: 1.3em;
}

h4 {
    font-size: 0.7em;
}

h5 {
    font-size: 1.9em;
}

h6 {
    font-size: 1em;
}

/* Button */
input[type="submit"], input[type="reset"], input[type="button"], button, .button {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    -moz-transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
    -webkit-transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
    -ms-transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
    transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
    background-color: transparent;
    border-bottom:<?php echo $negocio['color2'] ?> 0.1em solid;
    color: <?php echo $negocio['color2'] ?> ;
    cursor: pointer;
    font-size: 0.6em;
    font-weight: 800;
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
}

input[type="submit"]:hover{
      color:<?php echo $negocio['color3'] ?>;
      cursor:pointer;
}

.button.primary {
    background: <?php echo $negocio['color2'] ?> ; !important;
    color: <?php echo $negocio['color3'] ?> ;
    display: block;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    margin: auto;
    align-items: baseline;
    border:0;
    padding:0 1.3em;
    margin-left:0.15em;
    margin-right:0.15em;
    outline:0;
}

.button.primary:hover{
        color: <?php echo $negocio['color3'] ?> ;
        cursor:pointer;
}    
/* Form */
form {
    margin: 0 0 2em 0;
}

.uk-alert-primary {
    background-color: <?php echo $negocio['color2'] ?>;
    color: <?php echo $negocio['color3'] ?>;
    max-width:40%;
    display:block;
    justify-content:center;
    margin:3em auto;
    
}

input[type="text"], input[type="password"], input[type="email"], input[type="tel"], select, textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    background: rgba(160, 160, 160, 0.075);
    border: none;
    border: solid 1px rgba(160, 160, 160, 0.3);
    border-radius: 0;
    color: inherit;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
    font-size:1em;
    margin-bottom:1em;
}

input[type="text"]:invalid, input[type="password"]:invalid, input[type="email"]:invalid, input[type="tel"]:invalid, select:invalid, textarea:invalid {
    box-shadow: none;
}

input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="tel"]:focus, select:focus, textarea:focus {
    border-color: <?php echo $negocio['texto'] ?> ;
    box-shadow: inset 0 0 0 1px <?php echo $negocio['texto'] ?> ;
}

input[type="text"], input[type="password"], input[type="email"], select {
    height: 2.75em;
    margin-bottom:1.1em;
}



/* Image */
.image {
    border: 0;
    display: inline-block;
    position: relative;
}

.image img {
    display: block;
}

/* List */
ol {
    list-style: decimal;
    margin: 0 0 2em 0;
    padding-left: 1.25em;
}

ol li {
    padding-left: 0.25em;
}

ul {
    list-style: none;
    margin: 0 0 2em 0;
    padding-left: 0;
    background: transparent;
}

ul li {
    padding: 0;
}

header p {
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1.5em;
    text-transform: uppercase;
}

input[type=
    "text"], input[type="password"], input[type="email"], select {
    height: 2.75em;
}

::
    -webkit-input-placeholder {
    color: <?php echo $negocio['placeholder'] ?> !important;
    opacity: 1.0;
}

:
    -moz-placeholder {
    color: <?php echo $negocio['placeholder'] ?>  !important;
    opacity: 1.0;
}

::
    -moz-placeholder {
    color: <?php echo $negocio['placeholder'] ?> !important;
    opacity: 1.0;
}

:
    -ms-input-placeholder {
    color: <?php echo $negocio['placeholder'] ?> ; !important;
    opacity: 1.0;
}


header p {
    font-family: <?php echo $negocio['fontFamily'] ?> ;
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1.5em;
    text-transform: uppercase;
}

body {
    padding-top: 2em;
}

#header {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-justify-content: space-between;
    -webkit-justify-content: space-between;
    -ms-justify-content: space-between;
    justify-content: space-between;
    background-color: <?php echo $negocio['navbar'] ?> ;
    border-bottom: solid 1px rgba(160, 160, 160, 0.3);
    box-shadow: -2px -10px 20px 1px  <?php echo $negocio['texto'] ?> ;
    height: 3em;
    left: 0;
    line-height: 3em;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10000;
}

#header a {
    color: inherit;
    text-decoration: none;
    font-family:<?php echo $negocio['fontFamily'] ?> ;
}

#header ul {
    list-style: none;
    margin: 0;
    padding-left: 0;
}

#header ul li {
  padding:1em;
}

#header h1 {
    height: inherit;
    line-height: inherit;
    padding: 0 0 0 1.5em;
    white-space: nowrap;
}

#header h1 a {
    font-size: 0.7em;
}

#header .links {
    -moz-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    height: inherit;
    line-height: inherit;
    margin-left: 1.5em;
    overflow: hidden;
    padding-left: 1.5em;
}

#header .links ul li {
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    line-height: 1;
    margin-left: 1em;
    padding-left: 1em;
}

#header .links ul li:first-child {
    border-left: 0;
    margin-left: 0;
    padding-left: 0;
}

#header .links ul li a {
    border-bottom: 0;
    font-family: <?php echo $negocio['fontFamily'] ?> ;
    font-size: 0.7em;
    font-weight: 400;
    letter-spacing: 0.25em;
    text-transform: uppercase;
}

#header .main {
    height: inherit;
    line-height: inherit;
    text-align: right;
}

#header .main ul {
    height: inherit;
    line-height: inherit;
}

#header .main ul li {
  padding:1em,1em;
}

#header .main ul li > * {
    display: block;
    float: left;
}

#header .main ul li > a {
    text-decoration: none;
    border-bottom: 0;
    color: <?php echo $negocio['texto'] ?> ;
    position: relative;
}

#header .main ul li > a:before {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
    text-transform: none !important;
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
}

#header .main ul li > a:before {
    display: block;
    height: inherit;
    left: 0;
    line-height: inherit;
    position: absolute;
    text-align: center;
    text-indent: 0;
    top: 0;
    width: inherit;
}

#header form {
    margin: 0;
}

@media screen and (
    max-width: 980px) {
    #header .links {
        display: none;
    }
}

a:hover {
    color:<?php echo $negocio['texto'] ?> ;
    text-decoration: none;
    align-items:center;
    a {
     color: <?php echo $negocio['texto'] ?> ;

}
}
    
.uk-modal-dialog {
    opacity: 1;
    transform: translateY(0);
    padding: 1em;
    margin-top: 2em;
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
    font-family: <?php echo $negocio['fontFamily'] ?> ;
}

.modal__header {
    background-color: <?php echo $negocio['color2'] ?> ;
    text-transform: uppercase;
    font-weight: bold;
    color: <?php echo $negocio['color3'] ?> ;
    text-align: center;
    letter-spacing: 0.1em;
    height: 2em;
    margin-bottom: 0.1em;
    font-family:<?php echo $negocio['fontFamily2'] ?> ;
}


[class*=uk-modal-close-] {
    position: absolute;
    margin-bottom: 0em;
    right: 16px;
    top: 16px;
}

.modal__botones {
    display: flex;
    justify-content: space-between;
}

.fa-arrow-left:before {
    content: "\f060";
    align-items: center;
    margin: 0.6em;
}

.fa-arrow-right:before {
    content: "\f061";
    margin: 0.6em;
    align-items: center;
}

a:hover {
    color: <?php echo $negocio['color2'] ?>;
    text-decoration: none;
    align-items:center;
}

a {
     font-family: <?php echo $negocio['fontFamily'] ?>;
     outline:none;
     color:<?php echo $negocio['texto'] ?>;
     cursor:pointer;
     text-decoration:none;
}

.uk-modal-dialog a:hover{
    color: <?php echo $negocio['color2'] ?>;
}

.button__modal {
    background-color:  <?php echo $negocio['color2'] ?>;
    color:  <?php echo $negocio['color3'] ?>;
    font-weight: bolder;
    text-transform: uppercase;
    align-items: baseline;
    display: flex;
    padding: 0.5em 0.5em 0.5em 0.5em;
    font-size: 0.8em;
    border-radius: 0.3em 0.3em 0.3em 0.3em;
    font-family:  <?php echo $negocio['fontFamily2'] ?>;
    margin-top: 0.6em;
}


.uk-close {
    color:  <?php echo $negocio['texto'] ?> ;
    background: <?php echo $negocio['color3'] ?> ;
    width: 2em;
    height: 2em;
    transition: .1s ease-in-out;
    transition-property: color,opacity;
}

[class*=uk-modal-close-] {
    position: absolute;
    margin-bottom: 0em;
    right: 16px;
    top: 16px;
}

.modal__botones {
    display: flex;
    justify-content: space-between;
}

.compradores{
    margin-top:.2em;
    margin-bottom:0.5em;
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
    background-color:<?php echo $negocio['texto'] ?> ;
    font-weight:bold;
}

.registrarse__recuadro{
    padding: 1em 9em 1em;
}

.registro{
    max-width:36%;
    padding: 2.5em 1.4em 2em;
    background-color: <?php echo $negocio['color3'] ?> ;
    border-radius: 0em 0em  .7em .7em;
    box-sizing: border-box;
    display: block;
    margin:auto;
    border-bottom: <?php echo $negocio['color2'] ?> solid 0.2em;
}

.header{
    max-width:36%;
}

@media(max-width:1000px){
  .registrarse__recuadro{
    padding: 1.3em 0em;
    border-radius: 0em 0em  0.7 0.7em;
    box-sizing: border-box;
    margin:auto;
}
    
 .registro{
   max-width:50%;
   padding:  1em 1.4em 1em;
   background-color:  <?php echo $negocio['color3'] ?>;
   border-radius: 0em 0em  0.7 0.7em;
   box-sizing: border-box;
 }
 
 .uk-open > .uk-modal-dialog{
   margin-top:3em;
 }
 
  .header{
      max-width:50%;
  }    
  
   .uk-alert-primary {
     max-width:40%;
   }
  
}

.header{
     background-color: <?php echo $negocio['color2'] ?>;
     color:<?php echo $negocio['texto'] ?>;
     font-weight:bold;
     text-transform: uppercase;
     color: <?php echo $negocio['color3'] ?>;
     margin-top:3em;
     padding: 0 0.1em;
     border-radius: 0.7em 0.7em 0 0;
     align-items: center;
     display: block;
     margin: auto;
     margin-top:3em;
    } 

.registro__logo{
    display: block;
    justify-content: center;
    margin: auto;
    background: <?php echo $negocio['color3'] ?> ;
}

@media(max-width:570px){
   .registrarse__recuadro{
    padding: 1.2em 1em 1em;
    border-radius: 0em 0em  0.7 0.7em;
    box-sizing: border-box;
    min-width:85%;
}

 .registro{
   padding:1.3em 1.5em 1.5em;
   background-color: <?php echo $negocio['color3'] ?> ;
   box-sizing: border-box;
   min-width: 85%;
 }
    .header {
       min-width: 85%;
       display: block;
       margin-top:3em;
    }
    
    #header{
        line-height:3em;
    }
}  

.marron{
   color:<?php echo $negocio['color2'] ?> ;
   font-weight:bold;
}

.button .primary .alianeado{
    display:block;
    margin:auto;
}

@media(max-width:420px){
  .modal__header{
     font-size:0.75em; 
     height:2.54em;
     text-align:center;
     padding-top:0.5em;
  }     
}

.detalles{
  padding:1em 0em;
  font-size: 0.85em;
}

.wrap{
    display:block;
    margin-top: 3.5em;
    margin-bottom: 1.5em;
    padding-top:1em;
    padding-bottom:1em;
}

.lista{
    display:flex;
    justify-content:flex-end;
    padding: 0.5em 0em
    margin-bottom:1em;
    padding-top:1em;
}

.lista__item{
    width: 10em;
    margin-left:0.4em;
    margin-right:0.4em;
    list-style:none;
}

.upload{
    background-color:<?php echo $negocio['color3'] ?>;
    padding:2em;
    border-bottom: <?php echo $negocio['color2'] ?> 0.1em solid;
}

.file{
    margin-bottom:3em;
}

.uk-table caption {
    font-size: .875rem;
    text-align: left;
    color: <?php echo $negocio['color3'] ?>;
    background-color:<?php echo $negocio['color2'] ?>;
    font-weight: bold;
    margin-bottom: 0em;
    padding: 0.01em 0.5em;
    text-transform:uppercase;
}

.uk-table td {
    padding: 16px 12px;
    vertical-align: top;
    background: <?php echo $negocio['color3'] ?>;
    align-items: baseline;
    font-size: .875rem;
    text-align:center;
}

.uk-table th {
    padding: 16px 12px;
    text-align: left;
    vertical-align: bottom;
    font-size: .875rem;
    color: <?php echo $negocio['color2'] ?>;
    text-transform: uppercase;
    font-weight: bold;
    background:<?php echo $negocio['color3'] ?>;
    border-bottom: <?php echo $negocio['color2'] ?> 0.1em solid;
    text-align:center;
}

.uk-table {
     border-bottom: <?php echo $negocio['color2'] ?> 0.1em solid;
}

input[type="number" i] {
    padding-left:1em;
    background-color:<?php echo $negocio['color3'] ?>;
    border-color:<?php echo $negocio['placeholder'] ?>;
        -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    background: rgba(160, 160, 160, 0.075);
    border: none;
    border: solid 1px rgba(160, 160, 160, 0.3);
    border-radius: 0;
    color: inherit;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
    font-size: 1em;
    margin-bottom:1em;
}

.ventana{
    width: 100%;
}

.uk-open > .uk-modal-dialog {
    opacity: 1;
    transform: translateY(0);
    margin-top: 3em;
    background: <?php echo $negocio['color3'] ?> ;
}

.fondo{
   background-color:<?php echo $negocio['color3'] ?> ;
   justify-content:center;
   border-bottom:<?php echo $negocio['color2'] ?>  0.1em solid;
    display: flex;
    margin: auto;
}

.uk-modal-footer {
    display: flow-root;
    padding: 2em;
    background: <?php echo $negocio['color3'] ?> ;
    border:0;
}

.error{
    display:none;
}

svg{
    margin-right:0.3em;
    outline:none;
}

svg{
    margin-right:0.4em;
    align-items:center;
    margin-left:0.4em;
}

svg,a{
    cursor:pointer;
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

.directorio__imagenes{
    background-color:<?php echo $negocio['color3'] ?>;
    font-weight:bolder;
    padding:0 1em;
    margin-top:-2em;
}

.help{
   display: flex;
    align-items: center;
    flex-wrap: nowrap;
}

.editar_link{
    color:<?php echo $negocio['color2'] ?>;
    font-weight: bold;
    text-transform: uppercase;
}

@media(max-width:470px){
    .editar_link{
        color:<?php echo $negocio['color2'] ?>;
        font-weight: bold;
        text-transform: uppercase;
        font-size:0.8em;
    }
}    

.dos{
    margin-top:-2em;
}

.slider{
    display:flex;
    flex-wrap:nowrap;
}

.telegram {
    position: fixed;
    right: 25px;
    bottom: 20px;
    z-index: 999;
    outline:none;
}

.telegram img {
    width: 2.5em;
    height: 2.5em;
    border:0;
    outline:none;
    margin-bottom:1em;
}

.eliminar{
    display:flex;
    width:100%;
}

.descripcion{
    height:10em;
}

.uk-text-center {
    text-align: center!important;
    padding: 0 0 1em 0;
    font-size: 1.5em;
}

.img__producto{
    height:4em;
    width:4em;
}

.img__sitio{
    height:3em;
    width:7em;
    align-items:center;
}

.caption{
    background-color:<?php echo $negocio['color2'] ?>;
    color:<?php echo $negocio['color3'] ?>;
    font-weight:bold;
    text-transform:uppercase;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    margin-bottom:0em;
}
</style>
<?php
}
?>
