<?php
   //Вывести на экран N случайных чисел (каждое с новой строки) из диапазона [-21, 35]


function nRandomNumbers($count, $min, $max)
            {
                for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand( $min , $max );
                }
                 
                return $arr;
            }
            $n = 20; 
            $min = -21;
            $max = 35;
            $array = nRandomNumbers($n, $min, $max);
            echo "Вывод на экран $n случайных чисел из диапазона [$min, $max] \n";
            foreach ($array as $value) {
                echo "$value \n";
            }

?>  