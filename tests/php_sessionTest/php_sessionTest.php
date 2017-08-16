<?php
namespace php_sessionTest;

use php_session;
use php_session\session;
use PHPUnit\Framework\TestCase;

class php_sessionTest extends TestCase{

  /**
     * @covers session::set
     * @covers session::get
     * @covers session::deletes
     */
  public function testSession(){
    $expire = 180;
    $uid = md5('uid');
    $name = "MYSESSION";
    @ob_start(); //session_start(): Cannot send session cookie
    $session = new session($expire, $uid, $name);
    $name = 'admin';
    $value = 'pass';
    $set = $session->set($name, $value); //Set up a session Value
    $get = $session->get($name); //Get a session Value
    $session->deletes($name); //Write off a session Value
    $getNull = $session->get($name); //Get a session Value
    $this->assertTrue($set);
    $this->assertEquals($value, $get);
    $this->assertEquals(false, $getNull);
  }

}