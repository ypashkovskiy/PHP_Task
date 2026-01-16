<?php
   /*Дано некоторое число длиной от 1 до 5 символов, 
   вывести все его "нечётные" цифры в обратном порядке */


function digitsNumberReverseOrder($number)
            {
                
               $loop_index = 0;
               $arr[0] = null;
               while ($number <> 0) { 
                     $value = $number % 10;  

                     if (($value % 2 ) <> 0){
                        $arr[$loop_index] = $value; 
                        $loop_index++;
                     } 
                    

                     $number = intdiv($number, 10);
                    
               }
               
              return $arr;
            }


            do
             {
               
               $value = readline("Введите число длиной от 1 до 5 цифр и нажмите Enter: ");
             }
            while (strlen( $value ) > 5 );

            $array = digitsNumberReverseOrder( $value );

            if ($array[0]<> null){ 
           
                 echo "Вывод на экран числа  $value   цифры которого в обратном порядке \n";
                 foreach ($array as $value) {
                 echo "$value  \n";
            } 
            }else {
              echo "Нечетных цифр не обнаружено!  \n"; 
            }
               
                         
?>  