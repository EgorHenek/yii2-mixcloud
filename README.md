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

Configure
---------
In the component configuration file to add
```php
'mixcloud' => [
    'class' => 'EgorHenek\mixcloud\Mixcloud',
    'clientToken' => <client token>
],
```
For the client token:

Create an application at the following address: https://www.mixcloud.com/developers/create/

So you get a Client ID and Client Secret

Go https://www.runscope.com/oauth_tool?utm_source=partner&utm_medium=link&utm_campaign=hurlit to create the necessary token

How to use
---------
Upload example: 
```php
Yii::$app->mixcloud->upload('test.mp3', 'name');
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
