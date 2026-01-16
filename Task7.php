<?php
   //Задать массив из 7-ми элементов, заполнить его случайными значениями в одном цикле,
   // а в другом цикле вывести эти значения на экран


function fillingArrayWithRandomValues($count)
            {
                for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand();
                }
                 
                return $arr;
            }

function arrayOutput($arr){
          echo "Вывод на экран массив из 7-ми элементов \n";
            foreach ($arr as $value) {
                echo "$value \n";
            }

}
            
            $array = fillingArrayWithRandomValues(7);
            arrayOutput($array);


           
?>  