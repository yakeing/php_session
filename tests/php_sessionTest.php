<?php
namespace php_sessionTest;
use php_session;
use php_session\session;
use PHPUnit\Framework\TestCase;
class php_sessionTest extends TestCase{

  public function testSession(){
    $expire = 180;
    $id = md5('uid');
    $name = "PHPSESSID";
    $session = new session($expire, $id, $name);
    $name = 'admin';
    $value = 'pass';
    //Set up a session Value
    $set = $session->set($name, $value);
    $this->assertTrue($set);
    $set_err = $session->set($name, $session);
    $this->assertFalse($set_err);
    //Get a session Value
    $get = $session->get($name);
    $this->assertEquals($value, $get);
    $get_err = $session->get($value);
    $this->assertFalse($get_err);
    //deletes a session Value
    $deletes = $session->delete($name);
    $this->assertTrue($deletes);
    //Unsets session Value
    $session->Unsets(); //not assert Unset
    //Destroy session
    $Destroy = $session->Destroy();
    $this->assertTrue($Destroy);
  }
}
