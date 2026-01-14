<?php
   /*Вывести на экран N случайных чисел (каждое с новой строки). 
   Для каждого числа, начиная со второго,
   рядом выводить - больше ли оно предыдущего или меньше.*/


function  nRandomNumbersComparison($count)
            { 
                $arr[0][0] = rand (-21, 35);
  
                for ($loop_index = 1; $loop_index < $count; $loop_index++) {
                     
                    $currentNumber = rand (-21, 35);
                    
                    if ($arr[$loop_index-1][0] == $currentNumber){
                        $arr[$loop_index][1] = "равно";

                    } else if ($arr[$loop_index-1][0] < $currentNumber){
                        $arr[$loop_index][1] = "больше";

                    } else {
                        $arr[$loop_index][1] = "меньше";
                    }

                    $arr[$loop_index][0] = $currentNumber;
               }
                return $arr;
            }

            $n = 20; 
            $array = nRandomNumbersComparison($n );
            echo "Вывод на экран $n случайных чисел и их сравнение \n";
           
            echo $array[0][0] . "\n" ; 

            for($index = 1; $index < count($array); $index++) {
               echo $array[$index][0] . " " . $array[$index][1] . " " . $array[$index-1][0] ."\n";             } 
            
    
?>  