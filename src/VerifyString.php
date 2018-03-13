<?php
namespace GothicPrince\Verify;
class VerifyString {
  protected $value;
  public function __construct($value) {
    $this->value = $value;
  }

  /**
   * @param $needText string
   * @return boolean
   */
  public function shouldContains ($needText) {
    return boolval(preg_match("/{$needText}/i", $this->value));
  }
}