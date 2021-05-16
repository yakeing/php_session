# SESSION

This is a SESSION class function package, use more easily, just a few simple functions can use it.

Session Functions [Table of Contents](https://www.php.net/manual/en/ref.session.php).

### Travis CI badge

[![Travis-ci](https://api.travis-ci.com/yakeing/php_session.svg?branch=main)](https://travis-ci.com/yakeing/php_session)

### codecov badge

[![codecov](https://codecov.io/gh/yakeing/php_session/branch/main/graph/badge.svg)](https://codecov.io/gh/yakeing/php_session)

### Github badge

[![Downloads](https://badging.vercel.app/github/downloads/yakeing/php_session?icon=github)](../../)
[![Size](https://badging.vercel.app/github/size/yakeing/php_session?icon=github)](src)
[![tag](https://badging.vercel.app/github/tag/yakeing/php_session?icon=github)](../../releases)
[![license](https://badging.vercel.app/static/license/555/MPL-2.0/fe7d37?icon=github)](LICENSE)
[![languages](https://badging.vercel.app/static/language/555/PHP/34abef?icon=github)](../../search?l=php)

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

[![Sponsor](https://badging.vercel.app/static/Sponsor/EA4AAA?icon=heart)](https://github.com/yakeing/Documentation/blob/master/Sponsor/README.md)

Author
---

weibo: [yakeing](https://weibo.com/yakeing)

twitter: [yakeing](https://twitter.com/yakeing)
