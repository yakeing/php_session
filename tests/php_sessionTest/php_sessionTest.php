<?php
namespace php_sessionTest;

use php_session;
use php_session\session;
use PHPUnit\Framework\TestCase;

class php_sessionTest extends TestCase{

  public function testSession(){
    $expire = 180;
    $uid = md5('uid');
    $name = "MYSESSION";
    @ob_start(); //session_start(): Cannot send session cookie
    $session = new session($expire, $uid, $name);
    $name = 'admin';
    $value = 'pass';
    $ret = $session->set($name, $value); //Set up a session Value
    $this->assertTrue($ret);
    $this->assertSessionHas($name, $value);
    $ret = $session->get($name); //Get a session Value
    $this->assertEquals($value, $ret);
    $session->deletes($name); //Write off a session Value
    $this->assertSessionMissing($name);
  }

}