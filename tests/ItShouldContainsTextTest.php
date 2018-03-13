<?php
use GothicPrince\Verify\ThisObject;
use PHPUnit\Framework\TestCase;

final class ItShouldContainsTextTest extends TestCase
{
  public function testReturnTrue()
  {
    $this->assertTrue(
      ThisObject::ofString('My Text')->shouldContainsText('Text')
    );
    $this->assertTrue(
      ThisObject::ofString('My name is Alex')->shouldContainsText('alex')
    );
  }
  public function testReturnFalse()
  {
    $this->assertFalse(
      ThisObject::ofString('Hello World')->shouldContainsText('helo')
    );
    $this->assertFalse(
      ThisObject::ofString('text')->shouldContainsText('ext1')
    );
  }
}
