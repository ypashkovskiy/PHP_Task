<?php
   //Дано некоторое число длиной от 1 до 5 цифр
   // - вывести его цифры в обратном порядке


function digitsNumberReverseOrder($number)
            {
                
               $loop_index = 0;
               while ($number <> 0) { 
                     $arr[$loop_index] = $number % 10;
                     $number = intdiv($number, 10);
                     $loop_index++;
               }
               
              return $arr;
            }


            do
             {
               
               $value = readline("Введите число длиной от 1 до 5 цифр и нажмите Enter: ");
             }
            while (strlen( $value ) > 5 );

            $array = digitsNumberReverseOrder( $value );
           
            echo "Вывод на экран числа  $value   цифры которого в обратном порядке \n";
            foreach ($array as $value) {
                echo "$value  \n";
            }
               
                         
?>  