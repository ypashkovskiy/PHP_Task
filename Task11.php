<?php
   //Задайте случайным образом массив из 20-ти элементов (целых чисел). Найдите минимальное число и напечатайте его.

   function fillingArray($count)
   {
             for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand(-40, 40);
                }
                 
                return $arr;
   } 



   function maximumNumberArray($array)
            {   
                $minimumNumber = $array[0];

                for ($loop_index = 1; $loop_index < count($array); $loop_index++) {
                     if ($minimumNumber > $array[$loop_index]) {
                         $minimumNumber = $array[$loop_index];
                     }
                }
                 
                return $minimumNumber;
            }


            $n = 20;
            $array = fillingArray($n);
            $minimumValue = maximumNumberArray($array);

            echo "Вывод на экран минимального  числа  из массива ",  $n,  " элементов  \n";
            echo " $minimumValue \n";



           
?>