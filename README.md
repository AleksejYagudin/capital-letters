# Большие буквы

Перевод символов в верхний регистр

## Требования

- PHP 7.0.0

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