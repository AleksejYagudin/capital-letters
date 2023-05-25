# Большие буквы

Перевод символов в верхний регистр

## Требования

- PHP 4.3.0

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