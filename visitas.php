<?php
require "database.php";

//IP pública del visitante
$ip = $_SERVER['REMOTE_ADDR'];

//Fecha y hora
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('d/m/Y');
$hora  = date("H:m:s");

//Página sobre la que se navega
$pagina = $_SERVER["REQUEST_URI"];

//Página donde se viene
$referido = $_SERVER['HTTP_REFERER'];

//País y ciudad del visitante
$pais = $_SERVER['GEOIP_COUNTRY_NAME'];
$ciudad = $_SERVER['GEOIP_CITY'];
if(empty($referido)){
    $referido = "Link directo";
}

if(empty($ciudad)){
    $ciudad = "sin definír";
}

//Detecta navegador
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getBrowser($user_agent){
 
    if(strpos($user_agent, 'MSIE') !== FALSE)
        return 'Internet explorer';
    elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
        return 'Microsoft Edge';
    elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
        return 'Internet explorer';
    elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
        return "Opera Mini";
    elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
        return "Opera";
    elseif(strpos($user_agent, 'Firefox') !== FALSE)
        return 'Mozilla Firefox';
    elseif(strpos($user_agent, 'Chrome') !== FALSE)
        return 'Google Chrome';
    elseif(strpos($user_agent, 'Safari') !== FALSE)
        return "Safari";        
    else
        return 'Sin definir';
}
$navegador = getBrowser($user_agent);

//Sisitema operativo
function getPlatform($user_agent) {
   $plataformas = array(
      'Windows 10' => 'Windows NT 10.0+',
      'Windows 8.1' => 'Windows NT 6.3+',
      'Windows 8' => 'Windows NT 6.2+',
      'Windows 7' => 'Windows NT 6.1+',
      'Windows Vista' => 'Windows NT 6.0+',
      'Windows XP' => 'Windows NT 5.1+',
      'Windows 2003' => 'Windows NT 5.2+',
      'Windows' => 'Windows otros',
      'iPhone' => 'iPhone',
      'iPad' => 'iPad',
      'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
      'Mac otros' => 'Macintosh',
      'Android' => 'Android',
      'BlackBerry' => 'BlackBerry',
      'Linux' => 'Linux',
   );
   foreach($plataformas as $plataforma=>$pattern){
      if (preg_match('/(?i)'.$pattern.'/', $user_agent))
         return $plataforma;
   }
   return 'Otro';
}
$so =  getPlatform($user_agent);

 //Detectar Dispositivo
function movil(){
 if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|SAMSUNG|Motorola)/i',strtolower($_SERVER['HTTP_USER_AGENT'])))
      return "Celular";
 $user_agent = $_SERVER['HTTP_USER_AGENT'];
 $user = array('PIE4','PIE4_Smartphone','PIE6','Minimo','OperaMini','AvantGo','Plucker','NetFront','SonyEricsson',
 'Nokia','Motorola','BlackBerry','WindowsMobile','PPC','PDA','Smartphone','Palm','SAMSUNG','Motorola');

 if(in_array($user_agent,$user))
      return "Celular";
 else
      return "PC o portatil";
}
$dispositivo = movil();

$sql = "INSERT INTO `visitas`(`ip`, `fecha`, `hora`, `num`, `pais`, `ciudad`, `pagina`, `navegador`, `referido`,`sistema_operativo`,`dispositivo`) VALUES ('$ip','$fecha','$hora','$num','$pais','$ciudad','$pagina','$navegador','$referido','$so','$dispositivo')";
 $resultInsert = mysqli_query($conn, $sql); 
 
 
?>
