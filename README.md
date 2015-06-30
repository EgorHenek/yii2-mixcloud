Mixcloud Api Widget for Yii2
========================================
[![GitHub issues](https://img.shields.io/github/issues/EgorHenek/yii2-mixcloud.svg)](https://github.com/EgorHenek/yii2-mixcloud/issues)
[![GitHub forks](https://img.shields.io/github/forks/EgorHenek/yii2-mixcloud.svg)](https://github.com/EgorHenek/yii2-mixcloud/network)
[![GitHub stars](https://img.shields.io/github/stars/EgorHenek/yii2-mixcloud.svg)](https://github.com/EgorHenek/yii2-mixcloud/stargazers)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/EgorHenek/yii2-mixcloud/master/LICENSE)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require EgorHenek/yii2-mixcloud:~1.0
```
or add

```json
"EgorHenek/yii2-mixcloud" : "~1.0"
```

to the require section of your application's `composer.json` file.

Usage
-----

This widget renders a Bootstrap DateTimePicker input control. Best suitable for model with date string attribute. Its functionality is similar to [Bootstrap DatePicker plugin](https://github.com/2amigos/yii2-date-picker-widget) but this widget is enhanced with Time selection. 

It also allows you to restrict the views so you can use this widget as a DatePicker, TimePicker, or DateTimePicker. 

There are two ways of using it, with an `ActiveForm` instance or as a widget setting up its `model` and `attribute`.

```php
<?php
use dosamigos\datetimepicker\DateTimePicker;

// as a widget
?>

<?= DateTimePicker::widget([
    'model' => $model,
    'attribute' => 'created_at',
    'language' => 'es',
    'size' => 'ms',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'dd MM yyyy - HH:ii P',
        'todayBtn' => true
    ]
]);?>

<?php 
// with an ActiveForm instance displayed as a TimePicker

use dosamigos\datetimepicker\DateTimePicker;
?>
<?= $form->field($tour, 'date_from')->widget(DateTimePicker::className(), [
    'language' => 'es',
    'size' => 'ms',
    'template' => '{input}',
    'pickButtonIcon' => 'glyphicon glyphicon-time',
    'inline' => true,
    'clientOptions' => [
        'startView' => 1,
        'minView' => 0,
        'maxView' => 1,
        'autoclose' => true,
        'linkFormat' => 'HH:ii P', // if inline = true
        // 'format' => 'HH:ii P', // if inline = false
        'todayBtn' => true
    ]
]);?>
```

Further Information
-------------------
Please, check the [MixCloud api site](https://www.mixcloud.com/developers/) documentation for further information about its configuration options.

Contributing
------------

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

Credits
-------

- [Egor Gluhih](https://github.com/EgorHenek)
- [All Contributors](../../contributors)

License
-------

The MIT License. Please see [License File](LICENSE.md) for more information.


[edm.su](http://edm.su)
