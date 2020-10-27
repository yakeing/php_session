# SESSION

This is a SESSION class function package, use more easily, just a few simple functions can use it.

Session Functions [Table of Contents](https://www.php.net/manual/en/ref.session.php)

### Travis CI badge

[![Travis-ci](https://api.travis-ci.com/yakeing/php_session.svg?branch=master)](https://travis-ci.com/yakeing/php_session)

### codecov badge

[![codecov](https://codecov.io/gh/yakeing/php_session/branch/master/graph/badge.svg)](https://codecov.io/gh/yakeing/php_session)

### Github badge

[![Downloads](https://img.shields.io/github/downloads/yakeing/php_session/total?color=dfb317&logo=github)](../../)
[![Size](https://img.shields.io/github/size/yakeing/php_session/src/session.php?color=b36d41&logo=github)](src/session.php)
[![tag](https://img.shields.io/github/v/tag/yakeing/php_session?color=28a745&logo=github)](../../releases)
[![license](https://img.shields.io/github/license/yakeing/php_session?color=FE7D37&logo=github)](LICENSE)
[![languages](https://img.shields.io/badge/languages-php-007EC6?logo=github)](../../search?l=php)

### Installation

Use [Composer](https://getcomposer.org) to install the library.
Of course, You can go to [Packagist](https://packagist.org/packages/yakeing/php_session) to view.

```

    $ composer require yakeing/php_session

```

### session init

- [x] example
```php
    $expire = 180;  //Default server 180 minutes client end
    $id = md5('uid'); //user ID, Default automatic generation
    $name = "PHPSESSID";
    $limiter = "private";
    $handler = null;
    $session = new session($expire, $id, $name, $limiter, $handler);
```

### FUNCTION

- [x] example
```php
    $name = 'admin';
    $value = 'pass';
    $session->Set($name, $value); //Set up a session Value
    $session->Get($name); //Get a session Value
    $session->Delete($name); //Write off a session Value
    $session->Unset(); //End all session Value
    $session->Destroy(); //End all session Value
```

[Sponsor](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)
---
If you've got value from any of the content which I have created, then I would very much appreciate your support by payment donate.

[![Sponsor](https://img.shields.io/badge/-Sponsor-EA4AAA?logo=google%20fit&logoColor=FFFFFF)](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
