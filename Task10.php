<?php
   //Задайте случайным образом массив из N элементов (целых чисел). Найдите максимальное число и напечатайте его.

   function fillingArray($count)
   {
             for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand(-40, 40);
                }
                 
                return $arr;
   } 



   function maximumNumberArray($array)
            {   
                $maximumNumber = $array[0];

                for ($loop_index = 1; $loop_index < count($array); $loop_index++) {
                     if ($maximumNumber < $array[$loop_index]) {
                         $maximumNumber = $array[$loop_index];
                     }
                }
                 
                return $maximumNumber;
            }


            $n = 20;
            $array = fillingArray($n);
            $maximumValue = maximumNumberArray($array);

            echo "Вывод на экран максимального  числа  из массива ",  $n,  " элементов  \n";
            echo " $maximumValue \n";



           
?>  