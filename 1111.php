<?php
/*Задание №1
Функция должна принимать массив строк и выводить каждую строку в
отдельном параграфе*/

$mass = array('Это','массив','строк','с помощью','функции');
function vivod($var){
    print $var[0].'<br>';
    print $var[1].'<br>';
    print $var[2].'<br>';
    print $var[3].'<br>';
    print $var[4].'<br>';
};
vivod($mass);

function loka($var){
    if(is_array($var)){
        foreach($var as $val){
            echo "<p>$val</p>";
        }
    }
    else {echo 'Ошибка, это не массив!';};
};

loka($mass);
/*Задание №2
Функция должна принимать 2 параметра: а) массив чисел; б) строку,
обозначающую арифметическое действие, которое нужно выполнить со
всеми элементами массива. Функция должна вывести результат.
Например: имя функции someFunction(array(1,2,3,4), ‘ – ’)
Результат: 1 – 2 – 3 – 4 = 8*/

/*
$mass = array(1,2,3,4,8);
$use = "+";
function work($var1,$var2){print $var1[0].$var2.$var1[1].$var2.$var1[2].$var2.$var1[3]."=".$var1[4];
};
work($mass,$use);

function test($var1,$var2){$m = $var1[0].$var2.$var1[1].$var2.$var1[2].$var2.$var1[3];
    return $m;
};

print test($mass,$use);
*/

?>