<?php
   /*Даны два массива по 20 элементов каждый.
   Сравните каждый 3-ий элемент 1-ого массива с каждый 2-ым элементов 2-ого массива 
   - сравнение проводите пока не закончится та выборка, которая короче. */

   function fillingArray($count)
   {
             for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = rand(-40, 40);
                }
                 
                return $arr;
   } 



   function comparisonArray ($arr1, $arr2)
            {   
                

                for ($loop_index = 2, $loop_index2 = 1, $index = 0; $loop_index < count($arr1); $loop_index+=3, $loop_index2+=2 , $index++) {
                     
                    if ($arr1[$loop_index] > $arr2[$loop_index2]) {
                         $arr[$index][1]= " больше ";
                     } else if ($arr1[$loop_index] < $arr2[$loop_index2]) {
                         $arr[$index][1]= " меньше "; 
                     } else {
                            $arr[$index][1]= " равно "; 
                     }

                      $arr[$index][0]= $arr1[$loop_index];
                      $arr[$index][2]= $arr2[$loop_index2];
                }
                 
                return $arr;
            }


            $n = 20;
            $array1 = fillingArray($n);
            $array2 = fillingArray($n);

           $сomparativeArray = comparisonArray ($array1, $array2);

            echo "Вывод сравнения каждого 3-го элемента 1-ого массива с каждым 2-ым элементом 2-ого массива  \n";
          
            for ($i = 0; $i < count($сomparativeArray ); $i++) {
              for ($j = 0; $j < count($сomparativeArray [$i]); $j++) {
                  echo $сomparativeArray [$i][$j] . " "; // Используем табуляцию
              }
                 echo "\n";
              }
            
          
?>