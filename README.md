# Yii2: примеры работы с формами и БД

Учебный проект на [Yii Framework 2](https://www.yiiframework.com/) (шаблон Basic).
Содержит примеры из [официального руководства](https://www.yiiframework.com/doc/guide/2.0/ru):
работа с формами и подключение к базе данных.

## Примеры

| Маршрут | Что показывает | Файлы |
|---|---|---|
| `site/say` | Действие и представление («Говорим Привет») | `controllers/SiteController.php`, `views/site/say.php` |
| `site/entry` | Форма с валидацией на основе модели («Работа с формами») | `models/EntryForm.php`, `views/site/entry.php`, `views/site/entry-confirm.php` |

## Требования

- PHP 7.4+
- MySQL / MariaDB
- Composer

## Установка и запуск

```bash
composer install
php yii serve --port=8890
```

Откройте <http://localhost:8890/index.php?r=site%2Fsay&message=Привет>
или <http://localhost:8890/index.php?r=site%2Fentry>.

## База данных

Настройки подключения — в `config/db.php`. По умолчанию:
MariaDB из OpenServer на `127.0.0.1:3307`, база `yii2basic`, пользователь `root` / `root`.
Измените их под своё окружение.
