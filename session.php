<?php
/**
 * session class
 *@Author weibo.com/yakeing
 * 
 * set(name, value) Set up a session Value
 * get(name) Get a session Value
 * deletes(name) Write off a session Value
 * destroy() End all session Value
 * 
 *@ $expire Default server 180 minutes client end
 *@ $uid user ID, Default automatic generation
 *
 * 'session_name' Can customize session's name
 * SAE provides a solution for Memcache storage Session
 * 
 *PHP 5.3 Edition
 *  session_set_save_handler(
 *     array($handler, 'open'),
 *     array($handler, 'close'),
 *     array($handler, 'read'),
 *     array($handler, 'write'),
 *     array($handler, 'destroy'),
 *     array($handler, 'gc')
 * );
 */
class session{
	public $mcsession = false;
	function __construct($expire = false, $uid = false){
		if($this->mcsession){
			$handler = new sinacloud\sae\MemcacheSessionHandler();
			session_set_save_handler($handler, true);//PHP 5.6 Edition
		}
		session_cache_limiter('private');
		if(is_int($expire)){
			session_cache_expire($expire);
			session_set_cookie_params($expire*60);
		}
		if(!empty($uid)) session_id($uid);
		session_name("MYSESSION");
		session_start();
	}

	function set($name, $value){
		$_SESSION[$name] = $value;
	}

	function get($name){
		if(isset($_SESSION[$name])){
			return $_SESSION[$name];
		}else{
			return null;
		}
	}

	function deletes($name){
		if(isset($_SESSION[$name])){
			unset($_SESSION[$name]);
		}
	}

	function destroy(){
		session_destroy();
	}

	function __destruct(){}
}
?>
