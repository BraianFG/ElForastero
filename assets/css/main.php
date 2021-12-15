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
    font-family: <?php echo $negocio['fontFamily'] ?>;
     background-color:transparent; 
}

body {
    line-height: 1;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    background-color: <?php echo $negocio['body'] ?>;
}

ol, ul {
    list-style: none;
}

body {
    -webkit-text-size-adjust: none;
    font-size: 16px;
     -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -ms-user-select:none;
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
    background: <?php echo $negocio['color3'] ?>;
    border-color: <?php echo $negocio['texto'] ?>;
}

.uk-open > .uk-modal-dialog {
    opacity: 1;
    transform: translateY(0);
    padding: 1em;
    margin: 3em auto;
    margin-top: 1em;
    background-color: <?php echo $negocio['color3'] ?>;
}
    
html {
    box-sizing: border-box;
}

*, *:before, *:after {
    box-sizing: border-box;
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


body, input, select, textarea {
    color: <?php echo $negocio['texto'] ?>;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    font-size: 14pt;
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

@media screen and (max-width: 910px) {
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

a {
    color: inherit;
    text-decoration: none;
     cursor:pointer;
}


a:hover {
  text-decoration:none;
  color:none;
  color: <?php echo $negocio['texto'] ?>;
  cursor:pointer;
}

strong, b {
    color: <?php echo $negocio['texto'] ?>;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    font-weight: bold;
}

em, i {
    font-style: italic;
    outline:none;
    padding:1em;
}

p {
    font-size: 0.8em;
    font-weight: bolder;
    text-transform: uppercase;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    align-items: center;
    padding-top:-0.5em;
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
    font-weight: bold;
    line-height: 1.50;
    margin: 0em 0 4.5em 0;
    height: 0.01em;
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    text-transform: uppercase;
    font-size: 1em;
}

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    color: inherit;
    border-bottom: 0;
}

h2 {
    font-size: 1.1em;
    margin-top:1em;
    margin-bottom:1em;
    padding-left:0.5em;
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
    font-size: 1.2em;
    padding:0 0.5em;
}

hr {
    border: 0;
    border-bottom: solid 1px rgba(160, 160, 160, 0.3);
    margin: 1em auto;
    background-color:<?php echo $negocio ['color2'] ?>;
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
    border: 0;
    border-bottom-color: currentcolor;
    box-shadow: inset 0 0 0 1px rgb(160 160 160 / 30%);
    color: <?php echo $negocio['color2'] ?>;
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
    outline:0;
    cursor:pointer;
}

input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover, button:hover, .button:hover {
    opacity: .8;
    border:0;
    outline:0
}

input[type="submit"]:hover:active, input[type="reset"]:hover:active, input[type="button"]:hover:active, button:hover:active, .button:hover:active {
    background-color: rgba(46, 186, 174, 0.05);
}

input[type="submit"]:before, input[type="submit"]:after, input[type="reset"]:before, input[type="reset"]:after, input[type="button"]:before, input[type="button"]:after, button:before, button:after, .button:before, .button:after {
    <?php echo $negocio['placeholder'] ?>
    position: relative;
}

input[type="submit"]:before, input[type="reset"]:before, input[type="button"]:before, button:before, .button:before {
    left: -1em;
    padding: 0 0 0 0.75em;
}

input[type="submit"]:after, input[type="reset"]:after, input[type="button"]:after, button:after, .button:after {
    left: 1em;
    padding: 0 0.75em 0 0;
}

input[type="submit"].fit, input[type="reset"].fit, input[type="button"].fit, button.fit, .button.fit {
    width: 100%;
}

.button.fit:hover{

}

input[type="submit"].large, input[type="reset"].large, input[type="button"].large, button.large, .button.large {
    font-size: 0.7em;
    display: block;
    margin: auto;
    margin-top: 2.5em;
    margin-bottom: 1em;
}

input[type="submit"].small, input[type="reset"].small, input[type="button"].small, button.small, .button.small {
    font-size: 0.5em;
}

.button.primary {
    background: <?php echo $negocio['color2']?> !important;
    color: <?php echo $negocio['color3'] ?>;
    display: block;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    margin: auto;
    margin-top: 0.8em;
    cursor:pointer;
}

.button.primary:hover{
    color: <?php echo $negocio['color3'] ?>;
}

.button:hover{
    color: <?php echo $negocio['color2'] ?>;
}

input[type="submit"].disabled, input[type="submit"]:disabled, input[type="reset"].disabled, input[type="reset"]:disabled, input[type="button"].disabled, input[type="button"]:disabled, button.disabled, button:disabled, .button.disabled, .button:disabled {
    pointer-events: none;
    color: rgba(160, 160, 160, 0.3) !important;
}

input[type="submit"].disabled:before, input[type="submit"]:disabled:before, input[type="reset"].disabled:before, input[type="reset"]:disabled:before, input[type="button"].disabled:before, input[type="button"]:disabled:before, button.disabled:before, button:disabled:before, .button.disabled:before, .button:disabled:before {
    color: rgba(160, 160, 160, 0.3) !important;
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
    background: rgba(160, 160, 160, 0.075);
    border: none;
    border: solid 1px rgba(160, 160, 160, 0.3);
    border-radius: 0;
    color: <?php echo $negocio['texto']?>;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
}

input[type="text"]:invalid, input[type="password"]:invalid, input[type="email"]:invalid, input[type="tel"]:invalid, select:invalid, textarea:invalid {
    box-shadow: none;
}

input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="tel"]:focus, select:focus, textarea:focus {
    border-color: <?php echo $resultado['texto'] ?>;
}

select option {
    color: <?php echo $resultado['texto'] ?>;
    background: <?php echo $resultado['color2'] ?>;
}

select:focus::-ms-value {
    background-color: transparent;
}

select::-ms-expand {
    display: none;
}

input[type="text"], input[type="password"], input[type="email"], select {
    height: 2.75em;
    margin-bottom: 1.2em;
}

textarea {
    padding: 0.75em 1em;
}

::-webkit-input-placeholder {
    color: <?php echo $negocio['placeholder'] ?> !important;
    opacity: 1.0;
}

:-moz-placeholder {
    color: <?php echo $negocio['placeholder'] ?> !important;
    opacity: 1.0;
}

::-moz-placeholder {
    color: <?php echo $negocio['placeholder'] ?> !important;
    opacity: 1.0;
}

/* Image */
.image {
    border: 0;
    display: inline-block;
    position: relative;
}

.image img {
    display: block;
    border: 0em;
}

@media screen and (max-width: 736px) {
    .image.featured {
        margin: 0 0 1.5em 0;
    }
}

.image.main {
    display: block;
    margin: 0 0 3em 0;
    width: 100%;
}

.image.main img {
    width: 100%;
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
    margin: 0 0 1em 0;
    background: transparent;
    padding-right: 1em;
    box-sizing: border-box;
    font-size: 0.8em;
    padding-bottom: 1.3em;
    margin-top: 3em;
    text-align: left;
}

ul li {
    padding: 0;
}

ul.alt {
    list-style: none;
    padding-left: 0;
}

ul.alt li {
    border-top: solid 1px rgba(160, 160, 160, 0.3);
    padding: 0.5em 0;
}

ul.alt li:first-child {
    border-top: 0;
    padding-top: 0;
}

/* Actions */
ul.actions {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    cursor: default;
    list-style: none;
    margin-left: -1em;
    padding-left: 0;
}

ul.actions li {
    padding: 0 0 0 1em;
    vertical-align: middle;
}

ul.actions.special li:first-child {
    padding-left: 0;
}

ul.actions.stacked {
    display: block;
    padding: 1em;
    align-items: center;
    margin: auto;
    flex: 1;
    width:100%;
    flex-wrap: nowrap;
    justify-content: center;

ul.actions.stacked li {
    padding: 0.3em 0 0 0;
    margin-top: 1em;
}

    ul.actions:not(.fixed) li > * {
        width: 100%;
    }

    ul.actions:not(.fixed) li:first-child {
        padding-top: 0;
    }

    ul.actions:not(.fixed) li input[type="submit"], ul.actions:not(.fixed) li input[type="reset"], ul.actions:not(.fixed) li input[type="button"], ul.actions:not(.fixed) li button, ul.actions:not(.fixed) li .button {
        width: 100%;
    }

    ul.actions:not(.fixed) li input[type="submit"].icon:before, ul.actions:not(.fixed) li input[type="reset"].icon:before, ul.actions:not(.fixed) li input[type="button"].icon:before, ul.actions:not(.fixed) li button.icon:before, ul.actions:not(.fixed) li .button.icon:before {
        margin-left: -0.5em;
    }
}

/* Icons */
ul.icons {
    cursor: default;
    list-style: none;
    padding-left: 1em;
    width: 98%;
}

ul.icons li {
    display: inline-block;
    padding: 0 1em 0 0;
}

ul.icons li:last-child {
    padding-right: 0;
}

ul.icons li > * {
    border: 0;
}

ul.icons li > * .label {
    display: none;
}

/* Mini Post */
.mini-post {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-flex-direction: column-reverse;
    -webkit-flex-direction: column-reverse;
    -ms-flex-direction: column-reverse;
    flex-direction: column-reverse;
    background: <?php echo $negocio['color3'] ?>;
    min-width: max(10em, calc(25% - 2em));
    flex: 15%;
    margin: 1em 1em 0;
    border-radius: 0.4em;
    width:100%;
    height:auto;
    border-bottom: <?php echo $negocio['color2'] ?> 0.2em solid;
    padding-bottom:1em;
}

.mini-post .image {
    overflow: hidden;
    width: 100%;
    border-radius: 0.4em 0.4em 0em 0em;
    border: 0;
    height:auto;
}

.mini-post .image img {
    -moz-transition: -moz-transform 0.2s ease-out;
    -webkit-transition: -webkit-transform 0.2s ease-out;
    -ms-transition: -ms-transform 0.2s ease-out;
    transition: transform 0.2s ease-out;
    width: 100%;
    height: 20em;
}

.mini-post .image:hover img {
    -moz-transform: scale(1.05);
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

.mini-post header {
    padding: 0.25em 0.25em 0em 1.25em;
    min-height: 4em;
    position: relative;
    -moz-flex-grow: 1;
    -webkit-flex-grow: 1;
    -ms-flex-grow: 1;
    flex-grow: 1;
    background: <?php echo $negocio['color3'] ?>;
    border-top: 0.1em solid <?php echo $negocio['color2'] ?>;
}

.mini-post header h3 {
    font-size: 0.65em;
    padding-bottom: 3em;
    max-width:20em;
}

.mini-posts {
    margin: 0 0 2em 0;
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 1em;
}

@media screen and (max-width: 1280px) {
    .mini-posts {
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        -moz-flex-wrap: wrap;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        width: calc(100% + 2em);
    }

    .mini-posts > * {
        margin: 0 2.6em 2.6em 0;
        width: calc(50% - 2.6em);
    }

    .mini-posts > :nth-child(-n + 2) {
        margin-top: 0;
    }

    li .button {
        margin: auto;
        display: block;
        margin-bottom: 0.5em;
    }

    ul .button {
    }
}

@media screen and (max-width: 480px) {
    .mini-posts {
        display: block;
        width: 100%;
    }

    .mini-posts > * {
        margin: 0 0 2em 0;
        width: 100%;
    }


    .modal__header{
        font-size:0.8em;
        padding-top:0.2em;
    }
    
    .uk-close{
        font-size:0.8em;
    }
}

@media screen and (max-width: 900px) {
    li .button {
        display: block;
        margin: auto;
        margin-bottom: 0.5em;
        width: 95%;
        background: <?php echo $resultado['color3']?> solid 0.1em;
    }
    
   .mini-post_lista{
        margin-top:-2em;
    }
}

@media screen and (max-width: 660px) {
    li .button {
        font-family:<?php echo $resultado['fontFamily']?>;
    }

}

@media screen and (max-width: 650px) {
    .titulo__texto{
        font-size: 1em;
        letter-spacing: 0.1em
    }
}

@media screen and (max-width: 480px) {
    li .button {
        margin: auto;
        display: block;
        margin-bottom: 0.5em;
    }
   
    .titulo__texto{
        font-size: 1.6em;
        letter-spacing: 0.1em
    }
}

@media screen and (max-width: 570px) {
    li .button {
        display: block;
        margin-bottom: 0.5em;
    }
    
    .titulo__texto{
        font-size: 1.em;
        letter-spacing: 0.1em;
    }
    
   ::-webkit-input-placeholder {
        color: <?php echo $negocio['placeholder'] ?> !important;
        opacity: 1.0;
       font-size:1em;
    }
    
    :-moz-placeholder {
        color: <?php echo $negocio['placeholder'] ?> !important;
        opacity: 1.0;
       font-size:1em;
    }
}


@media screen and (max-width: 370px) {
    .titulo__texto{
        font-size: 1.3em;
        letter-spacing: 0.1em;
    }
}

@media screen and (max-width: 350px) {
    .titulo__texto{
        font-size: 1.25em;
        letter-spacing: 0.1em;
    }
    
   .panel{
        font-size: 0.9em;
       align-items: center;
       padding-top:0.5em;
    }
}


/* Post */
.post {
    padding: 3em 3em 1em 3em ;
    background: <?php echo $negocio['color3'] ?>;
    margin: 0 0 3em 0;
    position: relative;
}

.post > header {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    left: -3em;
    margin: -3em 0 3em 0;
    position: relative;
    width: calc(100% + 6em);
}

.post > header .title {
    -moz-flex-grow: 1;
    -webkit-flex-grow: 1;
    -ms-flex-grow: 1;
    flex-grow: 1;
    -ms-flex: 1;
    padding: 3.75em 3em 3.3em 3em;
}

.post > header .title h2 {
    font-weight: 900;
    font-size: 1.5em;
}

.post > header .title > :last-child {
    margin-bottom: 0;
}

.post > header .meta {
    padding: 3.75em 3em 1.75em 3em ;
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    min-width: 17em;
    text-align: right;
    width: 17em;
}

.post > header .meta > * {
    margin: 0 0 1em 0;
}

.post > header .meta > :last-child {
    margin-bottom: 0;
}

.post > header .meta .published {
    color: <?php echo $negocio['texto'] ?>;
    display: block;
    font-size: 0.7em;
    font-weight: 800;
    letter-spacing: 0.25em;
    margin-top: 0.5em;
    text-transform: uppercase;
    white-space: nowrap;
}

.post > a.image.featured {
    overflow: hidden;
}

.post > a.image.featured img {
    -moz-transition: -moz-transform 0.2s ease-out;
    -webkit-transition: -webkit-transform 0.2s ease-out;
    -ms-transition: -ms-transform 0.2s ease-out;
    transition: transform 0.2s ease-out;
}

.post > a.image.featured:hover img {
    -moz-transform: scale(1.05);
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

.post > footer {
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-align-items: center;
    -webkit-align-items: center;
    -ms-align-items: center;
    align-items: center;
}

.post > footer .actions {
    -moz-flex-grow: 1;
    -webkit-flex-grow: 1;
    -ms-flex-grow: 1;
    flex-grow: 1;
}

.post > footer .stats {
    cursor: default;
    list-style: none;
    padding: 0;
}

.post > footer .stats li {
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    display: inline-block;
    font-family: <?php echo $negocio['fontFamily'] ?>;
    font-size: 0.6em;
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1;
    margin: 0 0 0 2em;
    padding: 0 0 0 2em;
    text-transform: uppercase;
}

.post > footer .stats li:first-child {
    border-left: 0;
    margin-left: 0;
    padding-left: 0;
}

.post > footer .stats li .icon {
    border-bottom: 0;
}

.post > footer .stats li .icon:before {
    color: rgba(160, 160, 160, 0.3);
    margin-right: 0.75em;
}

@media screen and (max-width: 980px) {
    .post {
        border-left: 0;
        border-right: 0;
        left: -3em;
        width: calc(100% + (3em * 2));
    }

    .post > header {
        -moz-flex-direction: column;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        padding: 3.75em 3em 1.25em 3em ;
        border-left: 0;
    }

    .post > header .title {
        -ms-flex: 0 1 auto;
        margin: 0 0 2em 0;
        padding: 0;
        text-align: center;
    }

    .post > header .meta {
        -moz-align-items: center;
        -webkit-align-items: center;
        -ms-align-items: center;
        align-items: center;
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        -moz-justify-content: center;
        -webkit-justify-content: center;
        -ms-justify-content: center;
        justify-content: center;
        border-left: 0;
        margin: 0 0 2em 0;
        padding-top: 0;
        padding: 0;
        text-align: left;
        width: 100%;
    }

    .post > header .meta > * {
        border-left: solid 1px rgba(160, 160, 160, 0.3);
        margin-left: 2em;
        padding-left: 2em;
    }

    .post > header .meta > :first-child {
        border-left: 0;
        margin-left: 0;
        padding-left: 0;
    }

    .post > header .meta .published {
        margin-bottom: 0;
        margin-top: 0;
    }

    .post > header .meta .author {
        -moz-flex-direction: row-reverse;
        -webkit-flex-direction: row-reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
        margin-bottom: 0;
    }

    .post > header .meta .author .name {
        margin: 0 0 0 1.5em;
    }

    .post > header .meta .author img {
        width: 3.5em;
    }
}

@media screen and (max-width: 736px) {
    .post {
        padding: 1.5em 1.5em 0.1em 1.5em ;
        left: -1.5em;
        margin: 0 0 2em 0;
        width: calc(100% + (1.5em * 2));
    }

    .post > header {
        padding: 3em 1.5em 0.5em 1.5em ;
        left: -1.5em;
        margin: -1.5em 0 1.5em 0;
        width: calc(100% + 3em);
    }

    .post > header .title h2 {
        font-size: 1.1em;
    }
}

@media screen and (max-width: 480px) {
    .post > header .meta {
        -moz-align-items: center;
        -webkit-align-items: center;
        -ms-align-items: center;
        align-items: center;
        -moz-flex-direction: column;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .post > header .meta > * {
        border-left: 0;
        margin: 1em 0 0 0;
        padding-left: 0;
    }

    .post > header .meta .author .name {
        display: none;
    }

    .post > .image.featured {
        margin-left: -1.5em;
        margin-top: calc(-1.5em - 1px);
        width: calc(100% + 3em);
    }

    .post > footer {
        -moz-align-items: -moz-stretch;
        -webkit-align-items: -webkit-stretch;
        -ms-align-items: -ms-stretch;
        align-items: stretch;
        -moz-flex-direction: column-reverse;
        -webkit-flex-direction: column-reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
    }

    .post > footer .stats {
        text-align: center;
    }

    .post > footer .stats li {
        margin: 0 0 0 1.25em;
        padding: 0 0 0 1.25em;
    }
}

header p {
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1.5em;
    text-transform: uppercase;

/* Post */
.post {
    padding: 3em 3em 1em 3em;
    background: <?php echo $negocio['color3']?>;
    border: solid 1px rgba(160, 160, 160, 0.3);
    margin: 0 0 3em 0;
    position: relative;
}

/* Footer */
#footer .icons {
    color: <?php echo $negocio['placeholder']?>;
}

#footer .copyright {
    color: <?php echo $negocio['placeholder']?>;
    font-family: <?php echo $negocio['fontFamily']?>;
    font-size: 0.5em;
    font-weight: 400;
    letter-spacing: 0.25em;
    text-transform: uppercase;
}

body.single #footer {
    text-align: center;
}

#intro {
    padding: 1.1em 0.3em 1.4em 0;
    display: flex;
    align-items: center;
}

#intro header {
    overflow: hidden;
    padding: 1em 0em 1em 0;
}


