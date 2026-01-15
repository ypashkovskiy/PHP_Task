<?php
   //Вывести на экран n-ное число Фибоначчи


function nFibonacciNumber($count)
            {
                $loop_index = 0; 
                while ($loop_index < $count){
                      
                    if ($loop_index < 2) {
                        $arr[$loop_index] = $loop_index; 

                    } else {
                        $arr[$loop_index] = $arr[$loop_index-1] + 
                                            $arr[$loop_index-2]; 
                    }
                     
                    $loop_index++;
                }
               return $arr;
            }
            $n = 22; 
            $array = nFibonacciNumber($n);
            echo "Вывод на экран $n числа Фибоначчи \n";
            foreach ($array as $value) {
                echo "$value  ";
            }

?>  