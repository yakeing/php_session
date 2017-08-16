<?php
namespace php_sessionTest;

use php_session;
use php_session\session;
use PHPUnit\Framework\TestCase;

class php_sessionTest extends TestCase{

  public function testSetValue(){
    $expire = 180;
    $uid = md5('uid');
    $name = "MYSESSION";
    $session = new session($expire, $uid, $name);
    $name = 'admin';
    $value = 'pass';
    $set = $session->set($name, $value); //Set up a session Value
    $this->assertTrue($set);
    return array($session, $name, $value);
  }

  /**
    * @depends testSetValue
    */
  public function testGetValue(array $args){
    list($session, $name, $value) = $args;
    print $session;
    //$get = $session->get($name); //Get a session Value
    $this->assertEquals($value, $get);
    $session->deletes($name); //Write off a session Value
    $getNull = $session->get($name); //Get a session Value
    $this->assertFalse($getNull);
    }

}