<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 

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