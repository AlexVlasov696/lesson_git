<?php
/*
1. Создайте переменную $age
2. Присвойте переменной $age произвольное числовое значение
3. Напишите конструкцию if, которая выводит фразу: “Вам toq работать и работать”
при условии что значение переменной $age попадает в диапазон чисел от 18 до 65
(включительно)
4. Расширьте конструкцию if, выводя фразу: “Вам пора на пенсию” при условии, что
значение переменной $age больше 65
5. Расширьет конструкцию if­else, выводя фразу: “Вам ещё рано работать” при
условии, что значение переменной $age попадает в диапазон чисел от 1 до 17
(включительно)
6. Дополните конструкцию if­elseif, выводя фразу: “Неизвестный возраст” при
условии, что значение переменной $age не попадет в вышеописанные диапазоны
чисел

 */

$age = '27';

if($age >= 18 & $age <= 65){
    echo "Вам мужчина раьотать и работать";
}
elseif($age > 65){echo 'Вам пора на пенсию';}

elseif($age >=1 & $age <= 17){echo 'Вам еще рано работать';}

else {echo 'Возраст неизвестен';}
?>