# Пагинатор

Помогает при формировании пагинации.

## Требования

- PHP 7.4

## Установка

```bash
$ composer require Tel3scop/otus-composer-package
```

## Использование

```php 
<?php
$paginator = new Paginator();
echo $paginator->getOffset($page, $limit);
```