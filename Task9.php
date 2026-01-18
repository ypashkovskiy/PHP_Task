<?php
   //Задайте случайным образом массив из N элементов. Выведите его на экран "ёлочкой".


function fillingArrayWithRandomValues($count)
            {
                for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand(-40, 40);
                }
                 
                return $arr;
            }

function outputArrayHerringbone($arr, $n){

          $currentRow = 1;
          $currentPillar = 1;
          echo "Вывод на экран массив из ",  $n,  " элементов Елочкой \n";
            foreach ($arr as $value) {
                echo "$value  ";
                if ($currentPillar == $currentRow) {

                    echo "\n";
                    $currentPillar = 1;
                    $currentRow ++;
                } else {
                   $currentPillar++; 
                }

            }

}
            $n = 12;
            $array = fillingArrayWithRandomValues($n);
            outputArrayHerringbone($array, $n);


           
?>  