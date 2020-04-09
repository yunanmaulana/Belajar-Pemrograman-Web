<!DOCTYPE html>
<html>
<head>
  <title>Latihan Faktorial</title>
</head>
<body>

</body>
</html>
<?php
$bil = 5;
//faktorial for
  if($bil>=1){
    echo "Hasil Faktorial For";
    echo "<br>";
           
    for($i=1; $i <= $bil; $i++){
      $faktorial = 1;

      echo $i. "! = ";     
      for($j=$i; $j > 0; $j--){
        if($j == 1){
          echo " 1 = " .$faktorial;
        }
        else{
          echo $j ." x ";
        }
        $faktorial*=$j;
      }
      echo "<br>";
    }
  }

  else if($bil == 0){
    echo "Hasil Faktorial For";
    echo "<br>";
    echo "0! = 1";
  }
  echo "<br>";
  echo "<br>";

//faktorial while
if($bil>=1){
    echo "Hasil Faktorial While";
    echo "<br>";
    $i=1;

    while($i <= $bil){
      $j=$i;
      $faktorial = 1;

      echo $i. "! = ";      
      while($j > 0){
        if($j == 1){
          echo " 1 = " .$faktorial;
        }
        else{
          echo $j ." x ";
        }

        $faktorial*=$j;
        $j--;
      }
      echo "<br>";
      $i++;
    }
  }

  else if($bil == 0){
    echo "Hasil Faktorial While";
    echo "<br>";
    echo "0! = 1";
  }
  echo "<br>";
  echo "<br>";

//faktorial dowhile
if($bil>=1){
    echo "Hasil Faktorial Do While";
    echo "</br>";
    $i=1;

    do{
      $j=$i;
      $faktorial = 1;

      echo $i. "! = ";      
      do{
        if($j == 1){
          echo " 1 = " .$faktorial;
        }
        else{
          echo $j ." x ";
        }
        
        $faktorial*=$j;
        $j--;
      }while($j > 0);
      echo "</br>";
      $i++;
    }while($i <= $bil);
  }

  else if($bil == 0){
    echo "Hasil Faktorial Do While";
    echo "<br>";
    echo "0! = 1";
  }
?>