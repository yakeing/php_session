# SESSION

This is a SESSION class function package, use more easily, just a few simple functions can use it.

Session Functions [Table of Contents](https://www.php.net/manual/en/ref.session.php)

### Travis CI

[![Travis-ci](https://api.travis-ci.org/yakeing/php_session.svg?branch=master)](https://travis-ci.org/yakeing/php_session)

### codecov

[![codecov](https://codecov.io/gh/yakeing/php_session/branch/master/graph/badge.svg)](https://codecov.io/gh/yakeing/php_session)

### Packagist

[![Version](http://img.shields.io/packagist/v/yakeing/php_session.svg)](https://github.com/yakeing/php_session/releases)
[![Downloads](http://img.shields.io/packagist/dt/yakeing/php_session.svg)](https://packagist.org/packages/yakeing/php_session)

### Github

[![Downloads](https://img.shields.io/github/downloads/yakeing/php_session/total.svg)](https://github.com/yakeing/php_session)
[![Size](https://img.shields.io/github/size/yakeing/php_session/src/session.php.svg)](https://github.com/yakeing/php_session/blob/master/src/php_session/session.php)
[![tag](https://img.shields.io/github/tag/yakeing/php_session.svg)](https://github.com/yakeing/php_session/releases)
[![Language](https://img.shields.io/github/license/yakeing/php_session.svg)](https://github.com/yakeing/php_session/blob/master/LICENSE)
[![Php](https://img.shields.io/github/languages/top/yakeing/php_session.svg)](https://github.com/yakeing/php_session)

### Installation

Use [Composer](https://getcomposer.org) to install the library.

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
    $session->Deletes($name); //Write off a session Value
    $session->Unsets(); //End all session Value
    $session->Destroy(); //End all session Value
```

Donate
---
Your donation makes CODE better.

 [Bitcoin](https://btc.com/1FYbZECgs3V3zRx6P7yAu2nCDXP2DHpwt8)

 1FYbZECgs3V3zRx6P7yAu2nCDXP2DHpwt8

 ![Bitcoin](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Bitcoin.png)

 WeChat

 ![WeChat](https://raw.githubusercontent.com/yakeing/Content/master/Donate/WeChat.png)

 Alipay

 ![Alipay](https://raw.githubusercontent.com/yakeing/Content/master/Donate/Alipay.png)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
