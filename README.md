# SESSION
PHP SESSION CLASS

#### Github

[![Downloads](https://img.shields.io/github/downloads/yakeing/php_session/total.svg)](https://github.com/yakeing/php_session)
[![Size](https://img.shields.io/github/size/yakeing/php_session/session.php.svg)](https://github.com/yakeing/php_session)
[![tag](https://img.shields.io/github/tag/yakeing/php_session.svg)](https://github.com/yakeing/php_session)
[![Language](https://oauth.applinzi.com/SvgLabel/4D4D4D/Language/F66000/PHP/image.svg)](https://github.com/yakeing/php_session)
[![License](https://oauth.applinzi.com/SvgLabel/4D4D4D/License/007EC6/MPL-2.0/image.svg)](https://github.com/yakeing/php_session)

BY: [yakeing](http://weibo.com/yakeing)

### INITIALIZATION 

- [x] example
```php
    $expire = 180;  //Default server 180 minutes client end
    $uid = md5('uid'); //user ID, Default automatic generation
    $name = "MYSESSION";
    $session = new session($expire, $uid, $name);
```

### FUNCTION

- [x] example
```php
    $name = 'admin';
    $value = 'pass';
    $session->set($name, $value); //Set up a session Value
    $session->get($name); //Get a session Value
    $session->deletes($name); //Write off a session Value
    $session->destroy(); //End all session Value
```

### SINA CLOUD SERVICES

SAE provides a solution for Memcache storage Session

[MemcacheSessionHandler](http://www.sinacloud.com/doc/sae/php/runtime.html#session)

---

Donate
---
Your donation makes CODE better.

 Bitcoin (比特币赞助)

 1Ff2hTfr4EioWv2ZDLKTedUiF9wBBVYSbU

 ![Bitcoin](https://oauth.applinzi.com/QR/230/bitcoin%3a1Ff2hTfr4EioWv2ZDLKTedUiF9wBBVYSbU/Bitcoin.png)

 WeChat (微信赞助)

 ![WeChat](https://oauth.applinzi.com/QR/230/wxp%3a%7C%7Cf2f0SOGAUjQ1ALzigoyN7nW8tK68D2oeU3YO/WeChat.png)

 Alipay (支付宝赞助)

 ![Alipay](https://oauth.applinzi.com/QR/230/HTTPS%3a%7C%7CQR.ALIPAY.COM%7CTSX082709YGHVXYUQCWKD6/Alipay.png)

