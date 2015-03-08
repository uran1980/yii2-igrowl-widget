# Yii2 iGrowl Widget

An Yii2 igrowl widget based on [iGrowl](http://catc.github.io/iGrowl/) jQuery plugin.


## What is iGrowl?
iGrowl is a lightweight jQuery plugin that generates growl-like notifications with
 an emphasis on icons. Alerts are fully responsive and CSS animations are used
 to provide optimal performance.


## Installation


### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-igrowl "dev-master"
```

or add

```
"uran1980/yii2-igrowl": "dev-master"
```

to the require section of your ```composer.json```


## Usage

To activate this widget add this line to you view or layout:

```php
<?php echo uran1980\yii\widgets\igrowl\Igrowl::widget(); ?>
```

Available options: **theme**, for example:

```php
<?php echo uran1980\yii\widgets\pace\Pace::widget([
    'theme' => 'steadysets',
]); ?>
```

available themes are: **steadysets** (default), **vicons**, **linecons** and **feather**


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)
