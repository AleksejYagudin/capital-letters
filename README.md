# Большие буквы

Перевод символов в верхний регистр

## Требования

- PHP 7.4

## Установка
```bash
$ composer require ayagudin/capital-letters-package
```

## Использование

```php
<?php
$capitalLetters = new CapitalLetters();
echo $capitalLetters->getLetters('string')
```