.pic {
    height: 20em;
}

a:hover {

    a {
     color: <?php echo $negocio['texto'] ?> ;
}
    }

.button__modal {
    background-color: <?php echo $negocio['color2'] ?>;
    color:  <?php echo $negocio['color3'] ?>;
    font-weight: bolder;
    text-transform: uppercase;
    display: flex;
    padding: 0.5em 0.5em 0.5em 0.5em;
    font-size: 0.8em;
    border-radius: 0.3em 0.3em 0.3em 0.3em;
    font-family: <?php echo $negocio['fontFamily']?>;
    align-items:baseline;
}


.uk-open>.uk-modal-dialog {
    opacity: 1;
    transform: translateY(0);
    padding: 1em;
    margin:1em;
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
}

.uk-close {
    color: <?php echo $negocio['texto']?>;
    background: <?php echo $negocio['color3']?>;
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
    height:2.4em;
    cursor:pointer;
}

ul li{
    font-family: <?php echo $negocio['fontFamily'] ?> ;
};
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
    color: inherit;
    text-decoration: none;
    font-family: <?php echo $negocio['FontFamily'] ?>;
   
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

#header h1 {
    height: inherit;
    line-height: inherit;
    padding: 0 0 0 1.5em;
    white-space: nowrap;
    background: <?php echo $negocio['navbar'] ?>;
}

