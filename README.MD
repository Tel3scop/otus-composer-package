# Пагинатор

Помогает при формировании пагинации.
Функция getOffset проверяет корректность входных данных, чтобы убедиться, что они не меньше 1. 
Затем вычисляет Offset, умножая номер страницы на лимит записей на странице и вычитая единицу.
Максимальный limit = 100 по умолчанию.

## Требования

- PHP 7.4

## Установка

```bash
$ composer require tel3scop/otus-composer-package
```

## Использование

```php 
<?php
$page = 3; // Номер страницы
$limit = 10; // Лимит записей на странице

$paginator = new Paginator();
$offset = $paginator->getOffset($page, $limit);
echo "Для страницы $page с лимитом $limit Offset = $offset";
```