<?php return [
    'plugin' => [
        'name'          => 'GoodNews',
        'description'   => 'Новостной плагин',
    ],
    'field' => [
        'published' => 'Публикация',
        'published_start' => 'Дата начала публикации',
        'cache_time_category' => 'Время кеширования категорий (мин.)',
        'cache_time_article' => 'Время кеширования новости (мин.)',
        'preview' => 'Превью текст',
        'content' => 'Контент новости',
        'published_stop' => 'Дата окончания публикации',
        'top' => 'Топовая новость',
        'hot' => 'Горячая новость',
        'code' => 'Код',
        'author' => 'Автор статьи',
        'photo_author' => 'Автор фотографий',
    ],
    'component' => [
        'article_page' => 'Страница новости',
        'article_page_desc' => 'Отображение страницы одной новости',
        'article_data' => 'Данные новости',
        'article_data_desc' => 'Получение данных одной новости',
        'property_date_format' => 'Формат вывода даты',
        'article_list' => 'Список новостей',
        'article_list_desc' => 'Отображение страницы списка новостей',
        'article_nearest' => 'Ближайшие новости',
        'article_nearest_desc' => 'Получение данных для отображения ближайших новостей',
        'category_menu' => 'Список категорий (меню)',
        'category_menu_desc' => 'Полоучение списка категорий в виде дерева',
        'property_sorting' => 'Сортировка',
        'sorting_publish_asc' => 'Сначало старые',
        'sorting_publish_desc' => 'Сначало новые',
    ],
    'menu' => [
        'article' => 'Новости',
        'category' => 'Категории',
    ],
    'tab' => [
        'cache_settings' => 'Настройки кеширования',
        'settings' => 'Настройки',
    ],
    'article' => [
        'name' => 'новости',
        'list_title' => 'Список новостей',
    ],
    'category' => [
        'name' => 'категории',
        'list_title' => 'Список категорий',
    ],
];