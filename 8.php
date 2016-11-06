<?php
/*Отрисовать навигационное меню на странице, типа <a href=’about.html’>О нас</a>
используюя массив в качетсве структуры меню
1. Создайте ассоциативный массив $menu
2. Заполните массив соблюдая следующие условия, например:
a. навзание ячейки является пунктом меню, например: Номе, About, Contacts…
b. Значение ячейки является именем файла, на который буедт указывать
ссылка, например: index.php, about.php, contacts.php
3. Используя цикл foreach отрисуйте ветрикальное меню.
*/


$menu = array('Home' => "index.php",'About Us' => "about.php",'Contacts' => "contacts.php",);

foreach($menu as $var){
    echo $var.'<br>';
}

foreach($menu as $key => $var){
    echo "$key => $var".'<br>';
}


?>