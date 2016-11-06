<?php
/*
1. Создайте массив $bmw с ячейками:
a. model
b. speed
c. doors
d. year
2. Заполните ячейки значениеями соответвенно: “X5”, 120, 5, “2015”
3. Создайте массивы $toyota и $opel аналогичные массиву $bmw (заполните
данными)
4. Выведите значения всех трех массиво в виде:
name ­ model ­speed ­ doors ­ year
Например:
X5 ­120 ­ 5 ­ 2015
5. Для закрепления изученного материала придумайте аналогичную задачу,
желательно, немного усложнив ее. Напишите текст задачи и пример ее решения
 */

$bmv = array('model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015);

$toyota = array('model' => 'Solara', 'speed' => 120, 'doors' => 5, 'year' => 2015);

$opel = array('model' => 'Vectra', 'speed' => 120, 'doors' => 5, 'year' => 2015);

echo '<br>';

echo $bmv['model'] .'-'. $bmv['speed'] .'-'. $bmv['doors'] .'-'. $bmv['year'].'<br>';

echo $toyota['model'] .'-'. $toyota['speed'] .'-'. $toyota['doors'] .'-'. $toyota['year'].'<br>';

echo $opel['model'] .'-'. $opel['speed'] .'-'. $opel['doors'] .'-'. $opel['year'].'<br>';

?>