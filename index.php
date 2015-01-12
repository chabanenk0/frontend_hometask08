<?php
/*
 * Это пример использования шаблонизатора twig.
 * Данный файл инициализирует twig, настраивает его на шаблоны в папке frontend и отображает главную страницу
 * Мною был протестирован на ubuntu+apache2+php5
 * Очень надеюсь, что будет работать и на windows, например с использованием http://www.denwer.ru/
 * По возникшим проблемам - обращаться ко мне (Дмитрий Чабаненко)
 * chdn6026@gmail.com
 * skype: dmitry_chabanenko
 */
require_once 'vendor/autoload.php';
require_once 'CourseProvider.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('frontend/templates/');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

$template = $twig->loadTemplate('index.html.twig');

/*
 Класс CourseProvider подготавливает данные про курсы Geekhub, которые циклом выводятся в шаблоне.
 В данном случае он просто возвращает массив php, но можно вместо єтого извлекать данные из базы данных,
 из файла или иного источника
 */
$courseProvider = new \CourseProvider();

// Получаем данные курсов
$courses = $courseProvider->getCourses();

// создаем результирующий html по шаблону и выводим результат пользователю на экран
echo $twig->render('index.html.twig', array('courses' => $courses, 'active' => 'main'));

