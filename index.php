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
	@@ -53,7 +54,27 @@
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

/////////////////////////////////////////rand/////////////////////////////////////////////////////


  $names = ['Brandon','Jhonatan','Camilo'];
  $count = 0;

  foreach($names as $dev){
    $id = rand(1,100);
    $costo= 0;

    if($id < 50){
      $costo = $id * 2;
    }else{
         $costo =   $id * 7;
    };
    
    $arrydev = array(" $count: $dev : id = $id :costo = $costo");
    print_r($arrydev);
  
  
      
   ++$count;
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