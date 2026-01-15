<?php
   //Дано некоторое число длиной от 1 до 5 цифр
   // - вывести его цифры в обратном порядке


function digitsNumberReverseOrder($string, $count)
            {
               
               for ($loop_index = 0; $loop_index < $count; $loop_index++) {
                    $arr[$loop_index] = $string[$count-$loop_index-1];
                }
              return $arr;
            }


            do
             {
               
               $string = readline("Введите число длиной от 1 до 5 цифр и нажмите Enter: ");
               $count = strlen($string);
             }
            while ($count > 5 );

            $array = digitsNumberReverseOrder($string, $count);
           
            echo "Вывод на экран числа $string  цифры которого в обратном порядке \n";
            foreach ($array as $value) {
                echo "$value  \n";
            }
           
?>  