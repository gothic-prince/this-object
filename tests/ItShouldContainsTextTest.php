<?php
use GothicPrince\Verify\ThisObject;
use PHPUnit\Framework\TestCase;

final class ItShouldContainsTextTest extends TestCase
{
  public function testReturnTrue()
  {
    $this->assertTrue(
      ThisObject::ofString('My Text')->shouldContains('Text')
    );
    $this->assertTrue(
      ThisObject::ofString('My name is Alex')->shouldContains('alex')
    );
  }
  public function testReturnFalse()
  {
    $this->assertFalse(
      ThisObject::ofString('Hello World')->shouldContains('helo')
    );
    $this->assertFalse(
      ThisObject::ofString('text')->shouldContains('ext1')
    );
  }
}
