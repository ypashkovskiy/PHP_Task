<?php
  // Второй вариант - сделайте то же самое, но не используйте массив:
  // у вас есть переменная N, выведете на экран, все числа до N, "Елочкой"


            $n = 7;
            outputNHerringbone($n);

function outputNHerringbone($n){

          $currentNumber = 1 ;
          $currentPillar = 1;
          echo "Вывод на экран все числа до ",  $n,  " \"Елочкой\" \n";

          while ($currentNumber <= $n){
          
                for ($loop_index = 0; (($loop_index < $currentPillar)and($currentNumber <= $n)); $loop_index++) {
                    echo "$currentNumber  ";
                    $currentNumber++;          
            
               }

               echo "\n";
               $currentPillar++;
            }
}

 ?>            