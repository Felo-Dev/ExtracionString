<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

  $string = "11H4M";

  $extD = preg_match('/[0-9]+D/',$string,$Dia);
  $extDia = $Dia;
  $valDia = implode($Dia);
  $extNumDias = explode("D",$valDia);
  $CantDias = $extNumDias[0];
  $BusqDia = strpos($string,"D");


  if($BusqDia !== false){
    echo "Cantidad de Dias $CantDias";
  }else{
    $CantDias = 0;
    echo "nose envio ningun Dia $CantDias";
  }
  echo "</br>";

  $extD = preg_match('/[0-9]+H/',$string,$Hora);
  $extHora = $Hora;
  $valHora = implode($Hora);
  $extNumHora = explode("H",$valHora);
  $CantHora = $extNumHora[0];
  $BusqHora = strpos($string,"H");


  if($BusqHora !== false){
    echo "Cantidad de Hora $CantHora";
  }else{
    $CantHora = 0;
    echo "nose envio ningun Hora $CantHora";
  }
  echo "<br>";

  $extM = preg_match('/[0-9]+M/',$string,$Min);
  $extMin = $Min;
  $valMin = implode($Min);
  $extNumMin = explode("M",$valMin);
  $CantMin = $extNumMin[0];
  $BusqMin = strpos($string,"M");


  if($BusqMin !== false){
    echo "Cantidad de Minutos $CantMin";
  }else{
    $CantMin = 0;
    echo "nose envio ningun Minutos $CantMin";
  }


    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>