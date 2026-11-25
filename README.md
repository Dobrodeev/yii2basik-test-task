# Yii2: примеры работы с формами и БД

Учебный проект на [Yii Framework 2](https://www.yiiframework.com/) (шаблон Basic).
Содержит примеры из [официального руководства](https://www.yiiframework.com/doc/guide/2.0/ru):
работа с формами и подключение к базе данных.

## Примеры

| Маршрут | Что показывает | Файлы |
|---|---|---|
| `site/say` | Действие и представление («Говорим Привет») | `controllers/SiteController.php`, `views/site/say.php` |
| `site/entry` | Форма с валидацией на основе модели («Работа с формами») | `models/EntryForm.php`, `views/site/entry.php`, `views/site/entry-confirm.php` |
| `country/index` | Список стран из БД через ActiveRecord с пагинацией («Работа с базами данных») | `migrations/m261125_000001_create_country_table.php`, `models/Country.php`, `controllers/CountryController.php`, `views/country/index.php` |

## Требования

- PHP 7.4+ с расширением GD (нужно для капчи на странице Contact: в `php.ini` раскомментируйте `extension=gd`)
- MySQL / MariaDB
- Composer

## Установка и запуск

```bash
composer install
php yii migrate
php yii serve --port=8890
```

Откройте <http://localhost:8890/index.php?r=site%2Fsay&message=Привет>,
<http://localhost:8890/index.php?r=site%2Fentry>
или <http://localhost:8890/index.php?r=country%2Findex>.

## Админка

Модуль `modules/admin` на теме [AdminLTE 3](https://adminlte.io/) (пакет `hail812/yii2-adminlte3`).

- Адрес: <http://localhost:8890/index.php?r=admin>
- Вход: `admin` / `admin` (тестовый пользователь из `models/User.php`); остальным пользователям доступ закрыт
- Панель управления: число стран и суммарное население
- Раздел «Страны»: список с фильтрами и сортировкой, просмотр, добавление, редактирование, удаление
- В режиме разработки в меню есть ссылки на Gii и Debug

Новые разделы можно генерировать через Gii с шаблоном `adminlte`, например:

```bash
php yii gii/crud --modelClass='app\models\Country' \
    --searchModelClass='app\modules\admin\models\CountrySearch' \
    --controllerClass='app\modules\admin\controllers\CountryController' \
    --viewPath='@app/modules/admin/views/country' --template=adminlte
```

Шаблон AdminLTE в `findModel()` всегда подставляет `$id`; если первичный ключ называется иначе
(как `code` у стран), исправьте переменную в сгенерированном контроллере.

## База данных

Настройки подключения — в `config/db.php`. По умолчанию:
MariaDB из OpenServer на `127.0.0.1:3307`, база `yii2basic`, пользователь `root` / `root`.
Измените их под своё окружение.