#header h1 a {
    font-size: <?php echo $negocio['fontFamily'] ?>;
    background-color: <?php echo $negocio['navbar'] ?>;
    font-size:0.7em;
}

#header .links {
    -moz-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
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
    font-family: <?php echo $negocio['fontFamily']?>;
    font-size: 0.7em;
    font-weight: 400;
    letter-spacing: 0.25em;
    text-transform: uppercase;
}


@media screen and (max-width: 1500px) {
    #header .links {
        display: none;
    }
}

@media screen and (max-width: 736px) {
    #header h1 {
        font-size: <?php echo $negocio['fontFamily'] ?>;
    }
    
    .uk-open > .uk-modal-dialog{
        margin-top:3em;
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

#intro header h2 {
    font-size: 3em;
    font-weight: 900;
}

#intro header p {
    font-size: 1em;
}

@media screen and (max-width: 1280px) {
    #intro {
        margin: 0 0 4em 0;
        text-align: center;
    }

    #intro header h2 {
        font-size: 2.4em;
    }

    #intro header p {
        font-size: 0.7em;
        font-family: <?php $negocio['fontFamily'] ?>
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

    #intro header h2 {
        font-size: 1.4em;
    }

    #intro header > :last-child {
        margin-bottom: 0;
        font-family: <?php echo $negocio['fontFamily'] ?> ;
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

