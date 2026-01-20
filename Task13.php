<?php
   /*Создайте функцию, которая принимает на вход массив случайных чисел из диапазона [5..12].
     Обходит этот массив и делает для каждого элемента следующее (пусть она оказывает побочный эффект прямо в своём теле):
     Если это число равно 5 -- то выведете на экран строку "пять", если 6 -- то строку "шесть", если 7 то число "7",
     иначе -- строку "какое-то другое число". */

   function fillingArray($count)
   {
             for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand(5, 12);
                }
                 
                return $arr;
   } 



   function traversalArray($array)
            {   
                 foreach($array as $inner_key => $value) {

                    switch ($value)
            {
                   
                   case 5:
                     $array[$inner_key] = "пять" ;
                     break;
                  
                   case 6:
                     $array[$inner_key] = "шесть" ;
                     break;
                   case 8 :
                   case 9:
                   case 10:
                   case 11:
                   case 12:  
                     $array [$inner_key] = "какое-то другое число" ;
                     break;
                   
            }        
                              
            } 
                return $array;
            }


            $n = 12;
            $array = fillingArray($n);
            $arr = traversalArray($array);

            echo "Вывод обхода массива  \n";
            
            foreach ($arr as $value) {
                echo "$value  \n";
            }


           
?>