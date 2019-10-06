<h1 align="center"> cjunit-laravel </h1>

<p align="center"> .</p>


## Installing

```shell
$ composer require carmi/cjunit-laravel -vvv
```

## Usage

TODO

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/carmi/cjunit-laravel/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/carmi/cjunit-laravel/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT

##框架要求
Lravel >=5.5 & php >= 7.1.3

##安装方式
```yml
composer require "carmi/cjunit-laravel"
```

#配置方式
5.5手动配置laravel 对于 cjunit 服务放到config/app.php中

##解释路由
```php
<?php
    Route::get("/","CJunitController@index");
    Route::post("/","CJunitController@store")->name("junit.store");
?>
```

### git -> 注册