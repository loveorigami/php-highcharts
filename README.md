Php-Highcharts
=============

Php-Highcharts is a port [HighchartsPHP](https://github.com/ghunti/HighchartsPHP) for php >= 7.1 with auto-compleate in IDE.

Php-Highcharts is a PHP library that works as a wrapper for the **Highchart js** library (http://www.highcharts.com) and it was built with flexibility and maintainability in mind.
It isn't a simple port of the JavaScript library to PHP, it was designed in a way that mimics the JavaScript counterpart API, so that the developer only needs to learn one API.

The companion webpage can be found at http://www.goncaloqueiros.net/highcharts.php

Setup
-----

The recommended way to install HighchartsPHP is through  [`Composer`](http://getcomposer.org). Just create a ``composer.json`` file and run the ``php composer.phar install`` command to install it:
```json
{
    "require": {
        "loveorigami/php-highcharts": "@dev"
    }
}
```

Usage
-----

### Simple

You can create a highchart using the Highchart constructor.

```php
//This will create a highchart chart
$chart = new Highchart();
```

Now that there's a valid `$chart` object the developer only needs to add elements to it as if it was writing them in JavaScript.

```php
$chart->title = ['text' => 'Monthly Average Temperature', 'x' => -20];
or
$chart->title->text = 'Monthly Average Temperature';
$chart->title->x = -20;
```

You can also create simple arrays

```php
$chart->series[] = ['name' => 'Tokyo', 'data' => [7.0, 6.9, 9.5]];
or
$chart->series[0] = ['name' => 'Tokyo', 'data' => [7.0, 6.9, 9.5]];
or
$chart->series[0]->name = 'Tokyo';
$chart->series[0]->data = [7.0, 6.9, 9.5];
```

and after that get all options for using in Highchart as:

```
$chart->getOptions();
or
$chart->getJson();
```

Demos
-----

All the Highcharts and Highstocks live demos present on http://www.highcharts.com under the demo gallery were reproduced using this library and you can find them on the demos folder or see a live example on http://www.goncaloqueiros.net/highcharts/demos.php