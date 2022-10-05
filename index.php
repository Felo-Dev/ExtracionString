<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

  $string = "11H2M7D";

  $extD = preg_match('/[0-9]+D/',$string,$Dia);
  $extDia = $Dia;
var_dump($Dia[0]);
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
echo "<br>";
$segundos = 60;
$funcionDias = 24 *$segundos;
$funcionHoras = 1 *$segundos;
$funcionMin = 1 *$segundos;
echo "<br>";

$MinHoras = $funcionDias * $CantDias ;
echo "$CantDias Dias equivalen en Minutos  $MinHoras";
echo "<br>";

$HoraMin = $funcionMin * $CantHora;
echo "$CantHora Horas equivalen en minutos $HoraMin";
echo "<br>";

echo "Cantidad De Minutos $CantMin";
echo "<br>";

$total = $MinHoras+$HoraMin+$CantMin;
echo "la cantidad  Totales En minutos es: $total";
//30

    ?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>