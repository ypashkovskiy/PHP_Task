<?php
  /* Задать двумерный массив размерностью m на n (MxN) элементов, 
   заполнить его случайными значениями и вывести их на экран уже после того,
    как весь массив будет заполнен*/ 


function fillingArrayWithRandomValues($m,$n)
            {
                for ($loop_index = 0; $loop_index < $m; $loop_index++) {

                 for ($loop_index2 = 0; $loop_index2 < $n; $loop_index2++) {
                      $arr[$loop_index][$loop_index2] = rand(-50, 50);
                 }  
                }
                 
                return $arr;
            }

function arrayOutput($arr){
          echo "Вывод на экран двухмерного массива ",  m, " на ",  n, " элементов \n";
            
          foreach ($arr as $outer_key => $single_array){          
            foreach($single_array as $inner_key => $value)
            {
                echo $arr[$outer_key][$inner_key], " ";
                
            } 

            echo "\n";
        }
        
          
         
}           
            define ("m", 5);
            define ("n", 4);
            
            $array = fillingArrayWithRandomValues(m,n);
            arrayOutput($array);


           
?>  