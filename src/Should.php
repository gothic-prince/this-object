<?php
namespace GothicPrince\Verify;
class Should {
  protected $value;
  public function __construct($value) {
    $this->value = $value;
  }

  /**
   * @param $needText
   * @return boolean
   */
  public function shouldContainsText ($needText) {
    return boolval(preg_match("/{$needText}/i", $this->value));
  }
}