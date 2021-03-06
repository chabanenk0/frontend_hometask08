<?php

class CourseProvider
{
    public function getCourses()
    {
        return array(
            array(
                'name' => 'Frontend+CMS',
                'description' => 'Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.',
                'image' => 'frontend.png',
                'alt' => 'frontend logo',
                'url' => 'frontend.html',
            ),
            array(
                'name' => 'Advanced CMS',
                'description' => 'Необхідні та поглибленні знання в системах керування контентом. Якщо ви хочете робити вебсайти як професіонал, цей курс для вас. Особливості різних CMS, використання та написання плагінів та компонентів, інтеграція із соціальними мережами та третьосторонніми сервісами.',
                'image' => 'advcms.png',
                'alt' => 'advanced cms logo',
                'url' => 'advcms.html',
            ),
            array(
                'name' => 'Advanced PHP',
                'description' => 'Для тих хто хоче розвити свої базові навички в PHP. Курс заглиблюється в вивчення ООП, MVC та фреймворку Symfony.',
                'image' => 'php.png',
                'alt' => 'php logo',
                'url' => 'php.html',
            ),
            array(
                'name' => 'Basic Java',
                'description' => 'Java - це основа ентерпрайз технологій. Ви ознайомитесь із мовою, базовою структурю SDK основами технологій на Java. Курс вимагає підвищеного рівня самостійної роботи але отриманні знання приносять особливу винагороду в роботі.',
                'image' => 'java.png',
                'alt' => 'java logo',
                'url' => 'java.html',
            ),
            array(
                'name' => 'Java for Android',
                'description' => 'Розробка під мобільні технології все більше набирає популярності. GeekHub починає із найпопулярнішої відкритої платформи Android.',
                'image' => 'android.png',
                'alt' => 'android logo',
                'url' => 'android.html',
            ),
            array(
                'name' => 'Project Management',
                'description' => 'Щоб стати досвідченим менеджером проектів потрібні роки спроб та помилок. Geekhub дає вам можливість набути практичних навичок та уникнути неприємних ситуацій в реальній роботі. Ми навчимо вас розуміти бізнес, відносини із клієнтами і девелоперами і звичайно методології ведення проектів.',
                'image' => 'pm.png',
                'alt' => 'pm logo',
                'url' => 'pm.html',
            ),
            array(
                'name' => 'Quality Assurance',
                'description' => 'Контроль якості проектів -- важлива частина процесу розробки. Цей курс навчить вас систематизувати та автоматизувати процес тестування, підвищити якість та швидкість виконання проектів в компанії.',
                'image' => 'qa.png',
                'alt' => 'QA logo',
                'url' => 'qa.html',
            ),
            array(
                'name' => 'Technical English',
                'description' => 'Нинішні ринкові умови вимагають робочого знання англійської мови і вільним використанням технічних термінів. Немає кращого місця щоб підтягнути ці навички, ніж курс Techical English на GeekHub! Курс викладає Tim Phipps, англієць із науковим ступенем у англійскій літературі.',
                'image' => 'english.png',
                'alt' => 'english logo',
                'url' => 'english.html',
            ),
        );
    }
}