#intro header {
    overflow: hidden;
    padding: 1em 0em 1em 0;
}



.whatsapp {
    position: fixed;
    right: 25px;
    bottom: 80px;
    z-index: 999;
}

.whatsapp img {
    width: 2.5em;
    height: 2.5em;
    border: 0;
    margin-bottom:1em;
}

.whatsapp:hover {
    opacity: 0.7 !important;
    filter: alpha(opacity=70) !important;
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

.telegram:hover {
    opacity: 0.7 !important;
    filter: alpha(opacity=70) !important;
}

.panel {
    background:  <?php echo $negocio['color2'] ?> ;
    color:  <?php echo $negocio['color3'] ?> ;
    border-radius: 0.6em;
    height: 1.8em;
    width: 98.5%;
    padding-top: 0.5em;
    display: block;
    margin: auto;
    margin-bottom: 1em;
    padding-left: 0.5em;
}

.fa-times-circle {
    margin-right: 0.3em;
    margin-left: 0.3em;
    cursor: pointer;
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
}

.modal__header {
    background-color: <?php echo $negocio['color2'] ?> ;
    text-transform: uppercase;
    font-weight: bold;
    color:  <?php echo $negocio['color3'] ?> ; 
    text-align: center;
    height: 2em;
    margin-bottom: 0.1em;
    font-family: <?php echo $negocio['fontFamily2'] ?> ;
}

.uk-close {
    color: <?php echo $negocio['texto'] ?>;
    background: <?php echo $negocio['color3'] ?>;
    width: 2em;
    height: 2em;
    transition: .1s ease-in-out;
    transition-property: color,opacity;
    cursor:pointer;
}

[class*=uk-modal-close-] {
    position: absolute;
    margin-bottom: 0;
    top: 16;
    margin-right: 0.3em;
    height: 2em;
    padding-left:0.1em;
}

.modal__botones {
    display: flex;
    justify-content: center;
    cursor:pointer;
    width: 100%;
    box-sizing: border-box;
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

.titulo{
    margin-bottom:1.4em;
    font-family: <?php echo $negocio['fontFamily2']?>;
}

.precio{
    font-family:  <?php echo $negocio['fontFamily'] ?>;
    letter-spacing: 0.1em;
    font-weight: bold;
    margin-bottom: 1.5em;
}

.titulo__texto{
     font-family:  <?php echo $negocio['fontFamily'] ?>;
     background: <?php echo $negocio['color3'] ?>;
     font-size: 1.1em;
}

ul li{
     font-family:  <?php echo $negocio['fontFamily'] ?>;
     background: transparent;
}

.mini-post_lista{
    display: block;
    margin: auto;
    margin-top: 0;
    justify-content: center;
    align-items: center;
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
    background-color:#E8f0fe;
    font-weight:bold;
}

.registrarse__recuadro{
   padding: 1em 1em 1em;
   margin-top:-1.5em;
}

.registro{
    padding: 1em 1.5em 2em;
    background-color: <?php echo $negocio['color3'] ?>;
    border-radius: 0em 0em  .7em .7em;
    box-sizing: border-box;
    width: 30%;
    display: block;
    margin:auto;
    border-bottom:  0.2em solid;
    border-top: <?php echo $negocio['color2'] ?> 0.1em solid;
    margin-bottom:1em;
    padding-bottom:1em;
}

 .title{
    background:<?php echo $negocio['color2'] ?>;
    color:<?php echo $negocio['color3'] ?>;;
    margin: auto;
    display: block;
    margin-top:4em;
    text-align: center;
    max-width: 30%;
    border-radius: 0.3em 0.3em 0 0;
    font-weight:bold;
    text-transform:uppercase;
}
 @media(max-width:1000px){
     .registro{
        padding:  1em 1.4em 1.5em;
        background-color:  <?php echo $negocio['color3'] ?>;
        min-width: 50%;
        margin-top: 0em;
        padding: 1em;
        padding-bottom:1em;
      }

     .title{
       background:<?php echo $negocio['color2'] ?>;
       color:<?php echo $negocio['color3'] ?>;
        margin: auto;
        display: block;
        text-align: center;
        border-radius: 0.3em 0.3em 0 0;
        font-weight:bold;
        min-width:50%;
        text-transform:uppercase;
        margin-top:4em;
      }  
      
      .registrarse__recuadro{
       padding: 1em 1em 1em;
        margin-top:-1.5em;
       }

}    

@media(max-width:560px){
       .registrarse__recuadro{
            padding: 1.2em 0em 1em;
            border-radius: 0em 0em  0.7 0.7em;
            box-sizing: border-box;
       }
        
     .registro{
        padding:  1.3em 1.4em 1.5em;
        background-color:  <?php echo $negocio['color3'] ?>;
        min-width: 80%;
        margin-top: 0em;
      }

     .title{
        background:<?php echo $negocio['color2'] ?>;
        color:<?php echo $negocio['color3'] ?>;
        margin: auto;
        display: block;
        text-align: center;
        margin-top: 4em;
        border-radius: 0.3em 0.3em 0 0;
        font-weight:bold;
        min-width:80%;
        text-transform:uppercase;
      }
     
    .uk-alert-close {
        color:<?php echo $negocio['color3'] ?>;
        background-color:transparent;
        align-items: center;
        top: 1.1em;
        right: 0.56;
    }    
        
    .botones{
       margin: -1.3em 0em;
       display:block;
    }
    
    .pregunta{
        padding-top:1em;
        padding-bottom:1em;
    }
    
    .button .primary .alianeado{
        display:block;
        margin:auto;
    }
}

    @media(max-width:420px){
      .modal__header{
         font-size:0.75em; 
         height:2.54em;
         text-align:center;
         padding-top:0.5em;
      }      
      
      .wrapp{
          padding-left:1em;
          padding-right:1em;
      }
      
      [class*=uk-modal-close-] {
        position: absolute;
        margin-bottom: 0;
        top: 16;
        margin-right: 0.3em;
        height: 1.9em;
        font-size: 1em;
        padding-left: 0.1em;
    }
    
    .uk-alert-close svg{
        margin-top:0.31em;
        margin-left:0.2em;
    }
}
.detalles{
  padding:1em 0em;
  font-size: 0.85em;
}

i{
    margin-right:0.3em;
}

.edit{
  padding:0 0.5em;
}

.borrar{
    display: flex;
    padding: 1em 0;
    margin-top: 4em;
    height: 4em;
    justify-content: center;
    width: 35%;
    text-align: center;
    align-items: center;
    font-weight: bolder;
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
    height: 4em;
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

.uk-alert-close{
    color:<?php echo $negocio['color3'] ?>; 
    align-items:center;
    margin-top:-.1em;
    background-color:transparent;
}

#footer .icons svg{
    margin-left:0em;
    margin-right:0em;
}

.agregar{
    display:flex;
    justify-content:center;
}
.cantidad{
    display:flex;
    height:2.5em;
}

    @media(max-width:2080px){
        li .button{
          width:38em;
        }
    }  
    
    @media(max-width:865px){
        li .button{
          width:25em;
        }
    }  

     @media(max-width:770px){
        li .button{
          width:26em;
          font-size:0.48em;
        }
        
    }  

     @media(max-width:479px){
        li .button{
         padding: 0 0.1em;
         font-size:0.6em

        }
     }  
  
    @media(max-width:481px){
    li .button {
        width:100%;
      }
      
    .mini-post header h3{
        width:100%;
        font-size:0.8em;
     } 
     .mercadopago-button{
         width:100%;
     }
    }
    
       @media(max-width:603px){
          li .button {
             font-size:0.6em;
               width:100%;
           }
           
        .mini-post header h3 {
          font-size: 0.75em;
           padding-bottom: 3em;
           max-width: 20em;
        }
        
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
         margin-top: 1em;
         margin-bottom: 1.5em;
         padding-top: 1em;
         padding-bottom: 1em;
      }
    
      .text{
         padding-top:1em;
      }
      
      textarea {
       padding: 0.75em 1em;
       margin-bottom: 1em;
       height: 8em;
       margin-top: -1em;
     }
     
   .text{
       margin-top:5em;
   }
   
.mercadopago-button {
    background-color: <?php echo $negocio['color2'] ?>;
    border: 0;
    text-align: left;
    outline: 0;
    display: flex;
    flex: 1;
    height: 3.6em;
    align-items: center;
    margin-top: 3.7em;
    letter-spacing: 0.1em;
    font-family: <?php echo $negocio['fontFamily'] ?> ;
    box-sizing: border-box;
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
    padding: 1em 0;
    margin-top: 4em;
    height: 4em;
    justify-content: center;
    width: 35%;
    text-align: center;
    align-items: center;
    font-weight: bolder;
    background-color:<?php echo $negocio['color3'] ?>;
    color:<?php echo $negocio['color2'] ?>;
    border:0.1em solid <?php echo $negocio['color2'] ?>;
    margin-right:0.3em;
}   


@media(max-width:1500px){
    .telegram img{
        margin-bottom:3em;
    }
    
    .whatsapp img{
        margin-bottom:3em;
    }
}

@media(max-width:470px){
    .telegram img{
        margin-bottom:1em;
    }
    
    .whatsapp img{
        margin-bottom:1em;
    }
}    }
</style>

<?php
  }
?>
