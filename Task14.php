<?php
   /*Есть два массива "a" и "b". На вход вашей программе подаётся массив "a"
    случайных чисел (10 элементов) из диапазона от 1 до 20.
     Задача: вывести на экран все числа, которые не содержатся в массиве "b".
     Без использования in_array()*/

   function fillingArray($count)
   {
             for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand(1, 20);
                }
                 
                return $arr;
   } 



   function comparisonArray ($arr1, $arr2)
            {   
             
             $index = 0; 
             foreach ($arr1 as $outer_key => $value){  
                
                $fl = false;
                foreach($arr2 as $inner_key => $value2)
            {
                 if ($value == $value2){
                    $fl = true;
                    break;
                 } 
            } 
             
            if (!($fl)){
                $arr[$index] = $value;
                $index++;
            }
        }

               
                 
                return $arr;
            }


            $n = 10;
            $array1 = fillingArray($n);
            $array2 = fillingArray($n);

           $сomparativeArray = comparisonArray ($array1, $array2);

            echo "Вывод на экран все числа, которые есть в массиве \"a\" и не содержатся в массиве \"b\" \n";
          
            foreach ($сomparativeArray as $value) {
                echo "$value  \n";
            }
          
?>