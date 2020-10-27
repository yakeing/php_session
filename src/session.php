<?php
/**
  *  SESSION
  *
  * author http://weibo.com/yakeing
  * version 2.1
  * $expire Default server 180 minutes client end
  * $id user ID, Default automatic generation
  * $name Default PHPSESSID
  *
 */
namespace php_session;
class session{
    public $id = '';
    //__construct
    public function __construct($expire = false, $id = '', $name = "PHPSESSID", $limiter = 'private', $handler = null){
        if($this->IsSessionStarted()){
            if(!is_null($handler)) session_set_save_handler($handler, true);
            session_cache_limiter($limiter);
            if(is_int($expire)){
                session_cache_expire($expire);
                session_set_cookie_params($expire*60);
            }
            if(!empty($id)) session_id($id);
            session_name($name);
            session_start();
        }
        $this->id = session_id();
    } //END __construct

    // session IsSessionStarted
    /*
    0 ----> PHP_SESSION_DISABLED if sessions are disabled.
    1 ----> PHP_SESSION_NONE if sessions are enabled, but none exists.
    2 ----> PHP_SESSION_ACTIVE if sessions are enabled, and one exists.
    */
    private function IsSessionStarted(){
        if(php_sapi_name() === 'cli') return true;
        if(version_compare(phpversion(), '5.4.0', '>=')){
            return (session_status() === PHP_SESSION_ACTIVE ? false : true);
        }else{
            return (session_id() === '' ? true : false);
        }
    }//END IsSessionStarted

    //Set up a session Value
    public function Set($name, $value){
        if(is_scalar($value) || is_array( $value)){
            $_SESSION[$name] = $value;
            return true;
        }
        return false;
    } //END set

    //Get a session Value
    public function Get($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }else{
            return false;
        }
    } //END get

    //Write off a session Value
    public function Delete($name){
        if(isset($_SESSION[$name])){
            unset($_SESSION[$name]);
        }
     return true;
    } //END delete

    //function frees all session variables currently registered.
    public function Unsets(){
        session_unset();
    } //END Unset

    //End all session Value
    //Use setcookie() Delete the client's SESSION ID
    public function Destroy(){
        return session_destroy();
    } //END destroy
}
