<div align="center">

# Tempest Icons 🌊 🙂

A [Tempest](https://tempestphp.com/) library providing a convenient `icon(…)`
function for rendering SVG icons with
[php-icons](https://github.com/yassinedoghri/php-icons).

[![Latest Stable Version](https://poser.pugx.org/yassinedoghri/tempest-icons/v)](https://packagist.org/packages/yassinedoghri/tempest-icons)
[![Total Downloads](https://poser.pugx.org/yassinedoghri/tempest-icons/downloads)](https://packagist.org/packages/yassinedoghri/tempest-icons)
[![License](https://img.shields.io/github/license/yassinedoghri/tempest-icons?color=green)](https://packagist.org/packages/yassinedoghri/tempest-icons)
[![PHP Version Require](https://poser.pugx.org/yassinedoghri/tempest-icons/require/php)](https://packagist.org/packages/yassinedoghri/tempest-icons)

</div>

## 🚀 Getting started

### 0. Prerequisites

Usage of Tempest Icons requires the following:

- A Tempest based project
- Composer for package management
- PHP 8.3+

### 1. Install via composer

```sh
composer require yassinedoghri/tempest-icons
```

### 2. Setup

[Initialize and configure PHPIcons](https://github.com/yassinedoghri/php-icons),
ie. create the `php-icons.php` config file:

```sh
vendor/bin/php-icons init
```

### 3. Usage

Use the `icon(string $iconKey, array $attributes)` function anywhere in your
View files to render SVG icons:

```php
<?= icon('material-symbols:bolt') ?>
// <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
//      <path fill="currentColor" d="m8 22l1-7H4l9-13h2l-1 8h6L10 22z"/>
// </svg>

<?= icon('material-symbols:bolt', ['class' => 'text-2xl', "style" => "color: yellow;"]) ?>
// <svg class="text-2xl" style="color: yellow;" [...]>...</svg>

<?= icon('material-symbols:bolt')
        ->attr('class', 'text-2xl')
        ->attr('style', 'color: yellow;') ?>
// <svg class="text-2xl" style="color: yellow;" [...]>...</svg>
```

For more usage info, see
[php icons docs](https://github.com/yassinedoghri/php-icons).

## 📜 License

Code released under the [MIT License](https://choosealicense.com/licenses/mit/).

Copyright (c) 2024-present, Yassine Doghri
([@yassinedoghri](https://yassinedoghri.com/)).
