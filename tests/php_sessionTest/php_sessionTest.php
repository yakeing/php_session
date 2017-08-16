<?php
namespace pphp_sessionTest;

use php_session;
use php_session\session;
use PHPUnit\Framework\TestCase;

class php_sessionTest extends TestCase{

  public function testSetValue(){
    $expire = 180;
    $uid = md5('uid');
    $name = "MYSESSION";
    @ob_start(); //session_start(): Cannot send session cookie
    $session = new session($expire, $uid, $name);
    $name = 'admin';
    $value = 'pass';
    $ret = $session->set($name, $value); //Set up a session Value
    $this->assertTrue($ret);
    $session->set('John', 'F8aJ0e');
    return array($session, $name, $value);
  }

  /**
  * @depends testSetValue
  */
  public function testGetValue(array $args){
    list($session, $name, $value) = $args;
    $ret = $session->get($name); //Get a session Value
    $this->assertEquals($value, $ret);
    $session->deletes($name); //Write off a session Value
    $retNull = $session->get($name);
    $this->assertEquals(false, $retNull);
    $session->destroy(); //End all session Value
    $John = $session->get('John');
    $this->assertEquals(false, $John);
  }
}