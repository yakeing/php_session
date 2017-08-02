# SESSION
PHP SESSION CLASS


Author [yakeing](http://weibo.com/yakeing)

[![image](https://oauth.applinzi.com/SvgLabel/4D4D4D/License/F66000/MPL2.0/image.svg)](https://github.com/yakeing/session/blob/master/LICENSE)

[![image](https://oauth.applinzi.com/SvgLabel/4D4D4D/Language/007EC6/PHP/image.svg)](https://github.com/yakeing/session/blob/master/session.php)

[![image](https://oauth.applinzi.com/SvgLabel/4D4D4D/Version/97CA00/1.3/image.svg)](https://github.com/yakeing/session)

### INITIALIZATION 

- [x] example
```php
	 $expire  //Default server 180 minutes client end
    $uid //user ID, Default automatic generation
```

### FUNCTION

- [x] example
```php
    set($name, $value) //Set up a session Value
    get($name) //Get a session Value
    deletes($name) //Write off a session Value
    destroy() //End all session Value
```

### SINA CLOUD SERVICES

    SAE provides a solution for Memcache storage Session

[MemcacheSessionHandler](http://www.sinacloud.com/doc/sae/php/runtime.html#session)
