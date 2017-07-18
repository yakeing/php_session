<?php
/**
  *  SESSION CLASS
  *
  * @author http://weibo.com/yakeing
  * @version 1.2
  * $expire Default server 180 minutes client end
  * $uid user ID, Default automatic generation
  *
  * 'session_name' Can customize session's name
  * SAE provides a solution for Memcache storage Session
  *
  *  PHP 5.3 Edition
  *  session_set_save_handler(
  *    array($handler, 'open'),
  *    array($handler, 'close'),
  *    array($handler, 'read'),
  *    array($handler, 'write'),
  *    array($handler, 'destroy'),
  *    array($handler, 'gc')
  * );
 */
class session{
	public $mcsession = false;

	//Initialization
	function __construct($expire = false, $uid = false, $name = "MYSESSION"){
		if($this->mcsession){//PHP 5.6 Edition
			$handler = new sinacloud\sae\MemcacheSessionHandler();
			session_set_save_handler($handler, true);
		}
		session_cache_limiter('private');
		if(is_int($expire)){
			session_cache_expire($expire);
			session_set_cookie_params($expire*60);
		}
		if(!empty($uid)) session_id($uid);
		session_name($name);
		session_start();
	} //END __construct

	//Set up a session Value
	function Set($name, $value){
		if(is_scalar($value)){
			$_SESSION[$name] = $value;
			return true;
		}
		return false;
	} //END set

	//Get a session Value
	function Get($name){
		if(isset($_SESSION[$name])){
			return $_SESSION[$name];
		}else{
			return false;
		}
	} //END get

	//Write off a session Value
	function Deletes($name){
		if(isset($_SESSION[$name])){
			unset($_SESSION[$name]);
			return true;
		}
		return false;
	} //END deletes

	//End all session Value
	//Use setcookie() Delete the client's SESSION ID
	function Destroy(){
		session_destroy();
	} //END destroy
}
