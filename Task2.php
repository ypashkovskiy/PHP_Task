<?php
   //Вывести на экран сумму N случайных чисел.


function nRandomNumbers($count)
            {  
                $summ = 0; 
                for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $summ += rand(-21, 35);
                }
                 
                return $summ;
            }
            $n = 20; 
            $summ = nRandomNumbers($n);
            echo "Сумма $n случайных чисел = $summ \n" ;
?>  